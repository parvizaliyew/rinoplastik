@extends('front.layouts.master')
@section('title'){{ $index_seo->title }}@endsection
@section('keywords'){{ $index_seo->meta_keyword }}@endsection
@section('description'){{ $index_seo->meta_desc }}@endsection


@section('content')
<style>
    .p-class p
    {
        overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
           line-clamp: 2; 
   -webkit-box-orient: vertical;
    }
</style>
        <!-- End Search Overlay -->
        <!-- Start Hero Slides Area -->
        <div class="hero-slides owl-carousel owl-theme">
            @foreach ($sliders as $item)
            <div style="background-image: url({{ $item->img }});" class="hero-slides-item">
                <div class="container">
                    <div class="hero-slides-content" data-speed="0.05" data-revert="true">
                        <span>{{ $item->title }}</span>
                        <h1>{{ $item->title2 }}</h1>
                        <p>{{ $item->desc }}</p>
                        
                        <div class="slides-btn">
                            <a href="{{ $item->link }}" class="default-btn">Ətraflı <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slides-overlay-color">
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Hero Slides Area -->
        <!-- Start Features Area -->
        <div class="features-area pb-100">
            <div class="container">
                <div class="features-inner-box">
                    <div class="row justify-content-center">
                        @foreach ($services1 as $item)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-features-box">
                                <div class="icon">
                                    <img style="width: 100px;
                                    height: 100px;
                                    border-radius: 50%;
                                    overflow: hidden;
                                    background-color: blue;" src="{{ asset($item->img) }}" alt="">
                                </div>
                                <h3>
                                    <a href="doctors-details.html">{{ $item->title }}</a>
                                </h3>
                                <p class="p-class">{!! $item->desc !!}</p>
                            </div>
                        </div>
                        @endforeach  
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Area -->
        <!-- Start About Area -->
        <div class="about-area pb-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image top-zero">
                            <img src="{{ asset($about1->img) }}" alt="image" loading="lazy">

                            <div class="about-info with-align-right">
                                <div class="info-box">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <span>{{ $about1->position }}</span>
                                    <a href="tel:0485443322">{{ $about1->tel }}</a>
                                </div>
                                <ul class="info-time">
                                    <li>Mon - Fri <span>08:00 - 08:00</span></li>
                                    <li>Saturday <span>09:00 - 06:00</span></li>
                                    <li>Sunday <span>09:00 - 03:00</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content with-max-width">
                            <span>Haqqımızda</span>
                            <h3>{{ $about1->name }}</h3>
                            <p>{!! $about1->desc !!}</p>
                            
                            <div class="about-btn">
                                <a href="{{ route('about') }}" class="default-btn">Ətraflı <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
        <!-- Start Department Area -->
        <div class="department-area-white pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Xidmətlərimiz</h2>
                </div>
                
                <div class="row justify-content-center">
                    @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-department-box">
                            <div class="icon">
 <img style="width: 50px;
                                    height: 50px;
                                    border-radius: 50%;
                                    overflow: hidden;
                                    background-color: blue;" src="{{ asset($item->img) }}" alt="">                                <h3>
                                    <a href="department-details.html">{{ $item->title }}</a>
                                </h3>
                            </div>
                            <p>{!! $item->desc !!}</p>
                            <a href="{{ $item->link }}" class="department-btn">Read more <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- End Department Area -->
        <!-- Start Appointment Area -->

        <!-- End Appointment Area -->
        <!-- Start Gallery Area -->
        <div class="gallery-area pt-100 pb-100">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>Qalereya</h2>
                </div>
                <div class="gallery-slides owl-carousel owl-theme">
                    @foreach ($gals as $item)
                    <div class="single-gallery-item">
                        <a data-fancybox="gallery" href="{{ asset($item->img) }}">
                            <img style="height: 300px;
                            width: 350px;overflow: hidden;    object-fit: cover;"  src="{{ asset($item->img) }}" alt="image" loading="lazy">
                        </a>
                        <div class="icon">  
                            <a data-fancybox="gallery" href="{{ asset($item->img) }}">
                                <i class="ri-loader-fill"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        <!-- End Gallery Area -->
        <!-- Start Testimonials Area -->
 
        <!-- End Testimonials Area -->
        <!-- Start Choose Us Area -->
        <div class="choose-us-area pb-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="choose-us-content">
                            <span>Why people choose us</span>
                            <h3>The main reason for your choice is our service</h3>
                            <p>Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo lacinia eget.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <ul class="list">
                                <li><i class="ri-check-line"></i> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</li>
                                <li><i class="ri-check-line"></i> Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</li>
                                <li><i class="ri-check-line"></i> Donec sollicitudin molestie malesuada.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="choose-us-image">
                            <img src="{{ asset('front/') }}/images/choose-us-1.jpg" alt="image" loading="lazy">

                            <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                <i class="flaticon-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose Us Area -->
        <!-- Start Funfact Area -->
        
        <!-- End Pricing Area -->
        <!-- Start Partner Area -->
        <div class="partner-area bg-0a0b1c ptb-100">
            <div class="container">
                <div class="section-title">
                    <span style="font-size: 30px">Sertifikatlar</span>
                </div>

                <div class="partner-slides owl-carousel owl-theme">
                    @foreach ($sers as $item)
                    <div class="image-box">
                        <a href="{{ asset($item->img) }}" target="_blank"><img style="height: 200px;
                            width: 200px;overflow: hidden;    object-fit: cover;" src="{{ asset($item->img) }}" alt="image" loading="lazy"></a>
                    </div>
                    @endforeach
                    

                    
                </div>
            </div>
        </div>
        <!-- End Partner Area -->
        <!-- Start Blog Area -->
        <div class="blog-area pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <span>Recent articles</span>
                    <h2>Son Xəbərlər</h2>
                </div>
                <div class="row justify-content-center">
                    @foreach ($blogs as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-card">
                            <div class="post-image">
                                <a href="blog-details.html"><img style="height: 350px;
                                    width: 600px;overflow: hidden;    object-fit: cover;" src="{{ asset($item->img) }}" alt="image" loading="lazy"></a>
                            </div>

                            <div class="post-content">
                               
                                <h3>
                                    <a href="blog-details.html">{{ $item->title }}</a>
                                </h3>
                                <a href="blog-details.html" class="post-btn">Read more <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        <!-- End Blog Area -->
        <!-- Start Overview Area -->
        <div class="overview-area pt-75 pb-75">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-12">
                        <div class="overview-logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('front/') }}/images/logo-2.png" alt="image" loading="lazy"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="overview-content">
                            <h3>Need more information please contact us or book an appointment</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="overview-btn">
                            <a href="{{ route('contact') }}" class="default-btn">Bizimlə  Əlaqə<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview Area -->
   
@endsection