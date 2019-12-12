@extends('receptionist.layouts.app')
@section('content')
<div class="container">
  <form method="post" action="{{action('CustomerController@update', $id)}}">
  {{csrf_field()}}
    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">First name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="firstName" value="{{$customer->firstName}}">
      </div>
    </div>

    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">last name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="lastName" value="{{$customer->lastName}}">
      </div>
    </div>

    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Phone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="phone" value="{{$customer->phone}}">
      </div>
    </div>

    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" name="email" value="{{$customer->email}}">
      </div>
    </div>

    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Date of Birth</label>
      <div class="col-sm-10">
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" name="dob" value="{{$customer->dob}}">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </form>
</div>
@endsection