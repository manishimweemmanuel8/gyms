<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Gym manager</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
         <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">

           <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

             <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">


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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- <link rel="stylesheet"  href="{{ asset('template/css/bootstrap.min.css')}}"> -->
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet"  href="{{ asset('template/css/font-awesome.min.css')}}">
        
    {{--    <link rel="stylesheet" href="style.css">--}}

    

     
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
            <div class="main-panel" >
                <!-- Navbar -->
                <nav class="navbar fixed-top navbar-expand-lg navbar-transparent  navbar-absolute bg-primary " >
                    <div class="container-fluid"  >
                        <div class="navbar-wrapper" >
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>



                            <a class="navbar-brand" href="{{ url('/manager') }}">
                                Home
                            </a>
                            <a class="navbar-brand" href="{{ url('/manager/Entity') }}">
                                Entity
                            </a>
                            <a class="navbar-brand" href="{{ url('/manager/corporate') }}">
                                Customer
                            </a>
                            <a class="navbar-brand" href="{{ url('/manager/category') }}">
                                Category
                            </a>
                            <a class="navbar-brand" href="{{ url('/manager/sport') }}">
                                Sport
                            </a>
                            <a class="navbar-brand" href="{{ url('/manager/membership') }}">
                                Membership
                            </a>
                            <a class="navbar-brand" href="{{ url('/manager/price') }}">
                                Price
                            </a>
                             <a class="navbar-brand" href="{{ url('/manager/report/daily') }}">
                                Daily report
                            </a>
                              <a class="navbar-brand" href="{{ url('/manager/report/summary') }}">
                                summary report
                            </a>

                             <a class="navbar-brand" href="{{ url('/manager/report/attendance') }}">
                                Attendance
                            </a>


                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                          <!--   <form>
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                                    </span>
                                </div>
                            </form> -->
                            <ul class="navbar-nav">
                             
                                   
                                        <a class="dropdown-item" href="{{ route('manager.logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="icon-logout menu-icon"></i> {{ __('Logout') }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


            <form id="logout-form" action="{{ route('manager.logout') }}" method="POST" style="display: none;">
              @csrf

            </form>

                                                      </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->

                <div class="panel-header panel-header-sm" >

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
<!-- <script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script> -->
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

<!-- Chart JS -->
<!-- <script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script> -->
<!--  Notifications Plugin    -->
<!-- <script src="{{ asset('assets/js/plugins/bootstrap-notify.js')}}"></script> -->
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<!-- <script src="{{ asset('assets/js/now-ui-dashboard.js?v=1.0.1')}}"></script> -->
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<!-- <script src="{{ asset('assets/demo/demo.js')}}"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

<script type="text/javascript">
    
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
             'print'
        ]
    } );
} );
</script>



</html>

