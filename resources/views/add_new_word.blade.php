@extends('layouts.app')


@section('content')
    <script>
        function reassignment(){
            selected_categories = []
            $('#all_category_selector').find('select option:selected').each(
                function (){
                    if($(this).val() !== '0')
                        selected_categories.push({'id':$(this).val(),'name':$(this).text()})
                }
            )

            $('#all_category_selector').find('select').each(
                function (){
                    let id = $(this).find('option:selected').val();
                    $(this).children().remove();
                    $(this).append(
                        $('<option/>',{
                            'value': '0',
                        }).text('Select a category')
                    );
                    for(let c of categories){
                        let ok = true;
                        for (let sc of selected_categories){
                            if(sc['id'] == c['id']){
                                ok = false;
                            }
                        }
                        if(id == c['id'])
                            ok = true;
                        if(ok) {
                            $(this).append(
                                $('<option/>', {
                                    'value': c['id'],
                                    'selected': (id == c['id'])
                                }).text(c['name'])
                            );
                        }
                    }
                }
            )
        }

        function add_new_category_selector(){
            $('#all_category_selector').append(
                $('<div/>',{
                    'class':"d-flex align-items-center mb--20"
                }).append(
                    $('<select/>'),
                    $('<h2/>',{
                        'class':'dcare__btn'
                    }).append(
                        $('<i/>',{
                            'class' : "fa fa-trash",
                            'aria-hidden':true
                        })
                    ).on('click',(e)=> {
                        e.currentTarget.parentNode.remove()
                        reassignment();
                    })
                )
            ).on('change', () => reassignment());
            reassignment();
        }

        all_photo = 0;
        all_audio = 0;

        function add_new_photo_selector(){
            let id = 'photo-' + all_photo;
            all_photo++;
            $('#all_photo_selector').append(
                $('<div/>',{
                    'class':"col-12 d-flex align-items-center mb--20 justify-content-between"
                }).append(
                    $('<input/>',{
                        'id': id,
                        'type':'file',
                        'accept':"image/png, image/jpeg"
                    }),

                    (all_photo !== 1) ?
                        $('<h2/>',{
                        'class':'dcare__btn'
                        }).append(
                            $('<i/>',{
                                'class' : "fa fa-trash",
                                'aria-hidden':true
                            })
                        ).on('click',(e)=> {
                            e.currentTarget.parentNode.remove()
                        }):
                        $('<div/>')
                            .attr({
                                'width':'50%',
                                'min-width':'50%'
                            })
                )
            );
            addPhoto(id);
        }

        function addPhoto(id){
            $('#' + id)
                .on('change',()=>{
                    let input = $('#' + id);
                    input.parent()
                        .find('img')
                        .remove();
                    if(input.val() != null){
                        $('<img/>',{
                            'width' : '150px',
                            'height' : '150px',
                            'src' : URL.createObjectURL(document.querySelector('#' + id).files[0])
                        }).insertAfter(input);
                    }
                });
        }

        function add_new_audio_selector(){
            let id = 'audio-' + all_audio;
            all_audio++;
            $('#all_audio_selector').append(
                $('<div/>',{
                    'class':"col-12 d-flex align-items-center mb--20 justify-content-between"
                }).append(
                    $('<input/>',{
                        'id': id,
                        'type':'file',
                        'accept':"audio/ogg, audio/mp3, audio/wav, audio/aac, audio/m4a, audio/flac"
                    }),

                    (all_audio !== 1) ?
                        $('<h2/>',{
                            'class':'dcare__btn'
                        }).append(
                            $('<i/>',{
                                'class' : "fa fa-trash",
                                'aria-hidden':true
                            })
                        ).on('click',(e)=> {
                            e.currentTarget.parentNode.remove()
                        }):
                        $('<div/>')
                            .attr({
                                'width':'50%',
                                'min-width':'50%'
                            })
                )
            );
            addAudio(id);
        }

        function addAudio(id){
            $('#' + id)
                .on('change',()=>{
                    let input = $('#' + id);
                    input.parent()
                        .find('img')
                        .remove();
                    if(input.val() != null){
                        $('<audio controls/>')
                            .append(
                                $('<source/>',{
                                    'src' : URL.createObjectURL(document.querySelector('#' + id).files[0])
                                })
                            ).insertAfter(input);
                    }
                });
        }

        function submit_form(){
            let index = 0
            $('#all_category_selector')
                .find('select option:selected')
                .each(function(){
                    if($(this).val() != 0){
                        $(this).val($(this).text())
                        $(this).attr('name','category' + (++index))
                    }
                });
            index = 0
            $('#all_photo_selector')
                .find('input')
                .each(function (){
                    if($(this).val() != ''){
                        $(this).attr('name','photo' + (++index))
                    }
                });
            index = 0
            $('#all_audio_selector')
                .find('input')
                .each(function (){
                    if($(this).val() != ''){
                        $(this).attr('name','voice' + (++index))
                    }
                });
            $('#submit_form').click();
        }

        let categories = []
        let selected_categories = []
        @foreach($categories as $cate)
            categories.push({'name':"{{$cate->title}}",'id':{{$cate->id}}});
        @endforeach
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
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}" alt="separator images"></span>
                                <span class="breadcrumb-item active">Add New Word</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @error('text')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('score')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('image1')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('voice1')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('category1')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

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
                                <!-- Checkout Method -->
                                <div class="single-accordion">
                                    <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#text-score">1. Word Text & Score</a>

                                    <div id="text-score" class="collapse show">
                                        <div class="checkout-method accordion-body fix">

                                            <ul class="checkout-method-list">
                                                <li hidden class="active" data-form="checkout-login-form">Login</li>
                                            </ul>

                                            <div action="#" class="checkout-login-form">
                                                <div class="row">
                                                    <div class="input-box col-md-6 col-12 mb--20">
                                                        <label for="word_text">
                                                            Word Text:
                                                            <input id="word_text" type="text" maxlength="26" name="text" placeholder="less than 26 character">
                                                        </label>
                                                    </div>
                                                    <div class="input-box col-md-6 col-12 mb--20">
                                                        <label for="score">
                                                            Score:
                                                            <input id="score" type="number" min="1" max="100" name='score' style="max-width: 125%; width: 125%" placeholder="between 1 and 100">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <form action="#" class="checkout-register-form">
                                                <div class="row">
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="text" placeholder="Your Name"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="email" placeholder="Email Address"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="password" placeholder="Password"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="password" placeholder="Confirm Password"></div>
                                                    <div class="input-box col-12"><input type="submit" value="Register"></div>
                                                </div>
                                            </form> -->

                                        </div>
                                    </div>

                                </div>

                                <!-- Billing Method -->
                                <div class="single-accordion">
                                    <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#categories">2. Categories</a>
                                    <div id="categories" class="collapse">
                                        <div class="accordion-body billing-method fix">
                                            <div class="billing-form checkout-form">
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-between mb--20 align-items-center">
                                                        <h3>
                                                            The word must have at least one category
                                                        </h3>
                                                        <div class="dcare__btn d-flex align-items-center" onclick="add_new_category_selector()" >
                                                            <h5><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Category</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb--20" id="all_category_selector">
                                                        <div class="d-flex justify-content-between align-items-center mb--20">
                                                            <select onchange="reassignment()">
                                                                <option value="0">Select a category</option>
                                                                 @for($index = 1;$index<=$categories->count();$index++)
                                                                     <option value="{{$categories[$index - 1]->id}}">{{$categories[$index - 1]->title}}</option>
                                                                 @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shipping Method -->
                                <div class="single-accordion">
                                    <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#photo-section">3. Photos</a>
                                    <div id="photo-section" class="collapse">
                                        <div class="accordion-body shipping-method fix">
                                            <div class="col-12 d-flex justify-content-between mb--20 align-items-center">
                                                <h3>
                                                    The word must have at least one photo
                                                </h3>
                                                <div class="dcare__btn d-flex align-items-center" onclick="add_new_photo_selector()" >
                                                    <h3><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Photo</h3>
                                                </div>
                                            </div>
                                            <div class="col-12" id="all_photo_selector">
                                                <div class="col-12 d-flex justify-content-between align-items-center"
                                                     style="margin-bottom: 30px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment Method -->
                                <div class="single-accordion">
                                    <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#audio-section">4. Audios</a>
                                    <div id="audio-section" class="collapse">
                                        <div class="accordion-body payment-method fix">
                                            <div class="col-12 d-flex justify-content-between mb--20 align-items-center">
                                                <h3>
                                                    The word must have at least one audio
                                                </h3>
                                                <div class="dcare__btn d-flex align-items-center" onclick="add_new_audio_selector()" >
                                                    <h3><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Audio</h3>
                                                </div>
                                            </div>
                                            <div class="col-12" id="all_audio_selector">
                                                <div class="col-12 d-flex justify-content-between align-items-center"
                                                     style="margin-bottom: 30px">
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
