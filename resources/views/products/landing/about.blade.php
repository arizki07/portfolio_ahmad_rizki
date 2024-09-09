@extends('layouts.landing.main')
@section('content_landing')
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

    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav id="navi">
                        <ul>
                            <li><a href="#page-1">Education</a></li>
                            <li><a href="#page-2">Experience</a></li>
                            <li><a href="#page-3">Skills</a></li>
                            <li><a href="#page-4">Awards</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div id="page-1" class= "page one">
                        <h2 class="heading">Education</h2>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Bachelor of Science in Computer Science</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Computer Processing Systems/Computer Software</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Diploma in Computer</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Art &amp; Creative Director</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                    </div>

                    <div id="page-2" class= "page two">
                        <h2 class="heading">Experience</h2>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Software Developer</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Web Designer</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Web Marketing</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Art &amp; Creative Director</h2>
                                <span class="position">Side Tech</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Wordpress Developer</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2017-2018</span>
                                <h2>UI/UX Designer</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                    </div>
                    <div id="page-3" class= "page three">
                        <h2 class="heading">Skills</h2>
                        <div class="row progress-circle mb-5">
                            <div class="col-lg-4 mb-4">
                                <div class="bg-white rounded-lg shadow p-4">
                                    <h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

                                    <!-- Progress bar 1 -->
                                    <div class="progress mx-auto" data-value='90'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <div
                                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                            <div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
                                        </div>
                                    </div>
                                    <!-- END -->

                                    <!-- Demo info -->
                                    <div class="row text-center mt-4">
                                        <div class="col-6 border-right">
                                            <div class="h4 font-weight-bold mb-0">28%</div><span
                                                class="small text-gray">Last week</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="h4 font-weight-bold mb-0">60%</div><span
                                                class="small text-gray">Last month</span>
                                        </div>
                                    </div>
                                    <!-- END -->
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="bg-white rounded-lg shadow p-4">
                                    <h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

                                    <!-- Progress bar 1 -->
                                    <div class="progress mx-auto" data-value='80'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <div
                                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                            <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
                                        </div>
                                    </div>
                                    <!-- END -->

                                    <!-- Demo info -->
                                    <div class="row text-center mt-4">
                                        <div class="col-6 border-right">
                                            <div class="h4 font-weight-bold mb-0">28%</div><span
                                                class="small text-gray">Last week</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="h4 font-weight-bold mb-0">60%</div><span
                                                class="small text-gray">Last month</span>
                                        </div>
                                    </div>
                                    <!-- END -->
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="bg-white rounded-lg shadow p-4">
                                    <h2 class="h5 font-weight-bold text-center mb-4">jQuery</h2>

                                    <!-- Progress bar 1 -->
                                    <div class="progress mx-auto" data-value='75'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                        <div
                                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                            <div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
                                        </div>
                                    </div>
                                    <!-- END -->

                                    <!-- Demo info -->
                                    <div class="row text-center mt-4">
                                        <div class="col-6 border-right">
                                            <div class="h4 font-weight-bold mb-0">28%</div><span
                                                class="small text-gray">Last week</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="h4 font-weight-bold mb-0">60%</div><span
                                                class="small text-gray">Last month</span>
                                        </div>
                                    </div>
                                    <!-- END -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Photoshop</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>jQuery</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>HTML5</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                                            aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>CSS3</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>WordPress</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>SEO</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="page-4" class= "page four">
                        <h2 class="heading">Awards</h2>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Top 10 Web Developer</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Top 5 LeaderShip Exellence Winner</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Top 4 Web Tester</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="resume-wrap d-flex ftco-animate">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-ideas"></span>
                            </div>
                            <div class="text pl-3">
                                <span class="date">2014-2015</span>
                                <h2>Art &amp; Creative Director</h2>
                                <span class="position">Cambridge University</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
