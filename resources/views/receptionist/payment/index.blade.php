@extends('layouts.master-client')
@section('content')
        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
                    <div class="card-body">
                        <h2 class="title"> Payment List</h2>

                         <a href="{{action('Receptionist\PaymentController@create')}}" class="btn btn-warning">Add new</a>
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
        <th>Expiry Date</th>
        <th>duration</th>
        <th>Amount</th>
        <!-- <th>Edit</th> -->
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($payments as $payment)
      <tr>
        <td>{{$payment['customer_id']}}</td>
        @if($payment->customer['entitie_id']==1)
        <td>{{$payment->customer['firstName']}}  {{$payment->customer['lastName']}}</td>
        @else
        <td>{{$payment->customer['entitie_id']}}</td>
        @endif
        <td>{{$payment->receptionist['name']}}</td>
        <td>{{$payment->categorie->name}}</td>
        <td>{{$payment->sport->name}}</td>
        <td>{{$payment->membership->name}}</td>
        <td>{{$payment->expiry_date}}</td>
        <td>{{$payment->duration}}</td>
        <td>{{$payment->amount}}</td>
         {{--<td><a href="{{action('Receptionist\PaymentController@edit', $payment['id'])}}" class="btn btn-warning">Edit</a></td> --}}

          <td>
          <form action="{{action('Receptionist\PaymentController@destroy', $payment['id'])}}" method="post"> 
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



@endsection
