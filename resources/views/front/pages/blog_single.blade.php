@extends('front.layouts.master')
@section('title'){{ $blog->title }}@endsection
@section('description'){{ $blog->meta_desc }}@endsection
@section('content')

<div class="page-banner-area item-4">
    <div class="container">
        <div class="page-banner-content">
            <h2>{{ $blog->title }}</h2>

            <ul>
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">Yeniliklər və Xəbərlər</a>
                </li>
                <li>{{ $blog->title }}</li>
            </ul>
        </div>
    </div>  
</div>
<!-- End Page Banner Area -->

<!-- Start Blog Details Area -->
<div class="blog-details-area pt-100 pb-100">
    <div class="container">
        <div class="blog-details-desc">
            <div class="article-content">
                <div class="article-image">
                    <img src="{{ asset($blog->img) }}" alt="image" loading="lazy">
                </div>
                <h3>{{ $blog->title  }}</h3>
                <p>{!! $blog->desc !!}</p>   
    </div>
</div>
</div>
<!-- End Overview Area -->

@endsection