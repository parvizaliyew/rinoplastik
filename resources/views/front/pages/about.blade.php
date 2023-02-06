@extends('front.layouts.master')
@section('title'){{ $about_seo->title }}@endsection
@section('keywords'){{ $about_seo->meta_keyword }}@endsection
@section('description'){{ $about_seo->meta_desc }}@endsection
@section('content')

<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Haqqımızda</h2>

            <ul>
                <li>
                    <a href="{{ route('index') }}">Əsas Səhifə</a>
                </li>
                <li>Haqqımızda</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->
<!-- Start About Area -->
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span style="font-size: 30px">Haqqımızda</span>
                    <h3>{{ $about->name }}</h3>
                    <p>{!! $about->desc !!}</p>
                    <div class="about-inner-box">
                        <div class="row align-items-center">
                            <div class="about-info">
                            <ul class="list">
                                <li><i class="ri-check-line"></i> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</li>
                                <li><i class="ri-check-line"></i> Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</li>
                                <li><i class="ri-check-line"></i> Donec sollicitudin molestie malesuada.</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="about-btn">
                        <a href="{{ route('contact') }}" class="default-btn">Contact us <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image-wrap">
                    <img src="{{ asset('front/') }}/images/about-5.jpg" alt="image" loading="lazy">

                    <div class="about-info">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <span>{{ $about->position }}</span>
                            <a href="tel:0485443322">{{ $about->tel }}</a>
                        </div>
                        <ul class="info-time">
                            <li>Mon - Fri <span>08:00 - 08:00</span></li>
                            <li>Saturday <span>09:00 - 06:00</span></li>
                            <li>Sunday <span>09:00 - 03:00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- End Funfact Area -->
<!-- Start Choose Us Area -->
<div class="choose-us-area ptb-100">
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

<!-- End Doctors Area -->
<!-- Start Partner Area -->
<div class="partner-area bg-0a0b1c ptb-100">
    <div class="container">
        <div class="section-title">
            <span style="font-size: 30px">Sertifikatlar</span>
        </div>

        <div class="partner-slides owl-carousel owl-theme">
            @foreach ($certifcats as $item)
            <div class="image-box">
                <a href="{{ asset($item->img) }}" target="_blank"><img style="height: 200px;
                    width: 200px;overflow: hidden;    object-fit: cover;" src="{{ asset($item->img) }}" alt="image" loading="lazy"></a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection