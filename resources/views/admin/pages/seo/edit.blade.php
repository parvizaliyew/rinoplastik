@extends('admin.layouts.master')

@section('title')
SEO
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">SEO Yenilə</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.seo.update',$seo->id) }}">
        @csrf
        @method("PUT")

        <div class="row mb-3">
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Səhifələr</label>
                <select name="type" class="form-control">
                    <option {{ $seo->type==1 ? 'selected' : '' }} value="1">Əsas Səhifə</option>
                    <option {{ $seo->type==2 ? 'selected' : '' }} value="2">Haqqımızda</option>
                    <option {{ $seo->type==3 ? 'selected' : '' }} value="3">Yeniliklər və Xəbərlər</option>
                    <option {{ $seo->type==4 ? 'selected' : '' }} value="4">Qalereya</option>
                    <option {{ $seo->type==5 ? 'selected' : '' }} value="5">Əlaqə</option>
                </select>
            </div>
            @error('type')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
        </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Title</label>
                   <input type="text" name="title" class="form-control" value='{{ $seo->title }}'>
               </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Meta Keywords</label>
                   <input type="text" class="form-control" name="meta_keyword" value='{{ $seo->meta_keyword }}'>
               </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Meta Description</label>
                   <input type="text" name="meta_desc" class="form-control" value='{{ $seo->meta_desc }}'>
               </div>
            </div>
        </div>
        <a href="{{ route('admin.seo.index') }}" class="btn btn-success">Geri</a>
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
<script src="{{ asset('manager/js/translate.js') }}"></script>
<script src="{{ asset('manager/vendors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('manager/js/cketditor.js') }}"></script>
<script>
    let close = $('.fa-times');
    close.on('click',function(){
        $(this).parent().remove();
    });
</script>
@endpush
