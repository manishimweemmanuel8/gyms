@extends('manager.layouts.master-client')
@section('content')
         <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Membership List</h2>
                  </div>
                  <div class ="col-md-2">  
                        <a href="{{action('Manager\MembershipController@create')}}" class="btn btn-warning">Add new</a>
                      </div>
                    </div>

<table id="example" class="display" style="width:100%">                               
                       
                        
                        <thead class="btn-light">


                        <tr>
        <th>ID</th>
        <th>name </th>
        <th>duration </th>
        <th>sport</th>
        <!-- <th>Delete</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($memberships as $membership)
      <tr>
        <td>{{$membership['id']}}</td>
        <td>{{$membership->name}}</td>
        <td>{{$membership->duration}}</td>
          <td>{{$membership['sport']['name']}}</td>

{{--        <td><a href="{{action('PaymentController@edit', $payment['id'])}}" class="btn btn-warning">Edit</a></td>--}}

         <!--  <td>
          <form action="{{action('Manager\MembershipController@destroy', $membership['id'])}}" method="post">
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
                </div>
              </div>


@endsection
