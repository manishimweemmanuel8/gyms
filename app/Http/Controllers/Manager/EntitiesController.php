<?php

namespace App\Http\Controllers\Manager;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Entitie;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Payment;

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
        $categories = DB::table("categories")->pluck("name","id");
        return view('manager/Entity.create',compact('categories'));
    }

    public function import()
    {
        return view('manager/Entity.import');
    }

        public function show()
    {
        //
    }

      public function getSportList(Request $request)
    {
        $sports = DB::table("sports")
            ->where("categorie_id",$request->category_id)
            ->pluck("name","id");
        return response()->json($sports);
    }

    public function getMembershipList(Request $request)
    {
        $memberships = DB::table("memberships")
            ->where("sport_id",$request->sport_id)
            ->pluck("name","id");
        return response()->json($memberships);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'expiry_date'=>'required',
            'payment_type'=>'required'
        ]);
       
       
      $value=DB::table('entities')->where('name', $request->get('name'))->get();
      if($value->count() == 0){
         DB::table('entities')->insert([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'payment_type' =>$request->get('payment_type'),
            'expiry_date'=>$request->get('expiry_date'),

        ]);
      }
        
           $payment = new Payment([
            'customer_id' => DB::table("entities")->where('email',$request->get('email'))->value("id"),
            'receptionist_id' => 1,
            'categorie_id' => $request->get('categorie_id'),
            'sport_id' => $request->get('sport_id'),
             'membership_id' => $request->get('membership_id'),
             'amount' => DB::table("prices")
            ->where("categorie_id",$request->get('categorie_id'))
            ->where("sport_id",$request->get('sport_id'))
            ->where("membership_id",$request->get('membership_id'))
            ->value("amount"),
             'duration' => DB::table("memberships")
                ->where("id",$request->get('membership_id'))->value("duration"),
             'expiry_date'=>$request->get('expiry_date'),
             'location' => $request->get('location'),
             'status'=>'No',
             'client_type'=>'CORPORATE',
        ]);



        
        $payment->save();

        return view('/manager/Entity.import');
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
             DB::table('payments')
            ->where('customer_id', $id)
            ->update(['expiry_date' => $request->get('expiry_date')]);

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
               "firstName"=>$importData[0],
               "lastName"=>$importData[1],
               "phone"=>$importData[2],
               "email"=>$importData[3],
               "entitie_id"=>DB::table('entities')->orderBy('id', 'desc')
                            ->pluck('id')->first(),
               "dob"=>$importData[5],
               "gender"=>$importData[6]
               // "entity_representative"=>$importData[7]
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
        return redirect('/manager/Entity');
  }
}
