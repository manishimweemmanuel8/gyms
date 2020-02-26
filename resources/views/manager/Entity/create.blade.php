@extends('manager.layouts.master-client')
@section('content')

            @include('multiauth::message')


            <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Entity Info</h2>

                     <!-- Message -->
    



  <form method="post" action="{{url('manager/Entity')}}">

    {{ csrf_field() }}


     <div class="row">
        <div class="col">
      <label >Name</label>
        <input type="text" class="form-control"  name="name">
    </div>
    <div class="col">
      <label >Email</label> 
        <input type="email" class="form-control" name="email">
    </div>
</div>


 <div class="row">
   
   <div class="col">
        <label >Payment Type</label>
        <select name="payment_type" class="form-control">
          <option value="">---- select payment type  -----</option>
          <option value="person">Per person</option>
          <option value="flat">flat</option>
        </select>
    </div>
     <div class="col">

      <input type="submit" class="btn btn-primary">
       <a href="{{ url('/manager/Entity') }}" class="btn btn-primary">Back</a>
  </div>

</div>


 
  </form>
</div>
</div>
</div>
 </div>

@endsection