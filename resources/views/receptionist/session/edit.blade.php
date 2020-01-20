<html>
  <head>
    <title>Print Session</title>
    <script src={{asset('jquery.js')}}></script>
    <script src={{asset("jQuery.print.js")}}></script>
    <script>
    // here we will write our custom code for printing our div
    $(function(){
    $('#print').on('click', function() {
    //Print ele2 with default options
    $.print(".print_div");
    });
    });
    </script>
  </head>
  <body style='background: #f9f9f9'>
    <div class='print_div' style="border: 1px solid #a1a1a1; width: 300px; background: white; padding: 10px; margin: 0 auto; text-align: center;">
      <h4>BODY MAX</h4>
      <h3> Phone :{{$payment->customer['phone']}}</h3>
       <h3> Category :{{$payment->categorie['name']}}</h3>
       <h3> Sport :{{$payment->sport['name']}}</h3>
       <h3> Membership :{{$payment->membership['name']}}</h3>
       <h3> Amount :{{$payment['amount']}}</h3>
      thanks for choosing body max
    </div>
    <center><button id='print' style='margin-top: 10px; padding: 10px; border: none; text-align: center; background: black; border-radius: 4px; color: #fff; font-weight: bold; cursor: pointer;'>PRINT ABOVE DIV</button></center>
  </body>
</html>
