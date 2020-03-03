@extends('manager.layouts.master-client')
@section('content')
        <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Sport List</h2>
                  </div>
                  <div class ="col-md-2">  

                         <a href="{{action('Manager\SportController@create')}}" class="btn btn-warning">Add new</a>
                       </div>
                     </div>
                       
<table id="example" class="table table-striped table-bordered" style="width:100%">                               
                       
                        
                        <thead class="btn-light">
                       


                        <tr>
        <th>ID</th>
        <th>name </th>
        <th>category </th>
   <!-- <th>Edit</th> -->
        <!-- <th>Delete</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($sports as $sport)
      <tr>
        <td>{{$sport['id']}}</td>
        <td>{{$sport->name}}</td>
        <td>{{$sport['category']['name']}}</td>

    

         <!--  <td>
          <form action="{{action('Manager\SportController@destroy', $sport['id'])}}" method="post">
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
