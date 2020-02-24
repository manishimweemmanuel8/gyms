<!-- create.blade.php -->

@extends('manager.layouts.master-client')
@section('content')
 <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Entity Info</h2>


 
  <form class="justify-content-center" method="post" action="{{route('corporate.store')}}"  id="contact_form">
    {{ csrf_field() }}

     <div class="row">
      <div class="col">
      <label >First Name</label>
        <input type="text" class="form-control"  name="firstName">
    </div>
    <div class="col">
      <label >Last Name</label>

        <input type="text" class="form-control"  name="lastName">

    </div>
  </div>
      <div class="row">
         <div class="col">
       <label >Gender</label>

        <select name="gender" class="form-control">
          <option value="">---- select Gender  -----</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>

    </div>
    <div class="col">
      <label >Telephone</label>

        <input type="text" class="form-control "  name="phone">

    </div>
  </div>

    <div class="row">
      <div class="col">
      <label >Email</label> 

        <input type="email" class="form-control" name="email">

    </div>
    <div class="col">
       @if($entities !=null)
 
      <label >Entity Name</label>
      <select name="entitie_id" class="form-control" >
            <option value="">--- Select Entity ---</option>
            @foreach ($entities as $entity)
                  <option value="{{ $entity->id }}">{{ $entity->name}}</option>
            @endforeach
      </select>
    </div>
  </div>
    @endif

    
    <div class="row">
      <div class="col">
      <label >Date of Birth</label>

        <input type="date" class="form-control " name="dob">

    </div>
   
    
    <div class="col">
      </br>
      <input type="submit" class="btn btn-primary">
    </div>
    <div class="col">
      <a href="{{ url('/manager/corporate') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
  </form>
</div>
</div>
</div>
 </div>



<!-- </div> -->

@endsection
