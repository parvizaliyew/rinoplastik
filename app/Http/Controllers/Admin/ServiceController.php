<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $services=Service::orderBy('id','DESC')->get();
        
        return view('admin.pages.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service=new Service;
        $data = $request->all();
        $validator = Validator::make($data, [
            'img'   => 'required|mimes:png,jpg,svg,webp',
            'title'=>'required',
            'desc'=>'required',
        ],
        [
            'img.required'=>'Zəhmət olmasa şəkili daxil edin',
            'title.required'=>'Zəhmət olmasa başlığı daxil edin',
            'desc.required'=>'Zəhmət olmasa açıqlamanı daxil edin',
            'img.mimes'=>'Şəkil  png ,jpg,svg,webp formatinda olmalıdır',
        ]
    );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/service/'.$fileName;
            $request->img->move('image/service/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        
       

        Service::create($data);

        toastr()->success('Servis məlumatlarınız uğurla əlavə olundu');
        return redirect()->route('admin.service.index');
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
        $service=Service::findOrFail($id);
        return view('admin.pages.service.edit',compact('service'));
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
        $service=Service::findOrFail($id);
        $data = $request->all();
      
        if($request->has('img'))
        {
            if(File::exists($service->img))
            {
                File::delete($service->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/service/'.$fileName;
            $request->img->move('image/service/',$fileName);
            $data['img']=$fileNameWithUpload;

        }


        $service->update($data);      
        toastr()->success('Servisləriniz uğurla yeniləndi');
        return redirect()->route('admin.service.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
            try {
                $service=Service::findOrFail($id);
                if(File::exists($service->img))
                {
                    File::delete($service->img);
                }
            $service->delete();
            return response()->json([
                'message' => 'Xidmətlərimiz silindi',
                'code' => 204,
            ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'message' => 'Something went wrong',
                    'code' => 500,
                ]);}
    }
}
