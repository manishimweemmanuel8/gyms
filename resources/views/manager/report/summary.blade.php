@extends('manager.layouts.master-client')
@section('content')

         <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Daily Sale Report</h2>
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
                      <td >{{$cashGymSession}}</td>
                      <td >{{$cashGymMonth}}</td>
                      <td>Trimester</td>
                       <td>Semester</td>
                        <td>{{$cashGymYear}}</td>
                        <td>10_Tickets</td>
                        <td>{{$cashGym20Tickets}}</td>
                    </tr>

                      <tr>
                      <td>{{$todayDate}}</td>
                      <td >SAUNA</td>
                      <td >{{$cashSaunaSession}}</td>
                      <td >{{$cashSaunaMonth}}</td>
                      <td>Trimester</td>
                       <td>Semester</td>
                        <td>{{$cashSaunaYear}}</td>
                        <td>10_Tickets</td>
                        <td>{{$cashSauna20Ticket}}</td>
                    </tr>

                      <tr>
                     <td>{{$todayDate}}</td>
                      <td >SWIMMING</td>
                      <td >{{$cashPoolSession}}</td>
                      <td >{{$cashPoolMonth}}</td>
                      <td>Trimester</td>
                       <td>Semester</td>
                        <td>{{$cashPoolYear}}</td>
                        <td>10_Tickets</td>
                        <td>{{$cashPoolTicket}}</td>
                    </tr>
                   
                  </tbody>
                </table>
</div>
                    </div>
                </div>
              </div>




    <!-- Static Table End -->





@endsection
