@extends('manager.layouts.master-client')
@section('content')

         <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">

                  <div class='row'>
                    <div class="col-md-10">
                    <h2 class="title"> Daily Sale Report</h2>
                  </div>
              </div>
 <table id="example" class="display" style="width:100%">                               
                        
                        <thead class="btn-light">
                                        <tr>
                                            <th>Event Time</th>
                                            <th>Client Name</th>
                                            <th>Packege Offered </th>
                                            <th>Subscr_Plan</th>
                                            <th>Amount paid</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($payments as $payment)
                                            <tr>
                                                <td>{{$payment->created_at}}</td>
                                                @if($payment['client_type']=='CORPORATE')
                                                <td>{{$payment->entitie['name']}}</td>
                                                @elseif($payment['client_type']=='INDIVIDUAL')
                                                <td>{{$payment['committed']['firstName']}} {{$payment['committed']['lastName']}}</td>
                                                @else
                                                <td>{{$payment['session']['phone']}}</td>
                                                @endif
                                                <td>{{$payment['sport']['name']}}</td>
                                                <td>{{$payment['membership']['name']}}</td>
                                                <td>{{$payment['amount']}}</td>
                                            
                                            </tr>
                                        @endforeach
           </tbody>


  </table>
</div>
                    </div>
                </div>
              </div>




    <!-- Static Table End -->





@endsection
