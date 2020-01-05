<div class="container">
  <div class="panel panel-default panel-fill">
        <div class="panel-heading">
            <h3 class="panel-title">Payment Form</h3>
        </div>
    <div class="panel-body">
  <form method="post" action="{{url('receptionist/payment')}}">
    {{ csrf_field() }}
    

    @if($customers !=null)
    <div class="form-group">
      <label>customer Name</label>
      <select name="customer_id" class="form-control" style="width:900px">
                    <option value="">--- Select Customer ---</option>
                    @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->firstName}}</option>
                    @endforeach
                </select>
    </div>
    @endif

    @if($receptionists !=null)
    <div class="form-group">
      <label>receptionist Name</label>
      <select name="receptionist_id" class="form-control" style="width:900px">
                    <option value="">--- Select Recesptionist ---</option>
                    @foreach ($receptionists as $receptionist)
                    <option value="{{ $receptionist->id }}">{{ $receptionist->name}}</option>
                    @endforeach
                </select>
    </div>
    @endif

   <div class="form-group">
                <label for="country">Select Category:</label>
                <select name="category" class="form-control" style="width:900px">
                    <option value="">--- Select Category ---</option>
                    @foreach ($categories as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

   <div class="form-group">
                <label for="state">Select Sport:</label>
                <select name="sport" class="form-control"style="width:900px">
                <option>--Sport--</option>
                </select>
            </div>

     @if($memberships !=null)
    <div class="form-group">
      <label>membership Name</label>
      <select name="membership_id" class="form-control" style="width:900px">
                    <option value="">--- Select Membership ---</option>
                    @foreach ($memberships as $membership)
                    <option value="{{ $membership->id }}">{{ $membership->name}}</option>
                    @endforeach
                </select>
    </div>
    @endif


     @if($prices !=null)
    <div class="form-group">
      <label>price Name</label>
      <select name="price_id" class="form-control" style="width:900px">
                    <option value="">--- Select Price ---</option>
                    @foreach ($prices as $price)
                    <option value="{{ $price->id }}">{{ $price->amount}}</option>
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

  <script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="category"]').on('change',function(){
               var categoryID = jQuery(this).val();
               if(categoryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getports/' +categoryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="sport"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="sport"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="sport"]').empty();
               }
            });
    });
    </script>