@extends('receptionist.layouts.app')
@section('content')
<div class="container">
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Edit Customer Info</h2>

                    <br>
                    <br>
  <form class="well form-horizontal" id="contact_form" method="post" action="{{action('CustomerController@update', $id)}}">
  {{csrf_field()}}
    <div class="form-group">
       <input name="_method" type="hidden" value="PATCH">
      <label>First name</label>
      <div class="col-sm-10">

        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="firstName" value="{{$customer->firstName}}">
      </div>
    </div>

    <div class="form-group">
       <input name="_method" type="hidden" value="PATCH">
      <label >last name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="lastName" value="{{$customer->lastName}}">
      </div>
    </div>
      <div class="form-group">
     <label >Gender</label>
      <div class="col-sm-10">
        <select name="gender" class="form-control">
          <option value="{{$customer->gender}}">{{$customer->gender}}</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
        </select>
      </div>
    </div>


    <div class="form-group">
       <input name="_method" type="hidden" value="PATCH">
      <label >Phone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="phone" value="{{$customer->phone}}">
      </div>
    </div>

    <div class="form-group">
       <input name="_method" type="hidden" value="PATCH">
      <label>Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" name="email" value="{{$customer->email}}">
      </div>
    </div>

       @if($entities !=null)
    <div class="form-group">
      <label >Entity Name</label>
      <div class="col-sm-10">
      <select name="entitie_id" class="form-control" >
            <option value="{{$customer->entitie_id}}">{{$customer->entitie->name}}</option>
            @foreach ($entities as $entity)
                  <option value="{{ $entity->id }}">{{ $entity->name}}</option>
            @endforeach
      </select>
    </div>
  </div>
    @endif

    <div class="form-group">
       <input name="_method" type="hidden" value="PATCH">
      <label>Date of Birth</label>
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
</div>
</div>
</div>
</div>

@endsection