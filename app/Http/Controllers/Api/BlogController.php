<?php

namespace App\Http\Controllers\Api;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function data_blog()
    {
        $posts = Blog::all();
        return response([
            'success' => true,
            'message' => 'List Semua Artikel',
            'data' => $posts
        ], 200);
    }
    public function hapus_blog($id)
    {
        $post = Blog::whereId($id)->first();

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

    public function upload_blog(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'tag' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            
        ],
            [
                'tag' => 'Tag Harus Ada!',
                'judul' => 'Judul Wajib Ada',
                'isi' => 'Isi Artikel Wajib Ada',
                
            ]);
            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'Silahkan Isi Bidang Yang Kosong',
                    'data'    => $validator->errors()
                ],401);
            }else{
                
                $data = Blog::create([
                        'tag' => $request->input('tag'),
                        'judul' => $request->input('judul'),
                        'isi' => $request->input('isi'),
                        'uploader' => 'Unknown',
                        'slug_blog' => Str::slug($request->input('judul'), '_').Str::random(5)
                    ]);

            if ($data) {
                return response()->json([
                    'success' => true,
                    'message' => 'Artikel Baru Berhasil Disimpan!',
                    'data'    => $data,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Artikel Gagal Disimpan!',
                ], 401);
            }
            }
    }
}
