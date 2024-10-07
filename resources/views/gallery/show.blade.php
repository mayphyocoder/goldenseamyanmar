@extends('layouts.app')
@section('title', 'Gallery & Activities')
@section('content')

    <img src="{{ asset('assets/data/gallery_banner.png') }}" alt="" style="width: 100%;">


    <section class="news-section">
        <div class="auto-container">
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
                        GALLERY & ACTIVITIES
                        <br>
                    </span>
                    <span class="color3">
                        {{ $category->title ?? '' }}
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
                                        {{ $category->title ?? '' }}
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
