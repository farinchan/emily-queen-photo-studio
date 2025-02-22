<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
    data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="{{ Auth::user()?->getPhoto() ?? "" }}" />
            </div>
            <!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    {{ Auth::user()?->name ?? "Not Login" }}
                </div>
                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                    {{ Auth::user()?->email ?? "Not Login" }}
                </a>
                @foreach (Auth::user()?->getRoleNames() ?? [] as $role)
                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"> {{ $role }} </span>
                @endforeach
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="?page=account/overview" class="menu-link px-5">
            My Profile
        </a>
    </div>
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Mode
                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                    <i class="ki-duotone ki-night-day theme-light-show fs-2"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span><span
                            class="path5"></span><span class="path6"></span><span class="path7"></span><span
                            class="path8"></span><span class="path9"></span><span class="path10"></span></i> <i
                        class="ki-duotone ki-moon theme-dark-show fs-2"><span class="path1"></span><span
                            class="path2"></span></i> </span>
            </span>
        </a>
        @include('back/partials/theme-mode/__menu')
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Language
                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    Indonesia <img class="w-15px h-15px rounded-1 ms-2"
                        src="{{ asset('back/media/flags/indonesia.svg') }}" alt="" />
                </span>
            </span>
        </a>
        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('back/media/flags/indonesia.svg') }}" alt="" />
                    </span>
                    Indonesia
                </a>
            </div>
        </div>
        <!--end::Menu sub-->
    </div>
    <div class="menu-item px-5">
        <a href="{{ route("logout") }}" class="menu-link px-5">
            keluar
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->
