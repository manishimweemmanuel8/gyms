<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class PagesController extends Controller
{
   function index()
    {
     $data = DB::table('customers')->orderBy('id', 'DESC')->get();
     return view('import_excel', compact('data'));
    }

   
    function import(Request $request)
    {
      ini_set('max_execution_time', 300); 
     // $this->validate($request, [
     //  'select_file'  => 'required|mimes:xls,xlsx'
     // ]);

     $path = $request->file('select_file')->getRealPath();

     $data = Excel::load($path)->get();

     if($data->count() > 0)
     {
      foreach($data->toArray() as $key => $value)
      {
       foreach($value as $row)
       {
        $insert_data[] = array(
         'firstName'  => $row['firstName'],
         'lastName'   => $row['lastName'],
         'phone'   => $row['phone'],
         'email'    => $row['email'],
         'entitie_id'  => $row['entitie_id'],
         'dob'   => $row['dob'],
         'gender'    => $row['gender'],
         'entity_representative'  => $row['entity_representative']
        );
       }
      }

      if(!empty($insert_data))
      {
       DB::table('customers')->insert($insert_data);
      }
     }
     return back()->with('success', 'Excel Data Imported successfully.');
    }

}
