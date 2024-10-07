@extends('layouts.app')
@section('title', 'About Us')
@section('content')
    <img src="{{ asset('assets/data/about_banner.png') }}" alt="" style="width: 100%;">

    {{-- <section class="page-title" style="background-image: url({{asset('assets/data/about_banner.png')}});">
    <div class="auto-container">
        <div class="title-outer">
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</section> --}}

    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">about the company</span>

                            <h2>OVERSEAS MANPOWER RECRUITMENT <span class="color3">COMPANY</span></h2>
                            <h4 style="color:orange; text-shadow:1px 1px 1px;">Golden Sea Myanmar .......</h4>
                            <div class="text">
                                We are dedicated to connecting talented individuals with exciting employment opportunities
                                around the world. With a passion for helping people achieve their career aspirations, we
                                have become a trusted partner for both job seekers and employers looking for exceptional
                                talent.
                            </div>
                        </div>

                        <div class="row">
                            <div class="about-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <i class="icon flaticon-passport-16"></i>
                                    <h6 class="title">Best Immigration<br> Services</h6>
                                </div>
                            </div>

                            <div class="text-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <div class="text">We have to a tendency to believe the idea that smart looking.</div>
                                </div>
                            </div>
                        </div>

                        <div class="btm-box">
                            <a href="" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="row">
                            <div class="column col-lg-7 col-md-7">
                                <div class="image-box">
                                    <figure class="map"><img src="{{ asset('assets/images/icons/map.png') }}"
                                            alt=""></figure>
                                    <figure class="image-1 overlay-anim wow fadeInUp"><img
                                            src="{{ asset('assets/data/a3.jpg') }}" alt=""></figure>
                                    <figure class="image-2 overlay-anim wow fadeInRight"><img
                                            src="{{ asset('assets/data/a5.jpg') }}" alt=""></figure>
                                    {{-- <div class="experience bounce-y">
                                <div class="inner">
                                    <i class="icon flaticon-loyalty"></i>
                                    <div class="text"><strong>3800</strong> Satisfied Clients</div>
                                </div>
                            </div> --}}
                                </div>
                            </div>
                            <div class="column col-lg-5 col-md-5">
                                <div class="image-box">
                                    <figure class="image-3 overlay-anim wow fadeInLeft"><img
                                            src="{{ asset('assets/data/a10.png') }}" alt=""></figure>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-choose-us-two">
        <div class="bg bg-pattern-5"></div>

        <div class="auto-container">
            <div class="row g-0">
                <!-- Title Column -->
                <div class="title-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="sec-title light">
                            <h2 style="font-family:monospace;">Our Vision, Mission & <br>Values</h2>
                        </div>
                        <img src="{{ asset('assets/data/v1.png') }}">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-xl-8 col-lg-12 col-ms-12 col-sm-12">
                    <div class="row g-0">
                        <!-- Features Block Three -->
                        <div class="feature-block-three col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <i class="icon flaticon-interview"></i>
                                <i class="bg-icon flaticon-interview"></i>
                                <h6 class="title"><a href="">Vision</a></h6>
                                <div class="text">
                                    To be the global leader in connecting talent with international opportunities, fostering
                                    a world where every individual can achieve their global career aspirations.
                                </div>
                            </div>
                        </div>

                        <!-- Features Block Three -->
                        <div class="feature-block-three col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <i class="icon flaticon-low-cost"></i>
                                <i class="bg-icon flaticon-low-cost"></i>
                                <h6 class="title"><a href="">Mission</a></h6>
                                <div class="text">
                                    Our mission is to empower job seekers and employers to thrive in a diverse global
                                    workforce.
                                </div>
                            </div>
                        </div>

                        <!-- Features Block Three -->
                        <div class="feature-block-three col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <i class="icon flaticon-loyalty"></i>
                                <i class="bg-icon flaticon-loyalty"></i>
                                <h6 class="title"><a href="">Values</a></h6>
                                <div class="text">
                                    <ul>
                                        <li><span class="fa fa-check" style="color:orange;"></span> Excellence</li>
                                        <li><span class="fa fa-check" style="color:orange;"></span> Integrity</li>
                                        <li><span class="fa fa-check" style="color:orange;"></span> Collaboration:</li>
                                        <li><span class="fa fa-check" style="color:orange;"></span> Responsibility</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Features Block Three -->
                        <div class="feature-block-three col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <i class="icon flaticon-online-support"></i>
                                <i class="bg-icon flaticon-online-support"></i>
                                <h6 class="title"><a href="">Join Us on Your Journey</a></h6>
                                <div class="text">Contact us today to discover how we can make your international
                                    employment aspirations a reality. Together, we'll build a brighter future, one
                                    connection at a time.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process-section">
        <div class="dotted-map"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">our work process</span>
                <h2>Get your applied job approved in <br>3 easy simple <span class="color3">steps</span></h2>
            </div>

            <div class="row">
                <!-- Process block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-form"></i>
                            <span class="count">01</span>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h6 class="title">Submit Requirement</h6>
                                <div class="text">Fill up your employment queries and we will solve your employment
                                    problem.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-documents"></i>
                            <span class="count">02</span>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h6 class="title">Sourcing & Screening</h6>
                                <div class="text">Short list most suitable candidates to match employer’s requirement.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process block Two  -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-visa-3"></i>
                            <span class="count">03</span>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h6 class="title">Interview</h6>
                                <div class="text"> Schedule interview for shortlisted candidates for employer.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="outer-box">
            <div class="bg bg-pattern-6"></div>
            <div class="auto-container">
                <div class="row">
                    <!-- Title Column -->
                    <div class="title-column col-lg-7 col-md-12 wow fadeInLRight">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">contact with us</span>
                                <h2>Book your <span class="color3">free discovery call</span></h2>
                                <div class="text">We provide top talents to Employers, Best Career opportunities to
                                    candidates & Hire our highly qualified talents.</div>
                            </div>

                            <ul class="list-style-two">
                                <li><i class="fa fa-check-circle"></i> Utilize the extensive network of the finest 3.5%
                                    talent
                                </li>
                                <li><i class="fa fa-check-circle"></i> Achieve hiring speeds multiplied by 10 and enjoy
                                    cost benefits of up to 40%</li>
                                <li><i class="fa fa-check-circle"></i> Achieving a remarkable 70% success rate from initial
                                    candidate interview to final selection</li>
                                <center>
                                    <span style="color:#0a5cb5;font-size:25px;"> Let’s talk!</span>
                                </center>
                            </ul>

                            <div class="ceo-info">
                                <figure class="thumb"><img src="{{ asset('assets/data/2.jpg') }}" alt="">
                                </figure>
                                <h6 class="name">Mr.Million</h6>
                                <div class="designation">CEO & CO Founder</div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="form-outer">

                                <!-- Contact Form -->
                                <div class="contact-form wow fadeInLeft">
                                    <!--Contact Form-->
                                    <form method="post" action="" id="contact-form">
                                        <div class="form-group">
                                            <input type="text" name="full_name" placeholder="Your Name" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="Email" placeholder="Email Address" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" placeholder="Write a Message" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button class="theme-btn btn-style-three" type="submit"
                                                name="submit-form"><span class="btn-title">Send a Message</span></button>
                                        </div>
                                    </form>
                                </div>
                                <!--End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="clients-section" style="background-color:orange;">
        <div class="auto-container">
            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <li class="slide-item" style="background-color:white;"> <a href="#"><img
                                src="{{ asset('assets/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item" style="background-color:white;"> <a href="#"><img
                                src="{{ asset('assets/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item" style="background-color:white;"> <a href="#"><img
                                src="{{ asset('assets/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item" style="background-color:white;"> <a href="#"><img
                                src="{{ asset('assets/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item" style="background-color:white;"> <a href="#"><img
                                src="{{ asset('assets/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item" style="background-color:white;"> <a href="#"><img
                                src="{{ asset('assets/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item" style="background-color:white;"> <a href="#"><img
                                src="{{ asset('assets/images/resource/client.png') }}" alt=""></a> </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
