@extends('layouts.app')
@section('title', 'Recruitment Process')
@section('content')

    <img src="{{ asset('assets/data/process_banner.png') }}" alt="" style="width: 100%;">

    {{-- <section class="page-title" style="background-image: url({{ asset('assets/data/process_banner.png') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title"></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Recruitment Process</li>
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
                                <h2>RECRUITMENT <span class="color3">PROCESS</span></h2>
                            </div>
                        </div>
                    </center>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="300ms">
                <div class="row">
                    <center>
                        <h5 style="color:red;font-size:16px;">RECRUITMENT PROCESS</h5>
                    </center>
                    <p style="text-align: center;">
                        Golden Sea Myanmar Enterprises with its well qualified team, extensive database, smart selection
                        criteria, modern offices and testing facilities provides integrated, comprehensive and cost
                        effective manpower to the organisations across globe.
                    </p>

                </div>
            </div>

            <div class="content-column col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="300ms">
                <div class="row">
                    <center>
                        <h5 style="color:red;font-size:16px;">MANPOWER RECRUITMENT SERVICES</h5>
                    </center>
                    <p style="text-align: left;">
                        Our clients have found that we are able to:
                    </p>
                    <ul>
                        <li>
                            <i class="fa fa-check"> </i>
                            Build consensus among those involved in the hiring process.

                        </li>
                        <li>
                            <i class="fa fa-check"> </i>
                            Develop the appropriate specifications for a position.



                        </li>
                        <li>
                            <i class="fa fa-check"> </i>
                            Encourage the interest of top-level people who would otherwise be reluctant to respond to an
                            advertisement.

                        </li>
                        <li>
                            <i class="fa fa-check"> </i>
                            Save a considerable amount of time for client staff in developing and responding to candidates.

                        </li>
                        <li>
                            <i class="fa fa-check"> </i>
                            Independently and objectively assess the qualifications and suitability of candidates for the
                            particular position for which we are recruiting.
                        </li>

                    </ul>
                </div>

                <br>
                <div class="content-column col-lg-12 col-md-12 wow fadeInRight">
                    <div class="row">
                        <div class="content-column col-lg-12 col-md-12 wow fadeInRight">
                            <center>
                                <h5 style="color:red;font-size:16px;">MANPOWER PROCESS</h5>
                            </center>

                        </div>

                        <div class="content-column col-lg-6 col-md-6 wow fadeInleft">
                            <center>
                                <img src="{{ asset('assets/data/process.gif') }}">
                            </center>
                        </div>
                        <div class="content-column col-lg-6 col-md-6 wow fadeInleft">
                            <center>
                                <img src="{{ asset('assets/data/job.png') }}">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
