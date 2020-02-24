@extends('manager.layouts.master-client')
@section('content')

 <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Membership Info</h2>



  <form method="post" action="{{url('manager/membership')}}">
    {{ csrf_field() }}

      <div class="row">
        <div class="col">
          <label >Name</label>

          <input type="text" class="form-control"  name="name">

      </div>

      



            <div class="col">
              <label>select Sport</label>
                <select id="sport" name="sport_id" class="form-control"  >
                <option value="" selected disabled>--- Select Sport ---</option>
                  @foreach($sports as $key => $sport)
                  <option value="{{$key}}"> {{$sport}}</option>
                  @endforeach
                  </select>
          </div>
        </div>

          <div class="row">
            <div class="col">
          <label >Duration</label>

          <input type="number" class="form-control"  name="duration">

      </div>

  
   <div class="col">
      <div class="col-md-0"></div>
      <input type="submit" class="btn btn-primary">
    </div>
    <div class="col">
      <a href="{{ url('/manager/membership') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
  </form>
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

