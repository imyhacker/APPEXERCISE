<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Absensi;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\ErrorHandler\ErrorHandler;

class SiswaController extends Controller
{
    public function data_siswa()
    {
        
        $siswa = User::where('role', 'user')->get();
        return view('Dashboard/Siswa/data_siswa', compact('siswa'));
    }
    public function tambah_siswa(Request $request)
    {
        
        $a = User::where('email', $request->input('email'))->exists();
        if($a == TRUE){
            return redirect()->back()->with('gagal', 'Data Sudah Ada');
        }else{
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'kelas' => $request->input('kelas'),
                'tipe_kelas' => $request->input('tipe_kelas'),
                'password' => Hash::make($request->input('password')),
                'role2' => $request->input('role2'),
            ]);
            return redirect()->back()->with('sukses', 'Data Berhasil Di Masukan');
        }
    }
    public function hapus_siswa($id)
    {
        $data = User::find($id)->delete();
        return redirect()->back()->with('sukses', 'Data Berhasil Di Hapus');
    }
    public function edit_siswa($id)
    {
        $data = User::find($id);
        return view('Dashboard/Siswa/edit_data_siswa', compact('data'));
    }
    public function update_siswa(Request $request, $id)
    {
        $cek = $request->input('password');
        if(is_null($cek)){
            User::find($id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'kelas' => $request->input('kelas'),
                'tipe_kelas' => $request->input('tipe_kelas'),
                'role2' => $request->input('role2'),
            ]);
            return redirect()->back()->with('sukses', 'Data Berhasil Di Update');  
        }else{
            User::find($id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'kelas' => $request->input('kelas'),
                'tipe_kelas' => $request->input('tipe_kelas'),
                'password' => Hash::make($request->input('password')),
                'role2' => $request->input('role2'),
            ]);
            return redirect()->back()->with('sukses', 'Data Berhasil Di Update');  
        }
        
    }
    public function upload_siswa(Request $request)
    {
        $v = $request->validate([
            'excel' => 'required|mimes:xls,xlsx'
        ]);
        $file = $request->file('excel');
		$nama_file = rand().$file->getClientOriginalName();
        $file->move('excel', $nama_file);
        
        Excel::import(new UserImport, public_path('/excel/').$nama_file);
        return redirect()->back()->with('sukses', 'Data Berhasil Di Import'); 

        
    }
    public function absen_siswa()
    {
        $semua = User::where('role', 'user')->get();
        $semua1 = Absensi::orderBy('id', 'DESC')->get();

        return view('Dashboard/Siswa/absen_siswa', compact('semua', 'semua1'));
    }
    public function upload_absen(Request $request)
    {
        $data = Absensi::whereDate('created_at', Carbon::today())->where('nama', $request->input('nama'))->exists();
        if($data == TRUE){
            
            return redirect()->back()->with('gagal', 'Data Absen '.$request->input('nama').' Hari Ini Sudah Ada');
        }else{
            $c = Absensi::create([
                'pengisi' => Auth::user()->name,
                'nama' => $request->input('nama'),
                'kelas' => $request->input('kelas'),
                'kehadiran' => $request->input('kehadiran'),
            ]);
            return redirect()->back()->with('sukses', 'Data Absen Berhasil Di Masukan');
        }
    }
    public function reset($name)
    {
        $data = Absensi::where('nama', $name)->exists();
        if($data == TRUE){

        
        Absensi::where('nama',$name)->delete();
        return redirect()->back()->with('sukses', 'Data Absen Berhasil Di Reset');
        }else{
            return redirect()->back()->with('gagal', 'Sudah Di Reset');

        }
    }
}
