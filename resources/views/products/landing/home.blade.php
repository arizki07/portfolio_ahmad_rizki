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

        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }

        .zoom-image {
            transition: transform 0.3s ease;
        }

        .card-img-top:hover {
            transform: scale(1.05);
        }

        .card {
            max-width: 350px;
            margin: 0 auto;
        }

        .status-dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .status-dot-animated {
            animation: blink 1s infinite;
        }

        .status-green {
            background-color: green;
        }

        .status-blue {
            background-color: blue;
        }

        .status-red {
            background-color: red;
        }

        .text-green {
            color: green;
        }

        .text-blue {
            color: blue;
        }

        .text-red {
            color: red;
        }

        .text-gray {
            color: gray;
        }

        .heading {
            font-size: 16px;
            /* Smaller font size for project name */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /* Truncate long names */
        }

        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .meta {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .name {
            color: black;

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

<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb mt-5" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center"
                        style="background-image:url(landing/images/rizki.jpg); width: 100%; background-size: cover; background-position: center; min-height: 300px;">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">About</h1>
                        <h2 class="mb-4">About Me</h2>
                        <p style="text-align: justify;">I am a Bachelor's degree graduate of Informatics Engineering
                            from Muhammadiyah University of
                            Cirebon with a GPA of 3.11. I have expertise in web development, including the creation and
                            improvement of web-based applications. For approximately 2 years, I worked as a freelancer
                            at Web Crafser Cirebon, where I successfully completed various challenging projects and
                            received feedback from clients. Currently, I work as an IT Support at PT International
                            Textile Plumbon, I handle Hardware and Software. I am a person who enjoys working in a team,
                            is result-oriented, and has a quick ability to understand and master new fields. With a
                            combination of strong technical expertise and interpersonal skills, I always try to give the
                            best contribution to every project I work on.</p>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p><a href="#" class="btn btn-primary py-3 px-3">Preview CV</a></p>
                        <p><a href="{{ url('contact') }}" class="btn btn-warning py-3 px-3">Contact Me</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<br>
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

        @if ($project->isEmpty())
            <div class="alert alert-warning" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 3l9 18H3l9 -18z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="alert-title">No Projects Available</h4>
                        <div class="text-secondary">It seems we don't have any projects to show at the moment. Please
                            check back later!</div>
                    </div>
                </div>
            </div>
        @else
            <div class="row no-gutters">
                @foreach ($project->take(3) as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="max-width: 350px;">
                            <!-- Trigger the modal by clicking the image or name -->
                            <a href="#" data-toggle="modal" data-target="#projectModal{{ $item->id }}">
                                <img src="{{ asset('storage/my_project/' . $item->foto) }}"
                                    class="card-img-top zoom-image" alt="{{ $item->nama }}">
                            </a>
                            <div class="card-body">
                                <div class="text mt-3">
                                    <h3 class="heading">
                                        <a href="#" data-toggle="modal"
                                            data-target="#projectModal{{ $item->id }}">
                                            {{ $item->nama }}
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center mb-3 meta">
                                        <p class="mb-0">
                                            <span class="mr-2">
                                                <span>{{ \Carbon\Carbon::parse($item->tgl_project)->format('d M, Y') }}</span>
                                            </span>
                                        <div class="status">
                                            @if ($item->status == 1)
                                                <span class="status-dot status-dot-animated status-green"
                                                    style="font-size:11px"></span>
                                                <b class="text-green">Complete</b>
                                            @elseif ($item->status == 2)
                                                <span class="status-dot status-dot-animated status-blue"
                                                    style="font-size:11px"></span>
                                                <b class="text-blue">Progress</b>
                                            @elseif ($item->status == 3)
                                                <span class="status-dot status-dot-animated status-red"
                                                    style="font-size:11px"></span>
                                                <b class="text-red">Pending</b>
                                            @else
                                                <span class="status-dot status-dot-animated text-gray"
                                                    style="font-size:11px"></span>
                                                <b class="text-gray">Unknown</b>
                                            @endif
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="text-center mt-4">
            <a href="{{ url('maintenance') }}" class="btn btn-primary">View All Projects</a>
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


{{-- <section class="ftco-section" id="blog-section">
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
</section> --}}

<section class="ftco-section ftco-hireme img mt-3" style="background-image: url(landing/images/bg_1.jpg)">
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

@section('modal')
    @foreach ($project as $item)
        <!-- Modal for each project -->
        <div class="modal fade" id="projectModal{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="projectModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <!-- Gambar di sebelah kiri -->
                            <div class="col-md-4">
                                <img src="{{ asset('storage/my_project/' . $item->foto) }}" class="img-fluid"
                                    alt="{{ $item->nama }}" style="max-height: 550px; object-fit: cover;">

                            </div>
                            <!-- Nama proyek dan informasi di sebelah kanan -->
                            <div class="col-md-8 d-flex flex-column justify-content-between">
                                <p>
                                <div class="status">
                                    {{ \Carbon\Carbon::parse($item->tgl_project)->format('d M, Y') }}
                                    @if ($item->status == 1)
                                        <span class="status-dot status-dot-animated status-green"
                                            style="font-size:11px"></span>
                                        <b class="text-green">Complete</b>
                                    @elseif ($item->status == 2)
                                        <span class="status-dot status-dot-animated status-blue"
                                            style="font-size:11px"></span>
                                        <b class="text-blue">Progress</b>
                                    @elseif ($item->status == 3)
                                        <span class="status-dot status-dot-animated status-red"
                                            style="font-size:11px"></span>
                                        <b class="text-red">Pending</b>
                                    @else
                                        <span class="status-dot status-dot-animated text-gray"
                                            style="font-size:11px"></span>
                                        <b class="text-gray">Unknown</b>
                                    @endif
                                </div>
                                </p>
                                <p class="name">{{ $item->nama }}</p>
                                <p>{{ $item->keterangan }}</p>
                                <a href="{{ $item->demo_url }}" target="_blank" class="btn btn-danger view-demo-btn">
                                    View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@endsection
