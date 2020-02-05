@extends('manager.layouts.master-client')
@section('content')

      
            <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Enitty List</h2>
                     <a href="{{action('Manager\EntitiesController@create')}}" class="btn btn-warning">Add new</a>
                        <table id="table" class="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="false" data-show-toggle="false" data-resizable="false" data-cookie="false"
                               data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                              
                               
                       
                        
                        <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
          <th>Email</th>
        <th>Customer</th>
        <th>expiry date</th>
        <th>Created on</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($entities as $entity)
      <tr>
        <td>{{$entity['id']}}</td>
        <td>{{$entity['name']}}</td>
          <td>{{$entity['email']}}</td>
        <td>{{$entity['customer']['firstName']}} {{$entity['customer']['lastName']}}</td>
        <td>{{$entity['expiry_date']}}</td>
        <td>{{$entity['created_at']}}</td>



        <td><a href="{{action('Manager\EntitiesController@edit', $entity['id'])}}" class="btn btn-warning">Edit</a></td>
      
      <td>
          <form action="{{action('Manager\EntitiesController@destroy', $entity['id'])}}" method="post">
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
