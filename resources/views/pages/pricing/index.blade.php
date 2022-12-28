@extends('layouts.app1')
@section('title')
    {{ __('Pricing') }}
@endsection
@section('content')
    <section id="pricing_cover">
        <div class="container-fluid p-0">
            <img src="{{ asset('img/pricing-cover.png') }}" class="img-fluid" alt="pricing-cover">
        </div>
    </section>
    <section id="pricing_content">
        <div class="container">
            <h1 class="pricing_content_title">Choose Your Plan</h1>
            <p class="pricing_content_text">
                Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="pricing border">
                        <div class="pricing_card_title">
                            <p class="mb-0">Monthly Package</p>
                        </div>
                        <div class="pricing_card_content">
                            <p class="pricing_card_sum">$31.99 /M</p>
                            <p class="pricing_card_text">
                                30 days trial Features<br>
                                Synced to cloud database<br>
                                10 hours of support<br>
                                Social media integration<br>
                                24/7 support<br>
                            </p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn_pricing">
                                Start 14 Days Free Trial
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pricing border">
                        <div class="pricing_card_title">
                            <p class="mb-0">Yearly Package</p>
                        </div>
                        <div class="pricing_card_content">
                            <p class="pricing_card_sum">$61.99 /Y</p>
                            <p class="pricing_card_text">
                                30 days trial Features<br>
                                Synced to cloud database<br>
                                10 hours of support<br>
                                Social media integration<br>
                                24/7 support<br>
                            </p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn_pricing">
                                Start 14 Days Free Trial
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
