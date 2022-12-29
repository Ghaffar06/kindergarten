<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Junior || Child Care & Shop HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('images/icon.png')}}">
    <!-- Google font (font-family: 'Lobster', Open+Sans;) -->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!-- Cusom css -->

    <!-- Modernizer js -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

<script>
    @if(Session::get('failed') !== null)
    alert("{{Session::get('failed')}}");
    @endif
</script>


<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- <div class="fakeloader"></div> -->

<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
    <!-- Header -->
    <header id="header" class="jnr__header header--one clearfix">
        <!-- Start Header Top Area -->
        <div class="junior__header__top">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-sm-12">
                        <div class="jun__header__top__left">
                            <ul class="top__address d-flex justify-content-start align-items-center flex-wrap flex-lg-nowrap flex-md-nowrap">
                                <li><i class="fa fa-envelope"></i><a href="#">junior@mail.com</a></li>
                                <li><i class="fa fa-phone"></i><span>Contact Now :</span><a href="#">+003457289</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 col-sm-12">
                        <div class="jun__header__top__right">
                            <ul class="accounting d-flex justify-content-lg-end justify-content-md-end justify-content-start align-items-center">
                                @guest
                                    <li><a class="login-trigger" href="">login</a></li>
                                    <li><a class="accountbox-trigger" href="{{route("register form")}}">Register</a>
                                    </li>
                                @else
                                    <li><a href="#">{{Auth::user()->name}}</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area -->
        <!-- Start Mainmenu Area -->
        <div id="main_menu_header" class="mainmenu__wrapper bg__cat--1 poss-relative header_top_line sticky__header"
             style="max-height: 100px;height: 100px;">
            <div class="container" style="margin-top: -15px">
                <div class="row d-none d-lg-flex">
                    <div class="col-sm-4 col-md-6 col-lg-2 order-1 order-lg-1">
                        <div class="logo">
                            <a href="{{route("index") }}">
                                <img src="{{asset('images/logo/junior.png')}}" alt="logo images">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-lg-9 order-3 order-lg-2 " style="margin-left: 100px">
                        <div class="mainmenu__wrap ">
                            <nav class="mainmenu__nav ">
                                <ul class="mainmenu ">
                                    <li class="drop"><a href="{{route("index")}}">Home</a></li>
                                    <li class="drop"><a>Class</a></li>
                                    <li class="drop"><a>Teachers</a></li>
                                    <li class="drop"><a>Pages</a>
                                        <ul class="dropdown__menu">
                                            <li><a>about us</a></li>
                                            <li><a>our service</a></li>
                                            <li><a>class details</a></li>
                                            <li><a>gallery</a></li>
                                            <li><a>gallery Details</a></li>
                                            <!--<li><a href="cart.html">cart Page</a></li>-->
                                            <li><a>wishlist page</a></li>
                                            <li><a>checkout page</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a>Shop</a></li>
                                    <li class="drop"><a>Blog</a></li>
                                    <li><a>Contact</a></li>
                                    <div id='report-section' class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                                        <div class="shopbox d-flex justify-content-end align-items-center">
                                            <a href="{{route('report')}}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none">
                    <div class="logo">
                        <a><img src="{{asset('images/logo/junior.png')}}" alt="logo"></a>
                    </div>
                    <a class="minicart-trigger" href="#">
                        <i class="fa fa-shopping-basket"></i>
                    </a>
                </div>
                <!-- Mobile Menu -->
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- //Header -->

    <main>
        @yield('content')
    </main>
    <!-- Start Footer Area -->
    <footer id="footer" class="footer-area footer--1">
        <div class="footer__wrapper bg-pngimage--8 section-padding--md">
            <div class="container">
                <div class="row" style="margin-left: 25%">
                    <!-- Start Single Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-12 mx-2">
                        <div class="footer__widget">
                            <div class="ft__logo">
                                <a>
                                    <img src="{{asset('images/logo/junior.png')}}" alt="logo images">
                                </a>
                            </div>
                            <div class="ftr__details">
                                <p>Lorem ipsum dolor sit cnr adipisicing elit, sed do eiusmod teagna aliqua. Lorem
                                    ipsudolor sit cnr adi.</p>
                            </div>
                            <div class="ftr__address__inner">
                                <div class="footer__social__icon">
                                    <ul class="dacre__social__link--2 d-flex justify-content-start">
                                        <li class="facebook"><a href="https://www.facebook.com/"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="vimeo"><a href="https://vimeo.com/"><i class="fa fa-vimeo"></i></a>
                                        </li>
                                        <li class="pinterest"><a href="https://www.pinterest.com/"><i
                                                    class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ft__btm__title">
                                    <h4>About Us</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class="col-lg-4 col-md-6 col-sm-12 sm-mt-40 mx-2">
                        <div class="footer__widget">
                            <h4>Latest Blog</h4>
                            <div class="footer__innner">
                                <div class="ftr__latest__post">
                                    <!-- Start Single -->
                                    <div class="single__ftr__post d-flex">
                                        <div class="ftr__post__thumb">
                                            <a>
                                                <img src="{{asset('images/blog/post-img/2.jpg')}}" alt="post images">
                                            </a>
                                        </div>
                                        <div class="ftr__post__details">
                                            <h6><a>Sports Day is near! so lets get ready
                                                    soon</a></h6>
                                            <span><i class="fa fa-calendar"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class="single__ftr__post d-flex">
                                        <div class="ftr__post__thumb">
                                            <a>
                                                <img src="{{asset('images/blog/post-img/3.jpg')}}" alt="post images">
                                            </a>
                                        </div>
                                        <div class="ftr__post__details">
                                            <h6><a>Sports Day Celebration</a></h6>
                                            <span><i class="fa fa-calendar"></i>21th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class="single__ftr__post d-flex">
                                        <div class="ftr__post__thumb">
                                            <a>
                                                <img src="{{asset('images/blog/post-img/4.jpg')}}" alt="post images">
                                            </a>
                                        </div>
                                        <div class="ftr__post__details">
                                            <h6><a>Sports Day Celebration</a></h6>
                                            <span><i class="fa fa-calendar"></i>10th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-12 md-mt-40 sm-mt-40 mx-2">
                        <div class="footer__widget">
                            <h4>Twitter Widget</h4>
                            <div class="footer__innner">
                                <div class="dcare__twit__wrap">
                                    <!-- Start Single -->
                                    <div class="dcare__twit d-flex">
                                        <div class="dcare__twit__icon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <div class="dcare__twit__details">
                                            <p>Lorem ipsum dolor sit consect ietur adipisicing sed eiipsa<a href="#">#
                                                    twitter .com?web/lnk/statement</a></p>
                                            <span><i class="fa fa-clock-o"></i>30th Dec, 2017</span>
                                            <span><i class="fa fa-calendar"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class="dcare__twit d-flex">
                                        <div class="dcare__twit__icon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <div class="dcare__twit__details">
                                            <p>Lorem ipsum dolor sit consect ietur adipisicing sed eiipsa<a href="#">#
                                                    twitter .com?web/lnk/statement</a></p>
                                            <span><i class="fa fa-clock-o"></i>30th Dec, 2017</span>
                                            <span><i class="fa fa-calendar"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>


        <!-- .Start Footer Contact Area -->
        <div class="footer__contact__area bg__cat--2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__contact__wrapper d-flex flex-wrap justify-content-between">
                            <div class="single__footer__address">
                                <div class="ft__contact__icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="ft__contact__details">
                                    <p>Uttara, Zamzam Tower</p>
                                    <p>Road # 12, Sec #13, 5th Floor</p>
                                </div>
                            </div>
                            <div class="single__footer__address">
                                <div class="ft__contact__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="ft__contact__details">
                                    <p><a href="#">+08097-654321</a></p>
                                    <p><a href="#">+09876-543211</a></p>
                                </div>
                            </div>
                            <div class="single__footer__address">
                                <div class="ft__contact__icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="ft__contact__details">
                                    <p><a href="#">juniorhomeschool.@email.com</a></p>
                                    <p><a href="#">Kidscareschool.@yahoo.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .End Footer Contact Area -->


        <div class="copyright  bg--theme">
            <div class="container">
                <div class="row align-items-center copyright__wrapper justify-content-center">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="coppy__right__inner text-center">
                            <p>Copyright <i class="fa fa-copyright"></i> 2018 <a href="https://freethemescloud.com/"
                                                                                 target="_blank">Free Themes Cloud.</a>
                                All rights reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script>
        let role = 'student';

        function changeSelected(input) {
            if (input === 1) {
                role = 'student';
                document.getElementById('image_s').classList.add('border');
                document.getElementById('image_t').classList.remove('border');
            } else if (input === 2) {
                role = 'teacher';
                document.getElementById('image_t').classList.add('border');
                document.getElementById('image_s').classList.remove('border');
            }
            document.getElementById('role').value = role;
        }
    </script>
    <!-- Register Form -->
    <div class="accountbox-wrapper" id="accountbox-wrapper">
        <div class="accountbox">
            <div class="accountbox__inner">
                <h4>continue to register</h4>
                <div class="accountbox__login">


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3  d-flex align-items-center">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="single-input">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3  d-flex align-items-center">
                            <label for="email-re"
                                   class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="single-input">
                                <input id="email-re" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="password-re"
                                   class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="single-input">
                                <input id="password-re" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3  d-flex align-items-center">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="single-input">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row single-input justify-content-center">
                            <div>
                                <div>
                                    <img id="image_s" class="rounded border border-warning "
                                         style="border-width:5px !important;" onclick="changeSelected(1)"
                                         src="{{asset('images/boy1.png')}}" width="150" height="150" alt="">
                                </div>
                            </div>
                            <div class="w--10">
                                <input type="hidden" name="role" value="student" id="role">
                            </div>
                            <div>
                                <div>
                                    <img id="image_t" class="rounded border-warning"
                                         style="border-width:5px !important;" onclick="changeSelected(2)"
                                         src="{{asset('images/teacher.png')}}" width="150" height="150" alt="">
                                </div>
                            </div>
                        </div>

                        <div id="b_date" class="mb-3 single-input">
                            <label for="birthdate"
                                   class="col-md-4 col-form-label text-md-end">{{ __('Birthdate') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date"
                                       class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                                       value="{{ old('birthdate') }}" autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="single-input text-center">
                            <button type="submit" class="sign__btn">{{ __('Sign Up Now')}}</button>
                        </div>
                    </form>

                </div>
                <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
            </div>
        </div>
    </div><!-- //Register Form -->

    <!-- Login Form -->
    <div id="login-wrapper" class="login-wrapper">
        <div class="accountbox">
            <div class="accountbox__inner">
                <h4>Login to Continue</h4>
                <div class="accountbox__login">


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3  d-flex align-items-center">
                            <label for="email-log"
                                   class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="single-input">
                                <input id="email-log" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3  d-flex align-items-center">
                            <label for="password-log"
                                   class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="single-input">
                                <input id="password-log" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="single-input text-center">
                            <div class="single-input text-center">
                                <button type="submit" class="sign__btn">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>

                </div>
                <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
            </div>
        </div>
    </div><!-- //Login Form -->


</div><!-- //Main wrapper -->
<script>
    if (window.location.href.split('//')[1].split('/')[1] === 'report')
        $('#report-section').remove();
</script>


<!-- JS Files -->
<script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/active.js')}}"></script>
</body>

<script>
    $(window).on('load',()=>{
        $('#main_menu_header').removeClass('header_top_line');
    })
</script>
</html>
