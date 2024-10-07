@extends('layouts.app')
@section('title', 'Submit CV')
@section('content')
    <img style="width: 100%;" src="{{ asset('data/resume-banner.jpg') }}" alt="">

    <section class="contact-section">
        <div class="outer-box">
            <div class="bg bg-pattern-6"></div>
            <div class="auto-container">
                <div class="row">
                    <div class="title-column col-lg-7 col-md-12 wow fadeInLRight">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">
                                    Resume Form
                                </span>
                                <h2>Apply for <span class="color3">your job</span></h2>
                                <div class="text">
                                    Please
                                    <a download="" href="{{ asset('data/CV sample.pdf') }}" style="color: red">
                                        download
                                    </a>,
                                    fill in your information and attach your resume for submission.
                                    <br>
                                    Please be assured that all submissions received will be treated with strictest
                                    confidentiality.
                                </div>
                            </div>

                            <ul class="list-style-two">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Expertise and Experience: We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition.
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Time and Cost Savings: Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews.
                                </li>

                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Ongoing Support: Our relationship with you does not end once a candidate is hired. We
                                    provide ongoing support to ensure a smooth transition and integration for the new
                                    employee.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="form-outer">
                                <div class="contact-form wow fadeInLeft">
                                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                                        enctype="multipart/form-data" id="create-form" novalidate="novalidate">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                <div class="form-group">
                                                    <label style="color: white">Name*</label>
                                                    <input type="text" name="name" class="form-control "
                                                        value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                <div class="form-group">
                                                    <label style="color: white">Phone</label>
                                                    <input type="text" name="phone" class="form-control "
                                                        value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label style="color: white">Additional Note</label>
                                                    <textarea class="form-control" rows="5" name="additional_note"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label for="img" style="color: white">
                                                        Select your CV to upload
                                                    </label>
                                                    <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                                        class="form-control-file" required>
                                                </div>
                                            </div>

                                            <div class="col-md-12 py-3">
                                                <button type="submit" class="theme-btn btn-style-four">
                                                    <span class="txt">
                                                        Submit Now
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv') !!}
@endsection
