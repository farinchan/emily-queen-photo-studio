@extends('front.layout.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@endsection

@section('content')
    <!-- Page Title Two Section -->
    <section class="page-title-two-section">
        <div class="auto-container">
            <h1>{{ __('about.about') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Studio</a></li>
                <li>{{ __('about.about') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title Two Section -->

    <section class="project-description-section">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <h2>{{ $setting_web->name }}</h2>
                <div class="text">
                    {{ $about }}
                </div>
            </div>

            <!--Video Box-->
            <div class="video-boxed">
                <figure class="video-image">
                    <img src="{{ asset("front/images/resource/video-image.jpg") }}" alt="">
                </figure>
                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="icon-control-play"><i class="ripple"></i></span></a>
            </div>

            <div class="gallery-column">
                <div class="row clearfix">

                    <div class="column col-lg-4 col-md-4 col-sm-12">
                        <div class="image">
                            <a href="{{ asset("front/images/gallery/15.jpg") }}" data-fancybox="project" data-caption=""><img src="{{ asset("front/images/gallery/15.jpg") }}" alt=""></a>
                        </div>
                    </div>

                    <div class="column col-lg-4 col-md-4 col-sm-12">
                        <div class="image">
                            <a href="{{ asset("front/images/gallery/16.jpg") }}" data-fancybox="project" data-caption=""><img src="{{ asset("front/images/gallery/16.jpg") }}" alt=""></a>
                        </div>
                    </div>

                    <div class="column col-lg-4 col-md-4 col-sm-12">
                        <div class="image">
                            <a href="{{ asset("front/images/gallery/17.jpg") }}" data-fancybox="project" data-caption=""><img src="{{ asset("front/images/gallery/17.jpg") }}" alt=""></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

       <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sec-title centered mb-70px">
                <h2 class="mb-40px">{{ __('studio.our_team') }}</h2>
                <div class="text">
                    {!! __('studio.team_description') !!}
                </div>
            </div>
            <div class="team-wrapper">

                @foreach ($team as $item)
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ $item->getPhoto() }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>{{ $item->name }}</h6>
                                <div class="designation">{{ $item->position }}</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“{{ $item->about }}”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="{{ $item->twiter }}" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="{{ $item->tiktok }}" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="{{ $item->instagram }}" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="{{ $item->linkedin }}" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- End Team Section -->

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


@endsection

@section('scripts')
@endsection
