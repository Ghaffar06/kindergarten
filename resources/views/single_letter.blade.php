@extends('layouts.app')


@section('content')
    <script>
        all_photo = 0;
        all_audio = 0;

        function add_new_photo_selector() {
            let id = 'photo-' + all_photo;
            all_photo++;
            $('#all_photo_selector').append(
                $('<div/>', {
                    'class': "col-12 d-flex align-items-center mb--20 justify-content-between"
                }).append(
                    $('<input/>', {
                        'id': id,
                        'type': 'file',
                        'accept': "image/png, image/jpeg"
                    }),

                    (all_photo !== 1) ?
                        $('<h2/>', {
                            'class': 'dcare__btn'
                        }).append(
                            $('<i/>', {
                                'class': "fa fa-trash",
                                'aria-hidden': true
                            })
                        ).on('click', (e) => {
                            e.currentTarget.parentNode.remove()
                        }) :
                        $('<div/>')
                            .attr({
                                'width': '50%',
                                'min-width': '50%'
                            })
                )
            );
            addPhoto(id);
        }

        function addPhoto(id) {
            $('#' + id)
                .on('change', () => {
                    let input = $('#' + id);
                    input.parent()
                        .find('img')
                        .remove();
                    if (input.val() != null) {
                        $('<img/>', {
                            'width': '150px',
                            'height': '150px',
                            'src': URL.createObjectURL(document.querySelector('#' + id).files[0])
                        }).insertAfter(input);
                    }
                });
        }

        function submit_form() {
            let index = 0
            $('#all_photo_selector')
                .find('input')
                .each(function () {
                    if ($(this).val() != '') {
                        $(this).attr('name', 'photo' + (++index))
                    }
                });
        }

    </script>

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            <img src="{{asset('images/bg-png/6.png')}}" alt="bradcaump images">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Add New Word</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Word's Category</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Add New Word</span>
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
                            <form action="{{route('word.add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Shipping Method -->
                                <div class="single-accordion">
                                    <a class="accordion-head collapsed" data-toggle=""
                                       data-parent="#checkout-accordion">Photos</a>
                                    <div id="photo-section" class="collapse show">
                                        <div class="accordion-body shipping-method fix">
                                            <div
                                                class="col-12 d-flex justify-content-between mb--20 align-items-center">
                                                <h3>
                                                    The word must have at least one photo
                                                </h3>
                                                <div class="dcare__btn d-flex align-items-center"
                                                     onclick="add_new_photo_selector()">
                                                    <h3><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Photo
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="col-12" id="all_photo_selector">
                                                <div class="col-12 d-flex justify-content-between align-items-center"
                                                     style="margin-bottom: 30px">
                                                    @error('voice1')
                                                    <br>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <input id="submit_form" hidden type="submit" value="Submit">
                                    <div class="dcare__btn" onclick="submit_form()">Submit</div>
                                </div>
                            </form>
                        </div><!-- Checkout Accordion Start -->
                    </div>

                    <!-- Order Details -->
                    {{--                    <div class="col-lg-6 col-12 mb-30">--}}

                    {{--                        <div class="order-details-wrapper">--}}
                    {{--                            <h2>your order</h2>--}}
                    {{--                            <div class="order-details">--}}
                    {{--                                <form action="#">--}}
                    {{--                                    <ul>--}}
                    {{--                                        <li><p class="strong">product</p><p class="strong">total</p></li>--}}
                    {{--                                        <li><p>Fishing Reel x1</p><p>$104.99</p></li>--}}
                    {{--                                        <li><p>Fishing Rods x1 </p><p>$85.99</p></li>--}}
                    {{--                                        <li><p class="strong">cart subtotal</p><p class="strong">$190.98</p></li>--}}
                    {{--                                        <li><p class="strong">shipping</p><p>--}}
                    {{--                                                <input type="radio" name="order-shipping" id="flat" /><label for="flat">Flat Rate $ 7.00</label><br />--}}
                    {{--                                                <input type="radio" name="order-shipping" id="free" /><label for="free">Free Shipping</label>--}}
                    {{--                                            </p></li>--}}
                    {{--                                        <li><p class="strong">order total</p><p class="strong">$190.98</p></li>--}}
                    {{--                                        <li><button class="dcare__btn">place order</button></li>--}}
                    {{--                                    </ul>--}}
                    {{--                                </form>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                    </div>--}}

                </div>
            </div>
        </div><!-- Checkout Section End-->
    </section>

    <script>
        add_new_photo_selector()
        add_new_audio_selector()
    </script>
@endsection
