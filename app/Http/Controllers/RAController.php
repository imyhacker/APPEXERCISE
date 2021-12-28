<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RAController extends Controller
{
    public function rest_siswa()
    {
        Return view('Dashboard/Rest/rest_siswa');    
    }
    public function rest_absen()
    {
        return view('Dashboard/Rest/rest_absen');
    }
    public function rest_keuangan()
    {
        return view('Dashboard/Rest/rest_keuangan');
    }
}
