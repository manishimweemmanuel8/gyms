@extends('layouts.master-client')
@section('content')

         <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Attendance List</h2>
                  </div>
              </div>
                 

                              <table id="example" class="display" style="width:100%">                               
                       
                        
                        <thead class="btn-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer</th>
                                            <!-- <th>Controller</th> -->
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
                    </div>
                </div>
              </div>
              




    <!-- Static Table End -->





@endsection
