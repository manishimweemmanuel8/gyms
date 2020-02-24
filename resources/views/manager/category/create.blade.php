<!-- create.blade.php -->

@extends('manager.layouts.master-client')
@section('content')

 <div class="page-wrapper bg-blue p-t-5 p-b-5 font-robo" >
        <div class="wrapper wrapper--w680">
            <div class="card card-1">

                <div class="card-body">
                    <h2 class="title">Category Registration Info</h2>


  
  <form class="well form-horizontal" method="post" action="{{url('manager/category')}}"  id="contact_form">
    {{ csrf_field() }}

      <div class="row">
 
      <label >Name</label>

        <input type="text" class="form-control"  name="name">

    </div>
   


   

     <div class="form-group row">
      <div class="col-md-0">
      <input type="submit" class="btn btn-primary">
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
</div>

@endsection
