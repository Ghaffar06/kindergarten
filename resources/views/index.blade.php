@extends('layouts.app')


@section('content')

    <!-- Strat Slider Area -->
    <div class="slide__carosel owl-carousel owl-theme">
        <div class="slider__area bg-pngimage--1  d-flex fullscreen justify-content-start align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="slider__activation">
                            <!-- Start Single Slide -->
                            <div class="slide">
                                <div class="slide__inner">
                                    <h1>Play & learn How to</h1>
                                    <div class="slider__text">
                                        <h2>Create New Things</h2>
                                    </div>
                                    <div class="slider__btn">
                                        <a class="dcare__btn" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slide -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="slider__area bg-pngimage--1  d-flex fullscreen justify-content-start align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="slider__activation">
                                <div class="slide">
                                    <div class="slide__inner">
                                        <h1>Play & learn How to</h1>
                                        <div class="slider__text">
                                            <h2>Creat New Things</h2>
                                        </div>
                                        <div class="slider__btn">
                                            <a class="dcare__btn" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start Welcame Area -->
    <section class="junior__welcome__area section-padding--md bg-pngimage--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Welcome To Junior Home</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte
                            magna aliquaet, consectetempora incidunt</p>
                    </div>
                </div>
            </div>
            <div class="row jn__welcome__wrapper align-items-center">
                <div class="col-md-12 col-lg-6 col-sm-12">
                    <div class="welcome__juniro__inner">
                        <h3>Welcome to <span class="theme-color">O</span><span>u</span>r School</h3>
                        <p class="wow flipInX">Lorem ipsum dolor sit amet, consectetur adipisic ming elit, sed do ei
                            Excepteur sint occaecat cupida proident, sunt in culpa qui dese runt mol anim id est lai
                            aborum. Sed ut perspiciatis unde omnis iste natus error svolupt accu doloremque laudantium,
                            totam rem.</p>
                        <div class="wel__btn">
                            <a class="dcare__btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-sm-12 md-mt-40 sm-mt-40">
                    <div class="jnr__Welcome__thumb wow fadeInRight">
                        <img src="{{asset('/images/wel-come/1.png')}}" alt="images">
                        <a class="play__btn" href="https://www.youtube.com/watch?v=MCJEkZtqlBk"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcame Area -->

    <!-- Start Our Service Area -->
    <section class="junior__service bg-image--2 section-padding--bottom section--padding--xlg--top">
        <div class="container">
            <div class="row">
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service bg--white border__color wow fadeInUp">
                        <div class="service__icon">
                            <img src="{{asset('images/shape/sm-icon/1.png')}}" alt="icon images">
                        </div>
                        <div class="service__details">
                            <h6><a href="">Alphabet Class</a></h6>
                            <p>Learning the Alphabet with some amazing photo and audio</p>
                            <div class="service__btn">
                                <a class="dcare__btn btn__gray hover--theme min__height-btn" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 xs-mt-60">
                    <div class="service bg--white border__color border__color--2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service__icon">
                            <img src="{{asset('images/shape/sm-icon/2.png')}}" alt="icon images">
                        </div>
                        <div class="service__details">
                            <h6><a href="{{route('word_category')}}">Word Class</a></h6>
                            <p>Learning more and more english words with the ability to chose certain word-group</p>
                            <div class="service__btn">
                                <a class="dcare__btn btn__gray hover--theme min__height-btn"
                                   href="{{route('word_category')}}">Discover Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
                    <div class="service bg--white border__color border__color--3 wow fadeInUp" data-wow-delay="0.45s">
                        <div class="service__icon">
                            <img src="{{asset('images/shape/sm-icon/3.png')}}" alt="icon images">
                        </div>
                        <div class="service__details">
                            <h6><a href="">Text Class</a></h6>
                            <p>Learning wide english texts with some challengeing questions to test your
                                aknowlegment</p>
                            <div class="service__btn">
                                <a class="dcare__btn btn__gray hover--theme min__height-btn" href="#">Start Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
                    <div class="service bg--white border__color border__color--4 wow fadeInUp" data-wow-delay="0.65s">
                        <div class="service__icon">
                            <img src="{{asset('images/shape/sm-icon/4.png')}}" alt="icon images">
                        </div>
                        <div class="service__details">
                            <h6><a >Game Time</a></h6>
                            <p>learn while playing some amazing mini-games related to education</p>
                            <div class="service__btn">
                                <a class="dcare__btn btn__gray hover--theme min__height-btn" href="#">Start Playing</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </section>
    <!-- End Our Service Area -->

    <!-- Start Call To Action -->
    <section class="jnr__call__to__action bg-pngimage--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div
                        class="jnr__call__action__wrap d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between align-items-center">
                        <div class="callto__action__inner">
                            <h2 class="wow flipInX" data-wow-delay="0.95s">How To Enroll Your Child In A class ?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                        </div>
                        <div class="callto__action__btn">
                            <a class="dcare__btn btn__white" href="#">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action -->

    <!-- Start our Class Area -->
    <!-- <section class="junior__classes__area section-lg-padding--top section-padding--md--bottom bg--white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Choose Your Classes</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
                    </div>
                </div>
            </div>
            <div class="row classes__wrap activation__one owl-carousel owl-theme clearfix mt--40">
                Start Single Classes
                <div class="col-lg-4 col-sm-6">
                    <div class="junior__classes">
                        <div class="classes__thumb">
                            <a href="class-details.html">
                                <img src="images/class/md-img/1.jpg" alt="class images">
                            </a>
                        </div>
                        <div class="classes__inner">
                            <div class="classes__icon">
                                <img src="images/class/star/1.png" alt="starr images">
                                <span>$50</span>
                            </div>
                            <div class="class__details">
                                <h4><a href="class-details.html">Drawing Class</a></h4>
                                <ul class="class__time">
                                    <li>Infant Care : 0.8 - 2.5 Years</li>
                                    <li>Class Size : 8</li>
                                </ul>
                                <div class="class__btn">
                                    <a class="dcare__btn btn__gray min__height-btn" href="class-details.html">Admission Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Classes
                Start Single Classes
                <div class="col-lg-4 col-sm-6">
                    <div class="junior__classes">
                        <div class="classes__thumb">
                            <a href="class-details.html">
                                <img src="images/class/md-img/2.jpg" alt="class images">
                            </a>
                        </div>
                        <div class="classes__inner">
                            <div class="classes__icon">
                                <img src="images/class/star/1.png" alt="starr images">
                                <span>$50</span>
                            </div>
                            <div class="class__details">
                                <h4><a href="class-details.html">Active Learning</a></h4>
                                <ul class="class__time">
                                    <li>Infant Care : 0.8 - 2.5 Years</li>
                                    <li>Class Size : 8</li>
                                </ul>
                                <div class="class__btn">
                                    <a class="dcare__btn btn__gray min__height-btn" href="class-details.html">Admission Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Classes
                Start Single Classes
                <div class="col-lg-4 col-sm-6">
                    <div class="junior__classes">
                        <div class="classes__thumb">
                            <a href="class-details.html">
                                <img src="images/class/md-img/3.jpg" alt="class images">
                            </a>
                        </div>
                        <div class="classes__inner">
                            <div class="classes__icon">
                                <img src="images/class/star/1.png" alt="starr images">
                                <span>$50</span>
                            </div>
                            <div class="class__details">
                                <h4><a href="class-details.html">Swimming Classg</a></h4>
                                <ul class="class__time">
                                    <li>Infant Care : 0.8 - 2.5 Years</li>
                                    <li>Class Size : 8</li>
                                </ul>
                                <div class="class__btn">
                                    <a class="dcare__btn btn__gray min__height-btn" href="class-details.html">Admission Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Classes
                Start Single Classes
                <div class="col-lg-4 col-sm-6">
                    <div class="junior__classes">
                        <div class="classes__thumb">
                            <a href="class-details.html">
                                <img src="images/class/md-img/3.jpg" alt="class images">
                            </a>
                        </div>
                        <div class="classes__inner">
                            <div class="classes__icon">
                                <img src="images/class/star/1.png" alt="starr images">
                                <span>$50</span>
                            </div>
                            <div class="class__details">
                                <h4><a href="class-details.html">Swimming Classg</a></h4>
                                <ul class="class__time">
                                    <li>Infant Care : 0.8 - 2.5 Years</li>
                                    <li>Class Size : 8</li>
                                </ul>
                                <div class="class__btn">
                                    <a class="dcare__btn btn__gray min__height-btn" href="class-details.html">Admission Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Classes
                Start Single Classes
                <div class="col-lg-4 col-sm-6">
                    <div class="junior__classes">
                        <div class="classes__thumb">
                            <a href="class-details.html">
                                <img src="images/class/md-img/1.jpg" alt="class images">
                            </a>
                        </div>
                        <div class="classes__inner">
                            <div class="classes__icon">
                                <img src="images/class/star/1.png" alt="starr images">
                                <span>$50</span>
                            </div>
                            <div class="class__details">
                                <h4><a href="class-details.html">Swimming Classg</a></h4>
                                <ul class="class__time">
                                    <li>Infant Care : 0.8 - 2.5 Years</li>
                                    <li>Class Size : 8</li>
                                </ul>
                                <div class="class__btn">
                                    <a class="dcare__btn btn__gray min__height-btn" href="class-details.html">Admission Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Classes
            </div>
        </div>
    </section> -->
    <!-- End our Class Area -->

    <!-- Start Testimonial Area -->
    <!-- <section class="junior__testimonial__area bg-image--2 section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <div class="testimonial__container">
                        <div class="tes__activation--1 owl-carousel owl-theme">
                            <div class="testimonial__bg">
                                Start Single Testimonial
                                <div class="testimonial text-center">
                                    <div class="testimonial__inner">
                                        <div class="test__icon">
                                            <img src="images/testimonial/icon/1.png" alt="icon images">
                                        </div>
                                        <div class="client__details">
                                            <p>Lorem ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatd.</p>
                                            <div class="client__info">
                                                <h6>Lora alica</h6>
                                                <span>Gardients of student</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                End Single Testimonial
                            </div>
                            <div class="testimonial__bg">
                                Start Single Testimonial
                                <div class="testimonial text-center">
                                    <div class="testimonial__inner">
                                        <div class="test__icon">
                                            <img src="images/testimonial/icon/1.png" alt="icon images">
                                        </div>
                                        <div class="client__details">
                                            <p>Kohinur ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatd.</p>
                                            <div class="client__info">
                                                <h6>Kohinur alica</h6>
                                                <span>Gardients of student</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                End Single Testimonial
                            </div>
                            <div class="testimonial__bg">
                                Start Single Testimonial
                                <div class="testimonial text-center">
                                    <div class="testimonial__inner">
                                        <div class="test__icon">
                                            <img src="images/testimonial/icon/1.png" alt="icon images">
                                        </div>
                                        <div class="client__details">
                                            <p>Najnin ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatd.</p>
                                            <div class="client__info">
                                                <h6>Najnin alica</h6>
                                                <span>Gardients of student</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                End Single Testimonial
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Testimonial Area -->
    <!-- Start Our Gallery Area -->
    <!-- <section class="junior__gallery__area bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Our Gallery</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
                    </div>
                </div>
            </div>
            <div class="row galler__wrap mt--40">
                Start Single Gallery
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="gallery wow fadeInUp">
                        <div class="gallery__thumb">
                            <a href="#">
                                <img src="images/gallery/gallery-1/1.jpg" alt="gallery images">
                            </a>
                        </div>
                        <div class="gallery__hover__inner">
                            <div class="gallery__hover__action">
                                <ul class="gallery__zoom">
                                    <li><a href="images/gallery/big-img/1.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Gallery
                Start Single Gallery
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="gallery wow fadeInUp">
                        <div class="gallery__thumb">
                            <a href="#">
                                <img src="images/gallery/gallery-1/2.jpg" alt="gallery images">
                            </a>
                        </div>
                        <div class="gallery__hover__inner">
                            <div class="gallery__hover__action">
                                <ul class="gallery__zoom">
                                    <li><a href="images/gallery/big-img/2.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Gallery
                Start Single Gallery
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="gallery wow fadeInUp">
                        <div class="gallery__thumb">
                            <a href="#">
                                <img src="images/gallery/gallery-1/3.jpg" alt="gallery images">
                            </a>
                        </div>
                        <div class="gallery__hover__inner">
                            <div class="gallery__hover__action">
                                <ul class="gallery__zoom">
                                    <li><a href="images/gallery/big-img/3.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Gallery
                Start Single Gallery
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="gallery wow fadeInUp">
                        <div class="gallery__thumb">
                            <a href="#">
                                <img src="images/gallery/gallery-1/4.jpg" alt="gallery images">
                            </a>
                        </div>
                        <div class="gallery__hover__inner">
                            <div class="gallery__hover__action">
                                <ul class="gallery__zoom">
                                    <li><a href="images/gallery/big-img/4.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Gallery
                Start Single Gallery
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="gallery wow fadeInUp">
                        <div class="gallery__thumb">
                            <a href="#">
                                <img src="images/gallery/gallery-1/5.jpg" alt="gallery images">
                            </a>
                        </div>
                        <div class="gallery__hover__inner">
                            <div class="gallery__hover__action">
                                <ul class="gallery__zoom">
                                    <li><a href="images/gallery/big-img/5.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Gallery
                Start Single Gallery
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="gallery wow fadeInUp">
                        <div class="gallery__thumb">
                            <a href="#">
                                <img src="images/gallery/gallery-1/6.jpg" alt="gallery images">
                            </a>
                        </div>
                        <div class="gallery__hover__inner">
                            <div class="gallery__hover__action">
                                <ul class="gallery__zoom">
                                    <li><a href="images/gallery/big-img/6.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Gallery
            </div>
        </div>
    </section> -->
    <!-- End Our Gallery Area -->
    <!-- Start Blog Area -->
    <!-- <section class="jnr__blog_area section-padding--lg bg-image--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center white--title">
                        <h2 class="title__line">Recent Blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
                    </div>
                </div>
            </div>
            <div class="row blog__wrapper mt--40">
                Start Single Blog
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft">
                    <article class="blog">
                        <div class="blog__date">
                            <span>Date : 10th November, 2017</span>
                        </div>
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="images/blog/md-img/1.jpg" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <span>Children Blog : Post By Ariana</span>
                            <h4><a href="blog-details.html">Basic Knowledge About Drawing</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur ad modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <ul class="blog__meta d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a href="#">Comments : 05</a></li>
                                <li><a href="#">Like : 07</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                End Single Blog
                Start Single Blog
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <article class="blog">
                        <div class="blog__date">
                            <span>Date : 10th November, 2017</span>
                        </div>
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="images/blog/md-img/2.jpg" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <span>Children Blog : Post By Jonson</span>
                            <h4><a href="blog-details.html">Study Tour</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur ad modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <ul class="blog__meta d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a href="#">Comments : 05</a></li>
                                <li><a href="#">Like : 07</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                End Single Blog
                Start Single Blog
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                    <article class="blog">
                        <div class="blog__date">
                            <span>Date : 10th November, 2017</span>
                        </div>
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="images/blog/md-img/3.jpg" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <span>Children Blog : Post By Michel Jack</span>
                            <h4><a href="blog-details.html">Childrens Day</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur ad modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <ul class="blog__meta d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a href="#">Comments : 05</a></li>
                                <li><a href="#">Like : 07</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                End Single Blog
            </div>
        </div>
    </section> -->
    <!-- End Blog Area -->
    <!-- Start upcomming Area -->
    <!-- <section class="junior__upcomming__area section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Up Coming Event</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
                    </div>
                </div>
            </div>
            <div class="row upcomming__wrap mt--40">
                Start Single Upcomming Event
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                    <div class="upcomming__event">
                        <div class="upcomming__thumb">
                            <img src="images/upcomming/1.png" alt="upcomming images">
                        </div>
                        <div class="upcomming__inner">
                            <h6><a href="event-details.html">Todler Art Exhibition</a></h6>
                            <p>Lor error sit volupta item accusantim doloremque laudantium, toe aperiam, eaque ipsa quae ab illoe invenveritatis et quasi architecto beatae viliquam quaerat voluptatem.</p>
                            <ul class="event__time">
                                <li><i class="fa fa-home"></i>Childrens Club, Uttara, Dhaka</li>
                                <li><i class="fa fa-clock-o"></i>10.00 am to 1.00 pm</li>
                                <li><i class="fa fa-calendar"></i>30th Dec, 2017</li>
                            </ul>
                        </div>
                        <div class="event__occur">
                            <img src="images/upcomming/shape/1.png" alt="shape images">
                            <div class="enent__pub">
                                <span class="time">21st </span>
                                <span class="bate">Dec,2017</span>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Upcomming Event
                Start Single Upcomming Event
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
                    <div class="upcomming__event">
                        <div class="upcomming__thumb">
                            <img src="images/upcomming/2.png" alt="upcomming images">
                        </div>
                        <div class="upcomming__inner">
                            <h6><a href="event-details.html">Childrens Day Celebration</a></h6>
                            <p>Lor error sit volupta item accusantim doloremque laudantium, toe aperiam, eaque ipsa quae ab illoe invenveritatis et quasi architecto beatae viliquam quaerat voluptatem.</p>
                            <ul class="event__time">
                                <li><i class="fa fa-home"></i>Childrens Club, Uttara, Dhaka</li>
                                <li><i class="fa fa-clock-o"></i>10.00 am to 1.00 pm</li>
                                <li><i class="fa fa-calendar"></i>30th Dec, 2017</li>
                            </ul>
                        </div>
                        <div class="event__occur">
                            <img src="images/upcomming/shape/1.png" alt="shape images">
                            <div class="enent__pub">
                                <span class="time">21st </span>
                                <span class="bate">Dec,2017</span>
                            </div>
                        </div>
                    </div>
                </div>
                End Single Upcomming Event
            </div>
        </div>
    </section> -->
    <!-- End upcomming Area -->
    <!-- Start Subscribe Area -->
    <!-- <section class="bcare__subscribe subscribe--1">
        <div class="container bg__cat--3">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-lg-12">
                    <div class="subscribe__inner">
                        <h2>Subscribe To Our Special Offers</h2>
                        <div class="newsletter__form">
                            <div class="input__box">
                                <div id="mc_embed_signup">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail" required>
                                            </div>
                                            real people should not fill this in and expect good things - do not remove this or risk form bot signups
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn"><input class="bst__btn btn--white__color" type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Subscribe Area -->
    <!-- Footer Area -->

@endsection
