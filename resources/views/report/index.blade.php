@extends('layouts.app')

@section('content')
<section class="contact__box section-padding--lg bg-image--27">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="section__title text-center">
                    <h2 class="title__line">Feel Free To write Us</h2>
                    <p>Make your message clear, meaningfull and purposeful!</p>
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
                        <div class="single-contact-form name">
                            <input type="text" name="title" placeholder="Report Title">
                        </div>

                        <div class="single-contact-form message">
                            <textarea name="message" placeholder="Type your message here.."></textarea>
                        </div>
                        <div class="contact-btn">
                            <button type="submit" class="dcare__btn">submit</button>
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