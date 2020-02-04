@extends('receptionist.layouts.app')
@section('content')
<div class="container">
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Attendance Info</h2>

                    <br>
                    <br>
  <form method="post" action="{{url('controller/attendance')}}">
    {{ csrf_field() }}

    @if($payments !=null)
    <div class="form-group">
      <label>customer Name</label>
       <div class="col-sm-10">
      <select name="payment_id" class="form-control" >
                    <option value="">--- Select Customer ---</option>
                    @foreach ($payments as $payment)
                    <option value="{{ $payment->id}}">{{ $payment->customer_id}}</option>
                    @endforeach
                </select>
    </div>
  </div>
    @endif

    

    @if($controllers !=null)
    <div class="form-group">
      <label>Controller Name</label>
       <div class="col-sm-10">
      <select name="controller_id" class="form-control" >
                    <option value="">--- Select Controlller ---</option>
                    @foreach ($controllers as $controller)
                    <option value="{{ $controller->id }}">{{ $controller->name}}</option>
                    @endforeach
                </select>
    </div>
  </div>
    @endif

   


    

  

   <div class="form-group">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
     </div>
    </div>
  </div>

@endsection

