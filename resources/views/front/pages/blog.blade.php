@extends('front.layouts.master')
@section('title'){{ $blog_seo->title }}@endsection
@section('keywords'){{ $blog_seo->meta_keyword }}@endsection
@section('description'){{ $blog_seo->meta_desc }}@endsection
@section('content')

<div class="page-banner-area item-2">
    <div class="container">
        <div class="page-banner-content">
            <h2>Yeniliklər və Xəbərlər</h2>

            <ul>
                <li>
                    <a href="{{ route('index') }}">Əsas Səhifə</a>
                </li>
                <li>Yeniliklər və Xəbərlər</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Blog Area -->
<div class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="section-title">
            <h2>Yeniliklər və Xəbərlər</h2>
        </div>
        <div class="row justify-content-center">
            @foreach ($blogs as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-card">
                    <div class="post-image">
                        <a href="{{ route('blog_single',$item->slug) }}"><img style="width: 650px;
                            height: 400px;
                            overflow: hidden;
                            object-fit:cover;
                            background-color: blue;" src="{{ asset($item->img) }}" src="{{ asset($item->img) }}" alt="image" loading="lazy"></a>
                    </div>

                    <div class="post-content">
                        <ul class="entry-meta">
                           
                        </ul>
                        <h3>
                            <a href="{{ route('blog_single',$item->slug) }}">{{ $item->title }}</a>
                        </h3>
                        <a href="{{ route('blog_single',$item->slug) }}" class="post-btn">Ətraflı <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
       
    </div>
</div>
<!-- End Blog Area -->

<!-- Start Overview Area -->


@endsection