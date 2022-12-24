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
                            <h2 class="bradcaump-title">Word's Category</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Word's Category</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Subscribe Area -->
    <section class="bcare__subscribe bg-image--7 subscrive--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-lg-12">
                    <div class="subscribe__inner">


                    
        
                    
                        <h2>Search for a specifice Category</h2>
                        <div class="newsletter__form">
                            <div class="input__box">
                                <div id="mc_embed_signup">
                                    
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                            <input type="text" id="search" name="search" placeholder="Search" class="form-control"/>

                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                    type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                                    tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn">
                                            <button  id="mc-embedded-subscribe" class="bst__btn btn--white__color" onclick="search()">Search!</button>    
                                            
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->



    <!-- Start Blog Area -->
    <section class="dcare__blog__area section-padding--lg bg--white">
        <div class="container">
            <div class="row blog-page">

                <p3>All Categories:</p3>
                @foreach($categories as $category)
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset($category->url)}}" height="304" width="370"
                                     alt="category images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">{{$category->title}}</a></h2>
                                <div class="bl__meta">
                                    <p>{{$category->created_at}}</p>
                                </div>
                                <div class="bl__details">
                                    <p>{{$category->description}}</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Start Learning</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                @endforeach
                
            </div>
            <!-- Pagionation-->
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
            
            <!-- End Pagionation-->
        </div>
    </section>
    <!-- End Blog Area -->


    <p1>Category Section!</p1>
<br>
<br>

<div>
    <p3>add new category:</p3>
    @error('image')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('description')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('title')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror


    <form action="{{route('category.add')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">title: </label>
        <input type="text" name="title">
        <br>
        <label for="description">description: </label>
        <input type="text" name="description">
        <br>
        <label for="image">image: </label>
        <input type="file" name="image">
        <br>
        <button type="submit">Submit</button>
        <br>
    </form>
</div>
<br>
<div>
    <p3>all categories:</p3>
    @foreach($categories as $category)
        <div>
            {{$category}}
            <br>
            <img src="{{asset($category->url)}}" alt="photo" width="100px" height="100px">
            <br>
        </div>
    @endforeach
</div>
<p3>operations:</p3>
<br>
<br>
<div>
    id of category to delete:
    <input type="text" id='id1'>
    <button onclick="deleteCategory()">delete!</button>
    <br>
</div>
<br>
<div>
    id of category to display:
    <input type="text" id='id11'>
    <button onclick="openCategory()">open</button>
    <a hidden="true" href="" id="href-words" target="_blank"></a>
    <br>
</div>
<br>

<div>
    search by title or description of a category:
    <div class="container mt-5">
        <div classs="form-group">
            <input type="text" id="search" name="search" placeholder="Search" class="form-control"/>
        </div>
        <button onclick="search()">Search!</button>
    </div>

</div>
<br>

</body>
<script>
    function deleteCategory() {
        let id = document.getElementById('id1').value;
        let url = "{{route('category.delete' , ['id'=>':id'])}}";
        url = url.replace(':id', id);
        window.location.replace(url);
    }

    function openCategory() {
        let id = document.getElementById('id11').value;
        let url = "{{route('category.delete' , ['id'=>':id'])}}";
        url = url.replace(':id', id);
        document.getElementById('href-words').setAttribute('href', url);
        document.getElementById('href-words').click();
    }

    function search() {
        let title = document.getElementById('search').value;
        window.location.replace("{{route('category.index')}}" + "?search=" + title);
    }
</script> 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
</script>
<script type="text/javascript">
    var route = "{{ route('category.autocomplete-search') }}";
    $('#search').typeahead({
        source: function (query, process) {
            return $.get(route, {
                query: query
            }, function (data) {
                var res = [];
                for (d of data)
                    res.push(d.title)
                return process(res);
            });
        }
    });
</script>
@endsection


