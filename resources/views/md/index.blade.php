@extends('layouts.app')
@section('title', "MD's Insight")
@section('content')

    <img src="{{ asset('assets/data/md_banner.png') }}" alt="" style="width: 100%;">

    {{-- <section class="page-title" style="background-image: url({{ asset('assets/data/md_banner.png') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title"></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>MD's Insight</li>
                </ul>
            </div>
        </div>
    </section> --}}

    <style>
        blockquote {
            background-color: #FBFBFB;
            padding: 15px 30px;
            font-style: normal;
            border-left: 5px solid #736CED;
            margin: 30px;
        }
    </style>
    <blockquote>
        <p>
            From the inception of Golden Sea Myanmar Co.,Ltd,
            our vision has been crystal clear - to bridge the gap between talent and opportunity across international
            borders.
            We believe that talent knows no boundaries.

        </p>
    </blockquote>
    <section class="about-section-three pull-down">
        {{-- <div class="bg bg-pattern-8"></div> --}}
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight"
                    data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Message from the Managing Director</span>
                            <h2>Message from the Managing Director </h2>
                            <div class="text">
                                Welcome to <span style="color:gold;">Golden Sea Myanmar Co. Ltd</span>, where dreams take
                                flight, and careers reach new heights. As the Managing Director of our agency, I am honored
                                to share a few insights about our mission, values, and the unwavering commitment we hold to
                                your success.
                            </div>
                        </div>

                        <div class="row">
                            <div class="info-box col-lg-6 col-md-6">
                                <div class="inner">
                                    <h6 class="title"><i class="icon fa fa-circle-arrow-right"></i> Our Commitment to
                                        Excellence</h6>
                                    <div class="text">We understand the significance of the decisions you make regarding
                                        your career and life. </div>
                                </div>
                            </div>

                            <div class="info-box col-lg-6 col-md-6">
                                <div class="inner">
                                    <h6 class="title"><i class="icon fa fa-circle-arrow-right"></i> Our People-Centric
                                        Approach

                                    </h6>
                                    <div class="text">Our dedicated team of professionals is here to support you, offering
                                        personalized guidance and unwavering support.</div>
                                </div>
                            </div>
                        </div>

                        <div class="bottom-box">
                            <!-- Founder Info -->
                            <div class="founder-info">
                                <figure class="thumb"><img src="{{ asset('assets/data/2.jpg') }}" alt=""></figure>
                                <h6 class="name">Mr.Million</h6>
                                <span class="designation">CEO & CO Founder</span>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class=" image-column  col-xl-6 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">

                            <figure class="image-1 overlay-anim wow fadeInRight"><img
                                    src="{{ asset('assets/data/bg-4.png') }}"
                                    alt=""style="width:400px; height:488px;"></figure>
                            <figure class="image-2 overlay-anim wow fadeInRight "><img
                                    src="{{ asset('assets/data/2.jpg') }}" alt=""
                                    style="width:280px; height:318px;"></figure>
                        </div>


                    </div>
                </div>
            </div>
            <center>
                <i style="color:rgb(9, 32, 108); font-weight:bold;font-size:40px;font-family:cursive;">
                    "Our service is your satisfication!"
                </i>
            </center>
        </div>

    </section>
@endsection
