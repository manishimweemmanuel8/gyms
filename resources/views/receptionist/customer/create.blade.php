<!-- create.blade.php -->

@extends('layouts.master-client')
@section('content')

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
<!--         <div class="wrapper wrapper--w680">
 -->            <div class="card card-1">

                <div class="card-body">
                    <h2 class="title">Customer Registration Info</h2>


  
  <form class="justify-content-center" method="post" action="{{url('receptionist/customer')}}"  id="contact_form">
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
      <label >Discount</label> 

        <input type="number" class="form-control" name="discount">
    </div>
  </div>
 

    
    <div class="row">
      <div class="col">
      <label >Date of Birth</label>

        <input type="date" class="form-control " name="dob">

    </div>
   
    
    <div class="col">
      <div class="col-md-0"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </div>
  </form>

</div>
</div>
</div>

<!-- </div> -->

@endsection
