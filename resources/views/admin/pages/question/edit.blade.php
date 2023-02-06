@extends('admin.layouts.master')

@section('title')
Tez-tez verilən suallar
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Tez-tez verilən suali yenilə</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.question.update',$question->id) }}">
        @csrf
        @method("PUT")
        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Sual</label>
                   <input name="sual"  value="{{ $question->sual }}" class="form-control">
               </div>
            </div>
           </div>
   
           <div class="row mb-3">
               <div class="col-md-12">
                  <div class="form-group translate">
                      <label for="">Cavab</label>
                      <input type="text" name="cavab" class="form-control"  value='{{ $question->cavab }}'>
                  </div>
               </div>
           </div>

        <a href="{{ route('admin.question.index') }}" class="btn btn-success">Geri</a>
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
@endpush
