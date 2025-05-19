<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Hospital Mgmt </title>
    <!-- Favicon icon -->
    {{-- <a href="https://cdnjs.cloudflare.com/ajax/libs/admin-design-icons/4.0.0/font/adminIcons-Regular.ttf"></a> --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=admin+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=favorite" /> --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("admin/images/favicon.png")}}">
    <link rel="stylesheet" href="{{asset("admin/vendor/owl-carousel/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/vendor/owl-carousel/css/owl.theme.default.min.css")}}">
    <link href="{{asset("admin/vendor/admin/css/jqvmap.min.css")}}" rel="stylesheet">
    <link href="{{asset("admin/css/style.css")}}" rel="stylesheet">
     <link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=admin+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=favorite,home,search,settings" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



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

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{asset('admin/aaset/logo.svg')}}" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('admin.template.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.template.navbar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        @yield('content')
       
       </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/js/quixnav-init.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{asset('admin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin/vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset("admin/vendor/chart.js/Chart.bundle.min.js")}}"></script>

    <script src="{{asset("admin/vendor/gaugeJS/dist/gauge.min.js")}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset("admin/vendor/flot/jquery.flot.js")}}"></script>
    <script src="{{asset("admin/vendor/flot/jquery.flot.resize.js")}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset("admin/vendor/owl-carousel/js/owl.carousel.min.js")}}"></script>

    <!-- Counter Up -->
    <script src="{{asset("admin/vendor/jqvmap/js/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("admin/vendor/jqvmap/js/jquery.vmap.usa.js")}}"></script>
    <script src="{{asset("admin/vendor/jquery.counterup/jquery.counterup.min.js")}}"></script>


    <script src="{{asset("admin/js/dashboard/dashboard-1.js")}}"></script>


        <!-- Datatable -->
    <script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>

</body>

</html>