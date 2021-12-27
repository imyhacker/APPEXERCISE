<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AbsenController extends Controller
{
    public function data_absen()
    {
        $posts = Absensi::get();
        return response([
            'success' => true,
            'message' => 'List Semua Absensi',
            'data' => $posts
        ], 200);
    }
    public function reset_absen($id)
    {
        $data = Absensi::whereId($id)->first();
        if($data){
            $data->delete();
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Di Reset',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal DI Reset / Data Tidak Ada',
                'data'    => ''
            ], 401);
        }
    }
    public function absen_absen(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'kelas' => 'required',
            'kehadiran' => 'required',
            
        ],
            [
            'nama' => 'Nama Harus Ada',
            'kelas' => 'Kelas Harus ADA',
            'kehadiran' => 'Kehadiran Wajib Ada',
            ]);
            $cek = Absensi::whereDate('created_at', Carbon::today())->where('nama', $request->input('nama'))->exists();
            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'Silahkan Isi Bidang Yang Kosong',
                    'data'    => $validator->errors()
                ],401);
            }else{
                if($cek == TRUE){
                    return response()->json([
                        'success' => false,
                        'message' => 'Sudah Ada Absensi Hari Ini',
                        'data'    => ''
                    ],401);
                }else{
                    $data = Absensi::create([
                        'nama' => $request->input('nama'),
                        'kelas' => $request->input('kelas'),
                        'kehadiran' => $request->input('kehadiran'),
                    ]);
                }
                

            if ($data) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Baru Berhasil Disimpan!',
                    'data'    => $data,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal Disimpan!',
                ], 401);
            }
            }
    
    }
}