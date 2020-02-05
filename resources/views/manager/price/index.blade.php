@extends('manager.layouts.master-client')
@section('content')
        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
                    <div class="card-body">
                        <h2 class="title"> Price List</h2>

                        <a href="{{action('Manager\PriceController@create')}}" class="btn btn-warning">Add new</a>

                        <table id="table" class="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="false" data-show-toggle="false" data-resizable="false" data-cookie="false"
                               data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>


                        <tr>
        <th>ID</th>
        <th>category </th>
        <th>sport </th>
        <th>Membership</th>
        <th>Amount</th>
        <!--  <th>Created On</th>
         <th>delete</th> -->

      </tr>
    </thead>
    <tbody>
      @foreach($prices as $price)
      <tr>
        <td>{{$price['id']}}</td>
        <td>{{$price['categorie']['name']}}</td>
        <td>{{$price['sport']['name']}}</td>
          <td>{{$price['membership']['name']}}</td>
          <td>{{$price->amount}}</td>
          <!-- <td>{{$price->created_at}}</td> -->


          {{--        <td><a href="{{action('PaymentController@edit', $payment['id'])}}" class="btn btn-warning">Edit</a></td>--}}

          <!-- <td>
          <form action="{{action('Manager\PriceController@destroy', $price['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
           
          </form>
        </td> -->
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
                </div>



@endsection
