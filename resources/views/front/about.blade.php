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
                    {{ $setting_web->about }}
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
                    <h2 class="mb-40px">our team</h2>
                    <div class="text">Professional & Friendly is our slogan. Meet our team, you will <br> feel like living at
                        your home </div>
                </div>
                <div class="team-wrapper">

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/team-1.jpg') }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>alberto kayel</h6>
                                <div class="designation">CEO Founder</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Nullam
                                    dignissim tortor vitae mattis tempor. Pellentesque a neque tincidunt, tempor felis ut,
                                    luctus ante. Lorem ispu ipsum dolor sit amet, consectetur adipiscing
                                    elit.”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="#" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/team-2.jpg') }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>Calvin Harris</h6>
                                <div class="designation">CO Founder</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Nullam
                                    dignissim tortor vitae mattis tempor. Pellentesque a neque tincidunt, tempor felis ut,
                                    luctus ante. Lorem ispu ipsum dolor sit amet, consectetur adipiscing
                                    elit.”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="#" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/team-3.jpg') }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>gabriel eldo</h6>
                                <div class="designation">Art Director</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Nullam
                                    dignissim tortor vitae mattis tempor. Pellentesque a neque tincidunt, tempor felis ut,
                                    luctus ante. Lorem ispu ipsum dolor sit amet, consectetur adipiscing
                                    elit.”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="#" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/team-4.jpg') }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>Bruce wayne</h6>
                                <div class="designation">Marketing Director</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Nullam
                                    dignissim tortor vitae mattis tempor. Pellentesque a neque tincidunt, tempor felis ut,
                                    luctus ante. Lorem ispu ipsum dolor sit amet, consectetur adipiscing
                                    elit.”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="#" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/team-5.jpg') }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>elia giovani</h6>
                                <div class="designation">Product Manager</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Nullam
                                    dignissim tortor vitae mattis tempor. Pellentesque a neque tincidunt, tempor felis ut,
                                    luctus ante. Lorem ispu ipsum dolor sit amet, consectetur adipiscing
                                    elit.”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="#" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/team-6.jpg') }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>dalton garrin</h6>
                                <div class="designation">UI/UX Designer</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Nullam
                                    dignissim tortor vitae mattis tempor. Pellentesque a neque tincidunt, tempor felis ut,
                                    luctus ante. Lorem ispu ipsum dolor sit amet, consectetur adipiscing
                                    elit.”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="#" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/team-7.jpg') }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>maria slovakia</h6>
                                <div class="designation">Developer</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Nullam
                                    dignissim tortor vitae mattis tempor. Pellentesque a neque tincidunt, tempor felis ut,
                                    luctus ante. Lorem ispu ipsum dolor sit amet, consectetur adipiscing
                                    elit.”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="#" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/team-8.jpg') }}" alt="" />
                            </div>
                            <div class="lower-box">
                                <h6>luther frankil</h6>
                                <div class="designation">Content Executive</div>
                            </div>
                            <div class="overlay-content">
                                <div class="text">“Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Nullam
                                    dignissim tortor vitae mattis tempor. Pellentesque a neque tincidunt, tempor felis ut,
                                    luctus ante. Lorem ispu ipsum dolor sit amet, consectetur adipiscing
                                    elit.”
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="share">social:</li>
                                    <li>
                                        <a href="#" class="icon-social-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-instagram"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-social-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="button-box text-center wow fadeInUp mt-20px" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Join Our Team</span></a>
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
