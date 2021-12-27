<?php

namespace App\Http\Controllers\Api;

use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}