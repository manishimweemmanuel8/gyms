@extends('manager.layouts.master-client')
@section('content')

 <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Sport Info</h2>



  <form method="post" action="{{url('manager/sport')}}">
    {{ csrf_field() }}

      <div class="form-group">
          <label >Name</label>

          <input type="text" class="form-control"  name="name">

      </div>



            <div class="form-group">
              <label>select Category</label>
                <select id="category" name="category_id" class="form-control"  >
                <option value="" selected disabled>--- Select Category ---</option>
                  @foreach($categories as $key => $category)
                  <option value="{{$key}}"> {{$category}}</option>
                  @endforeach
                  </select>
          </div>

  
   <div class="form-group">
      <div class="col-md-0"></div>
      <input type="submit" class="btn btn-primary">
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

