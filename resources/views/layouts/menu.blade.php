<header class="main-header header-style-two">
    <div class="header-top" style="background-color:#0a5cb5; ">
        <div class="inner-container">

            <div class="top-left">
                <ul class="list-style-one">
                    <li style="color:white;">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@millionmyanmar.com" style="color:white;">
                            info@millionmyanmar.com
                        </a>
                    </li>

                    <li style="color:white;">
                        <i class="fa fa-map-marker"></i>
                        No.(92),(G/F),Seikkantha St,Kyauktada T/S,
                        Yangon.
                    </li>

                    <li style="color:white;">
                        <i class="fa fa-clock"></i>
                        Mon _ Sat: 9:00 AM to 5:00PM
                    </li>
                </ul>
            </div>

            <div class="top-right">
                <ul class="useful-links">
                    <li>
                        <a href="#" style="color:white;">ISO</a>
                    </li>
                    <li>
                        <a href="#" style="color:white;">FAQ'S</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}" style="color:white;">CONTACT</a>
                    </li>
                </ul>

                <ul class="social-icon-one" style="background-color:#cd8e29;">

                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/data/t.png') }}" style="width:60%;height:60%;">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/data/f.png') }}" style="width:90%;height:90%;">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/data/p.png') }}" style="width:70%;height:70%;">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/data/i.png') }}" style="width:70%;height:70%;">
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="header-lower">
        <div class="main-box">

            <div class="logo-box">
                <div class="logo">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('data/weblogo.png') }}" alt="" title="GSM" style="width: 550px;">
                    </a>
                </div>
            </div>

            <div class="nav-outer">

                <nav class="nav main-menu">
                    <ul class="navigation">

                        <li>
                            <a href="{{ route('welcome') }}" style="font-weight:bold; color:#0a5cb5">
                                HOME
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)" style="font-weight:bold; color:#0a5cb5">
                                GOLDEN SEA MYANMAR
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('about.index') }}">ABOUT US</a>
                                </li>
                                <li>
                                    <a href="{{ route('advantage.index') }}">OUR ADVANTAGE</a>
                                </li>
                                <li>
                                    <a href="{{ route('md.index') }}">MD INSIGHTS</a>
                                </li>

                                <li>
                                    <a href="{{ route('chart') }}">
                                        Organizational chart
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('team.index') }}">OUR TEAM MEMBERS</a>
                                </li>
                                <li>
                                    <a href="{{ route('cv.index') }}">SUBMIT RESUME</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact.index') }}">HEAD OFFICE</a>
                                </li>
                                <li>
                                    <a href="#" hidden>BRANCH OFFICE</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('network.index') }}" style="font-weight:bold; color:#0a5cb5">OUR
                                NETWORK
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('service.index') }}" style="font-weight:bold; color:#0a5cb5">
                                SERVICES
                            </a>
                        </li>

                        <li>
                            <a href=" {{ route('process.index') }}" style="font-weight:bold; color:#0a5cb5">
                                PROCESS
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)" style="font-weight:bold; color:#0a5cb5">
                                MEDIA GALLERY
                            </a>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('gallery.show', $category->id) }}">
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>
                </nav>

                {{-- <div class="outer-box">
                    <a href="tel:+92(8800)9806" class="info-btn">
                        <img class="icon" src="{{asset('assets/images/icons/icon-phone.png')}}" alt="">
                        <small class="title">Call Anytime</small>
                        <strong class="text">+ 92 ( 8800 ) 86300</strong>
                    </a>
                    <a href="page-contact.html" class="theme-btn btn-style-one"><span class="btn-title">Book Consultation</span></a>

                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div> --}}
            </div>
        </div>
    </div>


    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="javascript::(0)">
                        <img src="{{ asset('assets/data/logo.jpeg') }}" alt="" title="">
                    </a>
                </div>
                <div class="close-btn">
                    <i class="icon fa fa-times"></i>
                </div>
            </div>

            <ul class="navigation clearfix">
            </ul>
            <ul class="contact-list-one">
                <li>
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:+(959) 5418443">+(959) 5418443</a>
                    </div>
                </li>

                <li>
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:million.golden@gmail.com">million.golden@gmail.com</a>
                    </div>
                </li>

                <li>
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Sat 9:00 - 5:00, Sunday - CLOSED
                    </div>
                </li>
            </ul>

            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>

    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>
        <div class="search-inner">
        </div>
    </div>

    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">

                <div class="logo">
                    <a href="javascript::void(0)" title="">
                        <img src="{{ asset('data/weblogo.png') }}" alt="" title=""
                            style="width: 250px;">
                    </a>
                </div>

                <div class="nav-outer">
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                            </ul>
                        </div>
                    </nav>
                    <div class="mobile-nav-toggler">
                        <span class="icon lnr-icon-bars"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
