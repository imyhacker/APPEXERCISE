<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $pn = Pengaturan::first();
        return view('Dashboard/Pengaturan/index', compact('pn'));
    }
    public function upload(Request $request)
    {
        $request->validate([
            'nama_aplikasi' => 'required',
            'alamat'        => 'required',
            'email'         => 'required',
            'facebook'      => 'required',
            'instagram'     => 'required',
        ]);
        $data = Pengaturan::exists();
        $nama_aplikasi = $request->input('nama_aplikasi');
        $alamat = $request->input('alamat');
        $email  = $request->input('email');
        $fb     = $request->input('facebook');
        $ig     = $request->input('instagram');

        if($data == NULL){
            $up = Pengaturan::create([
                'nama_aplikasi' => $nama_aplikasi,
                'alamat'        => $alamat,
                'email'         => $email,
                'facebook'      => $fb,
                'instagram'     => $ig
            ]);
            return redirect()->back()->with('sukses', 'Pengaturan Berhasil Di Update');
        }else{
            $up = Pengaturan::where('id', 1)->update([
                'nama_aplikasi' => $nama_aplikasi,
                'alamat'        => $alamat,
                'email'         => $email,
                'facebook'      => $fb,
                'instagram'     => $ig
            ]);
            return redirect()->back()->with('sukses', 'Pengaturan Berhasil Di Update');
        }
    }
}
