@extends('layouts.app')

@section('content')
    <script>
        let deleted_id = 0;
    </script>
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"/>--}}

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            {{--            <img src="{{asset('images/bg-png/6.png')}}" alt="bradcaump images">--}}
            <div style="max-width:1918px;width: 1918px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">All Games</h2>
                            <nav class="bradcaump-inner">
                                <a href="{{route('index')}}" class="breadcrumb-item">back to: Home</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Games</span>
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
                        <h2>These are the games</h2>
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
                <!-- Start Single Courses -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="courses">
                        <div class="courses__inner">
                            <ul class="courses__meta d-flex">
                                <li class="like" style="font-size: 12pt">
                                    <i class="fa fa-pencil-square-o"></i>
                                    score: +5
                                </li>
                            </ul>
                            <div class="courses__wrap" style="margin-top: -70px">
                                <div class="courses__date">
                                    <i class="fa fa-pencil"></i>
                                    written by: Ghaith
                                </div>
                                <div class="courses__content">
                                    <h4 style="font-size: 25pt !important">
                                        <a href="{{route('game.balloon')}}">
                                            Balloon Alphabet
                                        </a>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Courses -->
                <!-- Start Single Courses -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="courses">
                        <div class="courses__inner">
                            <ul class="courses__meta d-flex">
                                <li class="like" style="font-size: 12pt">
                                    <i class="fa fa-pencil-square-o"></i>
                                    score: +5
                                </li>
                            </ul>
                            <div class="courses__wrap" style="margin-top: -70px">
                                <div class="courses__date">
                                    <i class="fa fa-pencil"></i>
                                    written by: Ghaith
                                </div>
                                <div class="courses__content">
                                    <h4 style="font-size: 25pt !important">
                                        <a href="{{route('game.tictactoe')}}">
                                            Tic Tac Toe
                                        </a>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Courses -->
                <!-- Start Single Courses -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="courses">
                        <div class="courses__inner">
                            <ul class="courses__meta d-flex">
                                <li class="like" style="font-size: 12pt">
                                    <i class="fa fa-pencil-square-o"></i>
                                    score: +10
                                </li>
                            </ul>
                            <div class="courses__wrap" style="margin-top: -70px">
                                <div class="courses__date">
                                    <i class="fa fa-pencil"></i>
                                    written by: Ghaith
                                </div>
                                <div class="courses__content">
                                    <h4 style="font-size: 25pt !important">
                                        <a href="{{route('game.numbers')}}">
                                            Balloon Numbers
                                        </a>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Courses -->
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




    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript">
        let route = "{{ route('article.autocomplete-search') }}";
        $('#art_search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    let res = [];
                    for (let d of data)
                        res.push(d.title)
                    return process(res);
                });
            }
        });
    </script>
@endsection
