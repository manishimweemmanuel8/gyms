<?php

namespace App\Http\Controllers\Manager;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Entitie;
use Illuminate\Http\Request;
use DB;
use Session;

class EntitiesController extends Controller
{
    //

    public function index()
    {
        $entities = Entitie::all();
        return view('manager/Entity.index', compact('entities'));
    }

    public function create()
    {
        return view('manager/Entity.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'expiry_date'=>'required'
        ]);
        $entity = new Entitie([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'expiry_date'=>$request->get('expiry_date'),

        ]);

        $entity->save();
        return redirect('/manager/Entity')->with('succes', 'Data has been successfully save!');
    }
    public function edit($id,$customer_id=null)
    {
        $customers=null;
        if(!$customer_id){
            $customers=DB::table("customers")->where('entitie_id',$id)->get();
        }
        $entity = Entitie::find($id);
        $customer=DB::table('entities')
            ->where('id', $id)
            ->value("customer_id");
        DB::table('customers')
            ->where('id', $customer)
            ->update(['entity_representative' => 0]);
        return view('manager.Entity.edit', compact('entity','id'),['customer_id'=>$customer_id,'customers'=>$customers]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'expiry_date'=>'required'
        ]);



        $entity = Entitie::find($id);
        $entity->name = $request->get('name');
        $entity->email = $request->get('email');
        $entity->customer_id = $request->get('customer_id');
        $entity->expiry_date=$request->get('expiry_date');

        $entity->save();
        DB::table('customers')
            ->where('id', $request->get('customer_id'))
            ->update(['entity_representative' => 1]);
        return redirect('/manager/Entity');
    }

    public function destroy($id)
    {
        entitie::destroy($id);
        return redirect('/manager/Entity');
    }

     public function uploadFile(Request $request){

    if ($request->input('submit') != null ){

      $file = $request->file('file');

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152; 

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        if($fileSize <= $maxFileSize){

          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
          $filepath = public_path($location."/".$filename);

          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );
             
             // Skip first row (Remove below comment if you want to skip the first row)
             if($i == 0){
                $i++;
                continue; 
             }
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){

            $insertData = array(
               "firstName"=>$importData[1],
               "lastName"=>$importData[2],
               "phone"=>$importData[3],
               "email"=>$importData[4]);
               "entitie_id"=>$importData[5],
               "dob"=>$importData[6],
               "gender"=>$importData[7],
               "entity_representative"=>$importData[8]);
            Page::insertData($insertData);

          }

          Session::flash('message','Import Successful.');
        }else{
          Session::flash('message','File too large. File must be less than 2MB.');
        }

      }else{
         Session::flash('message','Invalid File Extension.');
      }

    }

    // Redirect to index
    return redirect('/receptionist/customer');
  }
}
