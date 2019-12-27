<!-- create.blade.php -->

@extends('receptionist.layouts.app')
@section('content')
<div class="container">
  <div class="panel panel-default panel-fill">
        <div class="panel-heading">
            <h3 class="panel-title">Customer Information</h3>
        </div>
    <div class="panel-body">
  <form method="post" action="{{url('receptionist/customer')}}">
    {{ csrf_field() }}
    <div class="form-group">
      <label >First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="firstName">
      </div>
    </div>
    <div class="form-group">
      <label >Last Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="lastName">
      </div>
    </div>
    <div class="form-group">
      <label >Telephone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control "  name="phone">
      </div>
    </div>
    <div class="form-group">
      <label >Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email">
      </div>
    </div>
       @if($entities !=null)
    <div class="form-group">
      <label >Entity Name</label>
      <select name="entitie_id" class="form-control" style="width:900px">
                    <option value="">--- Select Entity ---</option>
                    @foreach ($entities as $entity)
                    <option value="{{ $entity->id }}">{{ $entity->name}}</option>
                    @endforeach
                </select>
    </div>
    @endif

    
    <div class="form-group">
      <label >Date of Birth</label>
      <div class="col-sm-10">
        <input type="date" class="form-control " name="dob">
      </div>
    </div>
   
    
    <div class="form-group">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
</div>
</div>

@endsection