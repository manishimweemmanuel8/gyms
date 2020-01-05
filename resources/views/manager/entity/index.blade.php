@extends('manager.layouts.app')
@section('content')
  <div class="container">
      <a href="{{action('EntityPaymentController@create')}}" class="btn btn-warning">Add new</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Entity ID</th>
        <th>Receptionist ID</th>
        <th>sport</th>
        <th>membership</th>
        <th>customer list ID</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($entityPayments as $entityPayment)
      <tr>
        <td>{{$entityPayment['id']}}</td>
        <td>{{$entityPayment->entity_id}}</td>
        <td>{{$entityPayment->receptionist_id}}</td>
        <td>{{$entityPayment->sport_id}}</td>
        <td>{{$entityPayment->membership_id}}</td>
        <td>{{$entityPayment->customer_list_id}}</td>
        <td><a href="{{action('EntityPaymentController@edit', $entityPayment['id'])}}" class="btn btn-warning">Edit</a></td>
      
      <td>
          <form action="{{action('EntityPaymentController@destroy', $entityPayment['id'])}}" method="post">
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