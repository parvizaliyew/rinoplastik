@extends('admin.layouts.master')

@section('title')
Həkim haqqında
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Həkim haqqında</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.about.update',$about->id) }}">
        @csrf
           <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group ">
                   <label for="">Həkimin adı</label>
                   <input type="text" name="name" class="form-control" value='{{ $about->name }}'>
               </div>
               @error('name')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>

            <div class="col-md-12">
                <div class="form-group ">
                    <label for="">Həkimin Vəzifəsi</label>
                    <input type="text" name="position" class="form-control" value='{{ $about->position }}'>
                </div>
                @error('name')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
           </div>

           <div class="col-md-12">
            <div class="form-group ">
                <label for="">Həkimin açıqlaması</label>
                <textarea id="editor" type="text" name="desc" class="form-control" >{{ $about->desc }}</textarea>
            </div>
            @error('desc')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-group" for="">Şəkil</label> <br>
                    <img width="400px" height="300px" src="{{ asset($about->img) }}" alt=""> 
                    <div class="mb-3">
                        <br>
                        <input name="img" class="form-control" type="file" id="formFile">
                    </div>
                    @error('img')
                    <span class="text-danger mt-2">{{ $message }}</span> 
                    @enderror
                </div>
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
    
@push('js')
<script src="{{ asset('manager/vendors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('manager/js/cketditor.js') }}"></script>
@endpush
