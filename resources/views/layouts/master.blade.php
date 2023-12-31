<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-SA">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="بيت خيرات سوف">
    <meta name="description"
        content="بناء من عام 1881م كان منزل لعائلة مسيحية | عائلة البطارسة | وإحدى أركانه كنيسة يقيموا فيها الصلوات. حجارة البيت تم نقلها من دولة فلسطين على الجمال انتقل أصحابه من المنزل وتم هجره لمدة 24 سنة.">
    <title>بيت خيرات سوف</title>
    <link rel="stylesheet" href="{{asset('/assets/bks/')}}/nicepage.css" media="screen">
    <link rel="stylesheet" href="{{asset('/assets/bks/')}}/news.css" media="screen">
    <link rel="stylesheet" href="{{asset('/assets/bks/')}}/style.css" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('/assets/bks/')}}/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('/assets/bks/')}}/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.5.0, nicepage.com">
    <meta property="og:title" content="بيت خيرات سوف">
    <meta property="og:description" content="بناء من عام 1881م كان منزل لعائلة مسيحية | عائلة البطارسة | وإحدى أركانه كنيسة يقيموا فيها الصلوات.
حجارة البيت تم نقلها من دولة فلسطين على الجمال انتقل أصحابه من المنزل وتم هجره لمدة 24 سنة.">
    <meta property="og:image" content="./images/logo.png">
    <meta property="og:url" content="#">

    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "BKSDesign",
            "url": "/",
            "logo": "{{asset('/assets/bks/')}}/images/logo.png"
        }

    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:type" content="website">
    <link rel="canonical" href="/">
</head>

<body class="u-body u-stick-footer u-xl-mode">
    @extends('layouts.app')
@section('header')
    <header class="u-clearfix u-header u-image lazyload u-header">
        <a href="#" class="u-align-center u-image u-logo u-image-1">
            <img src="{{asset('/assets/bks/')}}/images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse u-custom-font">
                <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-custom-border-radius u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link"
                    href="#">

                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-custom-font u-nav u-spacing-2 u-unstyled u-nav-1">
                    <li class="u-nav-item">
                        <a class="u-active-custom-color-2 u-bottom-left-radius-50 u-bottom-right-radius-50 u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white"
                            href="{{url('/contact')}}">
                            تواصل معنا
                        </a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-active-custom-color-2 u-bottom-left-radius-50 u-bottom-right-radius-50 u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white"
                            href="{{url('/about')}}">
                            من نحن
                        </a>
                    </li>
                    <li class="u-nav-item active">
                        <a class="u-active-custom-color-2 u-bottom-left-radius-50 u-bottom-right-radius-50 u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white"
                            href="{{url('/')}}">
                            الرئيسية
                        </a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-active-custom-color-2 u-bottom-left-radius-50 u-bottom-right-radius-50 u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white"
                            href="{{url('/store')}}">
                            المتجر
                        </a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-active-custom-color-2 u-bottom-left-radius-50 u-bottom-right-radius-50 u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white"
                            href="{{url('/news')}}">
                            أخبارنا
                        </a>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul
                            class="u-align-center u-custom-font u-nav u-popupmenu-items u-text-active-custom-color-2 u-text-hover-custom-color-2 u-unstyled u-nav-2">
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="/index.html">الرئيسية</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="#">
                                    من نحن</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="/store.html">
                                    المتجر</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="#">
                                    أخبارنا</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="/contact.html">
                                    تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </header>

    @yield('content')
    <section class="foter-start u-clearfix u-image lazyload u-section-2">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="social-icons u-social-icons u-spacing-15 u-social-icons-1">
                <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/">
                    <span class="u-icon u-social-facebook u-social-icon u-icon-1">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                            <use xlink:href="#svg-078b"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-078b">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF"
                                d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2 c0-6.7,3.1-17,17-17h12.5v13.9H73.5z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/">
                    <span class="u-icon u-social-icon u-social-twitter u-icon-2">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                            <use xlink:href="#svg-e826"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e826">
                            <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF"
                                d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2 c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1 c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14 c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4 c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/">
                    <span class="u-icon u-social-icon u-social-instagram u-icon-3">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                            <use xlink:href="#svg-7d2f"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7d2f">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF"
                                d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.610.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
                            </path>
                            <path fill="#FFFFFF"
                                d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
                            </path>
                            <path fill="#FFFFFF"
                                d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5c5.5,0,9.9,4.5,9.9,9.9V73.3z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <footer class="u-clearfix u-custom-color-3 u-footer u-footer" id="sec-350b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <p
                                    class="u-align-right u-custom-font u-small-text u-text u-text-default u-text-variant u-text-white u-text-1">
                                    <a href="/index.html"
                                        class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-1">
                                        <span style="font-size: 1.125rem;"></span>
                                    </a>
                                    <span style="font-size: 1.125rem;">تواصل معنا <br>
                                    </span>07XXXXXXX <br>info@beitkhayratsouf.com
                                </p>
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <p
                                    class="u-align-right u-custom-font u-small-text u-text u-text-default u-text-variant u-text-white u-text-2">
                                    <a href="/الرئيسية.html"
                                        class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-2">
                                        <span style="font-size: 1rem;"></span>
                                    </a>
                                    <span style="font-size: 1rem;">مواقع التواصل الإجتماعي <br>
                                    </span>الفيسبوك <br>إنستجرام <br>تيك توك <br>اليوتيوب
                                </p>
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-3">
                            <div class="u-container-layout u-container-layout-3">
                                <p
                                    class="u-align-right u-custom-font u-small-text u-text u-text-default u-text-variant u-text-white u-text-3">
                                    <a href="/index.html"
                                        class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-custom-color-2 u-text-hover-custom-color-2 u-text-white u-btn-3">الرئيسية<br>
                                    </a>
                                    أخبارنا
                                    <br>
                                    المتجر
                                    <br>
                                    من نحن
                                    <br>
                                    تواصل معنا
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="u-align-center u-custom-font u-text u-text-body-alt-color u-text-4"> Powered By Banana </p>
        </div>
    </footer>
@endsection
</body>

</html>
