@extends('manager.layouts.master-client')

@section('content')
  <div class="page-wrapper bg-blue p-t-10 p-b-10 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">
           
    <h5>Manager dashboard</h5>
    <div class="row">
  
       
        <div class="col-sm-4 py-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h3 class="card-title">SWIMMING</h3>
                   <p class="card-text">participants :{{$cashGymSession}}</p>
                    <p class="card-text">sales :{{$cashGymSession}}</p>
                    <a href="#" class="btn btn-outline-light">Outline</a>
                </div>
            </div>
        </div>

         <div class="col-sm-4 py-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h3 class="card-title">GYM</h3>
                    <p class="card-text">participants :{{$gymAttendace}}</p>
                    <p class="card-text">sales :{{$cashGymSession}}</p>
                    <a href="#" class="btn btn-outline-light">Outline</a>
                </div>
            </div>
        </div>

         <div class="col-sm-4 py-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h3 class="card-title">MASSAGE</h3>
                  <p class="card-text">participants :{{$cashGymSession}}</p>
                    <p class="card-text">sales :{{$cashGymSession}}</p>
                    <a href="#" class="btn btn-outline-light">Outline</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h3 class="card-title">SAUNA</h3>
                    <p class="card-text">participants :{{$cashGymSession}}</p>
                    <p class="card-text">sales :{{$cashGymSession}}</p>
                    <a href="#" class="btn btn-outline-light">Outline</a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
    
    </div>
</div>
@endsection
