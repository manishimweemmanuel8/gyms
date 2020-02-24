@extends('manager.layouts.master-client')
@section('content')
<div class="container">
    <form class="well form-horizontal" id="contact_form" method="post" action="{{action('PaymentController@update', $id)}}">
  {{csrf_field()}}
    <div class="row">
      <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Customer ID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="customer_id" value="{{$payment->customer_id}}">
      </div>
    </div>

    <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Receptionist ID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="receptionist_id" value="{{$payment->receptionist_id}}">
      </div>
    </div>
  </div>

    <div class="row">
      <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Amount</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="amount" value="{{$payment->amount}}">
      </div>
    </div>


    <div class="col">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    <div class="col">
      <a href="{{ url('/manager/sport') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
  </form>
</div>
@endsection
