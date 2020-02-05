@extends('manager.layouts.master-client')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Upload File</h2>

 @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
     @endif
     <!-- Form -->
     <form method='post' class="form-inline" action="{{url('manager/uploadFile')}}" enctype='multipart/form-data' >
       {{ csrf_field() }}
       <input type='file' name='file' >
       <input type='submit' name='submit' value='Import'>
     </form>
</div>
</div>
</div>
</div>

@endsection
