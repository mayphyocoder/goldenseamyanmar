@extends('layouts.app')
@section('title', 'Gallery & Activities')
@section('content')

    <img src="{{ asset('assets/data/gallery_banner.png') }}" alt="" style="width: 100%;">

    {{-- <section class="page-title" style="background-image: url({{ asset('assets/data/gallery_banner.png') }});">
        <div class="auto-container">
            <div class="title-outer">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Media Gallery</li>
                </ul>
            </div>
        </div>
    </section> --}}

    <section class="services-section-two pull-down">
        <div class="bg" style="bottom: 0px;"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="sub-title">Media Gallery</span>
                <h2>Our Sending <br> Candidates <span class="color3">Activities</span></h2>
            </div>

            <div class="row">
                <!-- Service Block -->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de1.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de2.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de3.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de4.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de5.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de6.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de7.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de8.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de9.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de10.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de11.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de12.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de13.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de14.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de15.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de16.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de17.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de18.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de19.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de20.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de21.jpg') }}" alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="">
                                    <img style="width: 100%; height: 250px; background-size: top; object-fit: cover;"
                                        src="{{ asset('assets/data/de22.jpg') }}" alt="">
                                </a>
                            </figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
