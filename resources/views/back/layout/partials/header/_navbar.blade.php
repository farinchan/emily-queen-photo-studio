<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
            <i class="ki-duotone ki-notification-status fs-2"><span class="path1"></span><span
                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
        </div>
        @include('back/partials/menus/_notifications-menu')
        <!--end::Menu wrapper-->
    </div>
    <div class="app-navbar-item ms-1 ms-md-4">
        @include('back/partials/theme-mode/_main')
    </div>
    <!--end::Theme mode-->
    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="{{ Auth::user()?->getPhoto() ?? "" }}" class="rounded-3" alt="user" />
        </div>
        @include('back/partials/menus/_user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Header menu toggle-->
    <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
        <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
            <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span class="path2"></span></i>
        </div>
    </div>
    <!--end::Header menu toggle-->
    <!--begin::Aside toggle-->
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
