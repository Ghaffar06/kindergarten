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
                            <h6><a href="{{route('letter.list')}}">Alphabet Photo List</a></h6>
                            <p>Learning the Alphabet with some amazing photo</p>
                            <div class="service__btn">
                                <a class="dcare__btn btn__gray hover--theme min__height-btn"
                                   href="{{route('letter.list')}}">
                                    Learn More
                                </a>
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
                            <h6><a href="{{route('category.index')}}">Words</a></h6>
                            <p>Learning more and more english words with the ability to chose certain word-Categories</p>
                            <div class="service__btn">
                                <a class="dcare__btn btn__gray hover--theme min__height-btn"
                                   href="{{route('category.index')}}">Discover Categories</a>
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
                            <h6><a href="{{route('article.index')}}">Articles</a></h6>
                            <p>Learning wide english texts with some challenging questions to test your
                                acknowledgment</p>
                            <div class="service__btn">
                                <a class="dcare__btn btn__gray hover--theme min__height-btn"
                                   href="{{route('article.index')}}">
                                    Start Reading
                                </a>
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
                            <h6><a>Game Time</a></h6>
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


@endsection
