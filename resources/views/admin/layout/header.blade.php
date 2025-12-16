<!DOCTYPE html>
<html lang="en">
<!-- dir="rtl"-->

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <meta name="application-name" content="smartUIUX">
    <meta name="apple-mobile-web-app-title" content="smartUIUX">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <link rel="apple-touch-icon" href="{{ asset('Admin/assets/admin/img/logo-512.png') }}" sizes="512x512">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EvolveSocially || Admin
    </title>
    <meta name="description"
        content="Smart Home Gardening Reminder Vehicle IOT App HTML Templates | Bootstrap 5 | UI/UX | Mobile | Admin | Dashboard | Universal App | Build stunning smart IOT Automation apps with our premium templates.">
    <link rel="icon" type="image/png" href="{{ asset('Admin/assets/admin/img/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- Dropzone CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet" />

    <!-- Dropzone JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <link href="u" rel="stylesheet">



    <style>
        :root {
            --adminuiux-content-font: "Open Sans", serif;
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Poppins", serif;
            --adminuiux-title-font-weight: 600;
        }
    </style>
    <script defer="" src="{{ asset('Admin/assets/admin/js/app.js?52233c8b4d233d89cd7c') }}"></script>
    <link href="{{ asset('Admin/assets/admin/css/app.css?52233c8b4d233d89cd7c') }}" rel="stylesheet">

    <!-- Toast Container -->
    <div id="toast-container" style="position: fixed; top: 20px; right: 20px; z-index: 9999;"></div>

    <!-- Toast CSS -->
    <style>
        .toast {
            padding: 15px 25px;
            margin-bottom: 10px;
            border-radius: 8px;
            color: #fff;
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.5s, transform 0.5s;
            min-width: 200px;
        }

        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        .toast.success {
            background-color: #4caf50;
        }

        .toast.error {
            background-color: #f44336;
        }
    </style>

    <!-- Toast JS -->
    <script>
        function showToast(type, message) {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.classList.add('toast', type);
            toast.textContent = message;
            container.appendChild(toast);

            // Show toast
            setTimeout(() => toast.classList.add('show'), 100);

            // Hide and remove after 3 seconds
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => container.removeChild(toast), 500);
            }, 3000);
        }

        // Laravel session flash messages
        @if (session('success'))
            document.addEventListener('DOMContentLoaded', function() {
                showToast('success', "{{ session('success') }}");
            });
        @endif

        @if (session('error'))
            document.addEventListener('DOMContentLoaded', function() {
                showToast('error', "{{ session('error') }}");
            });
        @endif
    </script>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.min.css">

    <script defer="" src="{{ asset('Admin/assets/admin/js/app.js?52233c8b4d233d89cd7c') }}"></script>
    <link href="{{ asset('Admin/assets/admin/css/app.css?52233c8b4d233d89cd7c') }}" rel="stylesheet">

    <script>
        $(document).ready(function() {
            // Initialize the DataTable
            $('#mytable').DataTable();
        });
    </script>


</head>
{{-- @include('admin.setting.toast') --}}

<body
    class="main-bg main-bg-opac main-bg-blur roundedui adminuiux-header-standard adminuiux-sidebar-standard adminuiux-mobile-footer-fill-theme adminuiux-header-transparent theme-pista bg-r-gradient adminuiux-sidebar-fill-none scrollup"
    data-theme="theme-pista" data-sidebarfill="adminuiux-sidebar-fill-none" data-bs-spy="scroll"
    data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0"
    data-sidebarlayout="adminuiux-sidebar-standard" data-headerlayout="adminuiux-header-standard"
    data-headerfill="adminuiux-header-transparent" data-bggradient="bg-r-gradient" style="">
    <!-- Pageloader -->
    <div class="pageloader">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center text-center h-100 pb-ios">
                <div class="col-12 mb-auto pt-4"></div>
                <div class="col-auto">
                    <img src="{{ asset('admin/img/logo.svg') }}" alt="">
                </div>
                <div class="col" alt="" class="height-80 mb-3">
                    <p class="h2 mb-0 text-theme-accent-1">Admin</p>
                    <p class="display-3 text-theme-1 fw-bold mb-4">MY DASHBOARD</p>
                    <div class="loader12 mb-2 mx-auto"></div>
                </div>

            </div>
        </div>
    </div>
    <!-- standard header -->
    <header class="adminuiux-header">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <!-- main sidebar toggle -->
                <button class="btn btn-link btn-square sidebar-toggler" type="button" onclick="initSidebar()">
                    <i class="sidebar-svg" data-feather="menu"></i>
                </button>
                <!-- logo -->
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <img data-bs-img="light" src="{{ asset('admin/img/logo-light.svg') }}" alt="">
                    <img data-bs-img="dark" src="{{ asset('admin/img/logo.svg') }}" alt="">
                    <div class="">
                        <span class="h4 fw-bold">DASHBOARD</span>
                        <p class="company-tagline">Admin</p>
                    </div>
                </a>

                <!-- right icons button -->
                <div class="ms-auto">

                    <!-- dark mode -->
                    <button class="btn btn-link btn-square btnsunmoon btn-link-header" id="btn-layout-modes-dark-page">
                        <i class="sun mx-auto" data-feather="sun"></i>
                        <i class="moon mx-auto" data-feather="moon"></i>
                    </button>



                    <!-- profile dropdown -->
                    <div class="d-inline-block">
                        <a href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="btn btn-link btn-link-header style-none" role="button">
                            <div class="row gx-0 d-inline-flex">
                                <div class="col align-self-center d-none d-xl-block px-2 lh-14 text-start">
                                    <span>Logout</span>
                                </div>
                            </div>
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>


                </div>
            </div>
        </nav>

    </header>



    <div class="adminuiux-wrap">
        <!-- Standard sidebar -->
        <!-- Standard sidebar -->
        <div class="adminuiux-sidebar">
            <div class="adminuiux-sidebar-inner">
                <div class="px-3 not-iconic mt-3">
                    <h6 class="fw-medium small text-uppercase opacity-50">Main</h6>

                </div>
                <ul class="nav flex-column menu-active-line mt-3">
                    <!-- ecommerce sidebar -->
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}"
                            class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="menu-icon bi bi-columns-gap"></i>
                            <span class="menu-name">Dashboard</span>
                        </a>

                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class=" menu-icon bi bi-archive"></i>
                            <span class="menu-name">Landing Page</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="nav-item">
                                <a href="{{ route('admin.landing.index') }}"
                                    class="nav-link {{ request()->routeIs('admin.landing.index') ? 'active' : '' }}">
                                    <i class="bi bi-bookmark-plus"></i>
                                    <span class="menu-name">Landing Banner Text</span>
                                </a>
                            </div>

                            <div class="nav-item">
                                <a href="{{ route('admin.whoweare.index') }}"
                                    class="nav-link  {{ request()->routeIs('admin.whoweare.index') ? 'active' : '' }}">
                                    <i class="bi bi-bookmark-plus"></i>
                                    <span class="menu-name">Who we are</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascrit:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="menu-icon bi bi-bag-check"></i>
                            <span class="menu-name">About Page</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="nav-item">
                                <a href="{{ route('admin.aboutpage.index') }}"
                                    class="nav-link  {{ request()->routeIs('admin.aboutpage.index') ? 'active' : '' }}">
                                    <i class="menu-icon bi bi-card-list"></i>
                                    <span class="menu-name">About me</span>
                                </a>
                            </div>
                            {{-- <div class="nav-item">
                                <a href="{{ route('pending.order') }}"
                                    class="nav-link  {{ request()->routeIs('pending.order') ? 'active' : '' }}">
                                    <i class="menu-icon bi bi-hourglass-split"></i>
                                    <span class="menu-name">New Order</span>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a href="{{ route('confirm.order') }}"
                                    class="nav-link  {{ request()->routeIs('confirm.order') ? 'active' : '' }}">
                                    <i class="menu-icon bi bi-check-circle"></i>
                                    <span class="menu-name">Confirm Orders</span>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a href="{{ route('cancel.order') }}"
                                    class="nav-link  {{ request()->routeIs('cancel.order') ? 'active' : '' }}">
                                    <i class="menu-icon bi bi-x-circle"></i>
                                    <span class="menu-name">Cancel Orders</span>
                                </a>
                            </div> --}}
                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascrit:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="menu-icon bi bi-bag-check"></i>
                            <span class="menu-name">Website Catalog Page</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="nav-item">
                                <a href="{{ route('admin.website.catalog') }}"
                                    class="nav-link  {{ request()->routeIs('admin.website.catalog') ? 'active' : '' }}">
                                    <i class="menu-icon bi bi-card-list"></i>
                                    <span class="menu-name">Website Catalog</span>
                                </a>
                            </div>
                            <div class="nav-item">
                                <a href="{{ route('admin.website.catalog.product') }}"
                                    class="nav-link  {{ request()->routeIs('admin.website.catalog.product') ? 'active' : '' }}">
                                    <i class="menu-icon bi bi-card-list"></i>
                                    <span class="menu-name">Website Product Catalog</span>
                                </a>
                            </div>
                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascrit:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="menu-icon bi bi-bag-check"></i>
                            <span class="menu-name">Logo Catalog Page</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="nav-item">
                                <a href="{{ route('admin.logo.catalog.product.index') }}"
                                    class="nav-link  {{ request()->routeIs('admin.logo.catalog.product.index') ? 'active' : '' }}">
                                    <i class="menu-icon bi bi-card-list"></i>
                                    <span class="menu-name">Logo Catalog</span>
                                </a>
                            </div>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.setting') }}"
                            class="nav-link  {{ request()->routeIs('admin.setting') ? 'active' : '' }}">
                            <i class="menu-icon" data-feather="settings"></i>
                            <span class="menu-name">Settings</span>
                        </a>
                    </li>


                </ul>

                <div class=" mt-auto "></div>

            </div>
        </div>
