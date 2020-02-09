<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Gym receptionist</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.0.1')}}" rel="stylesheet"/>
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('assets/demo/demo.css')}}" rel="stylesheet" />
        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
       <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link rel="stylesheet"  href="{{ asset('template/css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet"  href="{{ asset('template/css/font-awesome.min.css')}}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet"  href="{{ asset('template/css/owl.carousel.css')}}">
        <link rel="stylesheet"  href="{{ asset('template/css/owl.theme.css')}}">
        <link rel="stylesheet"  href="{{ asset('template/css/owl.transitions.css')}}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/animate.css')}}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/normalize.css')}}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/meanmenu.min.css')}}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/main.css')}}">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/educate-custon-icon.css')}}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/morrisjs/morris.css')}}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/metisMenu/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css')}}">
        <!-- calendar CSS
            ============================================ -->

        <!-- x-editor CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/editor/select2.css')}}">
        <link rel="stylesheet" href="{{ asset('template/css/editor/datetimepicker.css')}}">
        <link rel="stylesheet" href="{{ asset('template/css/editor/bootstrap-editable.css')}}">
        <link rel="stylesheet" href="{{ asset('template/css/editor/x-editor-style.css')}}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/data-table/bootstrap-table.css')}}">
        <link rel="stylesheet" href="{{ asset('template/css/data-table/bootstrap-editable.css')}}">
        <!-- style CSS
            ============================================ -->
    {{--    <link rel="stylesheet" href="style.css">--}}
    <!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/responsive.css')}}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{ asset('template/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="yellow">
                <!--
                Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
                -->
                <div class="logo">
                 <img src="{{asset('assets/photos/logo.png')}}" height="160" width="100%">

                </div>


                <div class="sidebar-wrapper">
                    <img src="{{asset('assets/photos/Aqua_A4.jpg')}}" height="100%">
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>

                          
                             <a class="navbar-brand" href="#pablo">For Controller</a>
                            <a class="navbar-brand" href="{{ url('/control/attendance') }}">
                                Attendance
                            </a>


                            <a class="navbar-brand" href="#pablo">For receptionists</a>
                            <a class="navbar-brand" href="{{ url('/receptionist/customer') }}">
                                Customer
                            </a>
                            <a class="navbar-brand" href="{{ url('/receptionist/payment') }}">
                                Payment
                            </a>
                            <a class="navbar-brand" href="{{ url('/report/report') }}">
                                Report
                            </a>
                          
                          


                        </div>
                 <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button> -->
                       <!--  <div class="collapse navbar-collapse justify-content-end" id="navigation">
                       
                           
                        </div> -->
                    </div>
                </nav>
                            
                <!-- End Navbar -->

                <div class="panel-header panel-header-sm">

                </div>
                <div class="content">

                @include('multiauth::message')

                    @yield('content')
                    
                     </div>
             <footer class="footer">
                <div class="container-fluid">
                   
                        <center>&copy;
                                                <script>
                                                    document.write(new Date().getFullYear())
                                                </script>, Designed by
                                                <a href="#">Etouch &nbsp;</a>Solutions
                                                <a href="#" target="_blank">Home of the best</a>.</center>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/now-ui-dashboard.js?v=1.0.1')}}"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/demo/demo.js')}}"></script>


    <!-- jquery
        ============================================ -->
    <script src="{{ asset('template/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ asset('template/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{ asset('template/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{ asset('template/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{ asset('template/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{ asset('template/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{ asset('template/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->

    <script src="{{ asset('template/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{ asset('template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('template/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{ asset('template/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('template/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{ asset('template/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{ asset('template/js/data-table/tableExport.js')}}"></script>
    <script src="{{ asset('template/template/js/data-table/data-table-active.js')}}"></script>
    <script src="{{ asset('template/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{ asset('template/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{ asset('template/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{ asset('template/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{ asset('template/js/data-table/bootstrap-table-export.js')}}"></script>
    <!--  editable JS
        ============================================ -->
    <script src="{{ asset('template/js/editable/jquery.mockjax.js')}}"></script>
    <script src="{{ asset('template/js/editable/mock-active.js')}}"></script>
    <script src="{{ asset('template/js/editable/select2.js')}}"></script>
    <script src="{{ asset('template/js/editable/moment.min.js')}}"></script>
    <script src="{{ asset('template/js/editable/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{ asset('template/js/editable/bootstrap-editable.js')}}"></script>
    <script src="{{ asset('template/js/editable/xediable-active.js')}}"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="{{ asset('template/js/chart/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('template/js/peity/peity-active.js')}}"></script>
    <!-- tab JS
        ============================================ -->
    <script src="{{ asset('template/js/tab.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{ asset('template/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{ asset('template/js/main.js')}}"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="{{ asset('template/js/tawk-chat.js')}}"></script>

</html>

