@extends('layouts.master-client')
@section('content')

        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
            <div class="wrapper wrapper--w100">
                <div class="card card-1">

                    <div class="card-body">
                        <h2 class="title"> Attendance List</h2>

                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                        <thead>
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
                                                 <th>Delete</th>
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
