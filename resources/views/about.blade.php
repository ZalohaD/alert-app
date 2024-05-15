@extends('layouts.main')

@section('content')

    <!-- Hero Area End -->
    <!-- Support Company Start-->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="text-xxl-center pt-5">About Us</h1>

        <div class="support-company-area pt-150 pb-150 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle ">
                                <span>What we are doing</span>
                                <h2>24k Talented people are getting Jobs</h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                                <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                                @guest
                                    <a href="{{ route('auth.login') }}" class="btn about-btn">Login to search job<i class="fa fa-arrow-right ms-3"></i></a>
                                @endguest
                                @auth
                                    @if (Auth::user()->user_type == 'employer')
                                        <a href="{{ route('employer.create_job') }}" class="btn about-btn">Post a job</a>
                                    @elseif (Auth::user()->user_type == 'employee')
                                        <a href="{{ route('employee.create_portfolio') }}" class="btn about-btn">Apply for job</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img  wow fadeInUp" data-wow-delay="0.3s">
                            <img src="{{url('img/support-img.jpg')}}" alt="">
                            <div class="support-img-cap text-center">
                                <p>Since</p>
                                <span>1994</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- How  Apply Process Start-->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s">
        <div class="apply-process-area apply-bg pt-150 pb-150" >
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply process</span>
                            <h2> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <img class="about-icon" src="{{url('img/search-file.svg')}}">
                            </div>
                            <div class="process-cap">
                                <h5>1. Search a job</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <img class="about-icon" src="{{url('img/verified-user.svg')}}">
                            </div>
                            <div class="process-cap">
                                <h5>2. Apply for job</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <img class="about-icon" src="{{url('img/get-your-job.svg')}}">
                            </div>
                            <div class="process-cap">
                                <h5>3. Get your job</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How  Apply Process End-->
    @include('Components.testimonial')
    <!-- Testimonial End -->
    <!-- Online CV Area Start -->
    <div class="container-fluid pt-5 wow fadeInUp" data-wow-delay="0.3s">
        <div class="online-cv cv-bg section-overly pt-150 pb-150" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">FEATURED TOURS Packages</p>
                            <p class="pera2"> Make a Difference with Your Online Resume!</p>
                            <a href="{{ route('auth.login') }}" class="border-btn2 border-btn4">Upload your cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Online CV Area End-->
    </div>
    <!-- Blog Area End -->
@endsection
