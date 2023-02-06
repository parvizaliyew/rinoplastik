@extends('front.layouts.master')
@section('title'){{ $qal_seo->title }}@endsection
@section('keywords'){{ $qal_seo->meta_keyword }}@endsection
@section('description'){{ $qal_seo->meta_desc }}@endsection


@section('content')
<div class="page-banner-area item-5">
    <div class="container">
        <div class="page-banner-content">
            <h2>Qalereya</h2>

            <ul>
                <li>
                    <a href="{{ route('index') }}">Əsas Səhifə</a>
                </li>
                <li>Qalereya</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->
<!-- Start Gallery Area -->
<div class="gallery-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Qalereya</h2>
        </div>
        <div class="row justify-content-center">
            @foreach ($galeries as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single-gallery-item">
                    <a data-fancybox="gallery" href="{{ asset($item->img) }}">
                        <img style="width: 600px;
                        height: 400px;
                        overflow: hidden;
                        background-color: blue;" src="{{ asset($item->img) }}" alt="image" loading="lazy">
                    </a>
                    <div class="icon">
                        <a data-fancybox="gallery" href="{{ asset($item->img) }}">
                            <i class="ri-loader-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            
           
        </div>
    </div>
</div>
<!-- End Gallery Area -->

@endsection