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
</head>

<title>Admin Dashboard</title>

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
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Global Minds Consultants</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
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
        <div class="nav-left-sidebar sidebar-dark style='background-color: #74BF1A;'">
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
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link @if ($active == 'dashboard') active @endif"
                                    href="{{ url('admin/dashboard') }}"><i
                                        class="fa fa-fw fa-user-circle"></i>Dashboard
                                    <span class="badge badge-success">6</span></a>

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

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-top-field" aria-controls="submenu-top-field">
                                    <i class="fas fa-layer-group"></i> Top Fields
                                </a>
                                <div id="submenu-top-field" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('top-field.index') }}">View Top
                                                Fields</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('top-field.create') }}">Add Top
                                                Field</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

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
