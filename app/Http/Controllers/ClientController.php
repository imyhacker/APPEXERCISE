<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Foto;
use App\Models\User;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ClientController extends Controller
{
    public function index()
    {
        
        $blog = Blog::orderBy('id', 'DESC')->limit(6)->get();
        $tag = Tag::all();
        $pengaturan = Pengaturan::first();
        return view('Client/index', compact('blog', 'tag', 'pengaturan'));
    }
    public function about()
    {
        $r = "About Us";
        $x = User::where('kelas', 'x')->count();
        $xi = User::where('kelas', 'xi')->count();
        
         $pengaturan = Pengaturan::first();

         return view('Client/about', compact('r', 'x', 'xi', 'pengaturan'));
    }
    public function blog()
    {
        $r = "Blog";
        $blog = Blog::orderBy('id', 'DESC')->simplePaginate(6);
        return view('Client/blog', compact('blog', 'r'));
    }
    public function baca($slug_blog)
    {
        $data = Blog::where('slug_blog', $slug_blog)->first();
        $terbaru = Blog::orderBy('id', 'DESC')->limit(6)->get();
        $acak = Blog::inRandomOrder()->limit(10)->get();
        $tag = Tag::all();
        return view('Client/baca', compact('data', 'tag', 'terbaru', 'acak'));
    }
    public function gallery()
    {
        $pengaturan = Pengaturan::first();
        $galeri = Foto::orderBy('id', 'DESC')->simplePaginate(6);
        $r = 'Gallery';
        return view('Client/gallery', compact('pengaturan', 'r', 'galeri'));
    }
    public function contact()
    {
        $r = 'Contact Us';
        $pengaturan = Pengaturan::first();

        return view('Client/contact', compact('r', 'pengaturan'));
    }
    public function send_mail(Request $request)
    {
        $name = $request->input('name');
        $subject = $request->input('subject');
        $email = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'riihaxor4@gmail.com';   //  sender username
            $mail->Password = 'pamayahan112!!_';       // sender password
            $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465

            $mail->setFrom($email, $name);
            $mail->addAddress($email);
      

            $mail->addReplyTo($email, $name);

            $mail->Subject = $subject;
            $mail->Body    = $message;

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("gagal", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return back()->with("sukses", "Email has been sent.");
            }

        } catch (Exception $e) {
            return back()->with('gagal','Message could not be sent.');
        }
    }
}
