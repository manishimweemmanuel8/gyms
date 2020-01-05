@extends('controller.layouts.app')
@section('content')
  <div class="container">
      <a href="{{action('AttendanceController@create')}}" class="btn btn-warning">Add new</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Controller ID</th>
        <th>sport ID</th>
        <th>Membership</th>
        <th>Category</th>
        <th>Created id</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($attendances as $attendance)
      <tr>
        <td>{{$attendance->id}}</td>
        <td>{{$attendance->payment->customer->firstName}} {{$attendance->payment->customer->lastName}}</td>
        <td>{{$attendance->controller->name}}</td>
        <td>{{$attendance->payment->sport->name}}</td>
        <td>{{$attendance->payment->membership->name}}</td>
        <td>{{$attendance->payment->categorie->name}}</td>
        <td>{{$attendance->created_at}}</td>
        <td><a href="{{action('AttendanceController@edit', $attendance['id'])}}" class="btn btn-warning">Edit</a></td>
      
      <td>
          <form action="{{action('AttendanceController@destroy', $attendance['id'])}}" method="post">
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
@endsection