@extends('manager.layouts.master-client')
@section('content')
        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
                    <div class="card-body">
                        <h2 class="title"> Membership List</h2>


                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                               data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
{{--                        <a href="{{action('Manager\MembershipController@create')}}" class="btn btn-warning">Add new</a>--}}


                        <tr>
        <th>ID</th>
        <th>category </th>
        <th>sport </th>
        <th>Membership</th>
        <th>Amount</th>
         <th>Created On</th>
         <th>delete</th>

      </tr>
    </thead>
    <tbody>
      @foreach($prices as $price)
      <tr>
        <td>{{$price['id']}}</td>
        <td>{{$price->category_id}}</td>
        <td>{{$price->sport_id}}</td>
          <td>{{$price->membership_id}}</td>
          <td>{{$price->amount}}</td>
          <td>{{$price->created_at}}</td>


          {{--        <td><a href="{{action('PaymentController@edit', $payment['id'])}}" class="btn btn-warning">Edit</a></td>--}}

          <td>
          <form action="{{action('Manager\MembershipController@destroy', $membership['id'])}}" method="post">
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
