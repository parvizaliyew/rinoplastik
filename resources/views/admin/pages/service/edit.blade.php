@extends('admin.layouts.master')

@section('title')
Xidmətlərimiz
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Xidmətlərimizi            Yenilə</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.service.update',$service->id) }}">
        @csrf
        @method("PUT")
        <div class="row mb-3">
         <div class="col-md-12">
            <div class="form-group translate">
                <label for="">Başlıq</label>
                <input type="text" name="title" class="form-control" value='{{ $service->title }}'>
            </div>
            @error('title')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Link</label>
                   <input type="text" name="link" class="form-control" value='{{ $service->link }}'>
               </div>
               @error('link')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           </div>


        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Açıqlama</label>
                   <textarea id="editor" type="text" class="form-control" name="desc">{{ $service->desc }}</textarea>
               </div>
               @error('short_desc')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
        </div>
        <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-group" for="">Şəkil</label> <br> <br>
            <img width="400px" height="300px" src="{{ asset($service->img) }}" alt=""> 
            <div class="mb-3">
                <br>
                <input name="img" class="form-control" type="file" id="formFile">
            </div>
        </div>
        </div>

        <a href="{{ route('admin.service.index') }}" class="btn btn-success">Geri</a>
        <button type="submit" class="btn btn-primary">Yenilə</button>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
</div>

@endsection

@push('js')
<script src="{{ asset('manager/vendors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('manager/js/cketditor.js') }}"></script>
@endpush
