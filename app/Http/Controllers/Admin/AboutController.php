<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::first();
        return view('admin.pages.about.index',compact('about'));
    }

    public function update(Request $request, $id)
    {
        
        $about=About::findOrFail($id);
        $data = $request->all();
        if($request->has('img'))
        {
            if(File::exists($about->img))
            {
                File::delete($about->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/about/'.$fileName;
            $request->img->move('image/about/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        $about->update($data);
        toastr()->success('Haqımızda məlumatlarınız yeniləndi');
        return redirect()->route('admin.about.index');  
    }
}
