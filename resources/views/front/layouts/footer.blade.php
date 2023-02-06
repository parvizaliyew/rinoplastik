     <!-- Start Footer Area -->
     <footer class="footer-area bg-1F242F pt-100 pb-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>About</h3>
                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet. Nulla porttitor accumsan.</p>
                        <ul class="footer-information">
                            <li><i class="ri-phone-fill"></i> <a href="tel:{{ str_replace(' ','',$contact->phone_1) }}">{{ $contact->phone_1 }}</a></li>
                            <li><i class="ri-mail-line"></i> <a href="mailTo:{{ $contact->email }}"><span class="__cf_email__" data-cfemail="711c1413181531161c10181d5f121e1c">{{ $contact->email }}</span></a></li>
                            <li><i class="ri-map-pin-fill"></i> {{ $contact->adress }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget ps-5">
                        <h3>Our departments</h3>
                        @php
                            $blogs=App\Models\Blog::orderBy('id','DESC')->take(5)->get();
                        @endphp
                        <ul class="quick-links">
                            @foreach ($blogs as $item)
                            <li><a href="{{ route('blog_single',$item->slug) }}">{{ $item->title }}</a></li>

                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget ps-3">
                        <h3>Useful link</h3>

                        <ul class="quick-links">
                            <li><a href="{{ route('index') }}">Əsas Səhifə</a></li>
                            <li><a href="{{ route('about') }}">Haqqımızda</a></li>
                            <li><a href="{{ route('blog') }}"> Yeniliklər və Xəbərlər</a></li>
                            <li><a href="{{ route('qal') }}">Qalereya</a></li>
                            <li><a href="{{ route('contact') }}">Əlaqə</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Newsletter</h3>

                        <div class="widget-newsletter-content">
                            <p>Sign up now for weekly news and updates</p>
                           
                            <ul class="footer-widget-social">
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
        <div class="footer-shape-1">
            <img src="{{ asset('front/') }}/images/footer-shape-2.png" alt="image" loading="lazy">
        </div>
    </footer>
    <!-- End Footer Area -->
    <!-- Start Copyright Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-content">
                <p>Müəllif hüquqları qorunur <a>Digital Vibe</a></p>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
    <!-- Start Go Top -->
    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>
    <!-- End Go Top -->
    
    <!-- Links of JS files -->
    <script data-cfasync="false" src="js/email-decode.min.js"></script><script src="{{ asset('front/') }}/js/jquery.min.js"></script>
    <script src="{{ asset('front/') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.meanmenu.js"></script> 
    <script src="{{ asset('front/') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.appear.js"></script>
    <script src="{{ asset('front/') }}/js/odometer.min.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('front/') }}/js/fancybox.min.js"></script>
    <script src="{{ asset('front/') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('front/') }}/js/selectize.min.js"></script>
    <script src="{{ asset('front/') }}/js/TweenMax.min.js"></script>
    <script src="{{ asset('front/') }}/js/event.move.min.js"></script>
    <script src="{{ asset('front/') }}/js/twentytwenty.min.js"></script>
    <script src="{{ asset('front/') }}/js/aos.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('front/') }}/js/form-validator.min.js"></script>
    <script src="{{ asset('front/') }}/js/contact-form-script.js"></script>
    <script src="{{ asset('front/') }}/js/wow.min.js"></script>
    <script src="{{ asset('front/') }}/js/main.js"></script>
</body>
</html>