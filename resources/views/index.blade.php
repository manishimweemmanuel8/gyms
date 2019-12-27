<!DOCTYPE html>
<html>
<head>
    <title>Ajax dynamic dependent country state city dropdown using jquery ajax in Laravel 5.6</title>
    <link rel="stylesheet" href="http://www.codermen.com/css/bootstrap.min.css">    
    <script src="http://www.codermen.com/js/jquery.js"></script>
</head>
<body>
<div class="container">
<div class="panel panel-default">
      <div class="panel-heading">Ajax dynamic dependent country state city dropdown using jquery ajax in Laravel 5.6</div>
      <div class="panel-body">
            <div class="form-group">
                <select id="category" name="category_id" class="form-control" style="width:350px" >
                <option value="" selected disabled>Select</option>
                  @foreach($categories as $key => $category)
                  <option value="{{$key}}"> {{$category}}</option>
                  @endforeach
                  </select>
            </div>
            <div class="form-group">
                <label for="title">Select Sport:</label>
                <select name="sport" id="sport" class="form-control" style="width:350px">
                </select>
            </div>
         
            <div class="form-group">
                <label for="title">Select Membership:</label>
                <select name="membership" id="membership" class="form-control" style="width:350px">
                </select>
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

</body>
</html>

