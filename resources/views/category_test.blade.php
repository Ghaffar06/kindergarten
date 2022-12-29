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
                            <h2 class="bradcaump-title">{{$category->title}} Category's Test</h2>
                            <nav class="bradcaump-inner">
                                <a href="{{route('word.index',['category' =>$category->id])}}" class="breadcrumb-item">
                                    back to: {{$category->title}} Category
                                </a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">test in {{$category->title}} category</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .selected {
            border: #5afc19 solid 4px;
        }

        .photo-border {
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            margin: 0 5px;
        }

        .text_input {
            border-radius: 25px;
            border: 2px solid #5afc19;
            padding: 0 20px;
            font-size: 18pt;
            width: 30%;
        }
    </style>

    <script>
        function changeSelected_photo(group, selected) {
            console.log(group)
            console.log(selected)
            $('#photosContainer' + group)
                .children()
                .each(
                    function () {
                        $(this).removeClass('selected')
                            .css('margin', '0 20px')
                            .find('img').attr({
                            'height': '220px',
                            'width': '220px',
                        });
                    }
                )
            $('#p-' + group + '-' + selected)
                .addClass('selected')
                .css('margin', '0 5px')
                .find('img').attr({
                'height': '250px',
                'width': '250px',
            });
        }
    </script>
    <script>
        function checkScore() {
            let learnedv = [];
            let learnedp = [];

            @foreach($voiceQuestions as $key => $voice)
            console.log('{{$voice->text}}')
            if ($('#voice-' + '{{$key}}').val() === '{{$voice->text}}')
                learnedv.push('{{$voice->text}}');
            @endforeach

                @foreach($photoQuestions as $key => $photoQuestion)
                @foreach($photoQuestion->photos as $p_key => $photo)
            if ('{{$photo->correct}}' === '1')
                if ($('#p-' + '{{$key}}' + '-' + '{{$p_key}}').hasClass('selected'))
                    learnedp.push('{{$photoQuestion->text}}');
            @endforeach
            @endforeach
            let index = 0;
            learnedv
                .filter(w => learnedp.includes(w))
                .forEach(
                    w => {
                        $('#test-words').append(
                            $('<input/>', {'name': 'word' + ++index})
                                .prop('hidden', true)
                                .val(w)
                        )
                    }
                );
            // $('#submit_test_form').click();
        }

    </script>
    <!-- End Bradcaump area -->
    <!-- Shop Grid Page -->
    <section class="dcare__shop__grid  section-padding--lg bg--white">
        <div class="container">
            <div class="col-lg-12">
                <div class="single-accordion">
                    <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion"
                       href="#photo_ques">1. Photo Questions</a>
                    <div id="photo_ques" class="collapse show">
                        <div class="checkout-method accordion-body fix">
                            <div class="checkout-login-form">
                                <div class="p-3">
                                    @foreach($photoQuestions as $key => $photoQuestion)
                                        <div style="margin-bottom: 40px">
                                            <div class="d-flex">
                                                <h3>Question {{$key + 1}}: &nbsp;&nbsp;</h3>
                                                <span style="font-size: 16pt">
                                                    choose the photo that contain &nbsp;
                                                    <span style="font-size: 18pt;font-weight: bold">
                                                        {{$photoQuestion->text}}
                                                    </span>
                                                </span>
                                            </div>
                                            <div id="photosContainer{{$key}}" class="d-flex align-items-center"
                                                 style="margin-top: 20px">
                                                @foreach($photoQuestion->photos as $p_key => $photo)
                                                    <div id='p-{{$key}}-{{$p_key}}'
                                                         class="photo-border"
                                                         onclick="changeSelected_photo('{{$key}}','{{$p_key}}')">
                                                        <img src="{{asset($photo->url)}}"
                                                             height="250px" width="250px"
                                                             onclick="changeSelected_photo('{{$key}}','{{$p_key}}')">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Billing Method -->
                <div class="single-accordion">
                    <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion"
                       href="#audio_ques">2. Voice Questions</a>
                    <div id="audio_ques" class="collapse show">
                        <div class="checkout-method accordion-body fix">
                            <div class="checkout-login-form">
                                <div class="p-3">
                                    @foreach($voiceQuestions as $key => $voiceQuestion)
                                        <div style="margin-bottom: 40px">
                                            <div class="d-flex">
                                                <h3>Question {{$key + 1}}: &nbsp;&nbsp;</h3>
                                                <span style="font-size: 16pt">
                                                    listen to the voice and write the word you heard&nbsp;
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center" style="margin-top: 20px">
                                                <div class="d-flex col-8 justify-content-around">
                                                    <audio controls>
                                                        <source src="{{asset($voiceQuestion->voice)}}"
                                                                type="audio/{{pathinfo($voiceQuestion->voice, PATHINFO_EXTENSION)}}">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <input id="voice-{{$key}}" type="text" class="text_input">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="dcare__btn" onclick="checkScore()">Submit</div>
                </div>
            </div>
        </div>
    </section>
    <form id="test-words" action="" method="post" enctype="multipart/form-data">
        @csrf
        <input id='submit_test_form' type="submit" hidden>
    </form>
    <!-- End Grid Page -->
@endsection
