<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Site web mairie owendo">
    <meta property="og:title" content="Admin mairie">
    <meta property="og:description" content="Admin mairie">
    <meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <title>Admin mairie | @yield('title') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{ asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <!-- Datatable -->
    <link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="{{ asset('backend/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('backend/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('backend/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{ asset('backend/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/pickadate/themes/default.date.css') }}">
    <link href="https://fonts.googleapis.com/icon.css?family=Material+Icons" rel="stylesheet">

    <!-- Select 2 -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">

    <link href="{{ asset('backend/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css')}}" rel="stylesheet">
    @yield('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('layouts.backend.nav-header')
        @include('layouts.backend.header')

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.backend.menu')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                @yield('body')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @include('layouts.backend.footer')
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="{{ asset('backend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/global/global.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('backend/vendor/peity/jquery.peity.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('backend/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('backend/js/dashboard/dashboard-1.js')}}"></script>

    <script src="{{ asset('backend/vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{ asset('backend/js/custom.min.js')}}"></script>
    <script src="{{ asset('backend/js/deznav-init.js')}}"></script>
    <script src="{{ asset('backend/js/demo.js')}}"></script>
{{--    <script src="{{ asset('backend/js/styleSwitcher.js')}}"></script>--}}

    <!-- Datatable -->
    <script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('backend/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('backend/js/plugins-init/jquery.validate-init.js') }}"></script>

    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset('backend/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset('backend/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <!-- asColorPicker -->
    <script src="{{ asset('backend/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <!-- Material color picker -->
    <script src="{{ asset('backend/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <!-- pickdate -->
    <script src="{{ asset('backend/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('backend/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('backend/vendor/pickadate/picker.date.js') }}"></script>

    <!-- Daterangepicker -->
    <script src="{{ asset('backend/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('backend/js/plugins-init/clock-picker-init.js') }}"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('backend/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('backend/js/plugins-init/material-date-picker-init.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset('backend/js/plugins-init/pickadate-init.js') }}"></script>

    <!-- Select 2 -->
    <script src="{{ asset('backend/vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins-init/select2-init.js') }}"></script>

    @yield('scripts')
</body>
</html>
