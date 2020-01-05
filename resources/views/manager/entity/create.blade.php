@extends('manager.layouts.app')
@section('content')
<div class="container">
  <div class="panel panel-default panel-fill">
        <div class="panel-heading">
            <h3 class="panel-title">Entity Payment Form</h3>
        </div>
    <div class="panel-body">
  <form method="post" action="{{url('manager/entity')}}">
    {{ csrf_field() }}

    @if($entities !=null)
    <div class="form-group">
      <label>Entity Name</label>
      <select name="entity_id" class="form-control" style="width:350px">
                    <option value="">--- Select Entity ---</option>
                    @foreach ($entities as $entity)
                    <option value="{{ $entity->id }}">{{ $entity->name}}</option>
                    @endforeach
                </select>
    </div>
    @endif

    @if($receptionists !=null)
    <div class="form-group">
      <label>receptionist Name</label>
      <select name="receptionist_id" class="form-control" style="width:350px">
                    <option value="">--- Select Recesptionist ---</option>
                    @foreach ($receptionists as $receptionist)
                    <option value="{{ $receptionist->id }}">{{ $receptionist->name}}</option>
                    @endforeach
                </select>
    </div>
    @endif

            <div class="form-group">
                <select id="sport" name="sport_id" class="form-control" style="width:350px" >
                <option value="" selected disabled>Select</option>
                  @foreach($sports as $key => $sport)
                  <option value="{{$key}}"> {{$sport}}</option>
                  @endforeach
                  </select>
            </div>
           
         
            <div class="form-group">
                <label for="title">Select Membership:</label>
                <select name="membership_id" id="membership" class="form-control" style="width:350px">
                </select>
            </div>

            <div class="form-group">
                <label for="title">customer list ID:</label>
                <input type="text" class="form-control "  name="customer_list_id">
                </select>
            </div>
      </div>
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



<script type="text/javascript">
    $('#sport').change(function(){
    var sportID = $(this).val();    
    if(sportID){
        $.ajax({
           type:"GET",
           url:"{{url('get-membership-list')}}?sport_id="+sportID,
           success:function(res){               
            if(res){
                $("#membership").empty();
                $("#membership").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#membership").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#membership").empty();
            }
           }
        });
    }else{
        $("#sport").empty();
        $("#membership").empty();
    }      
   });
   //  $('#sport').on('change',function(){
   //  var sportID = $(this).val();    
   //  if(sportID){
   //      $.ajax({
   //         type:"GET",
   //         url:"{{url('get-membership-list')}}?sport_id="+sportID,
   //         success:function(res){               
   //          if(res){
   //              $("#membership").empty();
   //              $.each(res,function(key,value){
   //                  $("#membership").append('<option value="'+key+'">'+value+'</option>');
   //              });
           
   //          }else{
   //             $("#membership").empty();
   //          }
   //         }
   //      });
   //  }else{
   //      $("#membership").empty();
   //  }
        
   // });
</script>

@endsection

