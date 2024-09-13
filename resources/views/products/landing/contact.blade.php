@extends('layouts.landing.main')
@section('content_landing')
@section('css')
    <style>
        /* CSS BLUR */
        .background-blur {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('landing/images/image_1.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(4px);
            z-index: -1;
            /* Ensure the blur is behind the text */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Optional: Adds a dark overlay */
            z-index: 0;
            /* Layer on top of the blurred background but behind content */
        }

        .ftco-section {
            position: relative;
            z-index: 1;
            /* Ensures the content (text and buttons) stays in front */
        }
    </style>
    {{-- <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '6Le7Z0EqAAAAAHHrGzOtZvFTj_bC-Wnm9js6FpqO'
            });
        };
    </script> --}}
@endsection
<section class="ftco-section ftco-hireme img" style="position: relative; min-height: 460px;">
    <div class="background-blur"></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">
                <h2 style="margin-bottom: 20px"><a href="/"><span>Home</span></a> - Contact</h2>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4">Contact Me</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>

        {{-- <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Address</h3>
                            @foreach ($users as $item)
                                <p>{{ $item->alamat }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Contact Number</h3>
                            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Email Address</h3>
                            <p><a href="mailto:ahmadrizki0704@gmail.com">ahmadrizki0704@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Website</h3>
                            <p><a href="https://ahmadrizki.my.id/">ahmadrizki.my.id</a></p>
                        </div>
                    </div>
                </div>
            </div> --}}

        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-4 p-md-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lf1gUEqAAAAAF4pRW2IQEFu1N46lmPo_tpE9tgS"></div>
                    <div class="form-group mt-3">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div class="img" style="background-image: url(landing/images/iki.JPG);"></div>
            </div>
        </div>
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
