<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\Foto;
use App\Models\Email;
use Alaouy\Youtube\Facades\Youtube;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class JurnalController extends Controller
{
    public function blog()
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $tag = Tag::all();
        $blog = Blog::orderBy('id', 'DESC')->get();
        return view('Dashboard/Jurnal/blog', compact('tag', 'blog'));
        }else{
            abort(404);
        }
    }
    public function upload_blog(Request $request)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua'|| Auth::user()->role2 == 'wakil'){

        $request->validate( [
            'gambar' => 'required|mimes:jpg,png,jpeg'
        ]);
        $gambar = $request->file('gambar');
        $name = Str::slug($gambar->getClientOriginalName(), '_').date('H_i_s').'.'.$gambar->getClientOriginalExtension();
        $path = 'gambar/';
        $gambar->move($path, $name);

        $data = Blog::create([
            'uploader' => Auth::user()->name,
            'tag' => $request->input('tag'),
            'gambar' => $name,
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'slug_blog' => Str::slug($request->input('judul'), '_').Str::random(5),
        ]);
        return redirect()->back()->with('sukses', 'Artikel Baru Berhasil Di Upload'); 

    }else{
        abort(404);
    }
    }
    public function hapus_blog($slug_blog)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua'|| Auth::user()->role2 == 'wakil'){

        $data = Blog::where('slug_blog', $slug_blog)->first();
        $gambar = $data->gambar;
        unlink(public_path('gambar/'). $gambar);
        $h = $data->delete();
        return redirect()->route('blog')->with('sukses', 'Artikel Berhasil Di Hapus'); 

    }else{
        abort(404);
    }
    }
    public function edit_blog($slug_blog)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $data = Blog::where('slug_blog', $slug_blog)->first();
        $tag = Tag::all();
        return view('Dashboard/Jurnal/edit_blog', compact('data', 'tag'));
    }else{
        abort(404);
    }
    }

    public function update_blog(Request $request, $slug_blog)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $request->validate( [
            'gambar' => 'mimes:jpg,png,jpeg'
        ]);
        $cek = $request->file('gambar');
        if($cek == null){
            $data = Blog::where('slug_blog', $slug_blog)->update([
                'judul' => $request->input('judul'),
                'isi'   => $request->input('isi'),
                'tag'   => $request->input('tag'),
            ]);
            return redirect()->route('blog')->with('sukses', 'Artikel Berhasil Di Update'); 
        }else{

            $Gambar_bawaan = Blog::where('slug_blog', $slug_blog)->first();
            unlink(public_path('gambar/').$Gambar_bawaan->gambar);
            $name = Str::slug($cek->getClientOriginalName(), '_').date('H_i_s').'.'.$cek->getClientOriginalExtension();
            $path = 'gambar/';
            $cek->move($path, $name);
    
            $data = Blog::where('slug_blog', $slug_blog)->update([
                'tag' => $request->input('tag'),
            'gambar' => $name,
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),

        ]);
        return redirect()->route('blog')->with('sukses', 'Artikel Baru Berhasil Di Upload'); 
        
        }
    }else{
        abort(404);
    }
    }
    

    // TAG
    public function upload_tag(Request $request)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $cek = Tag::where('tag', $request->input('tag'))->exists();
        if($cek == TRUE){
            return redirect()->back()->with('gagal', 'Data Tag Sudah Ada');
        }else{
            Tag::create([
                'tag' => $request->input('tag'),
                'slug_tag' => Str::slug($request->input('tag').Str::random(5), '_')
            ]);
            return redirect()->back()->with('sukses', 'Data Tag Berhasil Di Input');
        }
    }else{
        abort(404);
    }
        
    }
    public function hapus_tag($slug_tag)
    {
        $data = Tag::where('slug_tag', $slug_tag)->delete();
        return redirect()->back()->with('sukses', 'Data Tag Berhasil Di Hapus');

    }

    // FOTO
    public function foto()
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $g = Foto::orderBy('id', 'DESC')->get();
        return view('Dashboard/Jurnal/foto', compact('g'));
    }else{
        abort(404);
    }
    }
   public function upload_foto(Request $request)
   {
    if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

       $request->validate([
           'foto' => 'required|mimes:jpg,png,jpeg'
       ]);
       $foto = $request->file('foto');
       
       $judul = $request->input('judul');
       $tanggal = $request->input('tanggal');
       $kegiatan = $request->input('kegiatan');

       $nama_gambar = Str::slug($foto->getClientOriginalName(). '_').date('_H_i_s_').'.'.$foto->getClientOriginalExtension();
       $path = 'foto';
       $foto->move($path, $nama_gambar);
       $data = Foto::create([
        'judul' => $judul,
        'tanggal' => $tanggal,
        'foto' => $nama_gambar,
        'kegiatan' => $kegiatan
       ]);
       return redirect()->back()->with('sukses', 'Foto Kegiatan Berhasil Di Upload');
    }else{
        abort(404);
    }
    }
    public function hapus_foto($id)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $gambar = Foto::find($id);
        $gambar->delete();
        return redirect()->back()->with('sukses', 'Foto Kegiatan Berhasil Di Hapus');
    }else{
        abort(404);
    }
    }
    public function edit_foto($id)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $gambar = Foto::find($id);
        return view('Dashboard/Jurnal/edit_foto', compact('gambar'));
    }else{
        abort(404);
    }
    }
    public function update_foto(Request $request, $id)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil'){

        $cek = $request->file('foto');
        $judul = $request->input('judul');
        $tanggal = $request->input('tanggal');
        $kegiatan = $request->input('kegiatan');
        if(is_null($cek)){
            $data = Foto::find($id)->update([
                'judul' => $judul,
                'tanggal' => $tanggal,
                'kegiatan' => $kegiatan
               ]);
               return redirect()->back()->with('sukses', 'Kegiatan Berhasil Di Edit');

        }else{
            $gambar_id = Foto::find($id);
            unlink(public_path('foto/'.$gambar_id->foto));
            $nama_gambar = Str::slug($cek->getClientOriginalName(). '_').date('_H_i_s_').'.'.$cek->getClientOriginalExtension();
            $path = 'foto';
            $cek->move($path, $nama_gambar);
            $data = Foto::find($id)->update([
                'judul' => $judul,
                'tanggal' => $tanggal,
                'foto' => $nama_gambar,
                'kegiatan' => $kegiatan
               ]);
               return redirect()->back()->with('sukses', 'Kegiatan Berhasil Di Edit');
        }
    }else{
        abort(404);
    }
    }
    public function video()
    {
        $tag = Tag::all();
        $vide = Video::orderBy('id', 'desc')->get();
        return view('Dashboard/Jurnal/video', compact('tag', 'vide'));
    }
    public function upload_video(Request $request)
    {
        $video = Youtube::getVideoInfo($request->input('id_youtube'));
        if($video == FALSE){
            return redirect()->back()->with('gagal', 'Data Video Tersebut Tidak Ada Di Youtube!');
        }
        $judul = $video->snippet->title;
        $desk = $video->snippet->description; //description
        $channel = $video->snippet->channelTitle; //channelTitle

        $tag = $request->input('tag_video');
        $Video = Video::create([
            'judul_video' => $judul,
            'deskripsi_video' => $desk,
            'tag_video' => $tag,
            'channel' => $channel,
            'id_youtube' => $request->input('id_youtube'),
            'slug_video' => Str::random(15),
        ]);
        return redirect()->back()->with('sukses', 'Video Baru Berhasil Di Masukan');
    }
    public function hapus_video($slug_video)
    {
        $data = Video::where('slug_video', $slug_video)->first()->delete();
        return redirect()->back()->with('sukses', 'Video Baru Berhasil Di Hapus');

    }
}
