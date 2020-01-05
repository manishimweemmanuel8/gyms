<html>
  <head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} :: Receptionist</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src={{asset('jquery.js')}}></script>
    <script src={{asset("jQuery.print.js")}}></script>
    <script>
    // here we will write our custom code for printing our div
    $(function(){
    $('#print').on('click', function() {
    //Print ele2 with default options
    $.print(".print_div");
    });
    });
    </script>


    


    
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'GYMS') }}
            </a>
            <a class="navbar-brand" href="{{ url('/receptionist/customer') }}">
                Customer
            </a>
            <a class="navbar-brand" href="{{ url('/receptionist/payment') }}">
                Payment
            </a>
             <a class="navbar-brand" href="{{ url('/report/report') }}">
                Report
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


    <div class='print_div' >
  <div class="content-wrapper">
   
       <button id='print'>PRINT</button>

        <div class='print_div'>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">



          <div class="col-sm-6">
            <h1>CASHIER REPORT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tel:+250788358041        Address: Hilltop Hotel, Remera</a></li>
              <li class="breadcrumb-item"><a href="#">Email:info.bodymax@gmail.com      Kigali-Rwanda</a></li>
            </ol>
                          <p class="breadcrumb-item">Date  : {{date('Y-m-d')}}</p>

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">GYM</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan='2'>SERVICE</th>
                      <th rowspan='2' colspan='2'>COUNT</th>
                      <th rowspan='2'>UNIT Price</th>
                      <th colspan='3'>Total Amount RWF</th>
                    </tr>

                      <th >Cash</th>
                      <th >VISA</th>
                      <th >MoMo</th>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Session</td>
                      
                      <td>{{\App\Http\Controllers\reportController::gymSessionAdult()}}
</td>
                       
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymSessionAdultAmount()*\App\Http\Controllers\reportController::gymSessionAdult()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymSessionAdultAmount()}} RWF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Students</td>
                      <td>{{\App\Http\Controllers\reportController::gymStudent()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymStudentAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymStudentAmount()*\App\Http\Controllers\reportController::gymStudent()}} RWF</td>
                      <td></td>
                      <td></td>
                    </tr>
                  
                      <td>Month</td>
                      <td>{{\App\Http\Controllers\reportController::gymMonth()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymMonthAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymMonthAmount()*\App\Http\Controllers\reportController::gymMonth()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <td>Year</td>
                      <td>{{\App\Http\Controllers\reportController::gymYear()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymYearAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymYearAmount()*\App\Http\Controllers\reportController::gymYear()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Tickets</td>
                      <td>{{\App\Http\Controllers\reportController::gymTicket()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymTicketAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymTicket()*\App\Http\Controllers\reportController::gymYearAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{\App\Http\Controllers\reportController::gymTicket()*\App\Http\Controllers\reportController::gymYearAmount()+\App\Http\Controllers\reportController::gymSessionAdult()*\App\Http\Controllers\reportController::gymSessionAdultAmount()+\App\Http\Controllers\reportController::gymStudent()*App\Http\Controllers\reportController::gymStudentAmount()+\App\Http\Controllers\reportController::gymMonth()*\App\Http\Controllers\reportController::gymMonthAmount()+\App\Http\Controllers\reportController::gymYear()*\App\Http\Controllers\reportController::gymYearAmount()}} RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                  </tbody>
                </table>
                        <div class="row">

          <div class="col-md-6">

            <table class="table table-bordered">
                  <thead>
                   <tr>
                      <th colspan='2'>GYM ATTENDANCE REPORT</th>
                    </tr>


                  </thead>
                  <tbody>
                    <tr>
                      <td>Session</td>
                      <td>{{\App\Http\Controllers\reportController::gymSessionAdult()+\App\Http\Controllers\reportController::gymStudent()}}</td>
                    </tr>
                    <tr>
                      <td>Subscribers</td>
                      <td>{{\App\Http\Controllers\reportController::gymMonth()+\App\Http\Controllers\reportController::gymYear()}}</td>
                    </tr>
                    <tr>
                      <td>Tickets Return</td>
                      <td>{{\App\Http\Controllers\reportController::gymTicket()}}</td>
                      </tr>
                    <tr>
                      <td>Companies</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Hotel guest</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td><b>Total Service</b></td>
                      <td>{{\App\Http\Controllers\reportController::gymTicket()+\App\Http\Controllers\reportController::gymSessionAdult()+\App\Http\Controllers\reportController::gymStudent()+App\Http\Controllers\reportController::gymMonth()+\App\Http\Controllers\reportController::gymYear()}}</td>
                      </tr>
                  </tbody>
                </table>
                </div>

                <div class="col-md-6">

            <table class="table table-bordered">
                  <thead>
                   <tr>
                      <th colspan='2'>MASSAGE ATTENDANCE REPORT</th>
                    </tr>


                  </thead>
                  <tbody>
                    <tr>
                      <td>Session</td>
                      <td>{{\App\Http\Controllers\reportController::massageSessionAdult()}}</td>
                    </tr>

                    <tr>
                      <td>Tickets Return</td>
                      <td>{{\App\Http\Controllers\reportController::massageTicket()}}</td>
                      </tr>
                    <tr>
                      <td>Companies</td>
                      <td></td>
                      </tr>

                      <tr>
                      <td><b>Total Service</b></td>
                      <td>{{\App\Http\Controllers\reportController::massageTicket()+\App\Http\Controllers\reportController::massageSessionAdult()}}</td>
                      </tr>
                  </tbody>
                </table>
                </div>


</div>

              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->

            <div class="card">

              <div class="card-header">
                <h3 class="card-title">MASSAGE</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan='2'>SERVICE</th>
                      <th rowspan='2' colspan='2'>COUNT</th>
                      <th rowspan='2'>UNIT Price</th>
                      <th colspan='3'>Total Amount RWF</th>
                    </tr>

                      <th >Cash</th>
                      <th >VISA</th>
                      <th >MoMo</th>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Session</td>
                      <td>{{\App\Http\Controllers\reportController::massageSessionAdult()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::massageSessionAdultAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::massageSessionAdult()*\App\Http\Controllers\reportController::massageSessionAdultAmount()}} RWF</td>
                      <td></td>
                      <td></td>
                    </tr>

                      <tr>
                      <td>Tickets</td>
                      <td>{{\App\Http\Controllers\reportController::massageTicket()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::massageTicketAmount()}}</td>
                      <td>{{\App\Http\Controllers\reportController::massageTicket()*\App\Http\Controllers\reportController::massageTicketAmount()}}</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{\App\Http\Controllers\reportController::massageTicket()*\App\Http\Controllers\reportController::massageTicketAmount()+\App\Http\Controllers\reportController::massageSessionAdult()*\App\Http\Controllers\reportController::massageSessionAdultAmount()}} RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">SWIMMING POOL</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan='2'>SERVICE</th>
                      <th rowspan='2' colspan='2'>COUNT</th>
                      <th rowspan='2'>UNIT Price</th>
                      <th colspan='3'>Total Amount RWF</th>
                    </tr>

                      <th >Cash</th>
                      <th >VISA</th>
                      <th >MoMo</th>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Session Adults</td>
                      <td>{{\App\Http\Controllers\reportController::poolSessionAdult()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::poolSessionAdultAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::poolSessionAdult()*\App\Http\Controllers\reportController::poolSessionAdultAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Students</td>
                      <td>{{\App\Http\Controllers\reportController::poolStudent()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::poolStudentAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::poolStudent()*\App\Http\Controllers\reportController::poolStudentAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Session Kids</td>
                      <td>{{\App\Http\Controllers\reportController::poolSessionKid()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::poolSessionKidAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::poolSessionKid()*\App\Http\Controllers\reportController::poolSessionKidAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                    <tr>
                      <td>Month Adults</td>
                      <td>{{\App\Http\Controllers\reportController::poolMonthAdult()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::poolMonthAdultAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::poolMonthAdult()*\App\Http\Controllers\reportController::poolMonthAdultAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Month Kids</td>
                      <td>{{\App\Http\Controllers\reportController::poolMonthKid()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::poolMonthKidAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::poolMonthKid()*\App\Http\Controllers\reportController::poolMonthKidAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Year</td>
                      <td>{{\App\Http\Controllers\reportController::poolYear()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::poolYearAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::poolYear()*\App\Http\Controllers\reportController::poolYearAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Tickets</td>
                      <td>{{\App\Http\Controllers\reportController::poolTicket()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::poolTicketAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::poolTicketAmount()*\App\Http\Controllers\reportController::poolTicket()}} RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{\App\Http\Controllers\reportController::poolTicketAmount()*\App\Http\Controllers\reportController::poolTicket()+\App\Http\Controllers\reportController::poolTicketAmount()*\App\Http\Controllers\reportController::massageTicket()+\App\Http\Controllers\reportController::poolSessionAdult()*\App\Http\Controllers\reportController::poolSessionAdultAmount()+\App\Http\Controllers\reportController::poolStudent()*\App\Http\Controllers\reportController::poolStudentAmount()+\App\Http\Controllers\reportController::poolSessionKid()*\App\Http\Controllers\reportController::poolSessionKidAmount()+\App\Http\Controllers\reportController::poolMonthAdult()*\App\Http\Controllers\reportController::poolMonthAdultAmount()+\App\Http\Controllers\reportController::poolMonthKid()*\App\Http\Controllers\reportController::poolMonthKidAmount()+\App\Http\Controllers\reportController::poolYear()*\App\Http\Controllers\reportController::poolYearAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                  </tbody>
                </table>

                </div>
                </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                <h3 class="card-title">SAUNA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan='2'>SERVICE</th>
                      <th rowspan='2' colspan='2'>COUNT</th>
                      <th rowspan='2'>UNIT Price</th>
                      <th colspan='3'>Total Amount RWF</th>
                    </tr>

                      <th >Cash</th>
                      <th >VISA</th>
                      <th >MoMo</th>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Session</td>
                      <td>{{\App\Http\Controllers\reportController::saunaSession()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::saunaSessionAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::saunaSession()*\App\Http\Controllers\reportController::saunaSessionAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                    </tr>

                      <td>Month</td>
                      <td>{{\App\Http\Controllers\reportController::saunaMonth()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::saunaMonthAmount()}} RWF</td>
                      <td>{{\App\Http\Controllers\reportController::saunaMonth()*\App\Http\Controllers\reportController::saunaMonthAmount()}} RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>


                      <td>Year</td>
                      <td>{{\App\Http\Controllers\reportController::saunaYear()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::saunaYearAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::saunaYear()*\App\Http\Controllers\reportController::saunaYearAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Tickets</td>
                      <td>{{\App\Http\Controllers\reportController::saunaTicket()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::saunaTicketAmount()}}</td>
                      <td>{{\App\Http\Controllers\reportController::saunaTicket()*\App\Http\Controllers\reportController::saunaTicketAmount()}}</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{\App\Http\Controllers\reportController::saunaTicket()*\App\Http\Controllers\reportController::saunaTicketAmount()+\App\Http\Controllers\reportController::saunaSession()*\App\Http\Controllers\reportController::saunaSessionAmount()+\App\Http\Controllers\reportController::saunaMonth()*\App\Http\Controllers\reportController::saunaMonthAmount()+\App\Http\Controllers\reportController::saunaYear()*\App\Http\Controllers\reportController::saunaYearAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                  </tbody>
                </table>
                        <div class="row">

          <div class="col-md-6">

            <table class="table table-bordered">
                  <thead>
                   <tr>
                      <th colspan='2'>SAUNA ATTENDANCE REPORT</th>
                    </tr>


                  </thead>
                  <tbody>
                    <tr>
                      <td>Session</td>
                      <td>{{\App\Http\Controllers\reportController::saunaSession()}}</td>
                    </tr>
                    <tr>
                      <td>Subscribers</td>
                      <td>{{\App\Http\Controllers\reportController::saunaMonth()+\App\Http\Controllers\reportController::saunaYear()}}</td>
                    </tr>
                    <tr>
                      <td>Tickets Return</td>
                      <td>{{\App\Http\Controllers\reportController::saunaTicket()}}</td>
                      </tr>
                    <tr>
                      <td>Companies</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Hotel guest</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td><b>Total Service</b></td>
                      <td>{{\App\Http\Controllers\reportController::saunaTicket()+\App\Http\Controllers\reportController::saunaSession()+\App\Http\Controllers\reportController::saunaMonth()+\App\Http\Controllers\reportController::saunaYear()}}</td>
                      </tr>
                  </tbody>
                </table>
                </div>

                <div class="col-md-6">

            <table class="table table-bordered">
                  <thead>
                   <tr>
                      <th colspan='2'>SERVICES COMBINATION ATTENDANCE REPORT</th>
                    </tr>


                  </thead>
                  <tbody>
                    <tr>
                      <td>Session</td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolSession()+\App\Http\Controllers\reportController::gymSaunaSession()+\App\Http\Controllers\reportController::saunaMassageSession()+\App\Http\Controllers\reportController::saunaPoolSession()}}</td>
                    </tr>

                    <tr>
                      <td>Month</td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolMonth()+\App\Http\Controllers\reportController::gymSaunaMonth()+\App\Http\Controllers\reportController::saunaPoolMonth()}}</td>
                      </tr>

                      <tr>
                      <td><b>Total Service</b></td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolSession()+\App\Http\Controllers\reportController::gymSaunaSession()+\App\Http\Controllers\reportController::saunaMassageSession()+\App\Http\Controllers\reportController::saunaPoolSession()+\App\Http\Controllers\reportController::gymPoolMonth()+\App\Http\Controllers\reportController::gymSaunaMonth()+\App\Http\Controllers\reportController::saunaPoolMonth()}}</td>
                      </tr>
                  </tbody>
                </table>
                </div>


</div>

              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->

            <div class="card">

              <div class="card-header">
                <h3 class="card-title">SERVICE COMBINATION</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan='2'>SERVICE</th>
                      <th rowspan='2' colspan='2'>COUNT</th>
                      <th rowspan='2'>UNIT Price</th>
                      <th colspan='3'>Total Amount RWF</th>
                    </tr>

                      <th >Cash</th>
                      <th >VISA</th>
                      <th >MoMo</th>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Gym & Swim Day</td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolSession()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolSessionAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolSession()*\App\Http\Controllers\reportController::gymPoolSessionAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                    </tr>

                      <tr>
                      <td>Gym & Swim Month</td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolMonth()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolMonthAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolMonth()*\App\Http\Controllers\reportController::gymPoolMonthAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Gym & SAUNA dAY</td>
                      <td>{{\App\Http\Controllers\reportController::gymSaunaSession()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymSaunaSessionAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymSaunaSession()*\App\Http\Controllers\reportController::gymSaunaSessionAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Gym & SAUNA Month</td>
                       <td>{{\App\Http\Controllers\reportController::gymSaunaMonth()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::gymSaunaMonthAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::gymSaunaMonth()*\App\Http\Controllers\reportController::gymSaunaMonthAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>SAUNA & Massage</td>
                       <td>{{\App\Http\Controllers\reportController::saunaMassageSession()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::saunaMassageSessionAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::saunaMassageSession()*\App\Http\Controllers\reportController::saunaMassageSessionAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>SAUNA & Swim Day</td>
                     <td>{{\App\Http\Controllers\reportController::saunaPoolSession()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::saunaPoolSessionAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::saunaPoolSession()*\App\Http\Controllers\reportController::saunaPoolSessionAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>SAUNA & Swim Month</td>
                      <td>{{\App\Http\Controllers\reportController::saunaPoolMonth()}}</td>
                      <td>x</td>
                      <td>{{\App\Http\Controllers\reportController::saunaPoolMonthAmount()}}RWF</td>
                      <td>{{\App\Http\Controllers\reportController::saunaPoolMonth()*\App\Http\Controllers\reportController::saunaPoolMonthAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>


                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{\App\Http\Controllers\reportController::gymPoolSession()*\App\Http\Controllers\reportController::gymPoolSessionAmount()+\App\Http\Controllers\reportController::gymPoolMonth()*\App\Http\Controllers\reportController::gymPoolMonthAmount()+\App\Http\Controllers\reportController::gymSaunaSession()*\App\Http\Controllers\reportController::gymSaunaSessionAmount()+\App\Http\Controllers\reportController::gymSaunaMonth()*\App\Http\Controllers\reportController::gymSaunaMonthAmount()+\App\Http\Controllers\reportController::saunaMassageSession()*\App\Http\Controllers\reportController::saunaMassageSessionAmount()+\App\Http\Controllers\reportController::saunaPoolSession()*\App\Http\Controllers\reportController::saunaPoolSessionAmount()+\App\Http\Controllers\reportController::saunaPoolMonth()*\App\Http\Controllers\reportController::saunaPoolMonthAmount()}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="row">

          <div class="col-md-4">

            <table class="table table-bordered">
                  <thead>
                   <tr>
                      <th colspan='2'>ATTENDANCE REPORT</th>
                    </tr>


                  </thead>
                  <tbody>
                    <tr>
                      <td>Session</td>
                      <td>{{\App\Http\Controllers\reportController::gymSessionAdult()+\App\Http\Controllers\reportController::gymStudent()+\App\Http\Controllers\reportController::massageSessionAdult()+\App\Http\Controllers\reportController::poolSessionAdult()+\App\Http\Controllers\reportController::poolStudent()+\App\Http\Controllers\reportController::poolSessionKid()+\App\Http\Controllers\reportController::saunaSession()+\App\Http\Controllers\reportController::gymPoolSession()+\App\Http\Controllers\reportController::gymSaunaSession()+\App\Http\Controllers\reportController::saunaMassageSession()+\App\Http\Controllers\reportController::saunaPoolSession()}}</td>
                    </tr>
                    <tr>
                      <td>Subscribers</td>
                      <td>{{\App\Http\Controllers\reportController::gymMonth()+\App\Http\Controllers\reportController::poolMonthAdult()+\App\Http\Controllers\reportController::poolMonthKid()+\App\Http\Controllers\reportController::saunaMonth()+\App\Http\Controllers\reportController::gymYear()+\App\Http\Controllers\reportController::poolYear()+\App\Http\Controllers\reportController::saunaYear()+\App\Http\Controllers\reportController::gymPoolMonth()+\App\Http\Controllers\reportController::gymSaunaMonth()+\App\Http\Controllers\reportController::saunaPoolMonth()}}</td>
                    </tr>
                    <tr>
                      <td>Tickets Return</td>
                      <td>{{\App\Http\Controllers\reportController::saunaTicket()+\App\Http\Controllers\reportController::poolTicket()+\App\Http\Controllers\reportController::massageTicket()+\App\Http\Controllers\reportController::gymTicket()}}</td>
                      </tr>
                    <tr>
                      <td>Companies</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Hotel guest</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td><b>Total Service</b></td>
                      <td>{{\App\Http\Controllers\reportController::saunaTicket()+\App\Http\Controllers\reportController::poolTicket()+\App\Http\Controllers\reportController::massageTicket()+\App\Http\Controllers\reportController::gymTicket()+\App\Http\Controllers\reportController::gymSessionAdult()+\App\Http\Controllers\reportController::gymStudent()+\App\Http\Controllers\reportController::massageSessionAdult()+\App\Http\Controllers\reportController::poolSessionAdult()+\App\Http\Controllers\reportController::poolStudent()+\App\Http\Controllers\reportController::poolSessionKid()+\App\Http\Controllers\reportController::saunaSession()+\App\Http\Controllers\reportController::gymPoolSession()+\App\Http\Controllers\reportController::gymSaunaSession()+\App\Http\Controllers\reportController::saunaMassageSession()+\App\Http\Controllers\reportController::saunaPoolSession()+\App\Http\Controllers\reportController::gymMonth()+\App\Http\Controllers\reportController::poolMonthAdult()+\App\Http\Controllers\reportController::poolMonthKid()+\App\Http\Controllers\reportController::saunaMonth()+\App\Http\Controllers\reportController::gymYear()+\App\Http\Controllers\reportController::poolYear()+\App\Http\Controllers\reportController::saunaYear()+\App\Http\Controllers\reportController::gymPoolMonth()+\App\Http\Controllers\reportController::gymSaunaMonth()+\App\Http\Controllers\reportController::saunaPoolMonth()}}</td>
                      </tr>
                  </tbody>
                </table>
                </div>

                <div class="col-md-6">

                     <br>
                     <br>
                   <div class="">
                <h5 class="card-title">Total Cash Deposit</h5>
              </div>
              <br>
                     <br>
               <div class="">
                <h5 class="card-title">Cahier Name & Signature :</h5>
              </div>
              <br>
                     <br>
               <div class="">
                <h5 class="card-title">Controller Name & Signature :</h5>
              </div>






                </div>


</div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
</div>
</div>


    <!-- /.content -->

       
</div>

</body>
</html>




