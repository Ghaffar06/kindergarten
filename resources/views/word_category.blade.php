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
                                    <form
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                        class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                                       placeholder="Enter Category Name" required>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                    type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                                    tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn"><input type="submit" value="Search"
                                                                                        name="subscribe"
                                                                                        id="mc-embedded-subscribe"
                                                                                        class="bst__btn btn--white__color">
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
    </section>
    <!-- End Subscribe Area -->
    <!-- Start Blog Area -->
    <section class="dcare__blog__area section-padding--lg bg--white">
        <div class="container">
            <div class="row blog-page">
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/category/home.png')}}" height="304" width="370"
                                     alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">House Words</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Start Learning</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/category/family.png')}}" height="304" width="370"
                                     alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">Family Words</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Read More</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/category/january.png')}}" height="304" width="370"
                                     alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">Date Words</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Read More</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/category/number.png')}}" height="304" width="370"
                                     alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">Numbers Words</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Read More</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/bl-2/5.jpg')}}" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">Don’t have basic knowledge..! So, stay learning with
                                        us</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Read More</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/bl-2/6.jpg')}}" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">Don’t have basic knowledge..! So, stay learning with
                                        us</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Read More</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/bl-2/7.jpg')}}" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">Don’t have basic knowledge..! So, stay learning with
                                        us</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Read More</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/bl-2/8.jpg')}}" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">Don’t have basic knowledge..! So, stay learning with
                                        us</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Read More</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__2">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/bl-2/3.jpg')}}" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__inner">
                            <div class="blog__hover__inner">
                                <h2><a href="blog-details.html">Don’t have basic knowledge..! So, stay learning with
                                        us</a></h2>
                                <div class="bl__meta">
                                    <p>Children Blog : Post By Ariana / 10th November, 2017</p>
                                </div>
                                <div class="bl__details">
                                    <p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor
                                        incidi.</p>
                                </div>
                                <div class="blog__btn">
                                    <a class="bl__btn" href="blog-details.html">Read More</a>
                                    <a class="bl__share__btn" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
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
    <!-- End Blog Area -->

@endsection


