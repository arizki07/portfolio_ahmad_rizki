@extends('layouts.landing.main')
@section('content_landing')
@section('css')
    <style>
        .logo-img {
            width: 100%;
            height: 150px;
            /* You can adjust the height as needed */
            object-fit: contain;
            /* Ensures the image is scaled properly without distortion */
        }

        .card {
            text-align: center;
            padding: 20px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carousel .row {
            justify-content: center;
        }
    </style>
@endsection

<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading">Hey! I am</span>
                    <h1>Ahmad Rizki</h1>
                    <h2>I'm a
                        <span class="txt-rotate" data-period="2000"
                            data-rotate='[ "Web Developer.", "Front End Developer.", "Back End Developer.", "Full Stack Developer." ]'></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mouse">
        <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
</section>

<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center"
                        style="background-image:url(landing/images/rizki.jpg);">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">About</h1>
                        <h2 class="mb-4">About Me</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Name:</span> <span>Ronaldo Fredrickson</span></li>
                            <li class="d-flex"><span>Date of birth:</span> <span>November 28, 1989</span></li>
                            <li class="d-flex"><span>Address:</span> <span>San Francisco CA 97987 USA</span></li>
                            <li class="d-flex"><span>Zip code:</span> <span>1000</span></li>
                            <li class="d-flex"><span>Email:</span> <span>ronaldo@gmail.com</span></li>
                            <li class="d-flex"><span>Phone: </span> <span>+1-2234-5678-9-0</span></li>
                        </ul>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number" data-number="120">0</span>
                            <span>Project complete</span>
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-partner">
    <div class="container">
        <!-- Bootstrap Carousel -->
        <div id="logoCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- First slide -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="landing/images/laravel1.png" class="img-fluid logo-img"
                                        alt="Laravel Logo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="landing/images/ci.png" class="img-fluid logo-img" alt="CodeIgniter Logo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="landing/images/bs.png" class="img-fluid logo-img" alt="Bootstrap Logo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="landing/images/js1.png" class="img-fluid logo-img" alt="JavaScript Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="landing/images/mysql.png" class="img-fluid logo-img" alt="MySQL Logo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="landing/images/php.png" class="img-fluid logo-img" alt="PHP Logo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="landing/images/html.png" class="img-fluid logo-img" alt="HTML Logo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="landing/images/css.png" class="img-fluid logo-img" alt="HTML Logo">
                                </div>
                            </div>
                        </div>
                        <!-- You can add more logos here if needed -->
                    </div>
                </div>
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#logoCarousel" role="button" data-slide="prev">
                <i class="fas fa-chevron-left fa-2x"></i> <!-- Gunakan icon FontAwesome -->
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#logoCarousel" role="button" data-slide="next">
                <i class="fas fa-chevron-right fa-2x"></i> <!-- Gunakan icon FontAwesome -->
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>

<section class="ftco-section ftco-project" id="projects-section">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Projects</h1>
                <h2 class="mb-4">Our Projects</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(landing/images/work-1.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(landing/images/work-2.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(landing/images/work-3.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(landing/images/work-4.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(landing/images/work-5.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(landing/images/work-6.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container-fluid px-md-5">
        <div class="row d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 shadow">
                    <div class="text">
                        <strong class="number" data-number="100">0</strong>
                        <span>Awards</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 shadow">
                    <div class="text">
                        <strong class="number" data-number="1200">0</strong>
                        <span>Complete Projects</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 shadow">
                    <div class="text">
                        <strong class="number" data-number="1200">0</strong>
                        <span>Happy Customers</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 shadow">
                    <div class="text">
                        <strong class="number" data-number="500">0</strong>
                        <span>Cups of coffee</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section" id="blog-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Blog</h1>
                <h2 class="mb-4">Our Blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20"
                        style="background-image: url('landing/images/image_1.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business
                                Growth</a></h3>
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">Sept. 12, 2019</span>
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20"
                        style="background-image: url('landing/images/image_2.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business
                                Growth</a></h3>
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">Sept. 12, 2019</span>
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="single.html" class="block-20"
                        style="background-image: url('landing/images/image_3.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business
                                Growth</a></h3>
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">Sept. 12, 2019</span>
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-hireme img" style="background-image: url(landing/images/bg_1.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">
                <h2>I'm <span>Available</span> for freelancing</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
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

        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Address</h3>
                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
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
                        <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
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
                        <p><a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
        </div>

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
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div class="img" style="background-image: url(landing/images/about.jpg);"></div>
            </div>
        </div>
    </div>
</section>
@endsection
