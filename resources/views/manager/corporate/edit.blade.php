@extends('manager.layouts.master-client')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Customer Info</h2>


  <form class="well form-horizontal" id="contact_form" method="post" action="{{route('corporate.update')}}">
  {{csrf_field()}}
   <div class="row">
     <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label>First name</label>

        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="firstName" value="{{$customer->firstName}}">

    </div>

    <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label >last name</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="lastName" value="{{$customer->lastName}}">
    </div>
  </div>
      <div class="row">
         <div class="col">
     <label >Gender</label>
        <select name="gender" class="form-control">
          <option value="{{$customer->gender}}">{{$customer->gender}}</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
        </select>
    </div>


    <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label >Phone</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="phone" value="{{$customer->phone}}">
    </div>
  </div>

    <div class="row">
       <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label>Email</label>
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" name="email" value="{{$customer->email}}">
    </div>

       @if($entities !=null)
    <div class="col">
      <label >Entity Name</label>

      <select name="entitie_id" class="form-control" >
            <option value="{{$customer->entitie_id}}">{{$customer->entitie->name}}</option>
            @foreach ($entities as $entity)
                  <option value="{{ $entity->id }}">{{ $entity->name}}</option>
            @endforeach
      </select>

  </div>
</div>
    @endif

    <div class="row">
       <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label>Date of Birth</label>
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" name="dob" value="{{$customer->dob}}">
    </div>
    <div class="col">
      <div class="col-md-0"></div>
      <input type="hidden" name="id" value = "{{$customer->id}}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
</div>
</div>
</div>
</div>

@endsection
