@extends('layouts.app')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            <img src="{{asset('images/bg-png/6.png')}}" alt="bradcaump images">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Word</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">CATEGORY NAME</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Word</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Class Details -->
    <section class="page-class-details bg--white section-padding--lg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="class__quality__desc">
                        <div class="class__thumb">
                            <div class="rounded border border-warning p-1"
                                 style="border-width:5px !important;">
                                <div class="slide__carosel owl-carousel owl-theme">
                                    @for($index = 0; $index < 2; $index++)
                                        <div
                                            class="slider__area d-flex fullscreen justify-content-center align-items-center">
                                            <div class="courses__images">
                                                <img height="650px" src="{{asset('images/category/family.png')}}"
                                                     alt="class images">
                                            </div>
                                        </div>
                                    @endfor
                                    <div
                                        class="slider__area d-flex fullscreen justify-content-center align-items-center">
                                        <div class="courses__images">
                                            <img height="650px"
                                                 src="{{asset('images/category/number.png')}}../words imgs, voice/words imgs, voice/family/family.png"
                                                 alt="class images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="class-details-inner">
                            <div class="courses__inner">
                                <h2>The Word</h2>
                                <h4>Audio:</h4><br>
                                <div class="d-flex column justify-content-around">
                                    @for($index = 0 ; $index < 2; $index++)
                                        <audio controls>
                                            <source src="{{asset('audio/words/En-us-family.ogg')}}" type="audio/ogg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    @endfor
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between">
                                <div class="wel__btn">
                                    <a class="dcare__btn" href="about-us.html">Privous Word</a>
                                </div>
                                <div class="wel__btn">
                                    <a class="dcare__btn" href="about-us.html">Next Word</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Class Details -->
@endsection
