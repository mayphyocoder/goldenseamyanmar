@extends('layouts.app')
@section('title', 'Our Network')
@section('content')

    <img src="{{ asset('assets/data/network_banner.png') }}" alt="" style="width: 100%;">

    {{-- <section class="page-title" style="background-image: url({{ asset('assets/data/network_banner.png') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title"></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Our Network</li>
                </ul>
            </div>
        </div>
    </section> --}}


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


    <br>

    <section class="why-choose-us pt-0 py-5">
        <div class="bg bg-pattern-1"></div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">countries you can apply</span>
                <h2>Few reasons to choose <br>our <span class="color3">company</span></h2>
            </div>

            <div class="row">
                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <i class="icon flaticon-interview" style="background-color:orange:"></i>
                        <span class="cat">GSM</span>
                        <h6 class="title"><a href="">Direct Interviews</a></h6>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-low-cost"></i>
                            <span class="cat">GSM</span>
                            <h6 class="title"><a href="">Cost Effective</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-loyalty"></i>
                            <span class="cat">GSM</span>
                            <h6 class="title"><a href="">Trusted Customers</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-online-support"></i>
                            <span class="cat">GSM</span>
                            <h6 class="title"><a href="">Support Team</a></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-text"> RIGHT PEOPLE AT THE RIGHT PLACE IN THE RIGHT TIME <a href="javascript::void(0)"
                    class="theme-btn btn-style-two">License Certificate</a></div>
        </div>
    </section>
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
