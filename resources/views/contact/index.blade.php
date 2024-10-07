@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <img src="{{ asset('assets/data/contact.jpeg') }}" alt="">

    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">
                            Interested in discussing?
                        </span>
                        <h2>
                            Contact us with trust
                        </h2>
                        <p>
                            Alternatively, you may contact us by filling up the contact form. Our team will response you
                            shortly.
                        </p>
                    </div>

                    <form id="create-form" class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                        autocomplete="off">

                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <input name="subject" type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <textarea name="message" class="form-control" rows="2" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="theme-btn btn-style-four">
                                <span class="txt">
                                    contact us now
                                </span>
                            </button>
                        </div>
                    </form>

                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">Our recruitment specialists are always here to listen.<br>Say Hi To Us! Drop
                                Us A Message Now</div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon bg-theme-color2">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:95418443" style="font-size:16px;">
                                        +(959) 5418443</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:million.golden@gmail.com"
                                        style="font-size:16px;">million.golden@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit anytime</h6>
                                    <span style="font-size:16px;">No.(92),(G/F),Seikkantha St,Kyauktada T/S,
                                        Yangon.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.0925064980042!2d96.16047747536608!3d16.77207262023902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec7d4c3f4dcd%3A0x25aa9c6da1ef1548!2sGolden%20Sea%20Myanmar%20Company%20Limited!5e0!3m2!1sen!2smm!4v1694579682886!5m2!1sen!2smm"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact') !!}
@endsection
