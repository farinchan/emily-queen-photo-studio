@extends('front.layout.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
@endsection

@section('content')
    <!-- Page Title Two Section -->
    <section class="page-title-two-section">
        <div class="auto-container">
            <h1>{{ __('gallery.gallery') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Studio</a></li>
                <li>{{ __('gallery.gallery') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title Two Section -->

    <section class="gallery-page-section">
        <div class="auto-container">

            <!--MixitUp Gallery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters clearfix">

                    <ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="filter active" data-role="button" data-filter="all">{{ __('gallery.all') }}</li>
                        @foreach ($albums as $album)
                            <li class="filter" data-role="button" data-filter=".{{ $album->id }}">
                                {{ $album->title }}
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="filter-list row clearfix">

                    @foreach ($galleries as $gallery)
                        <!-- Project Block -->
                        <div class="project-block mix {{ $gallery->album?->id }} col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ $gallery->getFoto() }}" class="popup-link"><img src="{{ $gallery->getFoto() }}" alt="" /></a>
                                </div>
                                <div class="lower-box" style="display: none;">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <h4><a href="#">{{ $gallery->album?->title }}</a></h4>
                                        </div>
                                        <div class="pull-right">
                                            <div class="category">{{ $gallery->album?->id }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Loading Box -->
            <div class="loading-boxed text-center">
                <a href="#"><img src="assets/images/icons/loader.png" alt="" /></a>
            </div>

        </div>

        <!-- End Gallery Section Two -->

    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>git a
        $(document).ready(function() {
            $('.popup-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endsection
