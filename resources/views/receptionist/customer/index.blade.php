@extends('layouts.master-client')
@section('content')

     
        <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Customer List</h2>
                  </div>
                  <div class ="col-md-2"> 
                    <a href="{{action('CustomerController@create')}}" class="btn btn-warning">Add new</a>
                    </div>
                 </div>

                  
<table id="example" class="display" style="width:100%">                               
                       
                        
                        <thead class="btn-light">
                        
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>first name</th>
        <th>last name</th>
        <th>Gender</th>
        <th>phone</th>
        <th>email</th>
        <th>date of birth</th>
        <th>Discount</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($customers as $customer)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$customer->id}}</td>
        <td>{{$customer['firstName']}}</td>
        <td>{{$customer['lastName']}}</td>
        <td>{{$customer['gender']}}</td>
        <td>{{$customer['phone']}}</td>
        <td>{{$customer['email']}}</td>
        <td>{{$customer['dob']}}</td>
        <td>{{$customer['discount']}}</td>
        <td><a href="{{action('CustomerController@edit', $customer['id'])}}" class="btn btn-warning">Edit</a></td>
      <td>
          <form action="{{action('CustomerController@destroy', $customer['id'])}}" method="post">
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
            <!-- </div> -->

@endsection
