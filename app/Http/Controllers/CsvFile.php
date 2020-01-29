<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Customer;

class CsvFile extends Controller
{
    function index(){
        $data = Customer::latest()->paginate(10);
        return view('csv_file_pagination', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);

    }

   

    public function csv_import(Request $request){
        // Excel::import(new CsvImport, request()->file('file'));
        // return back();




        $request->validate([
            'file' => 'required'
        ]);

        $path = $request->file('file')->getRealPath();
        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value) {
                $arr[] = ['first_name' => $value->first_name, 'last_name' => $value->last_name, 'phone'=> $value->phone,'email' => $value->email, 'entity_id' => $value->entity_id, 'dob'=> $value->dob,'gender' => $value->gender, 'entity_responsibility'=> $value->entity_responsibility];
            }

            if(!empty($arr)){
                Customer::insert($arr);
            }
        }

        return back()->with('success', 'Insert Record successfully.');
       

    }
}
