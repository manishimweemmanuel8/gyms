@extends('receptionist.layouts.app')

@section('content')
<aside class="right-side right-padding">
            <section class="content-header">
                <!--section starts-->
                <h2>Commited Customer</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Commited Customer</a>
                    </li>
                    <li>
                        <a href="news.html">Commited Customer</a>
                    </li>
                </ol>
            </section>


            <!-- Datatables -->

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
                                            <th class="text-center">Edit/Save</th>
                                            <th class="text-center">Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clients as $client)
                                        <tr>
                                            <td>{{$client->created_at}}</td>
                                             <td>{{$client->cardCode}}</td>
                                            <td>{{$client->names}}</td>
                                            <td>{{$client->phone}}</td>
                                           <td>
                                                <a class="edit btn btn-primary" href="{{route('client.edit',['id'=>$client->id])}}">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="{{route('client.destroy',['id'=>$client->id])}}">
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