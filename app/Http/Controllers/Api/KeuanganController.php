<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function data_keuangan()
    {
        $pemasukan = Pemasukan::sum('pemasukan');
        $pengeluaran = Pengeluaran::sum('pengeluaran');
        $total_uang = $pemasukan - $pengeluaran;
        return response()->json([
            'success' => true,
            'message' => 'Data Keuangan',
            'total_pemasukan' => $pemasukan,
            'total_pengeluaran' => $pengeluaran,
            'total_uang'    => $total_uang,
        ], 200);
    }
    public function tambah_pemasukan(Request $request)
    {
        $masukan = Pemasukan::create([
            'name' => $request->input('name'),
            'pemasukan' => $request->input('pemasukan')
        ]);
        if ($masukan) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambahkan Pemasukan',
                'data'    => $masukan
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Null',
                'data'    => ''
            ], 401);
        }
    }
    public function tambah_pengeluaran(Request $request)
    {
        $pengeluaran = Pengeluaran::create([
            'name' => $request->input('name'),
            'untuk' => $request->input('untuk'),
            'tujuan' => $request->input('tujuan'),
            'pengeluaran' => $request->input('pengeluaran'),
        ]);
        if ($pengeluaran) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambahkan Pengeluaran',
                'data'    => $pengeluaran
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Null',
                'data'    => ''
            ], 401);
        }
    }
}
