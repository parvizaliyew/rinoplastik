@extends('front.layouts.master')
@section('title'){{ $contact_seo->title }}@endsection
@section('keywords'){{ $contact_seo->meta_keyword }}@endsection
@section('description'){{ $contact_seo->meta_desc }}@endsection


@section('content')
<div class="page-banner-area item-4">
    <div class="container">
        <div class="page-banner-content">
            <h2>Əlaqə</h2>

            <ul>
                <li>
                    <a href="{{ route('index') }}">Əsas Səhifə</a>
                </li>
                <li>Əlaqə</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Map Area -->
<div id="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.5931902937764!2d-3.169654084075619!3d51.48398112023599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e1cc7c15eb58d%3A0x301ca3f7b4aa8fef!2s24%20Newport%20Rd!5e0!3m2!1sen!2sbd!4v1630385765461!5m2!1sen!2sbd"></iframe>
</div>
<!-- End Map Area -->

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <div class="contact-form-wrap">
                    <h3>Send message</h3>

                    <form method="POST"  action="{{ route('contact_post') }}" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="title" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your message</label>
                                    <textarea name="msj" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                           
                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-success"  >Send message</button>
                                </div>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="contact-support">
                    <h3>Get in touch with us</h3>
                    <p>Viamus suscipit tortor eget felis porttitor volutpat cras ultricies ligula sed magna dictum porta lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

                    <ul class="information">
                        <li><i class="ri-phone-fill"></i> <a href="tel:{{ str_replace(' ','',$contact->phone) }}">{{ $contact->phone_1 }}</a></li>
                        <li><i class="ri-mail-line"></i> <a href="mailTo:{{ $contact->email }}"><span class="__cf_email__" data-cfemail="19717c75757659747c7b707d377a7674">{{ $contact->email }}</span></a></li>
                        <li><i class="ri-map-pin-fill"></i> {{ $contact->adress }}</li>
                    </ul>
                    <ul class="social">
                        <li><a href="{{ $contact->fb }}" target="_blank"><i class="ri-facebook-line"></i></a></li>
                        <li><a href="https://wa.me/{{ str_replace(' ','' ,$contact->wp) }}" target="_blank"><i class="ri-whatsapp-fill"></i></a></li>
                        <li><a href="{{ $contact->ins }}" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                        <li><a href="{{ $contact->youtube }}" target="_blank"><i class="ri-youtube-fill"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Overview Area -->

@endsection