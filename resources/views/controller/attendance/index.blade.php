<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} :: Receptionist</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <link rel="stylesheet" href="{{ asset('template/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/calendar/fullcalendar.print.min.css')}}">
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
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('template/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'GYMS') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @if (Auth::guard('receptionist')->guest())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('receptionist.login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('receptionist.register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('receptionist')->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('receptionist.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('receptionist.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">

                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer</th>
                                            <th>Controller</th>
                                            <th>sport </th>
                                            <th>Membership</th>
                                            <th>Category</th>
                                            <th>Entity</th>
                                            <th>Done At</th>
                                            {{--        <th>Edit</th>--}}
                                            {{--        <th>Delete</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($attendances as $attendance)
                                            <tr>
                                                <td>{{$attendance->id}}</td>
                                                <td>{{$attendance->payment['customer']['firstName']}}  {{$attendance->payment['customer']['lastName']}}</td>
                                                <td>{{$attendance->controller->name}}</td>
                                                <td>{{$attendance->payment['sport']['name']}}</td>
                                                <td>{{$attendance->payment['membership']['name']}}</td>
                                                <td>{{$attendance->payment['categorie']['name']}}</td>
                                                <td>{{$attendance->payment['customer']['entitie']['name']}}</td>
                                                <td>{{$attendance->created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
        </div>
    </main>
</div>

    <!-- Static Table End -->


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
</body>

</html>
