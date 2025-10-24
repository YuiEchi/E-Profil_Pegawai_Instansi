<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Profil Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tailwind Admin Dashboard, A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta name="description" content="Download a Tailwind admin template, designed to create responsive and customizable admin dashboards quickly and efficiently. Ideal for developers and startups. ">
    <meta name="description" content="Explore a Tailwind admin dashboard template that offers sleek, responsive designs and easy customization, perfect for managing admin interfaces with modern UI components.">
    <meta name="description" content="Explore a Tailwind admin dashboard template with sleek, responsive designs and easy customization. Perfect for managing modern admin interfaces with top-notch UI components.">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo_komdigi.png">

    <!-- Jsvectormap plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css  (Mandatory in All Pages) -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- App css  (Mandatory in All Pages) -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Ikon Google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="wrapper">
        <!-- Start Sidebar -->
        <aside id="app-menu"
            class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-sidenav min-w-sidenav -translate-x-full transform overflow-y-auto bg-body transition-all duration-300 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">
            <div class="sticky top-0 flex h-16 items-center justify-center px-6">
                <a href="{{ route('frontend.beranda') }}">
                    <img src="assets/images/Simasneg2.png" alt="logo" class="flex h-10">
                </a>
            </div>
          
            <div class="h-[calc(100%-64px)] p-4 lg:ps-8" data-simplebar>
                <ul class="admin-menu hs-accordion-group flex w-full flex-col gap-1.5">
                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.beranda') }}">
                            <i class="material-icons">dashboard</i>
                            Beranda
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.pegawai') }}">
                            <i class="material-icons">account_circle</i>
                            Profil Pegawai
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.pendidikan') }}">
                            <span class="material-icons">school</span>
                            Riwayat Pendidikan
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.jabatan') }}">
                            <span class="material-icons">assignment_ind</span>
                            Riwayat Jabatan
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.plh_plt') }}">
                            <span class="material-icons">assignment</span>
                            Riwayat PLH/PLT
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.golongan') }}">
                            <span class="material-icons">workspaces</span>
                            Riwayat Golongan
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.diklat') }}">
                            <span class="material-icons">sports_gymnastics</span>
                            Riwayat Diklat
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.gaji') }}">
                            <span class="material-icons">paid</span>
                            Riwayat Gaji
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.kgb') }}">
                            <span class="material-icons">trending_up</span>
                            Riwayat KGB
                        </a>
                    </li>

                    
                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.penghargaan') }}">
                            <span class="material-icons">military_tech</span>
                            Riwayat Penghargaan
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.slks') }}">
                            <span class="material-icons">stars</span>
                            Riwayat SLKS
                        </a>
                    </li>
                    
                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.organisasi') }}">
                            <span class="material-icons">group</span>
                            Riwayat Organisasi
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.prestasi') }}">
                            <span class="material-icons">grading</span>
                            Nilai Prestasi Kerja
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.asesmen') }}">
                            <span class="material-icons">task</span>
                            Riwayat Asesmen
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.kesejahteraan') }}">
                            <span class="material-icons">medical_services</span>
                            Riwayat Kesejahteraan
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.keluarga') }}">
                            <span class="material-icons">family_restroom</span>
                            Data keluarga
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                            href="{{ route('frontend.dokumen') }}">
                            <span class="material-icons">description</span>
                            Dokumen
                        </a>
                    </li>

                    <li class="menu-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full space-y-2 flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <span class="material-icons">logout</span>
                                Logout
                            </button>
                        </form>
                    </li>
                    
                </ul>
            </div>
        </aside>
        <!-- End Sidebar -->


        <!-- Mobile Nav Start -->
        <div class="md:hidden flex">
            <div
                class="fixed bottom-0 z-50 shadow-md w-full h-16 flex items-center justify-between px-5 gap-4 bg-white border-b border-default-100">

                <a href="#" class="flex flex-col items-center justify-center gap-1 text-default-600">
                    <i data-lucide="gauge" class="size-5"></i>
                    <span class="text-xs font-semibold">Home</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center gap-1 text-default-600">
                    <i data-lucide="search" class="size-5"></i>
                    <span class="text-xs font-semibold">Search</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center gap-1 text-default-600">
                    <i data-lucide="compass" class="size-5"></i>
                    <span class="text-xs font-semibold">Explore</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center gap-1 text-default-600">
                    <i data-lucide="bell" class="size-5"></i>
                    <span class="text-xs font-semibold">Alerts</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center gap-1 text-default-600">
                    <i data-lucide="circle-user" class="size-5"></i>
                    <span class="text-xs font-semibold">Profile</span>
                </a>
            </div>
        </div>
        <!-- Mobile Nav End -->

        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- Topbar Start -->
            <header class="app-header md:hidden h-16 flex items-center lg:bg-opacity-10 bg-white  backdrop-blur-sm">
                <div class="container flex items-center gap-4">
                    <!-- Topbar Brand Logo -->
                    <a href="index.html" class="md:hidden flex">
                        <img src="assets/images/logo_kp.png" class="h-6" alt="Small logo">
                    </a>

                    <!-- Sidenav Menu Toggle Button -->
                    <button id="button-toggle-menu" class="text-default-500 hover:text-default-600 p-2 rounded-full cursor-pointer"
                        data-hs-overlay="#app-menu" aria-label="Toggle navigation">
                        <i class="i-tabler-menu-2 text-2xl"></i>
                    </button>

                    <!-- Language Dropdown Button -->
                    <div class="ms-auto hs-dropdown relative inline-flex [--placement:bottom-right]">
                        <button type="button" class="hs-dropdown-toggle inline-flex items-center">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="h-4 w-6">
                        </button>

                        <div
                            class="hs-dropdown-menu duration mt-2 min-w-48 rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="h-4">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="h-4">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="h-4">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="h-4">
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <!-- Fullscreen Toggle Button -->
                    <div class="md:flex hidden">
                        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
                            <span class="sr-only">Fullscreen Mode</span>
                            <span class="flex items-center justify-center size-6">
                                <i class="i-tabler-maximize text-2xl flex group-[-fullscreen]:hidden"></i>
                                <i class="i-tabler-minimize text-2xl hidden group-[-fullscreen]:flex"></i>
                            </span>
                        </button>
                    </div>

                    <!-- Profile Dropdown Button -->
                    <div class="relative">
                        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                            <button type="button" class="hs-dropdown-toggle nav-link flex items-center gap-2">
                                <img src="assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-full h-10">
                                <i class="i-tabler-chevron-down text-sm ms-2"></i>
                            </button>
                            <div
                                class="hs-dropdown-menu duration mt-2 min-w-48 rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Profile
                                </a>
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Feed
                                </a>
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Analytics
                                </a>
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Settings
                                </a>
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Support
                                </a>
                                <hr class="my-2">
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Topbar End -->

            <main>
                <div class="container py-6">
                    <!-- Start Content-->
                    @yield('content')
                    <!-- End Content-->
                </div> <!-- container -->
            </main>
        </div>
    </div>

    <!-- Plugin Js (Mandatory in All Pages) -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/preline/preline.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/libs/iconify-icon/iconify-icon.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- App Js (Mandatory in All Pages) -->
    <script src="assets/js/app.js"></script>

    <!-- Apexcharts js -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map Js -->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

    <!-- Dashboard Project Page js -->
    <script src="assets/js/pages/dashboard.js"></script>

</body>

</html>