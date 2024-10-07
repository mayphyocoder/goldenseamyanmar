@extends('layouts.app')
@section('title', 'Our Services')
@section('content')
    <img src="{{ asset('assets/data/service_banner.png') }}" alt="" style="width: 100%;">

    {{-- <section class="page-title" style="background-image: url({{ asset('assets/data/service_banner.png') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title"></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Recruitment Services</li>
                </ul>
            </div>
        </div>
    </section> --}}

    <section class="faqs-section ">
        <div class=""></div>
        <div class="auto-container">
            <div class="row">

                <div class="title-column col-lg-12 col-md-12 wow fadeInCenter">
                    <center>
                        <div class="inner-column">
                            <div class="">
                                <span class="sub-title">SERVICES WE PROVIDE</span>
                                <h2>RECRUITMENT <span class="color3">SERVICES</span></h2>
                            </div>
                        </div>
                    </center>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="300ms">
                <div class="row">
                    <center>
                        <h5 style="color:red;font-size:16px;">RECRUITMENT SERVICES</h5>
                    </center>
                    <p style="text-align: center;">
                        At our overseas employment agency, we take pride in providing a comprehensive suite of services that
                        cater to the unique needs of both job seekers and employers seeking international talent. Our core
                        offering includes expert recruitment and job placement services, where we meticulously identify and
                        match highly qualified candidates with exciting job opportunities in various industries and sectors
                        across the globe.
                    </p>
                    <p style="text-align: center;">
                        For job seekers, our agency serves as a guiding light in their international job search journey. We
                        help individuals find employment opportunities abroad that align with their skills, aspirations, and
                        career goals.
                    </p>
                </div>
            </div>

            <div class="content-column col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="300ms">
                <div class="row">
                    <center>
                        <h5 style="color:red;font-size:16px;">MANPOWER RECRUITMENT SERVICES</h5>
                    </center>
                    <p style="text-align: left;">
                        Golden Sea Myanmar Enterprises Through Its Extensive Database In Myanmar, Will Conduct The Following
                        Steps On Behalf Of Our Client To Secure Only The Top Tier Level Of Suitable Applicants:
                    </p>
                </div>


                <div class="content-column col-lg-12 col-md-12 wow fadeInRight">
                    <div class="row">
                        <div class="content-column col-lg-6 col-md-12 wow fadeInRight">
                            <center>
                                <h5 style="color:red;font-size:16px;">MANPOWER Supply</h5>
                            </center>
                            <ul>
                                <li>
                                    <i class="fa fa-check"> </i>
                                    Sourcing and Advertising for the position in order to create a data base pool of
                                    qualified applicants.

                                </li>
                                <li>
                                    <i class="fa fa-check"> </i>
                                    Pre-screening and verification of employment experience.

                                </li>
                                <li>
                                    <i class="fa fa-check"> </i>
                                    Initial Interview process conducted by our experienced recruitment engineers related to
                                    the field.

                                </li>
                                <li>
                                    <i class="fa fa-check"> </i>
                                    Technical exams as well as arranging actual trades tests of the final pool of
                                    applicants.

                                </li>
                                <li>
                                    <i class="fa fa-check"> </i>
                                    Categorization of applicants by rating and submission of final pool of applicants to
                                    client for final interview.
                                </li>
                                <li>
                                    <i class="fa fa-check"> </i>
                                    Arrangement of extended medical and drug testing for final applicant pool Extended
                                    background checks (by village of origin) of applicants that are selected by the client.
                                </li>
                                <li>
                                    <i class="fa fa-check"> </i>
                                    Processing Myanmar Government required documents for final selection of applicants on
                                    behalf of client.<br>
                                    - Signing of Employment Contracts<br>
                                    - Client company orientation or other briefing select by the client Airfare and
                                    ticketing arrangement.
                                </li>
                            </ul>
                        </div>

                        <div class="content-column col-lg-6 col-md-12 wow fadeInleft">
                            <img src="{{ asset('assets/data/service.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
