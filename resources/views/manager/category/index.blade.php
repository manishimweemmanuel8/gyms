@extends('manager.layouts.master-client')
@section('content') 

      <div class="page-wrapper bg-blue p-t-5 p-b-5 font-robo" >
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Category List</h2>
                  </div>
                     <div class ="col-md-2">  
                      <a href="{{action('Manager\CategorieController@create')}}" class="btn btn-warning">Add new</a>
                    </div>
                  </div>

                      <table id="example" class="display" style="width:100%">                               
                       
                        
                        <thead class="btn-light">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Edit</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{$category['id']}}</td>
        <td>{{$category['name']}}</td>
        



        <td><a href="{{action('Manager\CategorieController@edit', $category['id'])}}" class="btn btn-warning">Edit</a></td>
      
      <!-- <td>
          <form action="{{action('Manager\CategorieController@destroy', $category['id'])}}" method="post">
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


   <script type="text/javascript">
            $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
            });

        </script>
@endsection
