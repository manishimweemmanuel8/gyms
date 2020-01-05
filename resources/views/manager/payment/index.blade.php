@extends('receptionist.layouts.app')
@section('content')
  <div class="container">
      <a href="{{action('PaymentController@create')}}" class="btn btn-warning">Add new</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Receptionist ID</th>
        <th>Category</th>
        <th>sport</th>
        <th>membership</th>
        <th>Expiry Date</th>
        <th>duration</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($payments as $payment)
      <tr>
        <td>{{$payment['id']}}</td>
        <td>{{$payment->customer->firstName}}  {{$payment->customer->lastName}}</td>
        <td>{{$payment->receptionist->name}}</td>
        <td>{{$payment->categorie->name}}</td>
        <td>{{$payment->sport->name}}</td>
        <td>{{$payment->membership->name}}</td>
        <td>{{$payment->expiry_date}}</td>
        <td>{{$payment->duration}}</td>
        <td><a href="{{action('PaymentController@edit', $payment['id'])}}" class="btn btn-warning">Edit</a></td>
      
      <td>
          <form action="{{action('PaymentController@destroy', $payment['id'])}}" method="post">
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