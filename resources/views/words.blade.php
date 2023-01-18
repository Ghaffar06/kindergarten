@extends('layouts.app')


@section('content')

    <!-- Start Bradcaump area -->
    <!--suppress ALL -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            {{--            <img src="{{asset('images/bg-png/6.png')}}" alt="bradcaump images">--}}
            <div style="max-width:1918px;width: 1918px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">{{$category->title}}'s Category</h2>
                            @if (App\Http\Controllers\RoleController::check_can('view category list'))
                                <nav class="bradcaump-inner">
                                    <a href="{{route('category.index')}}" class="breadcrumb-item">back to: All
                                        Categories</a>
                                    <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                     alt="separator images"></span>
                                    <span class="breadcrumb-item active">{{$category->title}}</span>
                                </nav>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Bradcaump area -->
    <!-- Shop Ggrid Page -->
    <section class="dcare__shop__grid  section-padding--lg bg--white">
        <div class="container">
            <!-- Shop Grid -->
            <div class="col-lg-12">
                <div class="row">
                    @if (App\Http\Controllers\RoleController::check_can('take words test'))
                        <div class="position-absolute" style="right: 5%; top: -100px">
                            <li style="list-style: none">
                                <a href="{{route('word.test',['category'=>$category->id])}}">
                                    <div class="dcare__btn align-items-center d-flex">
                                        <span style="font-size: 24pt">+&nbsp;&nbsp;</span>
                                        Take A Test
                                    </div>
                                </a>
                            </li>
                        </div>
                    @endif
                    <div class="row shop-grid-page">
                        <!-- Start Single Product -->
                        @foreach($words as $word)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product--2 product__grid">
                                    @if (App\Http\Controllers\RoleController::check_can('view word details'))
                                        <div class="product__imges">
                                            <a href="{{route('word.learn',['category'=>$category->id,'id'=>$word->id])}}">
                                                <img src="{{asset($word->wordPhotos[0]->url)}}">
                                            </a>
                                            @if($word->learned)
                                                <div class="pro__label">
                                                    <span>Learned</span>
                                                </div>
                                            @endif
                                            {{--                                         <div class="product__cart__wrapper">--}}
                                            {{--                                            <ul class="cart__list">--}}
                                            {{--                                                <li><a href="cart.html"><span class="ti-shopping-cart"></span></a></li>--}}
                                            {{--                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-search"></span></a></li>--}}
                                            {{--                                                <li><a href="wishlist.html"><span class="ti-heart"></span></a></li>--}}
                                            {{--                                            </ul>--}}
                                            {{--                                        </div> --}}
                                        </div>
                                    @endif
                                    <div class="product__inner">
                                        <div class="pro__title">
                                            <h4><a>{{$word -> text}}</a></h4>
                                        </div>
                                        <!-- <div class="pro__prize">
                                            <span class="old__prize">$65.00</span>
                                            <span>$40.00 </span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Single Product -->
                    </div>
                    <!-- Start Pagination -->
                    <div class="row">
                        <div class="col-12">
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
                    <!-- End Pagination -->
                </div>
                <!-- End Shop Grid -->
            </div>
        </div>
    </section>
    <!-- End Ggrid Page -->

@endsection
