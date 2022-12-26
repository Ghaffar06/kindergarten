@extends('layouts.app')


@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bradcaump__style--2">
        <div class="ht__bradcaump__container bg-pngimage--7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Letters</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item">Home</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Letters</span>
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
                        @for($index=0;$index<26;$index++)
                            <div class="col-lg-1 col-md-4 col-sm-6 col-12">
                                <div class="product--2 product__grid" style="cursor: pointer !important;"
                                     onclick="document.getElementById('href-' + '{{chr($index +97)}}').click();">
                                    <div class="product__imges">
                                    </div>
                                    <div class="product__inner">
                                        <div class="pro__title">
                                            <h4 style="text-transform: lowercase !important;"><a
                                                    id="href-{{chr($index +97)}}"
                                                    href="{{route('letter.index',['letter'=> chr($index +97)])}}">{{chr($index +97)}}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        @for($index=0;$index<26;$index++)
                            <div class="col-lg-1 col-md-4 col-sm-6 col-12">
                                <div class="product--2 product__grid" style="cursor: pointer !important;"
                                     onclick="document.getElementById('href-' + '{{chr($index +65)}}').click();">
                                    <div class="product__imges">
                                    </div>
                                    <div class="product__inner">
                                        <div class="pro__title">
                                            <h4 style="text-transform: uppercase !important;"><a
                                                    id="href-{{chr($index +65)}}"
                                                    href="{{route('letter.index',['letter'=> chr($index +65)])}}">{{chr($index +65)}}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        <!-- End Single Product -->
                    </div>
                </div>
                <!-- End Shop Grid -->
            </div>
        </div>
    </section>
    <!-- End Ggrid Page -->

@endsection
