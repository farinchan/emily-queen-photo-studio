<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
        <!--begin::Scroll wrapper-->
        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true"
            data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">

                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion @if (request()->routeIs('back.dashboard') || request()->routeIs('back.dashboard.*')) here show @endif"><span
                        class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i></span><span class="menu-title">Dashboards</span><span
                            class="menu-arrow"></span></span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link @if (request()->routeIs('back.dashboard')) active @endif"
                                href="{{ route('back.dashboard') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Visitor</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="menu-item pt-5">
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Post</span>
                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-book fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Journal</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link " href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Kategori</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link " href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Journal</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link " href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Komentar</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link " href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Pengaturan</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion @if (request()->routeIs('back.gallery.*')) here show @endif">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-picture fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Galeri</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link @if (request()->routeIs('back.gallery.album')) active @endif"
                                href="{{ route('back.gallery.album') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Album</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if (request()->routeIs('back.gallery.index')) active @endif"
                                href="{{ route('back.gallery.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Foto & Video</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if (request()->routeIs('back.testimonial.index')) active @endif"
                        href="{{ route('back.testimonial.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-like-tag fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Testimonial</span>
                    </a>
                </div>

                <div class="menu-item pt-5">
                    <div class="menu-content"><span
                            class="menu-heading fw-bold text-uppercase fs-7">Administrator</span>
                    </div>
                </div>

                <div class="menu-item">
                    <a class="menu-link @if (request()->routeIs('back.message.index')) active @endif"
                        href="{{ route('back.message.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-sms fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Inbox</span>
                    </a>
                </div>

                <div class= "menu-item">
                    <a class="menu-link @if (request()->routeIs('back.user.*')) active @endif"
                        href="{{ route('back.user.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Staff</span>
                    </a>
                </div>

                    <div data-kt-menu-trigger="click"
                        class="menu-item menu-accordion @if (request()->routeIs('back.setting.*')) here show @endif">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-setting-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Pengaturan</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            <div class="menu-item">
                                <a class="menu-link @if (request()->routeIs('back.setting.website')) active @endif"
                                    href="{{ route('back.setting.website') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Website</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Banner</span>
                                </a>
                            </div>
                        </div>
                    </div>



            </div>
            <!--end::Menu-->
        </div>
        <!--end::Scroll wrapper-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
