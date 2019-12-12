@extends('receptionist.layouts.app')
@section('content')
  <div class="container">
      <a href="{{action('CustomerController@create')}}" class="btn btn-warning">Add new</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>first name</th>
        <th>last name</th>
        <th>phone</th>
        <th>email</th>
        <th>entity id</th>
        <th>date of birth</th>
        <th>entity responsibility</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($customers as $customer)
      <tr>
        <td>{{$customer['id']}}</td>
        <td>{{$customer['firstName']}}</td>
        <td>{{$customer['lastName']}}</td>
        <td>{{$customer['phone']}}</td>
        <td>{{$customer['email']}}</td>
        <td>{{$customer['entitie_id']}}</td>
        <td>{{$customer['dob']}}</td>
        <td>{{$customer['entity_representative']}}</td>
        <td><a href="{{action('CustomerController@edit', $customer['id'])}}" class="btn btn-warning">Edit</a></td>
      
      <td>
          <form action="{{action('CustomerController@destroy', $customer['id'])}}" method="post">
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