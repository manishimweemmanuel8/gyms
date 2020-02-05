@extends('manager.layouts.master-client')
@section('content')

        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
                    <div class="card-body">
                        <h2 class="title">Category Registration Info</h2>
                                                <a href="{{action('Manager\CategorieController@create')}}" class="btn btn-warning">Add new</a>

                       <table id="table" class="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="false" data-show-toggle="false" data-resizable="false" data-cookie="false"
                               data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
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
@endsection
