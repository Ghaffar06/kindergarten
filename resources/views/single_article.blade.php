@extends('layouts.app')

@section('content')
    <!--suppress ALL -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            {{--            <img src="{{asset('images/bg-png/6.png')}}" alt="bradcaump images">--}}
            <div style="max-width:1918px;width: 1918px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Article: {{$article->title}}</h2>
                            <nav class="bradcaump-inner">
                                <a href="{{route('article.index')}}" class="breadcrumb-item">All Article </a>
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">{{$article->title}}</span>
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
                        <div class="class-details-inner">
                            <div class="courses__inner">
                                <div class="d-flex justify-content-between">
                                    <h1>Article Title:&nbsp; {{$article->title}}</h1>
                                    <h1>
                                        <sub><sub> &nbsp;&nbsp; written by: {{$article->teacher_id}}</sub></sub>
                                    </h1>
                                </div>
                                <br><br>
                                <div id='article-text' class="h2" style="margin-left: 50px"></div>
                                <br><br><br>
                                <hr style="border-top: 1px solid #0b2e13;">
                            </div>
                            <div>
                                <h2><i class="fa fa-play"></i> Check the Correct Answers</h2>
                                <br><br>
                                <form action="{{route('article.single_article_validate' , ['article'=>$article->id])}}"
                                      method="post">
                                    @csrf
                                    @foreach($article->articleQuestions as $question)
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div>
                                                    <i class="fa fa-circle" style="font-size: 14pt; margin-left: 50px">&nbsp;</i>
                                                    <span style="font-size: 14pt !important; margin-left: 12px">
                                                      {{$question->option}}
                                                    </span>
                                                </div>
                                                @if($question->flag != null)
                                                    <li>
                                                        <input type="checkbox" name="{{$question->id}}" checked>
                                                    </li>
                                                @else
                                                    <li>
                                                        <input type="checkbox" name="{{$question->id}}">
                                                    </li>
                                                @endif
                                            </div>
                                        </div>
                                        <br>
                                    @endforeach
                                    <br>
                                    <hr style="border-top: 1px solid #0b2e13;">
                                    <br>

                                    <div class="d-flex justify-content-around align-items-center">
                                        <h3>
                                            Your Current Max Score
                                            = {{(($article-> max_score != 0)?($article-> last_score):'0').'%'}}<br><br>
                                            {{(($article-> last_score !== null)?('Your Current last Score = '. $article-> last_score.'%'):'')}}
                                        </h3>
                                        <div style="max-width: 50%; width: 50%"></div>
                                        <input class="dcare__btn mt--40" type="submit" value="Submit"
                                               style="background-color: #1AB7EA !important;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('article-text').innerHTML = "{{$article->text}}".replaceAll('&lt;br&gt;','<br>');
    </script>
    <!-- End Class Details -->
@endsection
