@extends('manager.layouts.master-client')
@section('content') 

      
        <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Entity List</h2>
                  </div>
                  <div class ="col-md-2">  
                     <a href="{{action('Manager\EntitiesController@create')}}" class="btn btn-warning">Add new</a>

                   </div>
                  <!--  <div class ="col-md-1">
                   </div> -->
                     </div>


<table id="example" class="display" style="width:100%">                               
                       
                        
                        <thead class="btn-light">
      <tr>
        <th>ID</th>
        <th>Name</th>
          <th>Email</th>
        <th>Customer</th>
        <th>expiry date</th>
        <th>Created on</th>
        <th>Edit</th>
        <th>Delete</th>
          <th>Approve payment</th>
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
        <td><a href="{{route('entity.approve',['id'=>$entity->id])}}" class = "btn btn-info">Approve</a></td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>
                    </div>
                </div>
              </div>



@endsection
