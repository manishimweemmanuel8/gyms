<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Session;
use DB;
use App\Corporate;

class CorporateCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return view('manager/customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($corporate_id=null)
        {
            $corporates=null;
        if(!$corporate_id){
            $corporates=DB::table('corporates')->get();
        }
       

            return view('manager/customer.create',[ 'corporate_id'=>$corporate_id, 'corporates'=>$corporates
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'corporate_id'=>'required',
            'names'=>'required',
            'phone'=>'required',
            'cardCode'=>'required',
        ]);
        $customer = new Customer();
  
        $customer->corporate_id= $request->input('corporate_id');
        $customer->names= $request->input('names');
        $customer->phone= $request->input('phone');
        $customer->cardCode= $request->input('cardCode');
        $customer->type= 'corporate';
        $customer->save(); 
        return redirect()->route('customer.index')->with('info','customer  saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$corporate_id=null)
    {
         $corporates=null;
        if(!$corporate_id){
            $corporates=Corporate::all();
        }
        $customer = Customer::find($id);

        return view('manager.customer.edit', compact('customer','id'),['corporate_id'=>$corporate_id,'corporates'=>$corporates]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         $request->validate([
            'corporate_id'=>'required',
            'names'=>'required',
            'phone'=>'required',
            'cardCode'=>'required',
        ]);

        $customer = Customer::find($request->input('id'));
        $customer->corporate_id= $request->input('corporate_id');
        $customer->names= $request->input('names');
        $customer->phone= $request->input('phone');
        $customer->cardCode= $request->input('cardCode');
        $customer->update(); 
        return redirect()->route('customer.index')->with('info','customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer = Customer::find($id);
        //delete
        $customer->delete();
        return redirect()->route('customer.index');
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
               "cardCode"=>$importData[0],
               "names"=>$importData[1],
               "phone"=>$importData[2],
               "type"=>'corporate',
               "corporate_id"=>$importData[4]
               
             );
            Customer::insertData($insertData);

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
        return redirect('/manager/customer');
  }
}
