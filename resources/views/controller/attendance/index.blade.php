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
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($attendances as $attendance)
      <tr>
        <td>{{$attendance->id}}</td>
        <td>{{$attendance->customer_id}}</td>
        <td>{{$attendance->controller_id}}</td>
        <td>{{$attendance->sport_id}}</td>
        <td>{{$attendance->membership_id}}</td>
        <td>{{$attendance->category_id}}</td>
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