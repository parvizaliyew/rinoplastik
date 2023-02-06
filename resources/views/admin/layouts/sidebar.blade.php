<nav class="sidebar dark_sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
    <a href="{{ route('admin.index') }}"><img src="{{asset('manager')}}/img/logo_white.png" alt=""></a>
    <div class="sidebar_close_icon d-lg-none">
    <i class="ti-close"></i>
    </div>
    </div>
    <ul id="sidebar_menu">
    <li>
    <a  href="{{ route('admin.index') }}" aria-expanded="false">
    <div class="icon_menu">
    <img src="{{asset('manager/')}}/img/menu-icon/dashboard.svg" alt="">
    </div>
    <span>Admin</span>
    </a>
    </li>  

    <li class=="">
        <a  href="{{ route('admin.slider.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-gallery"></i>
        </div>
        <span>Slayder</span>
        </a>
    </li>


    


    <li class="">
        <a  href="{{ route('admin.service.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-settings"></i>
        </div>
        <span>Xidmətlər</span>
        </a>
    </li>

    <li class="">
        <a  href="{{ route('admin.blog.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-settings"></i>
        </div>
        <span>Xəbərlər</span>
        </a>
    </li>

    <li class="">
        <a  href="{{ route('admin.doctor_about.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-user"></i>
        </div>
        <span>Həkim haqqında</span>
        </a>
    </li>
{{-- 
    <li class="">
        <a  href="{{ route('admin.about.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-user"></i>
        </div>
        <span>Haqqında</span>
        </a>
    </li> --}}

    <li class="">
        <a  href="{{ route('admin.certifcat.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-image"></i>
        </div>
        <span>Sertifikatlar</span>
        </a>
    </li>

    <li class="">
        <a  href="{{ route('admin.galery.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-image"></i>
        </div>
        <span>Qaleriya</span>
        </a>
    </li>

    
    {{-- <li class="">
        <a  href="{{ route('admin.question.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-image"></i>
        </div>
        <span>Sual-Cavab</span>
        </a>
    </li> --}}
    <li class="">
        <a  href="{{ route('admin.seo.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-settings"></i>
        </div>
        <span>SEO</span>
        </a>
    </li>
    <li class="">
        <a  href="{{ route('admin.setting.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-info"></i>
        </div>
        <span>Əlaqə</span>
        </a>
    </li>

    </ul>
    </nav>
