@extends('layouts.master-client')
@section('content')
        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
                    <div class="card-body">
                        <h2 class="title"> Payment Session List</h2>


                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                               data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
                        <a href="{{action('Receptionist\SessionController@create')}}" class="btn btn-warning">Add new</a>


                        <tr>
        <th>ID</th>
        <th>Customer </th>
        <th>Receptionist </th>
        <th>Category</th>
        <th>sport</th>
        <th>membership</th>
        <th>Expiry Date</th>
        <th>duration</th>
        <th>Amount</th>
        <th>Print</th>
    
      </tr>
    </thead>
    <tbody>
      @foreach($payments as $payment)
      <tr>

      

        <td>{{$payment['customer_id']}}</td>
        <td>{{$payment->customer['firstName']}}  {{$payment->customer['lastName']}}</td>
        <td>{{$payment->receptionist['name']}}</td>
        <td>{{$payment->categorie->name}}</td>
        <td>{{$payment->sport->name}}</td>
        <td>{{$payment->membership->name}}</td>
        <td>{{$payment->expiry_date}}</td>
        <td>{{$payment->duration}}</td>
        <td>{{$payment->amount}}</td>
         <td><a href="{{action('Receptionist\SessionController@edit', $payment['id'])}}" class="btn btn-warning">Print</a></td>
         
      </tr>
     
      @endforeach
    </tbody>
  </table>
  </div>
                </div>



@endsection
