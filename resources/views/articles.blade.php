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
                                <a href="{{route('index')}}" class="breadcrumb-item">back to: Home</a>
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
                <div class="position-absolute" style="right: 5%; top: 25px">
                    @if (App\Http\Controllers\RoleController::check_can('create article') )
                        <li>
                            <a href="{{route('article.add-form')}}">
                                <div class="dcare__btn align-items-center d-flex">
                                    <span style="font-size: 24pt">+&nbsp;&nbsp;</span>
                                    Add New Article
                                </div>
                            </a>
                        </li>
                    @endif
                </div>
                @if (App\Http\Controllers\RoleController::check_can('view article list'))
                    <div class="col-lg-12 col-sm-12 col-lg-12">
                        <div class="subscribe__inner">
                            <h2>Search for a specific Article</h2>
                            <div class="newsletter__form">
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="" method="get">
                                            <div class="htc__news__inner">
                                                <div class="news__input">
                                                    <div class="form-group">
                                                        <input type="text" id="art_search" name="search"
                                                               placeholder="Search" class="form-control"/>
                                                    </div>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                    <input type="text" name="noname" tabindex="-1" value="">
                                                </div>
                                                <div class="clearfix subscribe__btn">
                                                    <div onclick="search()" class="dcare__btn">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                        Search
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Start Courses Area -->
    <section class="dcare__courses__area section-padding--lg bg--white">
        <div class="container">
            <div class="row class__grid__page">
                @foreach($articles as $article)
                    <!-- Start Single Courses -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="courses">
                            <div class="courses__inner">
                                <ul class="courses__meta d-flex">
                                    <li class="like" style="font-size: 12pt">
                                        @if (App\Http\Controllers\RoleController::student())
                                            <i class="fa fa-pencil-square-o"></i>
                                            max score: {{$article->score == 0?0:$article->score}}
                                        @endif
                                    </li>
                                </ul>
                                <div class="courses__wrap" style="margin-top: -70px">
                                    <div class="courses__date">
                                        <i class="fa fa-pencil"></i>
                                        written by: {{$article->teacher_id}}
                                        <script>
                                            console.log("{{$article->teacher}}");
                                            console.log("{{$article->temp}}");
                                            console.log("{{$article->teacher_id}}");
                                        </script>
                                    </div>
                                    <div class="courses__content">
                                        @if (App\Http\Controllers\RoleController::check_can('view article details') )
                                            <h4 style="font-size: 25pt !important">
                                                <a href="{{route('article.single_article', ['article'=>$article->id])}}">
                                                    {{$article->title}}
                                                </a>
                                            </h4>
                                        @endif
                                        <p>{{$article->short}} ...</p>
                                        <div class="position-absolute dcare__btn delete-trigger"
                                             style="bottom: 2.5%; right: 5%"
                                             onclick="deleted_id = {{$article->id}}">
                                        <span>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    {{--                    @if (App\Http\Controllers\RoleController::check_can('delete article'))--}}
                    <div class="single-input text-center">
                        <div onclick="deleteArticle(deleted_id)" class="sign__btn dcare__btn">Confirm</div>
                        <a id="delete_href" class="sign__btn"></a>
                    </div>
                    {{--                    @endif--}}
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
