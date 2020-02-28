<!-- create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Gym Manager</title>
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
 
 
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->

  
    <!-- style CSS
        ============================================ -->
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



                            <a class="navbar-brand" href="#pablo">For Manager</a>
                            <a class="navbar-brand" href="{{ url('/manager/Entity') }}">
                                Entity
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
                             
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="now-ui-icons location_world"></i>
                                        <p>
                                            <span class="d-lg-none d-md-block">Some Actions</span>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('manager.logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="icon-logout menu-icon"></i> {{ __('Logout') }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


            <form id="logout-form" action="{{ route('manager.logout') }}" method="POST" style="display: none;">
              @csrf

            </form>
                                    </div>
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


            <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Add sport</h2>

                     <!-- Message -->
    



  <form class="justify-content-center" method="post"  action="{{route('sport.new')}}"  id="contact_form">

    {{ csrf_field() }}


     <div class="row">
        <div class="col">
      <label hidden="">Name</label>
     <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="id" value="{{$entity->id}}" hidden="">
    </div>
    <div class="col">
      <label hidden="" >Email</label> 
        <input type="email" class="form-control" name="email" hidden="">
    </div>
</div>

   

            <div class="row">
                <div class ="col">
                  <label>select sport</label>
                <select id="sport" name="sport_id" class="form-control"  >
                <option value="" selected disabled>--- Select Sport ---</option>
                  @foreach($sports as $key => $sport)
                  <option value="{{$key}}"> {{$sport}}</option>
                  @endforeach
                  </select>
          </div>

            <div class="col">
              <label>select sport</label>
                <select id="sport" name="sport_id_one" class="form-control"  >
                <option value="" selected disabled>--- Select Sport ---</option>
                  @foreach($sports as $key => $sport)
                  <option value="{{$key}}"> {{$sport}}</option>
                  @endforeach
                  </select>
          </div>
      </div>

       <div class="row">
                <div class ="col">
              <label>select sport</label>
                <select id="sport" name="sport_id_two" class="form-control"  >
                <option value="" selected disabled>--- Select Sport ---</option>
                  @foreach($sports as $key => $sport)
                  <option value="{{$key}}"> {{$sport}}</option>
                  @endforeach
                  </select>
          </div>

            <div class="col">
              <label>select sport</label>
                <select id="sport" name="sport_id_three" class="form-control"  >
                <option value="" selected disabled>--- Select Sport ---</option>
                  @foreach($sports as $key => $sport)
                  <option value="{{$key}}"> {{$sport}}</option>
                  @endforeach
                  </select>
          </div>
      </div>


           <div class="row">
            <div class="col">
       <label >Location</label>

        <select name="location" class="form-control">
          <option value="">---- select location  -----</option>
          <option value="1">Gym</option>
          <option value="2">Pool</option>
        <option value="3">Sauna</option>
          <option value="4">Massage</option>
          <option value="4">All</option>
        </select>

    </div>
            <div class="col"> 
              <label >Membership</label> 
        <input type="number" class="form-control" name="membership_id" >
            </div>
        </div>

 <div class="row">
    <div class="col">
      <label >Expiry Date</label> 
        <input type="date" class="form-control" name="expiry_date">
    </div>
   <div class="col">
        <label >Payment Type</label>
        <select name="payment_type" class="form-control">
          <option value="">---- select payment type  -----</option>
          <option value="person">Per person</option>
          <option value="flat">flat</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="col">

      <input type="submit" class="btn btn-primary">
  </div>
   <div class="col">
      <a href="{{ url('/manager/Entity') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
    

 
  </form>
</div>
</div>
</div>
 </div>





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

