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
                            <h2 class="bradcaump-title">Add new Article</h2>
                            <nav class="bradcaump-inner">

                                @if (App\Http\Controllers\RoleController::check_can('view article list'))
                                    <a href="{{route('article.index')}}" class="breadcrumb-item">All Article </a>
                                @endif
                                <span class="brd-separetor"><img src="{{asset('images/icons/brad.png')}}"
                                                                 alt="separator images"></span>
                                <span class="breadcrumb-item active">Add Article</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .textarea_span {
            font-size: 14pt;
            margin-left: 15px;
            width: 60%;
        }

        .delete_btn {
            background-color: #e51616;
            padding: 10px 15px;
            margin-left: 20px;
        }
    </style>

    <script>
        let id = 0;

        function addNewQuestion() {
            $('#ques_list')
                .append(
                    $('<div/>', {'class': 'd-flex mb--20'})
                        .append(
                            $('<li/>')
                                .append(
                                    $('<input/>', {'type': 'checkbox'})
                                ),
                            $('<span/>', {'class': 'textarea_span'})
                                .append(
                                    $('<textarea/>', {id: 'resize-ta' + id})
                                        .css('width', '100%')
                                ),
                            $('<div/>', {
                                'class': 'dcare__btn delete_btn'
                                , 'id': id
                            })
                                .append(
                                    $('<h4/>')
                                        .css('color', 'white')
                                        .append(
                                            $('<i/>', {'class': 'fa fa-trash'})
                                        )
                                )
                                .on('click', function (e) {
                                    console.log(e.currentTarget.id)
                                    $('#' + e.currentTarget.id)
                                        .parent().remove();
                                })
                        )
                );
            set_resize(id++);
        }
    </script>

    <!-- End Bradcaump area -->
    <!-- Start Class Details -->
    <section class="page-class-details bg--white section-padding--lg">
        <div class="container">
            <div class="row justify-content-center" style="margin-left: -10%;width: 120%">
                <div class="col-lg-12">
                    <div class="class__quality__desc">
                        <div class="class-details-inner">
                            <form action="{{route('article.add')}}" method="post">
                                @csrf
                                <div class="courses__inner">
                                    <div class="d-flex justify-content-between">
                                        <h1>Article Title:&nbsp;
                                            <input type="text" name="title">
                                        </h1>
                                        <h1>
                                            <sub><sub> &nbsp;&nbsp; written by: this.user_name</sub></sub>
                                        </h1>
                                    </div>
                                    <br><br>
                                    <div class="h2" style="margin-left: 50px">
                                        <textarea class="h3 resize-ta" style="height: 500px;width: 95%"
                                                  name="text"></textarea>
                                    </div>
                                    <br><br><br>
                                    <hr style="border-top: 1px solid #0b2e13;">
                                </div>
                                <div>
                                    <div class="col-4">
                                        <h2 class="btn-light" style="cursor: pointer; user-select: none"
                                            onclick="addNewQuestion()">
                                            <i class="fa fa-plus"></i> &nbsp;Add True/False Question:
                                        </h2>
                                    </div>
                                    <br><br>
                                    <div class="col-8" id="ques_list"></div>
                                    <br/><br/>
                                    <hr style="border-top: 1px solid #0b2e13;">
                                    <br/>
                                    <div class="d-flex justify-content-around align-items-center">
                                        <h3>
                                            {{--                                            Your Current Max Score--}}
                                            {{--                                            = {{(($article-> max_score != 0)?($article-> last_score):'0').'%'}}<br><br>--}}
                                            {{--                                            .{{(($article-> last_score !== null)?('Your Current last Score = '. $article-> last_score.'%'):'')}}.--}}
                                        </h3>
                                        <div style="max-width: 50%; width: 50%"></div>
                                        <div class="dcare__btn mt--40" type="submit" onclick="submitForm()"
                                             style="background-color: #1AB7EA !important;">
                                            Submit
                                        </div>
                                        <input id="from_submit" hidden type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function calcHeight(value) {
            let numberOfLineBreaks = (value.match(/\n/g) || []).length;
            // min-height + lines x line-height + padding + border
            return 20 + numberOfLineBreaks * 30 + 12 + 2;
        }

        let textarea = $(".resize-ta");
        textarea.on("keyup", () => {
            textarea.css('height', Math.max(calcHeight(textarea.val()), 500) + 'px');
        });

        function set_resize(id) {
            let textarea2 = $("#resize-ta" + id);
            textarea2.on("keyup", () => {
                textarea2.css('height', calcHeight(textarea2.val()) + 'px');
            });
        }

        function submitForm() {
            let naming = 0;
            $('#ques_list')
                .find('textarea')
                .each(function () {
                    if ($(this).val().length > 0) {
                        $(this).parent().parent().find('input').attr('name', 'answer' + ++naming);
                        $(this).attr('name', 'question' + naming);
                    }
                });
            $('#from_submit').click();
        }
    </script>
    <!-- End Class Details -->
@endsection
