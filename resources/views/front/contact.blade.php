@extends('front.layout.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@endsection

@section('content')
    <!-- Page Title Two Section -->
    <section class="page-title-two-section">
        <div class="auto-container">
            <h1>{{ __('contact.contact') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Studio</a></li>
                <li>{{ __('contact.contact') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title Two Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="map-boxed">
                <!--Map Outer-->
                <div class="map-outer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127656.79497443883!2d100.21845689726558!3d-0.945707299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b982c9fe455f%3A0x5061d73acccaf624!2sEmily%20Queen%20Home%20Photo%20Studio!5e0!3m2!1sid!2sid!4v1739101662900!5m2!1sid!2sid"
                        width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="contact-title">
                    <h2 class="title">
                        {{ __('contact.contact_title') }}
                    </h2>
                </div>
                <div class="row clearfix">

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="upper-box">
                                <h6>{{ __('contact.contact_direct') }}</h6>
                                <span class="icon icon-envelope-open"></span>
                            </div>
                            <ul class="info-list">
                                <li><a
                                        href="mailto:{{ $setting_web->email }}?Subject=Halo%20{{ $setting_web->name }}">{{ $setting_web->email }}</a>
                                </li>
                                <li><a href="tel:{{ $setting_web->phone }}">{{ $setting_web->phone }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="upper-box">
                                <h6>{{ __('contact.contact_address') }}</h6>
                                <span class="icon icon-location-pin"></span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    {{ $setting_web->name }} <br>
                                    {{ $setting_web->address }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="upper-box">
                                <h6>{{ __('contact.contact_media') }}</h6>
                                <span class="icon icon-briefcase"></span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    <a href="{{ $setting_web->twitter }}">
                                        <img src="{{ asset('back/media/svg/social-logos/twitter.svg') }}" alt="facebook"
                                            style="width: 30px; height: 30px;">
                                    </a>
                                    <a href="{{ $setting_web->tiktok }}">
                                        <img src="{{ asset('back/media/svg/social-logos/tiktok.svg') }}" alt="facebook"
                                            style="width: 30px; height: 30px;">
                                    </a>
                                    <a href="{{ $setting_web->instagram }}">
                                        <img src="{{ asset('back/media/svg/social-logos/instagram.svg') }}" alt="facebook"
                                            style="width: 30px; height: 30px;">
                                    </a>
                                    <a href="{{ $setting_web->linkedin }}">
                                        <img src="{{ asset('back/media/svg/social-logos/linkedin.svg') }}" alt="facebook"
                                            style="width: 30px; height: 30px;">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Section -->

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="title-box">
                    <h2>{{ __('contact.form_title') }}</h2>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">

                    <!--Contact Form-->
                    <form id="contact-send">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input name="name" placeholder="{{ __('contact.name') }}*" type="text" required />
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input name="email" placeholder="{{ __('contact.email') }}*" type="email" required />
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input name="phone" placeholder="{{ __('contact.phone') }}" type="text"  />
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input name="subject" placeholder="{{ __('contact.subject') }}*" type="text" required />
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="{{ __('contact.message') }}*" required></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                    <span class="txt">{{ __('contact.send') }}</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--End Contact Form -->
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#contact-send').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('api.front.contact.post') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        if (response.status) {
                            toastr.success(response.message);
                            $('#contact-send')[0].reset();
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });
        });

    </script>
@endsection
