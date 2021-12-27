<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function data_keuangan()
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'bendahara' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $total_uang = Pemasukan::sum('pemasukan');
        $total_pengeluaran = Pengeluaran::sum('pengeluaran');
        $pem = Pemasukan::orderBy('id', 'DESC')->get();
        $peng = Pengeluaran::orderBy('id', 'DESC')->get();

        //dd($total_uang-$total_pengeluaran);
        return view('Dashboard/Keuangan/data_keuangan', compact('total_uang', 'total_pengeluaran', 'pem', 'peng'));
        }else {
            abort(404);

        }
    
}
    public function tambah_pemasukan(Request $request)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'bendahara' || Auth::user()->role2 == 'ketua'|| Auth::user()->role2 == 'wakil'){

        $data = Pemasukan::create([
            'name' => Auth::user()->name,
            'pemasukan' => $request->input('pemasukan'),
        ]);
        return redirect()->back()->with('sukses', 'Berhasil Menambahkan Pemasukan Sebesar Rp. '.number_format($request->input("pemasukan")));
        return view('Dashboard/Keuangan/data_keuangan', compact('total_uang', 'total_pengeluaran', 'pem', 'peng'));
    }else {
        abort(404);

    }
    }
    public function tambah_pengeluaran(Request $request)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'bendahara' || Auth::user()->role2 == 'ketua'|| Auth::user()->role2 == 'wakil'){

        $data = Pengeluaran::create([
            'name' => Auth::user()->name,
            'pengeluaran' => $request->input('pengeluaran'),
            'tujuan' => $request->input('tujuan'),
            'untuk' => $request->input('untuk'),
        ]);
        return redirect()->back()->with('sukses', 'Berhasil Menambahkan Pengeluaran Sebesar Rp. '.number_format($request->input("pengeluaran")));
        return view('Dashboard/Keuangan/data_keuangan', compact('total_uang', 'total_pengeluaran', 'pem', 'peng'));
    }else {
        abort(404);

    }
    }

}
