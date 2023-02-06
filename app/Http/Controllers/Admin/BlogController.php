<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::orderBy('id','DESC')->get();
        return view('admin.pages.blog.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.pages.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog=new Blog;
        $data = $request->all();
        $validator = Validator::make($data, [
            'desc'   => 'required',
            'title'   => 'required',
            'img'   => 'required|mimes:png,jpg,svg,webp',
        ],
        [
            'title.required'=>'Zəhmət olmasa Basliq  daxil edin',
            'desc.required'=>'Zəhmət olmasa açıqlamanı daxil edin',
            'img.required'=>'Zəhmət olmasa şəkili daxil edin',
            'img.mimes'=>'Şəkil png , jpg ,svg , webp formatında olmalıdır',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/blog/'.$fileName;
            $request->img->move('image/blog/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        $data['slug'] = Str::slug($request->title);

        Blog::create($data);

        toastr()->success('Xəbərlər məlumatarınız əlavə olundu');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::findOrFail($id);

        return view('admin.pages.blog.edit',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog=Blog::findOrFail($id);
        $data = $request->all();
        $validator = Validator::make($data, [
            'desc'   => 'required',
            'title'   => 'required',
            'img'   => 'mimes:png,jpg,svg,webp',
        ],
        [
            'title.required'=>'Zəhmət olmasa Basliq  daxil edin',
            'desc.required'=>'Zəhmət olmasa açıqlamanı daxil edin',
            'img.mimes'=>'Şəkil png , jpg ,svg , webp formatında olmalıdır',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            if(File::exists($blog->img))
            {
                File::delete($blog->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/blog/'.$fileName;
            $request->img->move('image/blog/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        $data['slug'] = Str::slug($request->title);

        $blog->update($data);

        toastr()->success('Xəbərlər məlumatlarınız uğurla güncəlləndi');
        return redirect()->route('admin.blog.index');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $blog=Blog::findOrFail($id);
            if(File::exists($blog->img))
            {
                File::delete($blog->img);
            }
        $blog->delete();
        return response()->json([
            'message' => 'Xəbərləriniz uğurla silindi',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
}
}
