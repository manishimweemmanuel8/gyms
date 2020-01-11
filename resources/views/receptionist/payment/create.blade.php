@extends('layouts.master-client')
@section('content')
<div class="container">
 <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Payment Info</h2>

                    <br>
                    <br>

  <form method="post" action="{{url('receptionist/payment')}}">
    {{ csrf_field() }}

    @if($customers !=null)
    <div class="form-group">
        
      <label>customer Name</label>
       <div class="col-sm-10">
      <select name="customer_id" class="form-control">
                    <option value="">--- Select Customer ---</option>
                    @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->firstName}}</option>
                    @endforeach
                </select>
    </div>
  </div>
    @endif

  

            <div class="form-group">
              <label>select Category</label>
      <div class="col-sm-10">
                <select id="category" name="categorie_id" class="form-control"  >
                <option value="" selected disabled>Select</option>
                  @foreach($categories as $key => $category)
                  <option value="{{$key}}"> {{$category}}</option>
                  @endforeach
                  </select>
            </div>
          </div>

            <div class="form-group">
            
     
                <label for="title">Select Sport</label>
                 <div class="col-sm-10">
                <select name="sport_id" id="sport" class="form-control" >
                </select>
            </div>
          </div>
         
            <div class="form-group">
            
      
                <label for="title">Select Membership</label>
                <div class="col-sm-10">
                <select name="membership_id" id="membership" class="form-control" >
                </select>
            </div>



             <div class="form-group">
                <label for="title">Expiry Date:</label>

      <div class="col-sm-10">
                <input type="date" name="expiry_date" id="expiry_date" class="form-control" >
            </div>

      </div>
    
  
   <div class="form-group">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>




<script type="text/javascript">
    $('#category').change(function(){
    var categoryID = $(this).val();    
    if(categoryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-sport-list')}}?category_id="+categoryID,
           success:function(res){               
            if(res){
                $("#sport").empty();
                $("#sport").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#sport").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#sport").empty();
            }
           }
        });
    }else{
        $("#sport").empty();
        $("#membership").empty();
    }      
   });
    $('#sport').on('change',function(){
    var sportID = $(this).val();    
    if(sportID){
        $.ajax({
           type:"GET",
           url:"{{url('get-membership-list')}}?sport_id="+sportID,
           success:function(res){               
            if(res){
                $("#membership").empty();
                $.each(res,function(key,value){
                    $("#membership").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#membership").empty();
            }
           }
        });
    }else{
        $("#membership").empty();
    }
        
   });
</script>

@endsection

