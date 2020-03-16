@extends('manager.layouts.app')

@section('content')
<aside class="right-side right-padding">
            <section class="content-header">
                <!--section starts-->
                <h2>Corporates Customer</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Corporate Customer</a>
                    </li>
                    <li>
                        <a href="news.html">Corporates Customer</a>
                    </li>
                </ol>
            </section>


            <!-- Datatables -->
 
            
                

               

                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- First Basic Table strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-fw fa-picture-o"></i> Add File
                                </h3>
                            </div>
                            <div class="panel-body" style="padding:30px;">
                                <div class="row">
                                    <p>
                                        File  to Upload must be CSV file.
                                    </p>
                                    @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
     @endif

                                    <form method='post' class="form-inline" action="{{url('manager/uploadFile')}}" enctype='multipart/form-data' >
                                       {{ csrf_field() }}
                                       <input type='file' name='file' >
                                       <input type='submit' name='submit' value='Import'>
                                     </form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> Customers
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered text-center" id="fitness-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Card code</th>
                                            <th class="text-center">Names</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center"> Corporate</th>
                                            <th class="text-center">Edit/Save</th>
                                            <th class="text-center">Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($customers as $customer)
                                        <tr>
                                            <td>{{$customer->created_at}}</td>
                                             <td>{{$customer->cardCode}}</td>
                                            <td>{{$customer->names}}</td>
                                            <td>{{$customer->phone}}</td>
                                            <td>{{$customer->corporate_id}}</td>
                                           <td>
                                                <a class="edit btn btn-primary" href="{{route('customer.edit',['id'=>$customer->id])}}">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="{{route('customer.destroy',['id'=>$customer->id])}}">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                           
                                      </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        @endsection