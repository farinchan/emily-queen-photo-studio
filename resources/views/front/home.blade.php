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
                    <h2 class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">Bigger, Bolder <br> & Better
                    </h2>
                    <div class="text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">We are a fairly small,
                        flexible design studio that designs for print and web. Whether you need to create a brand from
                        scratch, including marketing and a beautiful and functional website or whether you are looking for a
                        great experience.
                    </div>
                    <div class="button-box d-flex clearfix wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <a href="about.html" class="theme-btn btn-style-one"><span class="txt">About Us</span></a>
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
                <h2>our services</h2>
                <a href="#" class="see-all">all services</a>
            </div>
            <div class="row clearfix m-0">



                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 p-0 mb-md-30px">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ asset('front/images/service/1.jpg') }}" alt="">
                        <div class="number">one</div>
                        <div class="icon icon-vector"></div>
                        <h4><a href="project-detail.html">Idea & Concept</a></h4>
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
                        <h4><a href="project-detail.html">Design & Coding</a></h4>
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
                        <h4><a href="project-detail.html">Support & Secure</a></h4>
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
                <h2>Latest Works</h2>
                <a href="#" class="see-all">all projects</a>
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
                            <li class="p-tab-btn active-btn" data-tab="#p-tab-1">all</li>
                            <li class="p-tab-btn" data-tab="#p-tab-2">web/app</li>
                            <li class="p-tab-btn" data-tab="#p-tab-3">branding</li>
                            <li class="p-tab-btn" data-tab="#p-tab-4">motion</li>
                        </ul>
                    </div>
                </div>

                <!--Tabs Content-->
                <div class="p-tabs-content">

                    <!--Portfolio Tab / Active Tab-->
                    <div class="p-tab active-tab" id="p-tab-1">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img src="{{ asset('front/images/gallery/1.jpg') }}"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Curology</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img src="{{ asset('front/images/gallery/2.jpg') }}"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Consulting</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img src="{{ asset('front/images/gallery/3.jpg') }}"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Patricia Davis</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/1.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Curology</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Store</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/3.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Patricia Davis</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Portfolio Tab -->
                    <div class="p-tab" id="p-tab-2">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Norda Minimal Store Online</a>
                                                </h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/3.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Patricia Davis</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/1.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Curology</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Norda Minimal Store Online</a>
                                                </h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/3.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Patricia Davis</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/1.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Curology</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Portfolio Tab -->
                    <div class="p-tab" id="p-tab-3">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/1.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Curology</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Norda Minimal Store Online</a>
                                                </h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/3.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Patricia Davis</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/1.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Curology</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Norda Minimal Store Online</a>
                                                </h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/3.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Patricia Davis</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Portfolio Tab -->
                    <div class="p-tab" id="p-tab-4">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Norda Minimal Store Online</a>
                                                </h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/3.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Patricia Davis</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/1.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Curology</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Norda Minimal Store Online</a>
                                                </h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/3.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Patricia Davis</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Block -->
                            <div class="project-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="project-detail.html"><img
                                                src="{{ asset('front/images/gallery/1.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4><a href="project-detail.html">Curology</a></h4>
                                            </div>
                                            <div class="pull-right">
                                                <div class="category">Web/App, Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End Project Section -->

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

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title centered mb-50px">
                <h2 class="mb-38px">start with an affordable price</h2>
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
                <h2>testimonial</h2>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="author-image">
                                <img src="{{ asset('front/images/resource/author-1.jpg') }}" alt="" />
                            </div>
                            <div class="quote-icon icon_quotations"></div>
                            <div class="author">Adam Stone <span>/ CEO at</span> <i>Google INC</i></div>
                            <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh,at magna akal
                                semperFusce commodo molestie luctus. Dolor tusima olatiup.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="author-image">
                                <img src="{{ asset('front/images/resource/author-2.jpg') }}" alt="" />
                            </div>
                            <div class="quote-icon icon_quotations"></div>
                            <div class="author">Anabella Kleva <span>/ Managerment at</span> <i>Envato</i></div>
                            <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh,at magna akal
                                semperFusce commodo molestie luctus. Dolor tusima olatiup.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="author-image">
                                <img src="{{ asset('front/images/resource/author-1.jpg') }}" alt="" />
                            </div>
                            <div class="quote-icon icon_quotations"></div>
                            <div class="author">Adam Stone <span>/ CEO at</span> <i>Google INC</i></div>
                            <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh,at magna akal
                                semperFusce commodo molestie luctus. Dolor tusima olatiup.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="author-image">
                                <img src="{{ asset('front/images/resource/author-2.jpg') }}" alt="" />
                            </div>
                            <div class="quote-icon icon_quotations"></div>
                            <div class="author">Anabella Kleva <span>/ Managerment at</span> <i>Envato</i></div>
                            <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh,at magna akal
                                semperFusce commodo molestie luctus. Dolor tusima olatiup.</div>
                        </div>
                    </div>
                </div>

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

@endsection
