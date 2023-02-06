@extends('admin.layouts.master')

@section('title')
Əlaqə
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Əlaqə</h3>
        </div>
        <div class="page-header">
            <nav aria-label="breadcrumb">
               
            </nav>
        </div>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.setting.update',$setting->id) }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
               <div class="form-group ">
                   <label for="">Nömrə 1</label>
                   <input type="text" name="phone_1" class="form-control" value='{{ $setting->phone_1 }}'>
               </div>
               @error('phone_1')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value='{{ $setting->email }}'>
                </div>
                @error('email')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
           </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group ">
                   <label for="">Ünvan</label>
                   <input type="text" name="adress" class="form-control" value='{{ $setting->adress }}'>
               </div>
               @error('adress')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           </div>
        <div class="row mb-3">
            <div class="col-md-6">
               <div class="form-group ">
                   <label for="">Facebook</label>
                   <input type="text" name="fb" class="form-control" value='{{ $setting->fb }}'>
               </div>
               @error('fb')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label for="">Instagram</label>
                    <input type="text" name="ins" class="form-control" value='{{ $setting->ins }}'>
                </div>
                @error('ins')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
            
           </div>

           <div class="row mb-3">
            <div class="col-md-6">
               <div class="form-group ">
                   <label for="">WhatsApp</label>
                   <input type="text" name="wp" class="form-control" value='{{ $setting->wp }}'>
               </div>
               @error('wp')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           
             <div class="col-md-6">
                <div class="form-group ">
                    <label for="">Youtube</label>
                    <input type="text" name="youtube" class="form-control" value='{{ $setting->youtube }}'>
                </div>
                @error('youtube')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
           </div>
       
           <div class="row mb-3">
        </div>
        <button type="submit" class="btn btn-primary">Yenilə  </button>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
</div>

@endsection 
    
