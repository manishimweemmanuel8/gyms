@extends('manager.layouts.master-client')
@section('content')
          <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Price List</h2>
                  </div>
                  <div class ="col-md-2">  

                        <a href="{{action('Manager\PriceController@create')}}" class="btn btn-warning">Add new</a>
                      </div>
                    </div>

                     <table id="example" class="display" style="width:100%">                               
                       
                        
                        <thead class="btn-light">


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
  </tbody>

  </table>
</div>
                    </div>
                </div>
              </div>



@endsection
