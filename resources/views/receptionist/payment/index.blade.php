@extends('layouts.master-client')
@section('content')
          <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Payment List</h2>
                  </div>
                  <div class ="col-md-2"> 

                         <a href="{{action('Receptionist\PaymentController@create')}}" class="btn btn-warning">Add new</a>
                       </div>
                     </div>
                    <table id="example" class="display" style="width:100%">                               
                       
                        
                        <thead class="btn-light">
                       


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
        <td>{{$payment->committed['firstName']}}  {{$payment->committed['lastName']}}</td>
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
                </div>
              </div>



@endsection
