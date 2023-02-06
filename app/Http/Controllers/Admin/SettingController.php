<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $setting=Setting::first();
        return view('admin.pages.setting.index',compact('setting'));
    }

    public function update(Request $request, $id)
    {
        
        $setting=Setting::findOrFail($id);
        $data = $request->all();
        $setting->update($data);
        toastr()->success('Əlaqə məlumatlarınız yeniləndi');
        return redirect()->route('admin.setting.index');  
    }
}
