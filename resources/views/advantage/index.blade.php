@extends('layouts.app')
@section('title', 'Our Advantage')
@section('content')

    <img src="{{ asset('assets/data/adv_banner.jpeg') }}" alt="" style="width: 100%;">

    {{-- <section class="page-title" style="background-image: url({{ asset('assets/data/adv_banner.jpeg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Our Advantage</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Our Advantage</li>
                </ul>
            </div>
        </div>
    </section> --}}

    <div class="container" style="padding-top:20px;padding-bottom:100px;">
        <div class="row">
            <div class="col-sm-12" style="text-align:justify;">
                <ul>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-check-circle" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Sourcing the candidate meeting the job description, conducting the trade test and keeping
                                them ready for your approval.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-medkit" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Providing medical report of the selected candidates as per the respective country’s medical
                                standards.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-file" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp; All
                                the government formalities like emigration clearance, visa stamping, police clearance
                                certificate, attestation of educational certificates will be arranged.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-legal" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Orientation to the candidates on the law of the country of employment.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-users" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                20000 sqft workshop with facilities to conduct test for 200 candidates per day.</span></i>
                    </li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-bank" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp; We
                                have our own data bank specified for both technical and non technical categories.</span></i>
                    </li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-users" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Seating capacity to accommodate up to 1000 candidates for the interview.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-building" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Separate room facilities for resume screening, short listing, documentation
                                procedures.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-phone" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Latest communication systems with Broadband Internet and ISD facility.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-wifi" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Instant Radiography testing facilities.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-refresh" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Air-conditioned rest &amp; refreshment rooms for clients.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-coffee" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Pantry / Cafeteria.</span></i></li>
                    <li style="line-height:30px; margin-bottom:8px;"><i class="fa fa-plane" aria-hidden="true"
                            style="padding-right:5px;"><span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Vast Network Covering in Myanmar for different trades.</span></i></li>

                    <li style="line-height:30px; margin-bottom:8px;">
                        <i class="fa fa-list" aria-hidden="true" style="padding-right:5px;">
                            <span style="color:black; font-family: var(--text-font);"> &nbsp;
                                Standby generator in case of unexpected power failures.
                            </span>
                        </i>
                    </li>
                </ul>
            </div>


        </div>
        <div class="btm-box">
            <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one"><span class="btn-title">Get More
                    Info</span></a>
        </div>
    </div>
@endsection
