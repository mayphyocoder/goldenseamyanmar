@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
    <section class="contact-section">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row">

                    <div class="title-column col-lg-8 col-md-8 col-sm-6 wow fadeInLRight py-5">
                        <div class="inner-column" style="padding: 0px 0 0px;">
                            <div class="sec-title">
                                <span class="sub-title">contact with us</span>
                                <h2>
                                    Right Job for right people
                                    <span class="color3">
                                        under easy process
                                    </span>
                                </h2>

                                <div class="text text-black" style="font-size: 18px;">
                                    The best service of Golden Sea Myanmar Co., Ltd is, supplying
                                    Myanmar workers for your business, with confidence.
                                </div>


                                <div class="btn-box py-3">
                                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-four">
                                        <span class="btn-title">
                                            Contact us with trust
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 py-5">
                        <img src="{{ asset('data/md2.png') }}" alt=""
                            style="width: 100%; border-radius: 0% 20%;  border: 5px solid #e8e8ec;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-section" style="padding: 0px 0 70px;">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">
                                about the company
                            </span>

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
                            <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">
                                <span class="btn-title">
                                    Read More
                                </span>
                            </a>
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


    <section class="contact-section">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 py-5 wow ">
                        <img src="{{ asset('data/country.png') }}" alt=""
                            style="filter: drop-shadow(1px 1px 2px black)">
                    </div>

                    <div class="title-column col-lg-6 col-md-6 col-sm-6 wow fadeInRight  py-5" data-wow-delay="600ms">
                        <div class="inner-column" style="padding: 0px 0 0px;">
                            <div class="sec-title">
                                <h2 class="font-design1">
                                    Our Milestone,
                                    <br> Image and capability
                                </h2>

                                <div class="text text-black" style="font-size: 18px;">
                                    In current age, businesses in many parts of the world are
                                    undergoing reforms to develop, Golden Sea Myanmar Co.,
                                    Ltd founded in 2004, has a successful reputation in this field
                                    with over 19 years of experience.
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="team-section" style="padding: 20px 0 80px;">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Legal Documents
                </span>
                <h2 style="font-size: 46px;">
                    Our update licenses,
                    <br>
                    <span class="color3">
                        Approved by Ministry of Labour
                    </span>
                </h2>
            </div>

            <div class="row d-flex justify-content-around">

                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box" style="">
                        <center>
                            <img src="{{ asset('data/1.png') }}" alt=""
                                style="width: 280px; height: 350px; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>



                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/4.jpg') }}" alt=""
                                style="width: 280px; height: 350px; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>


                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/2.png') }}" alt=""
                                style="width: 280px; height: 350px; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>




                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/6.jpg') }}" alt=""
                                style="width: 280px; height: 350px; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>

                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/3.jpg') }}" alt=""
                                style="width: 280px; height: 350px; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>

                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/5.jpg') }}" alt=""
                                style="width: 280px; height: 350px; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="team-section" style="padding: 20px 0 80px;">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Company Information
                </span>
                <h2 style="font-size: 46px;">
                    INTRODUCTION
                    <br>
                    <span class="color3">
                        Golden Sea Myanmar Co.,Ltd
                    </span>
                </h2>
            </div>

            <div class="row d-flex justify-content-around">
                <div class="col-md-12">
                    <style>
                        .table {
                            border-collapse: collapse;
                            border: 1px solid black;
                            width: 100%;
                        }

                        th,
                        td {
                            border: 1px solid black;
                        }
                    </style>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" width="30%" style="background-color: #e3e4ef; color: black;">
                                    Company Name
                                </th>
                                <td>
                                    Golden Sea Myanmar Co.,Ltd
                                </td>
                            </tr>


                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">
                                    Type of Company
                                </th>
                                <td>
                                    Private Company Limited
                                </td>
                            </tr>


                            <tr>
                                <th scope="row" style="background-color: #e3e4ef; color: black;">
                                    Representative
                                </th>
                                <td>
                                    U Than Tin
                                </td>
                            </tr>


                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">
                                    Date of Registrations
                                </th>
                                <td>
                                    24.9.2004
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" width="20%" style="background-color: #e3e4ef; color: black;">
                                    Date of Update
                                </th>
                                <td>
                                    18.4.2023
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">
                                    Business Address
                                </th>
                                <td>
                                    No.92 (GF), Seikkantha Street, Kyauktada
                                    Township, Yangon,Myanmar.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #e3e4ef; color: black;">
                                    Business Phone
                                </th>
                                <td>
                                    (95-1) 8398207, 8379741, 09 502 1917, 09 518 6313
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">
                                    E-Mail
                                </th>
                                <td>
                                    million.golden@gmail.com
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #e3e4ef; color: black;">Google Map
                                </th>
                                <td>
                                    <a href="https://maps.app.goo.gl/CGqbgHLwy8DsicRNA" target="_blang">Get
                                        Directions
                                    </a>
                                </td>
                            </tr>

                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </section>

    <section class="team-section" style="padding: 20px 0 80px;">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Certificate
                </span>
                <h2 style="font-size: 46px;">
                    Successfully attended training
                    <br>
                    <span class="color3">
                        for ethical recruitment
                    </span>
                </h2>
            </div>

            <div class="row d-flex justify-content-around">

                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box" style="">
                        <center>
                            <img src="{{ asset('data/c1.png') }}" alt=""
                                style="width: 100%; height: auto; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>



                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/c2.jpg') }}" alt=""
                                style="width: 100%; height: auto; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>


                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/c3.jpg') }}" alt=""
                                style="width: 100%; height: auto; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>




                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/c4.jpg') }}" alt=""
                                style="width: 100%; height: auto; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>

                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/c5.jpg') }}" alt=""
                                style="width: 100%; height: auto; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>

                <div class="team-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <center>
                            <img src="{{ asset('data/c6.jpg') }}" alt=""
                                style="width: 100%; height: auto; background-size: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Country  --}}
    <section class="faqs-section ">
        <div class="bg bg-pattern-9"></div>
        <div class="auto-container">
            <div class="row">

                <div class="title-column col-lg-12 col-md-12 wow fadeInLeft">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">countries you can visit</span>
                            <h2>Countries we support for the <span class="color3">candidates</span></h2>
                            <div class="text">
                                Supplying Myanmar Workers to:
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="300ms">
                    <div class="row">
                        @foreach ($countries as $country)
                            <div class="country-block-two col-lg-3 col-md-3 col-sm-6">
                                <a href="{{ route('job.show', $country->id) }}">
                                    <div class="inner-box">
                                        <div class="flag">
                                            <img src="{{ $country->photo ?? '' }}" alt="">
                                        </div>
                                        <h6 class="title text-center">
                                            {{ $country->country ?? '' }}
                                        </h6>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="call-to-action">
        <div class="left-shape">
            <img src="{{ asset('assets/images/resource/plane.png') }}" alt="">
        </div>
        <div class="right-shape" style="background-image: url({{ asset('data/C0002927.jpg') }})"></div>
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h2>
                                Our Expertise
                            </h2>
                        </div>
                        <p style="color: white; font-size: 18px;">
                            Our expertise stands on the Thailand, Malaysia, Singapore, Japan and Middle East Countries job
                            market, providing high standard recruitment service to the companies in various industries.
                        </p>

                        <a href="page-contact.html" class="theme-btn btn-style-four">
                            <span class="btn-title">
                                Contact Us
                            </span>
                        </a>

                        <figure class="badge">
                            <img src="images/resource/badge.png" alt="">
                        </figure>
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

    <br><br>

    <section class="fun-fact-section">
        <div class="fact-counter">
            <div class="bg bg-pattern-1"></div>
            <div class="auto-container">
                <div class="row">
                    <!-- Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner">
                            <div class="content">
                                <i class="icon far fa-plus"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="20">0</span></div>
                                <h6 class="counter-title">Experiences</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <div class="content">
                                <i class="icon far fa-plus"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="55000">0</span></div>
                                <h6 class="counter-title">Happy Candidates</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner">
                            <div class="content">
                                <i class="icon far fa-plus"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="20">0</span></div>
                                <h6 class="counter-title">Team Members</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                        <div class="inner">
                            <div class="content">
                                <i class="icon far fa-plus"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="150">0</span></div>
                                <h6 class="counter-title">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="call-to-action">
        <div class="left-shape"><img src="{{ asset('assets/images/resource/plane.png') }}" alt=""></div>
        <div class="right-shape" style="background-image: url({{ asset('assets/data/process.gif') }})"></div>
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h4>Interested in finding out <br>how GSM can support you?</h4>
                        </div>
                        <ul class="list-style-two two-column">
                            <li><i class="fa fa-check-circle"></i> Fulfilled over 12,000 recruitment projects</li>
                            <li><i class="fa fa-check-circle"></i> Worked with over 2000+ global clients</li>
                            <li><i class="fa fa-check-circle"></i> Developed a Presence in 25+ countries</li>
                        </ul>
                        <a href="#" class="theme-btn btn-style-four"><span class="btn-title">Book
                                Consultation</span></a>
                        <figure class="badge"><img src="images/resource/badge.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="about-section-three pull-down">
        <div class="bg bg-pattern-8"></div>
        <div class="auto-container">
            <div class="row">

                <div class="sec-title text-center">
                    <span class="sub-title">
                        We also have job offers in other countries.
                    </span>
                    <h2>We have international career
                        <br>
                        <span class="color3">opportunities all across Asia.</span>
                    </h2>
                </div>

                @foreach ($countries as $country)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="country-block">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src="{{ $country->photo ?? '' }}" alt="">
                                </div>
                                <a href="{{ route('job.show', $country->id) }}" class="theme-btn">
                                    {{ $country->country ?? '' }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="services-section-two pull-down">
        <div class="bg" style="background-image: url({{ asset('assets/images/background/2.jpg') }})"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="sub-title">What do we offer</span>
                <h2>
                    Jobs Available
                </h2>
            </div>

            <div class="row">
                @foreach ($jobs as $job)
                    <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <a href="{{ route('cv.index') }}">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ $job->photo }}" alt="" data-enlargeable=""
                                            style="border-radius: 30px 0 30px 0; width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h6 class="title">
                                        {{ $job->title ?? '' }}
                                    </h6>
                                    <div class="text">
                                        Job in {{ $job->country->country ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




    <section class="contact-section mt-100">
        <br>
        <div class="outer-box">
            <div class="bg bg-pattern-6"></div>
            <div class="auto-container">
                <div class="row">
                    <div class="title-column col-lg-7 col-md-12 wow fadeInLRight">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">
                                    Resume Form
                                </span>
                                <h2>Apply for <span class="color3">your job</span></h2>
                                <div class="text">
                                    Please
                                    <a download="" href="{{ asset('data/CV sample.pdf') }}" style="color: red">
                                        download
                                    </a>,
                                    fill in your information and attach your resume for submission.
                                    <br>
                                    Please be assured that all submissions received will be treated with strictest
                                    confidentiality.
                                </div>
                            </div>

                            <ul class="list-style-two">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Expertise and Experience: We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition.
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Time and Cost Savings: Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews.
                                </li>

                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Ongoing Support: Our relationship with you does not end once a candidate is hired. We
                                    provide ongoing support to ensure a smooth transition and integration for the new
                                    employee.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="form-outer">
                                <div class="contact-form wow fadeInLeft">
                                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                                        enctype="multipart/form-data" id="create-form" novalidate="novalidate">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                <div class="form-group">
                                                    <label style="color: white">Name*</label>
                                                    <input type="text" name="name" class="form-control "
                                                        value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                <div class="form-group">
                                                    <label style="color: white">Phone</label>
                                                    <input type="text" name="phone" class="form-control "
                                                        value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label style="color: white">Additional Note</label>
                                                    <textarea class="form-control" rows="5" name="additional_note"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label for="img" style="color: white">
                                                        Select your CV to upload
                                                    </label>
                                                    <input type="file" name="attachment_file"
                                                        accept=".doc, .docx, .pdf" class="form-control-file" required>
                                                </div>
                                            </div>

                                            <div class="col-md-12 py-3">
                                                <button type="submit" class="theme-btn btn-style-four">
                                                    <span class="txt">
                                                        Submit Now
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="news-section">
        <div class="auto-container">

            <div class="sec-title text-center light">
                <span class="sub-title">Media Gallery</span>
                <h2 style="color: black">Our Gallery & <span class="color3">Activities</span></h2>
            </div>

            <div class="row">

                @foreach ($categories as $category)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ $category->photo ?? '' }}" alt=""
                                        style="width: 100%; height: 290px; background-size: cover; object-position: center; object-fit: cover;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>
                                        <i class="fa fa-user-circle"></i>
                                        Gallery
                                    </li>
                                    <li>
                                        <i class="fa fa-comments"></i>
                                        Activities
                                    </li>
                                </ul>
                                <h4 class="title">
                                    <a href="{{ route('gallery.show', $category->id) }}">
                                        {{ $category->title ?? '' }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>





    <section class="services-section-two pull-down">
        <div class="bg" style="bottom: 0px;"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="sub-title">Media Gallery</span>
                <h2>
                    <span style="font-size: 29px;">
                        Our Photo
                    </span>
                    <span class="color3">
                        Gallery
                    </span>
                </h2>
            </div>

            <div class="row">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                            src="{{ $image }}" alt="">
                                    </figure>
                                    <i class="icon fa fa-image"></i>
                                </div>
                                <div class="lower-content">
                                    <h6 class="title">
                                        <a href="javascript::void(0)">
                                            {{ $activity->title ?? '' }}
                                        </a>
                                    </h6>
                                    <div class="text">
                                        {{ $activity->category_table->title ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv') !!}
@endsection
