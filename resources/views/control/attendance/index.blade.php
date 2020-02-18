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
                                            <th>Event Time</th>
                                            <th>Client Name</th>
                                            <th>CLient Type</th>
                                            <th>Packege Offered </th>
                                            <th>Subscr_Plan</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($attendances as $attendance)
                                            <tr>
                                                <td>{{$attendance->updated_at}}</td>
                                                @if($attendance->payment['client_type']=='CORPORATE')
                                                <td>{{$attendance->payment['entitie']}}</td>
                                                @elseif($attendance->payment['client_type']=='INDIVIDUAL')
                                                <td>INDIVIDUAL</td>
                                                @else
                                                <td>MEMBER</td>
                                                @endif
                                                <td>{{$attendance->payment['client_type']}}</td>
                                                <td>{{$attendance->payment['sport']['name']}}</td>
                                                <td>{{$attendance->payment['membership']['name']}}</td>
                                               


                                                  <td>
                                                      <form action="{{action('Control\AttendanceController@destroy', $attendance['id'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                       
                                                      </form>
                                                    </td>
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
