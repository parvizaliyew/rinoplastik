<?php

namespace App\Http\Controllers\Admin;

use App\Models\DoctorAbout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutDoctorController extends Controller
{
    public function index()
    {
        $about=DoctorAbout::first();
        return view('admin.pages.doctor_about.index',compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about=DoctorAbout::findOrFail($id);
        $data = $request->all();
        if($request->has('img'))
        {
            if(File::exists($about->img))
            {
                File::delete($about->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/about-doctor/'.$fileName;
            $request->img->move('image/about-doctor/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        $about->update($data);
        toastr()->success('Haqımızda məlumatlarınız yeniləndi');
        return redirect()->route('admin.doctor_about.index');  
    }
}
