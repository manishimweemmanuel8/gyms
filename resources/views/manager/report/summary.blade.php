@extends('manager.layouts.master-client')
@section('content')

         <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Summary Sale Report</h2>
                  </div>

                  <div class="col-md-10">

              <div class="card">
            <form method="post" class="form-inline" action="{{route('report.between')}}">
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
            </div>
              </div>
            </div>
 <table id="example" class="display" style="width:100%">                               
                        
                        <thead class="btn-light">
                      <tr>
                       <th>Date</th>
                      <th >Service</th>
                      <th >Session</th>
                      <th >Monthly</th>
                      <th>Trimester</th>
                       <th>Semester</th>
                        <th>Year</th>
                        <th>10_Tickets</th>
                        <th>20_Tickets</th>
                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$todayDate}}</td>
                      <td >GYM</td>
                      <td >{{number_format($cashGymSession)}}</td>
                      <td >{{number_format($cashGymMonth)}}</td>
                      <td>Trimester</td>
                       <td>Semester</td>
                        <td>{{number_format($cashGymYear)}}</td>
                        <td>10_Tickets</td>
                        <td>{{number_format($cashGym20Tickets)}}</td>
                    </tr>

                      <tr>
                      <td>{{$todayDate}}</td>
                      <td >SAUNA</td>
                      <td >{{number_format($cashSaunaSession)}}</td>
                      <td >{{number_format($cashSaunaMonth)}}</td>
                      <td>Trimester</td>
                       <td>Semester</td>
                        <td>{{number_format($cashSaunaYear)}}</td>
                        <td>10_Tickets</td>
                        <td>{{number_format($cashSauna20Ticket)}}</td>
                    </tr>

                      <tr>
                     <td>{{$todayDate}}</td>
                      <td >SWIMMING</td>
                      <td >{{number_format($cashPoolSession)}}</td>
                      <td >{{number_format($cashPoolMonth)}}</td>
                      <td>Trimester</td>
                       <td>Semester</td>
                        <td>{{number_format($cashPoolYear)}}</td>
                        <td>10_Tickets</td>
                        <td>{{number_format($cashPoolTicket)}}</td>
                    </tr>
                   
                  </tbody>
                </table>
</div>
                    </div>
                </div>
              </div>




    <!-- Static Table End -->





@endsection
