<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Hall</title>
    @if (Auth::check())
        <meta name="user" content="{{ Auth::user() }}">
    @endif
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet"
          href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">

    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/template.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- end common css -->


    <!-- Global site tag (gtag.js) - Google Analytics start -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-146586338-1');
    </script>
    <!-- Google Analytics end -->

</head>
<body data-base-url="https://www.nobleui.com/laravel/template/light">

<script src="assets/js/spinner.js"></script>

<div class="main-wrapper" id="app">

<app-layout></app-layout>
</div>


<!-- base js -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('assets/plugins/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<!-- end base js -->

<!-- plugin js -->
<script src="{{asset('assets/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
{{--<script src="{{asset('assets/plugins/progressbar-js/progressbar.min.js')}}"></script>--}}

<!-- common js -->
<script src="assets/js/template.js"></script>
<!-- end common js -->

{{--<script src="assets/js/dashboard.js"></script>--}}
{{--<script src="assets/js/datepicker.js"></script>--}}
</body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:41 GMT -->
</html>
<script>
    // import AppLayout from "../../js/components/AppLayout";
    // export default {
    //     components: {AppLayout}
    // }
</script>