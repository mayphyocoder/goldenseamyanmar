@extends('layouts.app')
@section('title', "Our Expert Team Members")
@section('content')

    <img src="{{ asset('assets/data/team_banner.png') }}" alt="" style="width: 100%;">

    {{-- <section class="page-title" style="background-image: url({{ asset('assets/data/team_banner.png') }});">
        <div class="auto-container">
            <div class="title-outer">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Our Expert Team Members</li>
                </ul>
            </div>
        </div>
    </section> --}}


    <section class="team-section pb-60">
        <div class="auto-container">
            <div class="row">
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/2.jpg') }}"
                                        alt="" style="object-fit:cover;"></a></figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation" style="text-shadow:1px 1px;1px 1px">Managing Director</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr.Million @ Than Tin</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/n_cff.jpg') }}"
                                        alt="" style="object-fit:fit;"></a></figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Co-Founder & Finance</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Ms.Nilar</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/skt-d1.jpg') }}" alt=""
                                        style="object-fit:fit;background-size:contain;width:200px;height:223px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Director</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr.James @ Saw Kyaw Thura</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/kt_d33.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:contain;width:200px;height:224px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Director</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Ms. Kay Thi @ Cathrine</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/ksl.png') }}"
                                        alt=""
                                        style="object-fit:fit;background-size:contain;width:200px;height:225px"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Director</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr. Kyaw Soe Lin</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/gm.jpg') }}"
                                        alt=""
                                        style="object-fit:fit;background-size:contain;width:200px;height:225px"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">General Manager</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr. Freddie Zaw</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/zmm_d2.jpg') }}" alt=""
                                        style="object-fit:fit;background-size:cover;width:200px;"></a></figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Director</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr. Zaw Min Min</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/manager.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:cover;width:190px;height:215px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Manager</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr. Aung Myo</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/tppc.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:cover;width:200px;height:224px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Sr.Supervisor</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Ms.Thae Po Po Chit</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/zyt_am.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:cover;width:200px;height:224px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Asst.Manager</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr.Zay Yar Tun</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/eem_s.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:cover;width:200px;height:224px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Supervisor</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Ms.Ei Ei Mon</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/syma-tt.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:cover;width:200px;height:224px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Reception & Thia Translator</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Ms.Shwe Yamin Aye</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/wlo.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:cover;width:200px;height:224px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Asst:Supervisor</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr.Wai Lin Oo</a></h5>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/nyo.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:cover;width:200px;height:224px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Asst:Supervisor</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Ms.Nan Yadanar Oo</a></h5>
                        </div>
                    </div>
                </div>
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image" style="height:225px;"><a href=""><img
                                        src="{{ asset('assets/data/zmh_js.jpg') }}" alt=""
                                        style="object-fit:contain;background-size:cover;width:200px;height:224px;"></a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Jr:Supervisor</span>
                            <h5 class="name"><a href="" style="font-size:16px;">Mr.Zaw Myo Htet</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
