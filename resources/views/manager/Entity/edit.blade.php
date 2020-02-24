@extends('manager.layouts.master-client')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Entity Info</h2>


  <form class="well form-horizontal" id="contact_form" method="post" action="{{action('Manager\EntitiesController@update', $id)}}">
  {{csrf_field()}}
   <div class="row">
        <div class="col">
       <input name="_method" type="hidden" value="PATCH">
      <label>Name</label>


        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="name" value="{{$entity->name}}">

    </div>
       <div class="col">

       <input name="_method" type="hidden" value="PATCH">
      <label>Email</label>
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" name="email" value="{{$entity->email}}">
    </div>
  </div>

   <div class="row">
        <div class="col">

       @if($customers !=null)
   
      <label >Customer Name</label>

      <select name="customer_id" class="form-control" >
            <option value="{{$entity->customer_id}}">{{$entity->customer['firstName']}}  {{$entity->customer['lastName']}}</option>
            @foreach ($customers as $customer)
                  <option value="{{ $customer->id }}">{{ $customer->firstName}} {{ $customer->lastName}}</option>
            @endforeach
      </select>

  </div>
  
    @endif
    <div class="col">

      
       <input name="_method" type="hidden" value="PATCH">
      <label>Expiry Date</label>
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" name="expiry_date" value="{{$entity->expiry_date}}">
    </div>
  </div>

  


    <div class="row">
      <div class="col">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
     <div class="col">
      <a href="{{ url('/manager/Entity') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
  </form>
</div>
</div>
</div>
</div>

@endsection
