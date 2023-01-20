@extends('layouts.app')

@section('content')
   
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            <div style="max-width:1918px;width: 1918px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Admin: {{Auth::user()->name}}</h2>
                            <nav class="bradcaump-inner">
                                <a href="{{route('index')}}" class="breadcrumb-item">back to: Home</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Admin Actions</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bcare__subscribe bg-image--7 subscrive--1">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-sm-12 col-lg-12">
                    <div class="subscribe__inner">
                        <h2>These are the actions</h2>
                        <div class="newsletter__form">
                            <div class="input__box">
                                <div id="mc_embed_signup">
                                    <div class="htc__news__inner">
                                        <div class="news__input">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Courses Area -->
    <section class="dcare__courses__area section-padding--lg bg--white">
        <div class="container">
            <div class="row class__grid__page">
                @foreach($list as $item)
                <!-- Start Single Courses -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="courses">
                        <div class="courses__inner">
                            <ul class="courses__meta d-flex">
                                <li class="like" style="font-size: 12pt">
                                    <i class="fa fa-pencil-square-o"></i>
                                    {{$item->score}}
                                </li>
                            </ul>
                            <div class="courses__wrap" style="margin-top: -70px">
                                <div class="courses__date">
                                    <i class="fa fa-pencil"></i>
                                    <a href="mailto: {{$item->user->email}}">
                                        Send a message
                                    </a>
                                </div>
                                <div class="courses__content">
                                    <h4 style="font-size: 25pt !important">
                                        {{$item->user->name}}
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Courses -->
                @endforeach
                
                
                @if (session('error'))
                <div class="col-lg-12 col-sm-12 col-lg-12">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h2>{{ session('error') }}</h2>
                </div>
                </div>
                @endif
               
            </div>
            
        </div>
    </section>




    
@endsection
