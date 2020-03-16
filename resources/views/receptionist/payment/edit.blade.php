@extends('receptionist.layouts.app')

@section('content')

  <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Edit Corporate</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Corporate Payment</a>
                    </li>
                    <li>
                        <a href="add_users.html" class="activated">Edit Corporate Payment</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-user"></i> Edit Corporate Payment
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="add_users_form" method="POST" action="{{route('payments.update')}}" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <div class="form-body">




                                              
                                               

                                                <div class="form-group">
                                                     <label class="col-md-3 control-label" for="usr_name">
                                                        Subscription
                                                        <span class='require'>*</span>
                                                    </label>
                                                     <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-user-md text-primary"></i>
                                                            </span>
                                                        <select class="form-control" name="subscription_id" id="courses">
                                                            <option value="{{$payment->subscription_id}}">{{$payment->subscription_id}}</option>
                                                            @foreach ($subscriptions as $subscription)
                                                            <option value="{{ $subscription->id }}">{{ $subscription->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                                   <div class="form-group">
                                                    <label class="col-md-3 control-label" for="contact">
                                                        Expire Date
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-date text-primary"></i>
                                                            </span>
                                                            <input type="date" id="contact" class="form-control" name="expirydate" value="{{$payment->expirydate}}" />
                                                        </div>
                                                    </div>
                                                </div>


                                               
                                               
                                                
                                                
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        
                                                         <input type="hidden" name="id" value = "{{$payment->id}}">
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                        
                                                        <input type="reset" class="btn btn-white " value="Reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <!-- col-md-6 -->
                <!--row -->
                <!--row ends-->
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->

        @endsection