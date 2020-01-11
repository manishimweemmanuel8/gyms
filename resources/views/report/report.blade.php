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

            <form method="post" action="{{url('report/report')}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">From:</label>

                    <div class="col-sm-10">
                        <input type="date" name="from" id="from" class="form-control" >
                    </div>

                </div>

                <div class="form-group">
                    <label for="title">To:</label>

                    <div class="col-sm-10">
                        <input type="date" name="to" id="to" class="form-control" >
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-md-2"></div>
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>


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
                      
                      <td>{{$gymSessionAdult}}
</td>
                       
                      <td>x</td>
                      <td>{{$gymSessionAdultAmount}} RWF</td>
                      <td>{{$cashGymSessionAdult}} RWF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Students</td>
                      <td>{{$gymStudent}}</td>
                      <td>x</td>
                      <td>{{$gymStudentAmount}} RWF</td>
                      <td>{{$cashGymStudent}} RWF</td>
                      <td></td>
                      <td></td>
                    </tr>
                  
                      <td>Month</td>
                      <td>{{$gymMonth}}</td>
                      <td>x</td>
                      <td>{{$gymMonthAmount}}RWF</td>
                      <td>{{$cashGymMonth}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <td>Year</td>
                      <td>{{$gymYear}}</td>
                      <td>x</td>
                      <td>{{$gymYearAmount}}RWF</td>
                      <td>{{$cashGymYear}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Tickets</td>
                      <td>{{$gymTicket}}</td>
                      <td>x</td>
                      <td>{{$gymTicketAmount}}RWF</td>
                      <td>{{$cashGymTickets}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{$gymTotalSales}} RWF</td>
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
                      <td>{{$gymAttandanceSession}}</td>
                    </tr>
                    <tr>
                      <td>Subscribers</td>
                      <td>{{$gymAttandanceSubscribers}}</td>
                    </tr>
                    <tr>
                      <td>Tickets Return</td>
                      <td>{{$gymTicket}}</td>
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
                      <td>{{$gymTotalService}}</td>
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
                      <td>{{$massageSessionAdult}}</td>
                    </tr>

                    <tr>
                      <td>Tickets Return</td>
                      <td>{{$massageTicket}}</td>
                      </tr>
                    <tr>
                      <td>Companies</td>
                      <td></td>
                      </tr>

                      <tr>
                      <td><b>Total Service</b></td>
                      <td>{{$massageTotalService}}</td>
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
                      <td>{{$massageSessionAdult}}</td>
                      <td>x</td>
                      <td>{{$massageSessionAdultAmount}} RWF</td>
                      <td>{{$cashMassageSession}} RWF</td>
                      <td></td>
                      <td></td>
                    </tr>

                      <tr>
                      <td>Tickets</td>
                      <td>{{$massageTicket}}</td>
                      <td>x</td>
                      <td>{{$massageTicketAmount}} RWF</td>
                      <td>{{$cashMassageTicket}} RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{$massageTotalSales}} RWF</td>
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
                      <td>{{$poolSessionAdult}}</td>
                      <td>x</td>
                      <td>{{$poolSessionAdultAmount}}RWF</td>
                      <td>{{$cashPoolSessionAdult}}RWF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Students</td>
                      <td>{{$poolStudent}}</td>
                      <td>x</td>
                      <td>{{$poolStudentAmount}} RWF</td>
                      <td>{{$cashPoolStudent}}RWF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Session Kids</td>
                      <td>{{$poolSessionKid}}</td>
                      <td>x</td>
                      <td>{{$poolSessionKidAmount}} RWF</td>
                      <td>{{$cashPoolSessionKid}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                    <tr>
                      <td>Month Adults</td>
                      <td>{{$poolMonthAdult}}</td>
                      <td>x</td>
                      <td>{{$poolMonthAdultAmount}} RWF</td>
                      <td>{{$cashPoolMonthAdult}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Month Kids</td>
                      <td>{{$poolMonthKid}}</td>
                      <td>x</td>
                      <td>{{$poolMonthKidAmount}} RWF</td>
                      <td>{{$cashPoolMonthKid}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Year</td>
                      <td>{{$poolYear}}</td>
                      <td>x</td>
                      <td>{{$poolYearAmount}} RWF</td>
                      <td>{{$cashPoolYear}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Tickets</td>
                      <td>{{$poolTicket}}</td>
                      <td>x</td>
                      <td>{{$poolTicketAmount}} RWF</td>
                      <td>{{$cashPoolTicket}} RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{$poolTotalSales}}RWF</td>
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
                      <td>{{$saunaSession}}</td>
                      <td>x</td>
                      <td>{{$saunaSessionAmount}} RWF</td>
                      <td>{{$cashSaunaSession}}RWF</td>
                      <td></td>
                      <td></td>
                    </tr>

                      <td>Month</td>
                      <td>{{$saunaMonth}}</td>
                      <td>x</td>
                      <td>{{$saunaMonthAmount}} RWF</td>
                      <td>{{$cashSaunaMonth}} RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>


                      <td>Year</td>
                      <td>{{$saunaYear}}</td>
                      <td>x</td>
                      <td>{{$saunaYearAmount}}RWF</td>
                      <td>{{$cashSaunaYear}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Tickets</td>
                      <td>{{$saunaTicket}}</td>
                      <td>x</td>
                      <td>{{$saunaTicketAmount}} RWF</td>
                      <td>{{$cashSaunaTicket}} RWF</td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{$saunaTotalSales}}RWF</td>
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
                      <td>{{$saunaSession}}</td>
                    </tr>
                    <tr>
                      <td>Subscribers</td>
                      <td>{{$saunaAttendanceSubscribers}}</td>
                    </tr>
                    <tr>
                      <td>Tickets Return</td>
                      <td>{{$saunaTicket}}</td>
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
                      <td>{{$saunaTotalAttendance}}</td>
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
                      <td>{{$combinationAttendanceSession}}</td>
                    </tr>

                    <tr>
                      <td>Month</td>
                      <td>{{$combinationAttendanceMonth}}</td>
                      </tr>

                      <tr>
                      <td><b>Total Service</b></td>
                      <td>{{$combinationAttendanceTotalService}}</td>
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
                      <td>{{$gymPoolSession}}</td>
                      <td>x</td>
                      <td>{{$gymPoolSessionAmount}}RWF</td>
                      <td>{{$cashGymPoolSession}}RWF</td>
                      <td></td>
                      <td></td>
                    </tr>

                      <tr>
                      <td>Gym & Swim Month</td>
                      <td>{{$gymPoolMonth}}</td>
                      <td>x</td>
                      <td>{{$gymPoolMonthAmount}}RWF</td>
                      <td>{{$cashGymPoolMonth}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Gym & SAUNA dAY</td>
                      <td>{{$gymSaunaSession}}</td>
                      <td>x</td>
                      <td>{{$gymSaunaSessionAmount}}RWF</td>
                      <td>{{$cashGymSaunaSession}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Gym & SAUNA Month</td>
                       <td>{{$gymSaunaMonth}}</td>
                      <td>x</td>
                      <td>{{$gymSaunaMonthAmount}}RWF</td>
                      <td>{{$cashGymSaunaMonth}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>SAUNA & Massage</td>
                       <td>{{$saunaMassageSession}}</td>
                      <td>x</td>
                      <td>{{$saunaMassageSessionAmount}}RWF</td>
                      <td>{{$cashSaunaMassageSession}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>SAUNA & Swim Day</td>
                     <td>{{$saunaPoolSession}}</td>
                      <td>x</td>
                      <td>{{$saunaPoolSessionAmount}}RWF</td>
                      <td>{{$cashSaunaPoolSession}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>SAUNA & Swim Month</td>
                      <td>{{$saunaPoolMonth}}</td>
                      <td>x</td>
                      <td>{{$saunaPoolMonthAmount}}RWF</td>
                      <td>{{$cashSaunaPoolMonth}}RWF</td>
                      <td></td>
                      <td></td>
                      </tr>


                      <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><b>Total Sales</b></td>
                      <td>{{$combinationTotalSales}}RWF</td>
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
                      <td>{{$attendanceReportSession}}</td>
                    </tr>
                    <tr>
                      <td>Subscribers</td>
                      <td>{{$attendanceReportMonth}}</td>
                    </tr>
                    <tr>
                      <td>Tickets Return</td>
                      <td>{{$attendanceReportTickets}}</td>
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
                      <td>{{$attendanceReport}}</td>
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




