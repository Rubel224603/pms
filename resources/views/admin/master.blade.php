@include('admin.includes.header')
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                @include('admin.includes.sidebar')

                <div class="layout-page">
                    <!-- Navbar -->

                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                                <i class="ri-menu-fill ri-24px"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">

                            </div>
                            <!-- /Search -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Place this tag where you want the button to render. -->

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">

{{--                                            <img src="{{ asset('/') }}backend/assets/img/avatars/1.png" alt--}}
{{--                                                class="w-px-40 h-auto rounded-circle" />--}}
                                            <img src="{{ asset('uploads/user/' . Auth::user()->profile_photo_path) }}"   class="w-px-40 h-px-40 rounded-circle">


                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ asset('uploads/user/' . Auth::user()->profile_photo_path) }}"   class="w-px-40 h-px-40 rounded-circle">

{{--                                                            <img src="{{ asset('/') }}backend/assets/img/avatars/1.png"--}}
{{--                                                                alt class="w-px-40 h-auto rounded-circle" />--}}
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 small"> {{ Auth::user()->name }}</h6>
                                                        <small class="text-muted">{{ Auth::user()->email }}</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{url('admin/user/profile')}}">
                                                <i class="ri-user-3-line ri-22px me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{url('admin/user-setting/')}}">
                                                <i class="ri-settings-4-line ri-22px me-2"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>

                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <div class="d-grid px-4 pt-2 pb-1">
                                                <a class="btn btn-danger d-flex" href="#"
                                                    onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                                                    <small class="align-middle">Logout</small>
                                                    <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                                                </a>

                                                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                    </nav>
                    <!-- Content wrapper -->
{{--                    <div class="content-wrapper">--}}
{{--                    </div>--}}


               @yield('body')

                    <!-- Overlay -->
                    <div class="layout-overlay layout-menu-toggle"></div>
                </div>
            </div>
        </div>
@include('admin.includes.footer')
