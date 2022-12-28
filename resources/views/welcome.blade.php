@extends('layouts.app1')
@section('title')
    {{ __('Home') }}
@endsection
@section('content')
    {{-- Start slider --}}
    <section id="slider">
        <div class="container-fluid slider" style="background-image: url({{ asset('img/slider.png') }})">
            <h2 class="slider-text">Professionally company premium <br> rather than magnetic company</h2>
        </div>
    </section>
    {{-- End slider --}}

    {{-- Start Discover Our Business Expertise --}}
    <section id="discover_business">
        <div class="container">
            <div class="row shadow rounded">
                <div class="col-12 col-md-6 ps-0 d-none d-md-block">
                    <img src="{{ asset('img/discover.png') }}" class="img-fluid" alt="Discover Our Business Expertise">
                </div>
                <div class="col-12 col-md-6 p-4 pb-0">
                    <h3 class="discover_business_title">Discover Our Business Expertise</h3>
                    <p class="discover_business_text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                    </p>
                    <div class="row mt-5">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <div data-lineRound="true" class="dial black_percent">80</div>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <div class="dial orange_percent">70</div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <p class="discover_business_percent">Strategy Management</p>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <p class="discover_business_percent">Build Marketing Plan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Discover Our Business Expertise --}}

    {{-- Start Company --}}
    <section id="company">
        <div class="container-fluid company_container p-0">
            <img src="{{ asset('img/company.png') }}" class="img-fluid" alt="Company">
            <p class="company_text">We Are Awards Winning ITSolution Company</p>
        </div>
    </section>
    {{-- End Company --}}

    {{-- Start Who We Are --}}
    <section id="who_we_are">
        <div class="container">
            <div class="row shadow rounded">
                <div class="col-12 col-md-6 p-4">
                    <h3 class="who_we_are_title">Who We Are</h3>
                    <h3 class="who_we_are_title1">We Are Professional And We Are Very Creative</h3>
                    <p class="who_we_are_text">
                        Awesome Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry is the glory for company
                    </p>
                    <p class="who_we_are_text_title mb-0">
                        Our Experience
                    </p>
                    <div class="wrapper">
                        <p class="perc_text mb-0">Lorem Lpsum</p>
                        <div class="progress-bar">
                            <div class="bar" data-size="20">
                                <span class="perc"></span>
                            </div>
                        </div>
                        <p class="perc_text mb-0">Lorem Lpsum</p>
                        <div class="progress-bar">
                            <div class="bar" data-size="55">
                                <span class="perc"></span>
                            </div>
                        </div>
                        <p class="perc_text mb-0">Build Marketing Plan</p>
                        <div class="progress-bar">
                            <div class="bar" data-size="25">
                                <span class="perc"></span>
                            </div>
                        </div>
                        <p class="perc_text mb-0">Build Marketing Plan</p>
                        <div class="progress-bar">
                            <div class="bar" data-size="85">
                                <span class="perc"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pe-0 d-none d-md-block">
                    <img src="{{ asset('img/whoWeAre.png') }}" class="img-fluid" alt="Discover Our Business Expertise">
                </div>
            </div>
        </div>
    </section>
    {{-- End Who We Are --}}

    {{-- Start Why We Are Different --}}
    <section id="why_we_different">
        <div class="container">
            <div class="row shadow rounded">
                <div class="col-12 col-md-6 pe-0 d-none d-md-block">
                    <img src="{{ asset('img/whyWeDifferent.png') }}" class="img-fluid"
                         alt="Discover Our Business Expertise">
                </div>
                <div class="col-12 col-md-6 p-4">
                    <h3 class="why_we_different_title">Why We Are Different?</h3>
                    <h4 class="why_we_different_title1">Our Company History</h4>
                    <p class="why_we_different_text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever
                    </p>
                    <h4 class="why_we_different_title1">Our Success Mission</h4>
                    <p class="why_we_different_text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                    </p>
                    <h4 class="why_we_different_title1">Our Future Plan</h4>
                    <p class="why_we_different_text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Why We Are Different --}}
@endsection
