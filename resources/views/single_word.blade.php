@extends('layouts.app')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
{{--            <img src="{{asset('images/bg-png/6.png')}}" alt="bradcaump images">--}}
            <div style="max-width:1918px;width: 1918px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Word: {{$word->text}}</h2>
                            <nav class="bradcaump-inner">
                                <a href="{{route('word.index', ['category'=> $category->id])}}" class="breadcrumb-item">back to: {{$category->title}}'s CATEGORY</a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">{{$word->text}}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Bradcaump area -->
    <!-- Start Class Details -->
    <section class="page-class-details bg--white section-padding--lg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="class__quality__desc">
                        <div class="class__thumb">
                            <div class="rounded border border-warning p-1"
                                 style="border-width:5px !important;">
                                <div class="slide__carosel owl-carousel owl-theme">
                                    @foreach($word->wordPhotos as $photo)
                                        <div
                                            class="slider__area d-flex fullscreen justify-content-center align-items-center">
                                            <div class="courses__images">
                                                <img height="650px" src="{{asset($photo->url)}}"
                                                     alt="class images">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="class-details-inner">
                            <div class="courses__inner">
                                <h2>{{$word->text}}</h2>
                                <h4>Audio:</h4><br>
                                <div class="d-flex column justify-content-around">
                                    @foreach($word->wordVoiceRecords as $audio)
                                        <audio controls>
                                            <source src="{{asset($audio->url)}}" type="audio/{{pathinfo($audio->url, PATHINFO_EXTENSION)}}">
                                            Your browser does not support the audio element.
                                        </audio>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between">
                                <div id="pr-word" class="wel__btn">
                                    <a class="dcare__btn">Previous Word</a>
                                </div>
                                <div id="ne-word" class="wel__btn">
                                    <a class="dcare__btn">Next Word</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        next_a = $('#ne-word').find('a');
        prev_a = $('#pr-word').find('a');
        @if(!$nextable)
            next_a.removeClass('dcare__btn').text('');
        @else
            next_a.attr('href', window.location.href + '??query=1');
        @endif
        @if(!$previousable)
            prev_a.removeClass('dcare__btn').text('');
        @else
            prev_a.attr('href', window.location.href + '??query=-1');
        @endif
    </script>
    <!-- End Class Details -->
@endsection
