@extends('layouts.app')


@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bradcaump__style--2">
        <div class="ht__bradcaump__container bg-pngimage--7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Home Category</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item">Home</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Home Category</span>
                            </nav>
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
            <div class="row">
                <!-- Shop Grid -->
                <div class="col-lg-12">
                    <div class="row shop-grid-page">
                        <!-- Start Single Product -->
                        @for($index=0;$index<10;$index++)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="product--2 product__grid">
                                    <div class="product__imges">
                                        <a>
                                            <img src="{{asset('images/product/dress/1.png')}}" alt="product images">
                                        </a>
                                        <div class="pro__label">
                                            <span>New</span>
                                        </div>
                                        <!-- <div class="product__cart__wrapper">
                                            <ul class="cart__list">
                                                <li><a href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-search"></span></a></li>
                                                <li><a href="wishlist.html"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <div class="product__inner">
                                        <div class="pro__title">
                                            <h4><a>Father {{$index}}</a></h4>
                                        </div>
                                        <!-- <div class="pro__prize">
                                            <span class="old__prize">$65.00</span>
                                            <span>$40.00 </span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        @endfor
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
