@extends('manager.layouts.master-client')
@section('content')
 <div class="page-wrapper bg-blue p-t-5 p-b-5 font-robo" >
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Entity Info</h2>


  <form class="well form-horizontal" id="contact_form" method="post" action="{{action('Manager\CategorieController@update', $id)}}">
  {{csrf_field()}}
    <div class="row">
   
       <input name="_method" type="hidden" value="PATCH">
      <label>Name</label>

        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="name" value="{{$category->name}}">
        

    </div>





    <div class="form-group row">
      <div class="col-md-0">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    <div class="col-md-0">
       <a href="{{ url('/manager/category') }}" class="btn btn-primary">Back</a>
    </div>
  </div>

  </form>
</div>
</div>
</div>
</div>

@endsection
