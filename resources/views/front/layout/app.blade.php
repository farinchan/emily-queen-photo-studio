<!DOCTYPE html>
<html lang="en-US">

<head>
    @php
        $setting_web = \App\Models\SettingWebsite::first();
    @endphp
    <meta charset="UTF-8">
    <title>{{ $setting_web->name }}</title>
    <meta name="description" content="{{ $setting_web->about }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />


    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $setting_web->name }}" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ $setting_web->name }}" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="{{ $setting_web->about }}" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Karla:ital,wght@0,400;0,700;1,700&display=swap"
        rel="stylesheet">


    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{ asset('front/images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('front/images/favicon/favicon.png') }}" type="image/x-icon">
    <meta name="msapplication-TileImage" content="{{ asset('front/images/favicon/favicon.png') }}" />

    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "{{ $setting_web->name }}",
            "url": "{{ request()->url() }}",
        }
    </script>
    <!-- vendor css (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('front/css/vendor/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/vendor/elegenticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/vendor/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/vendor/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/vendor/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/vendor/icofont_old.min.css') }}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('front/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/plugins/animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/plugins/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/plugins/jquery.mCustomScrollbar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/plugins/owl.css') }}" />

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="{{ asset('front/css/vendor/vendor.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/plugins/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.min.css') }}"> -->

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}" />
    @yield('styles')
</head>

<body>

    <div class="page-wrapper">

        @include('front.layout.partials.header')

        @yield('content')

        @include('front.layout.partials.footer')


    </div>
    <!--End pagewrapper-->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon-arrow-up-circle"></span></div>


    <!-- Vendor JS -->
    <script src="{{ asset('front/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('front/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/modernizr-3.11.2.min.js') }}"></script>

    <!--Plugins JS-->
    <script src="{{ asset('front/js/plugins/owl.js') }}"></script>
    <script src="{{ asset('front/js/plugins/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('front/js/plugins/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('front/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('front/js/plugins/mixitup.js') }}"></script>
    <script src="{{ asset('front/js/plugins/ajax-mail.js') }}"></script>
    <script src="{{ asset('front/js/plugins/jquery.scrollTo.js') }}"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    {{-- <script src="{{ asset('front/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('front/js/plugins/plugins.min.js') }}"></script> --}}

    <!-- Main Js -->
    @if (request()->routeIs('front.index'))
        <script src="{{ asset('front/js/main.js') }}"></script>
    @else
        <script src="{{ asset('front/js/main_another.js') }}"></script>
    @endif

    @yield('scripts')

</body>

</html>
