@extends('layouts.app')

@section('content')
    <style>
        .input_form {
            font-size: 16pt;
            border-radius: 40px;
        }

        .input_span {
            color: white;
            font-size: 18pt;
            font-weight: bold;
        }

        .title_report {
            color: white !important;
            text-shadow: #1b1e21 4px 2px 3px, #1b1e21 4px -2px 3px;
        }
    </style>
    <section class="contact__box section-padding--lg bg-image--27">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center">
                        <h2 class="title__line title_report">Feel Free To write Us</h2>
                        <p style="color: white;font-size: 14pt">Make your message clear, meaningful and purposeful!</p>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row mt--80">
                <div class="col-lg-12">
                    <div class="contact-form-wrap">
                        <form action="{{ route('report.add')}}" method="POST">
                            @csrf
                            <div class="single-contact-form name d-flex align-items-center" style="margin-left: 3px">
                                <span class="input_span">Report Title:</span>
                                <input type="text" class="input_form" name="title"
                                       placeholder="What this message about..">
                            </div>

                            <div class="single-contact-form message d-flex" style="flex-direction: column">
                                <span class="input_span" style="margin-bottom: 15px">Report Content:</span>
                                <textarea name="message" class="input_form" style="width: 100%; height: 40vh"
                                          placeholder="Type your message here.."></textarea>
                            </div>
                            <div class="contact-btn">
                                <button type="submit" class="dcare__btn" style="width: 20%;
                                    text-shadow: #1b1e21 4px 2px 3px;font-size: 16pt">submit
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="form-output">
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form -->
@endsection
