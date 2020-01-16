<!-- create.blade.php -->

@extends('layouts.master-client')
@section('content')

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">

                <div class="card-body">
                    <h2 class="title">Customer Registration Info</h2>


  
  <form class="well form-horizontal" method="post" action="{{url('manager/Entity')}}"  id="contact_form">
    {{ csrf_field() }}

     <div class="form-group">
      <label >Name</label>

        <input type="text" class="form-control"  name="name">

    </div>

    <div class="form-group">
      <label >Email</label> 

        <input type="email" class="form-control" name="email">

    </div>


   
    
    <div class="form-group">
      <div class="col-md-0"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>

@endsection
