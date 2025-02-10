 <!-- Main Header-->
 <header class="main-header @if (!request()->routeIs('front.index')) header-style-two fixed-header @endif">

     <!--Header-Upper-->
     <div class="header-upper">
         <div class="auto-container">
             <div class="clearfix">

                 <div class="pull-left logo-box">
                     <div class="logo">
                         <a href="index.html"><img src="{{ asset('ext_image/logo-light.png') }}" alt=""
                                 title=""></a>
                     </div>
                 </div>

                 <div class="nav-outer clearfix">
                     <!-- Mobile Navigation Toggler -->
                     <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                     <!-- Main Menu -->
                     <nav class="main-menu navbar-expand-md">
                         <div class="navbar-header">
                             <button class="navbar-toggler" type="button" data-toggle="collapse"
                                 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                 aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                             </button>
                         </div>

                         <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                             <ul class="navigation left-nav clearfix">
                                <li><a href="{{ route('front.index') }}">{{ __('header.studio') }}</a></li>
                                 <li class="dropdown"><a href="#">{{ __('header.gallery') }}</a>
                                     <ul>
                                         <li><a href="about.html">About Us</a></li>
                                     </ul>
                                 </li>
                             </ul>

                             <ul class="navigation right-nav clearfix">
                                 <li><a href="{{ route('front.about') }}">{{ __('header.about') }}</a></li>
                                 <li><a href="{{ route('front.contact') }}">{{ __('header.contact') }}</a></li>
                             </ul>

                         </div>

                     </nav>

                     <!-- Social Box -->
                     <ul class="social-box">
                         <li><a href="{{ $setting_web->twitter }}"><span class="icofont-twitter"></span></a></li>
                         <li><a href="{{ $setting_web->instagram }}"><span class="icofont-instagram"></span></a></li>
                         <li><a href="{{ $setting_web->tiktok }}"><span class="icofont-tiktok"></span></a></li>
                         <li><a href="{{ $setting_web->linkedin }}"><span class="icofont-linkedin"></span></a></li>
                         </li>
                     </ul>

                     <!-- Outer Box -->
                     <div class="outer-box">
                         <ul class="language-nav">
                             <li><a href="{{ route('change.lang', ['lang' => 'en']) }}">Eng</a></li>
                             <li><a href="{{ route('change.lang', ['lang' => 'id']) }}">Ind</a></li>
                         </ul>
                     </div>

                 </div>

             </div>
         </div>
     </div>
     <!--End Header Upper-->

     <!-- Mobile Menu  -->
     <div class="mobile-menu">
         <div class="menu-backdrop"></div>
         <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

         <nav class="menu-box">
             <div class="nav-logo">
                 <a href="index.html"><img src="assets/images/logo/logo-2.png" alt="" title=""></a>
             </div>
             <div class="menu-outer">
                 <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
             </div>
         </nav>
     </div>
     <!-- End Mobile Menu -->

 </header>
 <!--End Main Header -->
