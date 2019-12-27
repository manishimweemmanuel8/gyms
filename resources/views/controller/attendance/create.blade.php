@extends('receptionist.layouts.app')
@section('content')
<div class="container">
  <div class="panel panel-default panel-fill">
        <div class="panel-heading">
            <h3 class="panel-title">Payment Form</h3>
        </div>
    <div class="panel-body">
  <form method="post" action="{{url('controller/attendance')}}">
    {{ csrf_field() }}

    @if($payments !=null)
    <div class="form-group">
      <label>customer Name</label>
      <select name="customer_id" class="form-control" style="width:350px">
                    <option value="">--- Select Customer ---</option>
                    @foreach ($payments as $payment)
                    <option value="{{ $payment->customer_id }}">{{ $payment->customer_id}}</option>
                    @endforeach
                </select>
    </div>
    @endif
    @if($controllers !=null)
    <div class="form-group">
      <label>Controller Name</label>
      <select name="controller_id" class="form-control" style="width:350px">
                    <option value="">--- Select Controlller ---</option>
                    @foreach ($controllers as $controller)
                    <option value="{{ $controller->id }}">{{ $controller->name}}</option>
                    @endforeach
                </select>
    </div>
    @endif
    @if($payments !=null)
    <div class="form-group">
      <label>Sport Name</label>
      <select name="sport_id" class="form-control" style="width:350px">
                    <option value="">--- Select  ---</option>
                    @foreach ($payments as $payment)
                    <option value="{{ $payment->sport_id }}">{{ $payment->customer_id}}</option>
                    @endforeach
                </select>
    </div>
    @endif

     @if($payments !=null)
    <div class="form-group">
      <label>Membership Name</label>
      <select name="membership_id" class="form-control" style="width:350px">
                    <option value="">--- Select  ---</option>
                    @foreach ($payments as $payment)
                    <option value="{{ $payment->membership_id }}">{{ $payment->customer_id}}</option>
                    @endforeach
                </select>
    </div>
    @endif

    @if($payments !=null)
    <div class="form-group">
      <label>category Name</label>
      <select name="category_id" class="form-control" style="width:350px">
                    <option value="">--- Select  ---</option>
                    @foreach ($payments as $payment)
                    <option value="{{ $payment->category_id }}">{{ $payment->customer_id}}</option>
                    @endforeach
                </select>
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

