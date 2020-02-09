@extends('layouts.master-client')
@section('content')
        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
                    <div class="card-body">
                        <h2 class="title"> Payment Session List</h2>


                     <table id="table" class="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="false" data-show-toggle="false" data-resizable="false" data-cookie="false"
                               data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>


                        <tr>
        <th>ID</th>
        <th>Customer </th>
        <th>Receptionist </th>
        <th>Category</th>
        <th>sport</th>
        <th>membership</th>
        <th>Amount</th>
        <th>Done at</th>
    
      </tr>
    </thead>
    <tbody>
      @foreach($payments as $payment)
      <tr>

      

        <td>{{$payment['customer_id']}}</td>
        <td>{{$payment['session']}}</td>
        <td>{{$payment->receptionist['name']}}</td>
        <td>{{$payment->categorie->name}}</td>
        <td>{{$payment->sport->name}}</td>
        <td>{{$payment->membership->name}}</td>
        <td>{{$payment->amount}}</td>
        <td>{{$payment->created_at}}</td>
         
      </tr>
     
      @endforeach
    </tbody>
  </table>
  </div>
                </div>



@endsection
