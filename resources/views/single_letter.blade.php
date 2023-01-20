@extends('layouts.app')


@section('content')
    <script>
        let deleted_id = 0;
    </script>

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            {{--            <img src="{{asset('images/bg-png/6.png')}}" alt="bradcaump images">--}}
            <div style="max-width:1918px;width: 1918px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Manage photos for letter({{$letter}})</h2>
                            <nav class="bradcaump-inner">
                                <a href="{{route('letter.list')}}" class="breadcrumb-item">back to: All letters</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active"> ({{$letter}})'s photos</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Bradcaump area -->
    <section class="htc__checkout bg--white section-padding--lg">
        <!-- Checkout Section Start-->
        <div class="checkout-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 mb-30">
                        <!-- Checkout Accordion Start -->
                        <div id="checkout-accordion">
                            <!-- Shipping Method -->
                            <div class="single-accordion">
                                <a class="accordion-head collapsed" data-toggle=""
                                   data-parent="#checkout-accordion" style="text-transform: none !important;">
                                    Photos for letter {{$letter}}
                                </a>
                                <div id="photo-section" class="collapse show">
                                    <div class="accordion-body shipping-method fix">
                                        <div
                                            class="col-12 d-flex justify-content-between mb--20 align-items-center">
                                            <h3>
                                                The letter must have at least one photo
                                            </h3>
                                            @if(Auth::user()->role != 'student')
                                            <div class="dcare__btn d-flex align-items-center new_photo-trigger">
                                                <h3><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Photo
                                                </h3>
                                            </div>
                                            @endif
                                        </div>

                                        <!-- Start Our Gallery Area -->
                                        <div
                                            class="junior__gallery__area gallery-page-one gallery__masonry__activation gallery--3">
                                            <div class="container">
                                                <div class="row galler__wrap masonry__wrap">
                                                    <!-- Start Single Gallery -->
                                                    @foreach($photos as $photo)
                                                        <div
                                                            class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--2">
                                                            <div class="gallery">
                                                                <div class="gallery__thumb">
                                                                    <a href="{{asset($photo->url)}}"
                                                                       data-lightbox="grportimg"
                                                                       data-title="My caption">
                                                                        <img src="{{asset($photo->url)}}"
                                                                             alt="gallery images">
                                                                    </a>
                                                                </div>
                                                                <div class="gallery__hover__inner">
                                                                    <div class="gallery__hover__action">
                                                                        <ul class="gallery__zoom">
                                                                            <li><a href="{{asset($photo->url)}}"
                                                                                   data-lightbox="grportimg"
                                                                                   data-title="My caption"><i
                                                                                        class="fa fa-search"></i></a>
                                                                            </li>
                                                                            @if(Auth::user()->role != 'student')
                                                                            <li onclick="deleted_id = '{{$photo->id}}'"
                                                                                class="delete-trigger"
                                                                                style="cursor: pointer;"><a
                                                                                    style="pointer-events: none;"><i
                                                                                        class="fa fa-trash"></i></a>
                                                                            </li>
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <!-- End Single Gallery -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Our Gallery Area -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- Checkout Accordion Start -->
                    </div>
                </div>
            </div>
        </div><!-- Checkout Section End-->
    </section>

    <div class="login-wrapper" id="new_photo-wrapper">
        <div class="accountbox">
            <div class="accountbox__inner">
                <h4>Add New Photo</h4>
                <div class="accountbox__login">
                    <form action="{{route('letter.add',['letter'=> $letter])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="single-input">
                            <input class="" type="file" accept="image/png, image/jpeg" placeholder="photo"
                                   id="image_input" name="image">
                        </div>
                        <div id="image-container" class="d-flex justify-content-center" style="margin-top: 50px">
                        </div>
                        <div class="single-input text-center">`
                            <button type="submit" class="sign__btn">SUBMIT</button>
                        </div>
                    </form>
                </div>
                <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
            </div>
        </div>
    </div><!-- //Login Form -->

    <div class="login-wrapper" id="delete-wrapper">
        <div class="accountbox">
            <div class="accountbox__inner">
                <h4>Photo Deletion Confirmation</h4>
                <div class="accountbox__login">
                    <div class="single-input">
                        <h5 style="font-size: 16pt !important;">
                            Are you sure you want to delete this photo?
                        </h5>
                    </div>
                    <div class="single-input text-center">
                        <script>
                            function deleteP() {
                                let url = "{{route('letter.delete' , ['letter'=>':letter' , 'id'=>':id'])}}";
                                url = url.replace(':id', '' + deleted_id);
                                {{--url = url.replace(':letter', "{{$letter}}");--}}
                                document.getElementById('delete_href').setAttribute('href', url);
                                document.getElementById('delete_href').click();
                            }
                        </script>
                        <div onclick="deleteP()" class="sign__btn dcare__btn">Confirm</div>
                        <a id="delete_href" class="sign__btn"></a>
                    </div>
                </div>
                <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
            </div>
        </div>
    </div><!-- //Login Form -->

    <script>
        $('#image_input')
            .on('change', () => {
                let input = $('#image-container');
                input.children().remove()

                if ($('#image_input').val() != null) {
                    input.append(
                        $('<img/>', {
                            'width': '350px',
                            'height': '350px',
                            'src': URL.createObjectURL(document.querySelector('#image_input').files[0])
                        })
                    );
                }
            })
    </script>
@endsection
