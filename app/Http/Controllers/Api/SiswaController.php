<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function data_siswa()
    {
       
        $posts = User::where('role', 'user')->latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Siswa',
            'data' => $posts
        ], 200);
    }
    public function cari_siswa($id)
    {
        $post = User::whereId($id)->first();


        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Ketemu!',
                'data'    => $post
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Null',
                'data'    => ''
            ], 401);
        }
    }
    public function hapus_siswa($id)
    {
        $post = User::where('role','user')->whereId($id)->first();


        if ($post) {
            $post->delete();
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Di Hapus',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Null',
                'data'    => ''
            ], 401);
        }
    }
    public function upload_siswa(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'kelas' => 'required',
            'tipe_kelas' => 'required',
            'role2' => 'required',
        ],
            [
                'name.required' => 'Nama Siswa Harus Ada',
                'email.required'    => 'Email Harus Ada Dan Harus Beda',
                'password.required' => 'Password Harus Ada',
                'kelas' => 'Kelas Harus Ada',
                'tipe_kelas' => 'Identifier Kelas Harus Ada',
                'role2' => 'Wewenang Harus Ada',
            ]);
            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'Silahkan Isi Bidang Yang Kosong',
                    'data'    => $validator->errors()
                ],401);
            }else{
                $data = User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                    'kelas' => $request->input('kelas'),
                    'tipe_kelas' => $request->input('tipe_kelas'),
                    'role2' => $request->input('role2'),
                ]);

            if ($data) {
                return response()->json([
                    'success' => true,
                    'message' => 'User Baru Berhasil Disimpan!',
                    'data'    => $data,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'User Gagal Disimpan!',
                ], 401);
            }
            }
    }
}
