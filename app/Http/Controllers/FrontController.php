<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use App\Models\Blog;
use App\Models\About;
use App\Models\Galery;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Question;
use App\Models\Certifcat;
use App\Models\DoctorAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $sliders=Slider::orderBy('id','DESC')->get();
        $index_seo=Seo::where('type',1)->orderBy('id','DESC')->first();
        $services=Service::orderBy('id','DESC')->get();
        $services1=Service::orderBy('id','DESC')->take(3)->get();
        $about1=DoctorAbout::first();
        $sers=Certifcat::get();
        $questions=Question::get();
        $gals=Galery::get();
        $sers=Certifcat::get();
        $blogs=Blog::orderBy('id','DESC')->take(3)->get();
        return view('front.pages.index',compact('sliders','blogs','sers','gals','about1','index_seo','services','services1','sers','questions'));
    }

    public function about()
    {
        $certifcats=Certifcat::get();
        $about=DoctorAbout::first();
        $about_seo=Seo::where('type',2)->orderBy('id','DESC')->first();
        return view('front.pages.about',compact('certifcats','about','about_seo'));
    }

    public function blog()
    {
        $blogs=Blog::get();
        $blog_seo=Seo::where('type',3)->orderBy('id','DESC')->first();

        return view('front.pages.blog',compact('blogs','blog_seo'));
    }

    public function blog_single($slug)
    {
        $blog=Blog::where('slug',$slug)->first();
        $blogs=Blog::where('slug','!=',$slug)->get();

        return view('front.pages.blog_single',compact('blog','blogs'));
    }
    public function qal()
    {
        $qal_seo=Seo::where('type',4)->orderBy('id','DESC')->first();
        $galeries=Galery::get();
        return view('front.pages.qal',compact('galeries','qal_seo'));
    }
    public function contact()
    {
        $contact_seo=Seo::where('type',5)->first();
        return view('front.pages.contact',compact('contact_seo'));
    }
    public function contact_post(Request $request)
    {
        $email = "eliyevperviz466@gmail.com";
        $title= 'Rino Plastik saytindan mesaj var';

        $data = [
            'name'  => $request->name,
            'title'  => $request->title,
            'email'  => $request->email,
            'phone'  => $request->email,
            'msj'  => $request->msj,
        ];

        Mail::send('mail.send_mail', $data, function($m) use ($title,$email) {
            $m->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $m->to($email, env('MAIL_FROM_NAME') )->subject($title);
        });
        toastr()->success('Mesajınız uğurla göndərildi');
        return redirect()->back();
    }
}
