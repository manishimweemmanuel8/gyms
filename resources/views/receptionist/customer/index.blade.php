@extends('layouts.master-client')
@section('content')

        <div class="page-wrapper bg-blue p-t-120 p-b-120 font-robo">
        <!-- <div class="wrapper wrapper--w680"> -->
            <div class="card">

                
                 <div class="row">
                   <h2 class="card-header">Customer List</h2>
                 </div>

              
     
                  <div class="row ">
                    <div class="col-sm-6">
                    <a href="{{action('CustomerController@create')}}" class="btn btn-warning">Add new</a>
                    </div>
                 </div>
                    
                   
               
                    <div class="card-body">

                  
                        <table id="table" class="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="false" data-show-toggle="false" data-resizable="false" data-cookie="false"
                               data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
                        
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>first name</th>
        <th>last name</th>
        <th>Gender</th>
        <th>phone</th>
        <th>email</th>
        <th>date of birth</th>
        <th>entity responsibility</th>
        <th>entity name</th>
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
        @if($customer->entity_representative==0)
        <td>No</td>
        @else
        <td>Yes</td>
        @endif
        <td>{{$customer['entitie']['name']}}</td>
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
            <!-- </div> -->

@endsection
