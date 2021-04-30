<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>NobleUI Laravel Admin Dashboard Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{!! csrf_token() !!}">
    {{--<meta name="_token" content="leLFmCYSqJrAlCtKdYLa1JVDIqNJp4xsva8rWEKS">--}}

  
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

  
<!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">

    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- end common css -->
   


    <link media="all" type="text/css" rel="stylesheet" href="{{asset('../assets/plugins/sweetalert2/sweetalert2.min.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics start -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-146586338-1');
    </script>
    <!-- Google Analytics end -->

</head>
<body >

{{--<script src="assets/js/spinner.js"></script>--}}
<script src="{{asset('assets/js/spinner.js')}}"></script>

<div class="main-wrapper" id="app">

    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
                Noble<span>UI</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item active">
                    <a href="{{route('acceuil')}}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title dashSpan">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item"><a href="{{route('userMgmt')}}" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title usersSpan">Users</span>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{route('plans')}}" class="nav-link">
                        <i class="link-icon" data-feather="dollar-sign"></i>
                        <span class="link-title plansSpan">Plans</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
    <nav class="settings-sidebar">
        <div class="sidebar-body">
            <a href="#"  class="settings-sidebar-toggler">
                <i data-feather="log-in" style="color: red"></i>
            </a>
            <span>Login/Logout:</span> <br>
            <button class="btn btn-primary submit"><a href="http://192.168.1.100:8002/index.php?zone=portail" style="color:white;">Go to page</a></button>
            {{--<h6 class="text-muted">Sidebar:</h6>--}}
            {{--<div class="form-group border-bottom">--}}
                {{--<div class="form-check form-check-inline">--}}
                    {{--<label class="form-check-label">--}}
                        {{--<input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>--}}
                        {{--Light--}}
                    {{--</label>--}}
                {{--</div>--}}
                {{--<div class="form-check form-check-inline">--}}
                    {{--<label class="form-check-label">--}}
                        {{--<input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">--}}
                        {{--Dark--}}
                    {{--</label>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="theme-wrapper">--}}
                {{--<h6 class="text-muted mb-2">Light Version:</h6>--}}
                {{--<a class="theme-item active" href="index.html">--}}
                    {{--<img src="assets/images/screenshots/light.jpg" alt="light version">--}}
                {{--</a>--}}
                {{--<h6 class="text-muted mb-2">Dark Version:</h6>--}}
                {{--<a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">--}}
                    {{--<img src="assets/images/screenshots/dark.jpg" alt="light version">--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
    </nav>    <div class="page-wrapper">
        <nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
            <div class="navbar-content">
                <form class="search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown nav-apps">
                        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="grid"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="appsDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">Web Apps</p>
                                <a href="javascript:;" class="text-muted">Edit</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="d-flex align-items-center apps">
                                    <a href="apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
                                    <a href="apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
                                    <a href="email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
                                    <a href="general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
                                </div>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-messages">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="mail"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messageDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">9 New Messages</p>
                                <a href="javascript:;" class="text-muted">Clear all</a>
                            </div>
                            <div class="dropdown-body">
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="assets/images/faces/face2.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Leonardo Payne</p>
                                            <p class="sub-text text-muted">2 min ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project status</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="assets/images/faces/face3.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Carl Henson</p>
                                            <p class="sub-text text-muted">30 min ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Client meeting</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="assets/images/faces/face4.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Jensen Combs</p>
                                            <p class="sub-text text-muted">1 hrs ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project updates</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="assets/images/faces/face5.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Amiah Burton</p>
                                            <p class="sub-text text-muted">2 hrs ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project deadline</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="assets/images/faces/face6.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Yaretzi Mayo</p>
                                            <p class="sub-text text-muted">5 hr ago</p>
                                        </div>
                                        <p class="sub-text text-muted">New record</p>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-notifications">
                        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="bell"></i>
                            <div class="indicator">
                                <div class="circle"></div>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                <a href="javascript:;" class="text-muted">Clear all</a>
                            </div>
                            <div class="dropdown-body">
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                    <div class="content">
                                        <p>New customer registered</p>
                                        <p class="sub-text text-muted">2 sec ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="gift"></i>
                                    </div>
                                    <div class="content">
                                        <p>New Order Recieved</p>
                                        <p class="sub-text text-muted">30 min ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="alert-circle"></i>
                                    </div>
                                    <div class="content">
                                        <p>Server Limit Reached!</p>
                                        <p class="sub-text text-muted">1 hrs ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="layers"></i>
                                    </div>
                                    <div class="content">
                                        <p>Apps are ready for update</p>
                                        <p class="sub-text text-muted">5 hrs ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="download"></i>
                                    </div>
                                    <div class="content">
                                        <p>Download completed</p>
                                        <p class="sub-text text-muted">6 hrs ago</p>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-profile">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/faces/face1.jpg" alt="profile">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <img src="assets/images/faces/face1.jpg" alt="">
                                </div>
                                <div class="info text-center">
                                    <p class="name font-weight-bold mb-0">{{Auth::user()->name}}</p>
                                    <p class="email text-muted mb-3">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <div class="dropdown-body">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a href="general/profile.html" class="nav-link">
                                            <i data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link">
                                            <i data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link">
                                            <i data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('logout')}}" class="nav-link"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i data-feather="log-out"></i>
                                            <span>Log Out</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                               @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>




{{--@show--}}
            {{--@yield('acceuil')--}}
            {{--@yield('users')--}}
            {{--@yield('plans')--}}
            {{--@include('admin.footer')--}}


        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- base js -->--}}
    {{--<script src="js/app.js"></script>--}}
    {{--<script src="assets/plugins/feather-icons/feather.min.js"></script>--}}
    {{--<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>--}}
    {{--<!-- end base js -->--}}

    {{--<!-- plugin js -->--}}
    {{--<script src="assets/plugins/chartjs/Chart.min.js"></script>--}}
    {{--<script src="assets/plugins/jquery.flot/jquery.flot.js"></script>--}}
    {{--<script src="assets/plugins/jquery.flot/jquery.flot.resize.js"></script>--}}
    {{--<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>--}}
    {{--<script src="assets/plugins/apexcharts/apexcharts.min.js"></script>--}}
    {{--<script src="assets/plugins/progressbar-js/progressbar.min.js"></script>--}}
    {{--<!-- end plugin js -->--}}

    {{--<!-- common js -->--}}
    {{--<script src="assets/js/template.js"></script>--}}
    {{--<!-- end common js -->--}}

    {{--<script src="assets/js/dashboard.js"></script>--}}
    {{--<script src="assets/js/datepicker.js"></script>--}}
    {{--<script type="text/javascript" src="js/script.js"></script>--}}
{{--</body>--}}

{{--<!-- Mirrored from www.nobleui.com/laravel/template/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:41 GMT -->--}}
