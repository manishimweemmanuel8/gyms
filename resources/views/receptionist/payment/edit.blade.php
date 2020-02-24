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
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="http://www.codermen.com/js/jquery.js"></script>
  
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    {{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link rel="stylesheet"  href="{{ asset('template/css/bootstrap.min.css')}}">--}}
    <!-- Bootstrap CSS
        ============================================ -->
{{--    <link rel="stylesheet"  href="{{ asset('template/css/font-awesome.min.css')}}">--}}
{{--    <!-- owl.carousel CSS--}}
{{--        ============================================ -->--}}
{{--    <link rel="stylesheet"  href="{{ asset('template/css/owl.carousel.css')}}">--}}
{{--    <link rel="stylesheet"  href="{{ asset('template/css/owl.theme.css')}}">--}}
{{--    <link rel="stylesheet"  href="{{ asset('template/css/owl.transitions.css')}}">--}}
{{--    <!-- animate CSS--}}
{{--        ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/animate.css')}}">--}}
{{--    <!-- normalize CSS--}}
{{--        ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/normalize.css')}}">--}}
{{--    <!-- meanmenu icon CSS--}}
{{--        ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/meanmenu.min.css')}}">--}}
    <!-- main CSS
        ============================================ -->
{{--    <link rel="stylesheet" href="{{ asset('template/css/main.css')}}">--}}
{{--    <!-- educate icon CSS--}}
{{--        ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/educate-custon-icon.css')}}">--}}
{{--    <!-- morrisjs CSS--}}
{{--        ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/morrisjs/morris.css')}}">--}}
{{--    <!-- mCustomScrollbar CSS--}}
{{--        ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">--}}
    <!-- metisMenu CSS
        ============================================ -->
{{--    <link rel="stylesheet" href="{{ asset('template/css/metisMenu/metisMenu.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css')}}">--}}
    <!-- calendar CSS
        ============================================ -->

    <!-- x-editor CSS
        ============================================ -->
{{--    <link rel="stylesheet" href="{{ asset('template/css/editor/select2.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/editor/datetimepicker.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/editor/bootstrap-editable.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/editor/x-editor-style.css')}}">--}}
{{--    <!-- normalize CSS--}}
{{--        ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/data-table/bootstrap-table.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('template/css/data-table/bootstrap-editable.css')}}">--}}
    <!-- style CSS
        ============================================ -->
{{--    <link rel="stylesheet" href="style.css">--}}
<!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
{{--    <script src="{{ asset('template/js/vendor/modernizr-2.8.3.min.js')}}"></script>--}}
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
                    <a class="navbar-brand" href="{{ url('/receptionist/session') }}">
                        Session
                    </a>


                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                                    </span>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons location_world"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('receptionist.logout') }}"
                                   onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                                    <i class="icon-logout menu-icon"></i> {{ __('Logout') }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    <form id="logout-form" action="{{ route('receptionist.logout') }}" method="POST" style="display: none;">
                                        @csrf

                                    </form>
                                </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="panel-header panel-header-sm">

        </div>
        <div class="content">

            @include('multiauth::message')

 <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Payment Info</h2>



                    <form class="well form-horizontal" id="contact_form" method="post" action="{{action('Receptionist\PaymentController@update', $id)}}">
  {{csrf_field()}}
     @if($customers !=null)
    <div class="row">
        <div class="col">

      
        
      <label>customers Name</label>
      <select name="customer_id" class="form-control">
            <option value="{{$payment->customer_id}}">{{$payment->customer['firstName']}}  {{$payment->customer['lastName']}}</option>
                    @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->firstName}} {{ $customer->lastName}}</option>
                    @endforeach
                </select>
  </div>
    @endif

            <div class="col">
              <label>select Category</label>
                <select id="category" name="categorie_id" class="form-control"  >
<option value="{{$payment->categorie_id}}">{{$payment->categorie['name']}}</option>                  @foreach($categories as $key => $categorie)
                  <option value="{{$key}}"> {{$categorie}}</option>
                  @endforeach
                  </select>
          </div>
      </div>

            <div class="row">
                <div class="col">

                <label for="title">Select Sport</label>

                <select name="sport_id" id="sport" class="form-control" >
                  <option value="{{$payment->sport_id}}">{{$payment->sport['name']}}</option>
                </select>
          </div>
         
            <div class="col">
            
      
                <label for="title">Select Membership</label>
                <select name="membership_id" id="membership" class="form-control" >
                   <option value="{{$payment->membership_id}}">{{$payment->membership['name']}}</option>
                </select>
            </div>
            </div>




             <div class="row">
                <div class="col">
                <label for="title">Expiry Date:</label>
                        <input type="date" class="form-control" id="lgFormGroupInput" name="expiry_date" value="{{$payment->expiry_date}}">

            </div>


    <div class="col">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    <div class="col">
      <a href="{{ url('/receptionist/payment') }}" class="btn btn-primary">Back</a>
    </div>
</div>
  </form>
</div>
</div>
</div>
 </div>




<script type="text/javascript">
    $('#category').change(function(){
    var categoryID = $(this).val();    
    if(categoryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-sport-list')}}?category_id="+categoryID,
           success:function(res){               
            if(res){
                $("#sport").empty();
                $("#sport").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#sport").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#sport").empty();
            }
           }
        });
    }else{
        $("#sport").empty();
        $("#membership").empty();
    }      
   });
    $('#sport').on('change',function(){
    var sportID = $(this).val();    
    if(sportID){
        $.ajax({
           type:"GET",
           url:"{{url('get-membership-list')}}?sport_id="+sportID,
           success:function(res){               
            if(res){
                $("#membership").empty();
                $.each(res,function(key,value){
                    $("#membership").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#membership").empty();
            }
           }
        });
    }else{
        $("#membership").empty();
    }
        
   });
</script>

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


</html>



