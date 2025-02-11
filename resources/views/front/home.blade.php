@extends('front.layout.app')

@section('content')
    <!-- Banner Section -->
    <section class="banner-section overflow-hidden">
        <div class="main-slider-carousel">

            <div class="slide d-flex" style="background-image: url({{ asset('front/images/main-slider/1.jpg') }})">
                <div class="auto-container align-self-center w-100">

                    <div class="content-boxed">
                        <div class="inner-box d-flex">
                            <div class="content">digital creative studio</div>
                            <div class="mlr-50px hero-logo"><img src="{{ asset('ext_image/logo-light-mid.png') }}"
                                    alt=""></div>
                            <div class="content">interaction, ui/ux, mobile</div>
                        </div>
                        <div class="text">We make digital products and help organistation big and small connect with their
                            audience</div>
                    </div>

                </div>
            </div>

        </div>
        <div class="shape-image"><img src="{{ asset('front/images/main-slider/slider-shape.png') }}" alt=""></div>
        <!-- Slider Icon Scroll -->
        <div class="slider-icon-scroll scroll-to-target" data-target=".about-section"><span
                class="icofont-scroll-down"></span>
        </div>

    </section>
    <!-- End Banner Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img class="image-left" src="{{ asset('front/images/resource/about.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 text-start">
                    <h2 class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        {{ $setting_web->name }}
                    </h2>
                    <div class="text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        {{ $short_about }}
                    </div>
                    <div class="button-box d-flex clearfix wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <a href="{{ route("front.about") }}" class="theme-btn btn-style-one"><span class="txt">
                            {{ __('studio.about_us') }}
                            </span></a>
                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span
                                class="icon-control-play"><i class="ripple"></i></span><strong>see our <br>
                                story</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Services Section-->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title d-flex justify-content-between">
                <h2>{{ __('studio.our_service') }}</h2>
                <a href="#" class="see-all">{{ __('studio.all_service') }}</a>
            </div>
            <div class="row clearfix m-0">



                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 p-0 mb-md-30px">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ asset('front/images/service/1.jpg') }}" alt="">
                        <div class="number">one</div>
                        <div class="icon icon-vector"></div>
                        <h4><a href="project-detail.html">Foto Group</a></h4>
                        <div class="text">Introduction and kick-off meeting checklist. Lorem im dolor sit amet.
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 p-0 mb-md-30px">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ asset('front/images/service/1.jpg') }}" alt="">
                        <div class="number">two</div>
                        <div class="icon icon-screen-desktop"></div>
                        <h4><a href="project-detail.html">Wedding </a></h4>
                        <div class="text">Lorem ispum dolor sit ame photon nomibul lateio nos ier phara graphy myieo sir
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 p-0">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ asset('front/images/service/1.jpg') }}" alt="">
                        <div class="number">three</div>
                        <div class="icon icon-speech"></div>
                        <h4><a href="project-detail.html">Foto Ijazah</a></h4>
                        <div class="text">Lorem ispum dolor sit ame photon nomibul lateio nos ier phara graphy myieo sir
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services Section-->

    <!-- Project Section -->
    <section class="project-section background-color-gray">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title d-flex justify-content-between">
                <h2>{{ __('studio.gallery') }}</h2>
                <a href="{{ route("front.gallery") }}" class="see-all">{{ __('studio.all_gallery') }}</a>
            </div>

        </div>

        <!-- Outer Container -->
        <div class="outer-container">

            <!--Porfolio Tabs-->
            <div class="project-tab">

                <div class="tab-btns-box">
                    <!--Tabs Header-->
                    <div class="tabs-header">
                        <ul class="product-tab-btns clearfix">
                            @foreach ($gallery as $index => $item)
                                <li class="p-tab-btn {{ $index == 0 ? 'active-btn' : '' }}" data-tab="#{{ $item->slug }}">{{ $item->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!--Tabs Content-->
                <div class="p-tabs-content">

                    @foreach ($gallery as $index => $album)
                        <div class="p-tab {{ $index == 0 ? 'active-tab' : '' }}" id="{{ $album->slug }}">
                            <div class="project-carousel owl-theme owl-carousel">

                                @foreach ($album->gallery as $photo)
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="project-detail.html"><img src="{{ Storage::url($photo->foto) }}"
                                                        alt="" /></a>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </section>
    <!-- End Project Section -->

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

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title centered mb-50px">
                <h2 class="mb-38px">{{ __('studio.price_title') }}</h2>
                <div class="text">You can choose pay in monthly or annualy. Don’t worry! <br> you can cancel anytime
                </div>
            </div>
            <div class="inner-container">

                <div class="pricing-tabs tabs-box">

                    <!-- Title Column -->
                    <div class="title-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Tab Btns -->
                        <ul class="tab-buttons clearfix">
                            <li data-tab="#prod-monthly" class="tab-btn monthly active-btn">Billed monthly</li>
                            <li class="boll"><span class="round"></span></li>
                            <li data-tab="#prod-yearly" class="tab-btn yearly">Billed annually</li>
                        </ul>

                    </div>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!-- Tab -->
                        <div class="tab active-tab" id="prod-monthly">
                            <div class="content">
                                <div class="clearfix row">

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="title">basic</div>
                                            <div class="price">Free</div>
                                            <div class="text">Free with 14 days trial, then you can choose plan
                                            </div>
                                            <ul class="price-list">
                                                <li>1 User</li>
                                                <li>1 Dashboard</li>
                                                <li>5 Projects</li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-three"><span class="txt">Get
                                                    Started Now</span></a>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-3 col-md-6 col-sm-12 ">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="title">basic</div>
                                            <div class="price">$59 <span>/ Month</span></div>
                                            <div class="text">Billed anually or pay $59 month-to-month</div>
                                            <ul class="price-list">
                                                <li>3 User</li>
                                                <li>Unlimited Dashboard</li>
                                                <li>10 Projects</li>
                                                <li>Custom CSS</li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-three"><span class="txt">Get
                                                    Started Now</span></a>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-3 col-md-6 col-sm-12 ">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="title">basic</div>
                                            <div class="price">$99 <span>/ Month</span></div>
                                            <div class="text">Billed anually or pay $99 month-to-month</div>
                                            <ul class="price-list">
                                                <li>20 Users</li>
                                                <li>Unlimited Dashboard</li>
                                                <li>50 Projects</li>
                                                <li>Custome CSS + HTML</li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-three"><span class="txt">Get
                                                    Started Now</span></a>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="title">basic</div>
                                            <div class="price">$129 <span>/ Month</span></div>
                                            <div class="text">Billed anually or pay $129 month-to-month</div>
                                            <ul class="price-list">
                                                <li>50 Users</li>
                                                <li>Unlimited Dashboard</li>
                                                <li>100 Projects</li>
                                                <li>Custom CSS + HTML</li>
                                                <li>Custom Domain</li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-three"><span class="txt">Get
                                                    Started Now</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="prod-yearly">
                            <div class="content">
                                <div class="clearfix row">

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="title">basic</div>
                                            <div class="price">Free</div>
                                            <div class="text">Free with 14 days trial, then you can choose plan
                                            </div>
                                            <ul class="price-list">
                                                <li>1 User</li>
                                                <li>1 Dashboard</li>
                                                <li>5 Projects</li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-three"><span class="txt">Get
                                                    Started Now</span></a>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="title">basic</div>
                                            <div class="price">$59 <span>/ Month</span></div>
                                            <div class="text">Billed anually or pay $59 month-to-month</div>
                                            <ul class="price-list">
                                                <li>3 User</li>
                                                <li>Unlimited Dashboard</li>
                                                <li>10 Projects</li>
                                                <li>Custom CSS</li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-three"><span class="txt">Get
                                                    Started Now</span></a>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-3 col-md-6 col-sm-12 ">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="title">basic</div>
                                            <div class="price">$99 <span>/ Month</span></div>
                                            <div class="text">Billed anually or pay $99 month-to-month</div>
                                            <ul class="price-list">
                                                <li>20 Users</li>
                                                <li>Unlimited Dashboard</li>
                                                <li>50 Projects</li>
                                                <li>Custome CSS + HTML</li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-three"><span class="txt">Get
                                                    Started Now</span></a>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-3 col-md-6 col-sm-12 ">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="title">basic</div>
                                            <div class="price">$129 <span>/ Month</span></div>
                                            <div class="text">Billed anually or pay $129 month-to-month</div>
                                            <ul class="price-list">
                                                <li>50 Users</li>
                                                <li>Unlimited Dashboard</li>
                                                <li>100 Projects</li>
                                                <li>Custom CSS + HTML</li>
                                                <li>Custom Domain</li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-three"><span class="txt">Get
                                                    Started Now</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Lower Text -->
                <div class="lower-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">You have a large
                    team? <a href="contact.html">Contact us</a> for information about more enterprise options
                </div>

            </div>
        </div>
    </section>
    <!-- End Pricing Section -->

    <!-- Press Section -->
    {{-- <section class="press-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>our press</h2>
            </div>
            <div class="row clearfix">

                <!-- Press Image Block -->
                <div class="press-image-block col-lg-4 col-md-6 col-sm-12 mb-md-30px">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('front/images/resource/press.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Press Block -->
                <div class="press-block col-lg-4 col-md-6 col-sm-12 mb-md-30px">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="post-date">12<span>Aug, 2020</span></div>
                        <div class="title">products</div>
                        <h4><a href="blog-detail.html">Moui Motsure, new items released by DKA Team. 9.24 scored</a>
                        </h4>
                    </div>
                </div>

                <!-- Press Block -->
                <div class="press-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="post-date">23<span>jul, 2020</span></div>
                        <div class="title">news</div>
                        <h4><a href="blog-detail.html">The trending of mobile in last of 2020</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- End Press Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>{{ __('studio.testimonial') }}</h2>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">

                @foreach ($testimonial as $item)
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content">
                                <div class="author-image">
                                    <img src="{{ Storage::url($item->photo) }}" alt="" />
                                </div>
                                <div class="quote-icon icon_quotations"></div>
                                <div class="author">{{ $item->name }} <span>/ {{ $item->position }} {{ __('studio.at') }}</span> <i>{{ $item->company }}</i></div>
                                <div class="text">{{ $item->content }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Instagram Post</h2>
            </div>
            <div class="tagembed-widget" style="width:100%;height:100%" data-widget-id="2152457" data-tags="false"  view-url="https://widget.tagembed.com/2152457"></div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Titkok Post</h2>
            </div>
            <div class="tagembed-widget" style="width:100%;height:100%" data-widget-id="2152447" data-tags="false"
                view-url="https://widget.tagembed.com/2152447"></div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">

            <div class="sponsors-outer wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box">
                            <a href="#"><img src="{{ asset('front/images/clients/1.png') }}" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box">
                            <a href="#"><img src="{{ asset('front/images/clients/2.png') }}" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box">
                            <a href="#"><img src="{{ asset('front/images/clients/3.png') }}" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box">
                            <a href="#"><img src="{{ asset('front/images/clients/4.png') }}" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box">
                            <a href="#"><img src="{{ asset('front/images/clients/5.png') }}" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box">
                            <a href="#"><img src="{{ asset('front/images/clients/1.png') }}" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box">
                            <a href="#"><img src="{{ asset('front/images/clients/2.png') }}" alt=""></a>
                        </figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Clients Section-->
@endsection

@section("scripts")
<script src="https://widget.tagembed.com/embed.min.js" type="text/javascript"></script>
<script>
    $.ajax({
        url: "{{ route('front.visit') }}",
        type: "GET",
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
</script>

@endsection
