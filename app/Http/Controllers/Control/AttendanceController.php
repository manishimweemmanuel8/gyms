<?php

namespace App\Http\Controllers\Control;
use App\Http\Controllers\Controller;
use App\Attendance;
use Illuminate\Http\Request;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //


        $attendances = Attendance::with('payment')->get();
         return view('control/attendance.index', compact('attendances'));
         // return $attendances;
    }

    public function destroy($id)
    {
        $att=Attendance::find($id);
        $att->delete();
        return redirect('/control/attendance');
    }


    


   

}
