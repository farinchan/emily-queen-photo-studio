<!DOCTYPE html>
<html lang="en">

<head>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('back/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        <form class="form w-100" action="{{ route('login.post') }}" method="POST" id="loginForm">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">{{ __('auth.login') }}</h1>
                                <div class="text-gray-500 fw-semibold fs-6">{{ __('auth.login_title') }}</div>
                            </div>
                            {{-- <div class="row g-3 mb-9">
									<div class="col-md-6">
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="{{ asset('back/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />Sign in with Google</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="{{ asset('back/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3" />
										<img alt="Logo" src="{{ asset('back/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
									</div>
								</div>
								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
								</div> --}}
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="{{ __('auth.email') }}" name="email" autocomplete="off"
                                    class="form-control bg-transparent @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <div class="text-sm text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="fv-row mb-3">
                                <input type="password" placeholder="{{ __('auth.password') }}" name="password" autocomplete="off"
                                    class="form-control bg-transparent @error('password') is-invalid @enderror" />
                                @error('password')
                                    <div class="text-sm text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <a href="#"
                                    class="link-primary">{{ __('auth.forgot') }}</a>
                            </div>
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <span class="indicator-label">{{ __('auth.login') }}</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <div class="text-gray-500 text-center fw-semibold fs-6">{{ __('auth.no_account') }}
                                <a href="#" class="link-primary" onclick="alert('gak bisa daftar bang')">
                                    {{ __('auth.register') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
                    <div class="me-10">
                        <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            data-kt-menu-offset="0px, 0px">
                            @if (app()->getLocale() == 'en')
                                <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
                                    src="{{ asset('back/media/flags/united-states.svg') }}" alt="" />
                                <span data-kt-element="current-lang-name" class="me-1">English</span>
                            @else
                                <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
                                    src="{{ asset('back/media/flags/indonesia.svg') }}" alt="" />
                                <span data-kt-element="current-lang-name" class="me-1">Indonesia</span>
                            @endif
                            <span class="d-flex flex-center rotate-180">
                                <i class="ki-duotone ki-down fs-5 text-muted m-0"></i>
                            </span>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
                            data-kt-menu="true" id="kt_auth_lang_menu">
                            <div class="menu-item px-3">
                                <a href="{{route('change.lang', ['lang' => 'en'])}}" class="menu-link d-flex px-5" data-kt-lang="English">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset('back/media/flags/united-states.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">English</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="{{route('change.lang', ['lang' => 'id'])}}" class="menu-link d-flex px-5" data-kt-lang="Indonesian">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset('back/media/flags/indonesia.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Indonesia</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex fw-semibold text-primary fs-base gap-5">
                        <a href="pages/team.html" target="_blank">Terms</a>
                        <a href="pages/pricing/column.html" target="_blank">Plans</a>
                        <a href="pages/contact.html" target="_blank">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-color: #A58672;">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                        src="{{ asset('ext_image/logo-light-large.png   ') }}" alt="" />
                    {{-- <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and
                        Productive</h1>
                    <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces
                        a person they’ve interviewed
                        <br />and provides some background information about
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and
                        their
                        <br />work following this is a transcript of the interview.
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "assets/";
    </script>
    <script src="{{ asset('back/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('back/js/scripts.bundle.js') }}"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function() {
            var submitButton = document.getElementById('kt_sign_in_submit');
            submitButton.querySelector('.indicator-label').style.display = 'none';
            submitButton.querySelector('.indicator-progress').style.display = 'inline-block';
            submitButton.setAttribute('disabled', 'disabled');
        });
    </script>
</body>

</html>
