<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/buttons.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/select.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendor/datatables/css/fixedHeader.bootstrap4.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Admin Dashboard</title>
    <style>
        :root {
            --admin-bg: #f2f6ff;
            --admin-topbar-grad: linear-gradient(120deg, #0f2f72 0%, #1a4da7 52%, #2f79e9 100%);
            --admin-sidebar-grad: linear-gradient(180deg, #081b49 0%, #0c2a67 46%, #0f367d 100%);
            --admin-text: #15213f;
            --admin-muted: #7b86a3;
            --admin-soft: rgba(255, 255, 255, 0.1);
            --admin-active: #8fd33a;
        }

        body {
            font-family: 'Manrope', sans-serif !important;
            background: var(--admin-bg);
            color: var(--admin-text);
        }

        .admin-topbar {
            height: 76px;
            background: var(--admin-topbar-grad) !important;
            border: 0;
            box-shadow: 0 14px 35px rgba(14, 40, 99, 0.35);
            padding: 0 20px;
        }

        .admin-brand {
            display: inline-flex;
            align-items: center;
            color: #fff !important;
            gap: 10px;
            font-weight: 800;
            letter-spacing: .2px;
            font-size: 19px;
            line-height: 1;
        }

        .admin-brand small {
            display: block;
            font-size: 11px;
            opacity: .85;
            margin-top: 4px;
            font-weight: 500;
            letter-spacing: .4px;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, .18);
            border: 1px solid rgba(255, 255, 255, .28);
            font-size: 16px;
        }

        .admin-topbar .navbar-toggler {
            border: 1px solid rgba(255, 255, 255, .28);
            background: rgba(255, 255, 255, .12);
            border-radius: 10px;
            color: #fff;
        }

        .admin-topbar .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

        .admin-pill-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, .14);
            color: #fff !important;
            border: 1px solid rgba(255, 255, 255, .28);
            border-radius: 999px;
            padding: 8px 12px;
            font-size: 12px;
            text-decoration: none !important;
            margin-right: 10px;
        }

        .admin-pill-link:hover {
            background: rgba(255, 255, 255, .2);
        }

        .admin-sidebar {
            background: var(--admin-sidebar-grad) !important;
            box-shadow: 10px 0 28px rgba(9, 26, 70, 0.22);
            border-right: 1px solid rgba(255, 255, 255, .08);
        }

        .admin-sidebar .navbar {
            padding: 12px 10px 20px;
        }

        .nav-left-sidebar .navbar-nav .nav-link {
            color: rgba(235, 242, 255, 0.88);
            border-radius: 10px;
            margin: 3px 8px;
            padding: 10px 12px;
            font-weight: 600;
            font-size: 13.5px;
            transition: all .22s ease;
        }

        .nav-left-sidebar .navbar-nav .nav-link i {
            color: rgba(235, 242, 255, 0.92);
            min-width: 18px;
        }

        .nav-left-sidebar .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            transform: translateX(2px);
        }

        .nav-left-sidebar .navbar-nav .nav-link.active,
        .nav-left-sidebar .navbar-nav .show>.nav-link {
            background: linear-gradient(90deg, rgba(143, 211, 58, 0.24), rgba(143, 211, 58, 0.1));
            color: #fff !important;
            border: 1px solid rgba(143, 211, 58, 0.35);
            box-shadow: inset 3px 0 0 var(--admin-active);
        }

        .nav-left-sidebar .navbar-nav .submenu .nav-link {
            padding-left: 40px;
            font-size: 12.5px;
            opacity: .95;
            margin-top: 1px;
            margin-bottom: 1px;
        }

        .nav-divider {
            margin: 8px 12px 10px;
            padding: 7px 12px !important;
            border-radius: 9px;
            background: rgba(255, 255, 255, .08);
            color: rgba(228, 236, 255, .9) !important;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .nav-left-sidebar .badge {
            border-radius: 999px;
            font-size: 10px;
            font-weight: 700;
            padding: 4px 7px;
        }

        .dashboard-wrapper {
            background: transparent;
        }

        .page-breadcrumb .breadcrumb {
            background: #fff;
            border: 1px solid #e4eaf8;
            border-radius: 12px;
            padding: 10px 14px;
            box-shadow: 0 7px 20px rgba(24, 45, 99, 0.06);
        }

        .breadcrumb-item,
        .breadcrumb-link {
            color: #33416a !important;
            font-weight: 600;
            font-size: 13px;
        }

        .nav-user-img img {
            width: 42px;
            height: 42px;
            object-fit: cover;
            box-shadow: 0 6px 16px rgba(11, 30, 76, 0.3);
        }

        .nav-user-dropdown {
            border-radius: 12px;
            border: 1px solid #e3e9f8;
            box-shadow: 0 12px 28px rgba(20, 42, 96, 0.16);
        }

        .dashboard-wrapper .admin-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border: 0;
            border-radius: 999px;
            font-weight: 700;
            letter-spacing: .2px;
            padding: 12px 24px;
            transition: all .22s ease;
            box-shadow: 0 12px 24px rgba(15, 39, 94, 0.14);
        }

        .dashboard-wrapper .admin-btn:hover,
        .dashboard-wrapper .admin-btn:focus {
            transform: translateY(-1px);
            box-shadow: 0 16px 28px rgba(15, 39, 94, 0.18);
        }

        .dashboard-wrapper .admin-btn-primary {
            background: linear-gradient(135deg, #8bcf2c 0%, #74bf1a 100%);
            color: #fff !important;
        }

        .dashboard-wrapper .admin-btn-primary:hover,
        .dashboard-wrapper .admin-btn-primary:focus {
            background: linear-gradient(135deg, #7dc21f 0%, #65ab14 100%);
            color: #fff !important;
        }

        .dashboard-wrapper .admin-btn-secondary {
            background: linear-gradient(135deg, #12357d 0%, #0a245d 100%);
            color: #fff !important;
        }

        .dashboard-wrapper .admin-btn-secondary:hover,
        .dashboard-wrapper .admin-btn-secondary:focus {
            background: linear-gradient(135deg, #0f306f 0%, #081c49 100%);
            color: #fff !important;
        }

        .dashboard-wrapper .admin-btn-wide {
            min-width: 220px;
            padding-inline: 42px;
        }

        .dashboard-wrapper .admin-btn-sm {
            padding: 9px 18px;
            font-size: 13px;
            box-shadow: 0 10px 20px rgba(15, 39, 94, 0.12);
        }

        .dashboard-wrapper .btn:not(.admin-btn):not(.btn-link):not(.btn-close):not(.btn-outline-danger):not(.btn-outline-primary) {
            border-radius: 999px;
            font-weight: 700;
            transition: all .22s ease;
            box-shadow: 0 10px 22px rgba(15, 39, 94, 0.12);
        }

        .dashboard-wrapper .btn:not(.admin-btn):not(.btn-link):not(.btn-close):not(.btn-outline-danger):not(.btn-outline-primary):hover,
        .dashboard-wrapper .btn:not(.admin-btn):not(.btn-link):not(.btn-close):not(.btn-outline-danger):not(.btn-outline-primary):focus {
            transform: translateY(-1px);
            box-shadow: 0 14px 26px rgba(15, 39, 94, 0.16);
        }

        .dashboard-wrapper .btn-success:not(.admin-btn) {
            background: linear-gradient(135deg, #8bcf2c 0%, #74bf1a 100%);
            border-color: transparent;
        }

        .dashboard-wrapper .btn-primary:not(.admin-btn),
        .dashboard-wrapper .btn-info:not(.admin-btn) {
            background: linear-gradient(135deg, #12357d 0%, #0a245d 100%);
            border-color: transparent;
            color: #fff;
        }

        .dashboard-wrapper .btn-danger:not(.admin-btn) {
            background: linear-gradient(135deg, #ec5b63 0%, #d63341 100%);
            border-color: transparent;
        }

        .dashboard-wrapper .btn-warning:not(.admin-btn) {
            background: linear-gradient(135deg, #ffc857 0%, #f2ad00 100%);
            border-color: transparent;
            color: #1f2a44;
        }

        @media (max-width: 991px) {
            .admin-topbar {
                height: auto;
                padding: 10px 14px;
            }

            .admin-pill-link {
                margin-top: 8px;
            }
        }
    </style>
    @yield('style')
</head>

<body>



    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg fixed-top admin-topbar">
                <a class="navbar-brand admin-brand" href="{{ url('admin/dashboard') }}">
                    <span class="brand-icon"><i class="fas fa-globe-asia"></i></span>
                    <span>Global Minds <small>Admin Control Center</small></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ url('/') }}" target="_blank" class="admin-pill-link">
                                <i class="fas fa-external-link-alt"></i> View Website
                            </a>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('assets/images/avatar-1.jpg') }}" alt=""
                                    class="user-avatar-md rounded-circle border border-white">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 nav-user-name">Super Admin</h5>
                                </div>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    class="dropdown-item text-dark">
                                    <i class="fa fa-sign-out-alt mr-2 text-dark"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark admin-sidebar">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Main Navigation
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link @if ($active == 'dashboard') active @endif"
                                    href="{{ url('admin/dashboard') }}"><i
                                        class="fa fa-fw fa-user-circle"></i>Dashboard
                                    <span class="badge badge-success">Live</span></a>

                            </li>


                            <!-- Popup Management Menu -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-popup" aria-controls="submenu-popup">
                                    <i class="fas fa-window-maximize"></i> Popup Management
                                </a>
                                <div id="submenu-popup" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('popup.index') }}">View All Popups</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('popup.create') }}">Add Popup</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!--Home Slider  -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-hero-slider" aria-controls="submenu-hero-slider">
                                    <i class="fas fa-images"></i> Hero Slider
                                </a>
                                <div id="submenu-hero-slider" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('hero-slider.index') }}">View All
                                                Slides</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('hero-slider.create') }}">Add
                                                Slide</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <!-- University Menu -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-university" aria-controls="submenu-university">
                                    <i class="fas fa-university"></i> Universities
                                </a>
                                <div id="submenu-university" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('university.index') }}">View
                                                Universities</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('university.create') }}">Add
                                                University</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <!-- Top Field Menu -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-top-field" aria-controls="submenu-top-field">
                                    <i class="fa fa-th-large"></i> Top Fields
                                </a>
                                <div id="submenu-top-field" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('top-field.index') }}">
                                                <i class="fa fa-eye"></i> View Top Fields
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('top-field.create') }}">
                                                <i class="fa fa-plus"></i> Add Top Field
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Success Stories Menu -->

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-success-stories" aria-controls="submenu-success-stories">
                                    <i class="fas fa-trophy"></i> Success Stories
                                </a>
                                <div id="submenu-success-stories" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('admin.success-stories.index') }}">View Success
                                                Stories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('admin.success-stories.create') }}">Add Success
                                                Story</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Reviews Menu -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-reviews" aria-controls="submenu-reviews">
                                    <i class="fas fa-star"></i> Reviews
                                </a>
                                <div id="submenu-reviews" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.reviews.index') }}">View
                                                Reviews</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <!-- Team Menu -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-team" aria-controls="submenu-team">
                                    <i class="fas fa-users"></i> Team
                                </a>
                                <div id="submenu-team" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('team.index') }}">View Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('team.create') }}">Add Team Member</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Event Menu -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-event" aria-controls="submenu-event">
                                    <i class="fas fa-calendar-alt"></i> Event
                                </a>
                                <div id="submenu-event" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('event.index') }}">View Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('event.create') }}">Add Event</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <!-- Destination Menu -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-destination" aria-controls="submenu-destination">
                                    <i class="fas fa-map-marker-alt"></i> Destinations
                                </a>
                                <div id="submenu-destination"
                                    class="collapse submenu {{ $active == 'destination' ? 'show' : '' }}">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('destination.index') }}">View
                                                Destinations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('destination.create') }}">Add
                                                Destination</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Blog Menu -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-blog" aria-controls="submenu-blog">
                                    <i class="fas fa-newspaper"></i> Blog Management
                                </a>
                                <div id="submenu-blog"
                                    class="collapse submenu {{ $active == 'blog' ? 'show' : '' }}">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('posts.index') }}"
                                                style="{{ Request::is('admin/posts') ? 'color: #79BD21 !important;' : '' }}">
                                                <i class="fas fa-list-ul me-2"></i> View All Blogs
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('posts.create') }}"
                                                style="{{ Request::is('admin/posts/create') ? 'color: #79BD21 !important;' : '' }}">
                                                <i class="fas fa-plus-circle me-2"></i> Add New Blog
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>





                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-destination-faqs" aria-controls="submenu-destination-faqs">
                                    <i class="fas fa-question-circle"></i> Destination FAQs
                                </a>
                                <div id="submenu-destination-faqs" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('destination-faqs.index') }}">View
                                                FAQs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('destination-faqs.create') }}">Add
                                                FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-about-faqs" aria-controls="submenu-about-faqs">
                                    <i class="fas fa-info-circle"></i> About FAQs
                                </a>
                                <div id="submenu-about-faqs"
                                    class="collapse submenu {{ $active == 'about-faqs' ? 'show' : '' }}">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about-faqs.index') }}">View
                                                FAQs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about-faqs.create') }}">Add
                                                FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-ielts-courses" aria-controls="submenu-ielts-courses">
                                    <i class="fas fa-book-open"></i> IELTS Courses
                                </a>
                                <div id="submenu-ielts-courses"
                                    class="collapse submenu {{ $active == 'ielts-courses' ? 'show' : '' }}">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('ielts-courses.index') }}">View
                                                Courses</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('ielts-courses.create') }}">Add
                                                Course</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-ielts-popup" aria-controls="submenu-ielts-popup">
                                    <i class="fas fa-bullhorn"></i> IELTS Popup
                                </a>
                                <div id="submenu-ielts-popup"
                                    class="collapse submenu {{ $active == 'ielts-popup' ? 'show' : '' }}">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('ielts-popup.index') }}">View
                                                IELTS Popup</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('ielts-popup.create') }}">Add
                                                IELTS Popup</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-ielts-faqs" aria-controls="submenu-ielts-faqs">
                                    <i class="fas fa-language"></i> IELTS FAQs
                                </a>
                                <div id="submenu-ielts-faqs"
                                    class="collapse submenu {{ $active == 'ielts-faqs' ? 'show' : '' }}">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('ielts-faqs.index') }}">View
                                                FAQs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('ielts-faqs.create') }}">Add
                                                FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.ielts-enrollments.*') ? 'active' : '' }}"
                                    href="{{ route('admin.ielts-enrollments.index') }}">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>IELTS Enrollments</span>
                                    @php
                                        $ieltsEnrollmentCount = \App\Models\IeltsCourseEnrollment::count();
                                    @endphp
                                    @if ($ieltsEnrollmentCount > 0)
                                        <span class="badge badge-warning ml-2">{{ $ieltsEnrollmentCount }}</span>
                                    @endif
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-service-faqs" aria-controls="submenu-service-faqs">
                                    <i class="fas fa-concierge-bell"></i> Service FAQs
                                </a>
                                <div id="submenu-service-faqs"
                                    class="collapse submenu {{ $active == 'service-faqs' ? 'show' : '' }}">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('service-faqs.index') }}">View
                                                FAQs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('service-faqs.create') }}">Add
                                                FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-service-popup" aria-controls="submenu-service-popup">
                                    <i class="fas fa-star"></i> Service Popup
                                </a>
                                <div id="submenu-service-popup"
                                    class="collapse submenu {{ $active == 'service-popup' ? 'show' : '' }}">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('service-popup.index') }}">View
                                                Service Popup</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('service-popup.create') }}">Add
                                                Service Popup</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>











                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}"
                                    href="{{ route('admin.contact.index') }}">
                                    <i class="fas fa-envelope"></i>
                                    <span>Contact Messages</span>
                                    @php
                                        $unreadCount = \App\Models\ContactSubmission::count();
                                    @endphp
                                    @if ($unreadCount > 0)
                                        <span class="badge badge-success ml-2">{{ $unreadCount }}</span>
                                    @endif
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.event-reservation.*') ? 'active' : '' }}"
                                    href="{{ route('admin.event-reservation.index') }}">
                                    <i class="fas fa-clipboard-list"></i>
                                    <span>Event Reservations</span>
                                    @php
                                        $reservationCount = \App\Models\EventReservation::count();
                                    @endphp
                                    @if ($reservationCount > 0)
                                        <span class="badge badge-warning ml-2">{{ $reservationCount }}</span>
                                    @endif
                                </a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.consultation.*') ? 'active' : '' }}"
                                    href="{{ route('admin.consultation.index') }}">
                                    <i class="fas fa-calendar-check"></i>
                                    <span>Consultation Bookings</span>
                                    @php
                                        $consultationCount = \App\Models\Consultation::count();
                                    @endphp
                                    @if ($consultationCount > 0)
                                        <span class="badge badge-info ml-2">{{ $consultationCount }}</span>
                                    @endif
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->

                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Global Minds Consultants Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ $heading }}
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('content')
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>


    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/js/data-table.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    @yield('script')
</body>

</html>
