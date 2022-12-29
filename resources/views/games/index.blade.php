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
                            <h2 class="bradcaump-title">All Articles</h2>
                            <nav class="bradcaump-inner">
                                <a href="{{route('home')}}" class="breadcrumb-item">back to: Home</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Articles</span>
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
                                          score: 30
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
                                                Balloon Letters
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
                                          score: 20
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
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dcare__pagination mt--80">
                        <ul class="dcare__page__list d-flex justify-content-center">
                            <li><a href="#"><span class="ti-angle-double-left"></span></a></li>
                            <li><a class="page" href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
                            <li><a href="#">28</a></li>
                            <li><a class="page" href="#">Next</a></li>
                            <li><a href="#"><span class="ti-angle-double-right"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="login-wrapper" id="delete-wrapper">
        <div class="accountbox">
            <div class="accountbox__inner">
                <h4 style="font-size: 15pt">Article Deletion Confirmation</h4>
                <div class="accountbox__login">
                    <div class="single-input">
                        <h5 style="font-size: 16pt !important;">
                            Are you sure you want to delete this Article?
                        </h5>
                    </div>
                    <div class="single-input text-center">
                        <div onclick="deleteArticle(deleted_id)" class="sign__btn dcare__btn">Confirm</div>
                        <a id="delete_href" class="sign__btn"></a>
                    </div>
                </div>
                <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
            </div>
        </div>
    </div><!-- //Login Form -->

    <script>
        function deleteArticle(id) {
            let url = "{{route('article.delete' , ['id'=>':id'])}}";
            url = url.replace(':id', id);
            window.location.replace(url);
        }

        function search() {
            let text = document.getElementById('art_search').value;
            let url = "{{route('article.index')}}";
            window.location.replace(url + "?search=" + text);
        }
    </script>

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
