public function getCustomer(){
        $payment=Input::get('payment');
        $post=Input::get('sport');
        // 1=>gym,2=>pool,3=>sauna,4>massage
     

        $entitie_id=DB::table('customers')->where('id', $payment)
                    ->value("entitie_id");

                    if ($entitie_id==1) {
                        # code...
                          $todayDate = date("Y-m-d");
            $client = DB::table('payments')->where('customer_id', $payment)
                    ->where('expiry_date', '>=', $todayDate)
                    ->where('sport_id', Input::get('sport_id'))->value("id");

                    if($client){

                    $attend = DB::table('attendances')
                    ->where('created_at', $todayDate)
                    ->where('payment_id', $client)
                    ->value("payment_id");

                if ($attend) {
                    $data['customer_id']="client attend";
                    return response()->json([$data]);
                } else {
                    Attendance::create([
                        'customer_id' => $payment,
                        'controller_id' => 1,
                        'sport_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('id'),
                    ]);
                   
                   

               $data['customer_id']="client pass";
                    return response()->json([$data]);
                                            
                }
            }
            else{
               
                 $data['customer_id']="client not allowed";
                    return response()->json([$data]);

                }

                    }else{

            $todayDate = date("Y-m-d");
            $client = DB::table('payments')->where('customer_id', $entitie_id)
                    ->where('expiry_date', '>=', $todayDate)
                    ->where('sport_id', 3)->value("id");

                    if($client){

                    $attend = DB::table('attendances')
                    ->where('created_at', $todayDate)
                    ->where('customer_id', $payment)
                    ->value("id");

                if ($attend) {
                    $data['customer_id']="client attend";
                    return response()->json([$data]);
                } else {
                    Attendance::create([
                        'customer_id' => $payment,
                        'controller_id' => 1,
                        'sport_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('id'),
                    ]);
                   
                   

               $data['customer_id']="client pass";
                return response()->json([$data]);
                                            
                }
            }
            else{
            

                 $data['customer_id']="client not allowed";
                    return response()->json([$data]);


                }
            }

        
    


    

    public function loginReceptionist(){
         $email = Input::get('email');
        $password = Input::get('password');
        $receptionist = Receptionist::where('email', $email)->first();
    
        $data=DB::table('receptionists')
            ->where('email',$email)
            ->first();
        if ($receptionist && \Hash::check($password, $receptionist->password)) {
            return response()
                ->json(
                   $data
                );
        }
        return response()
            ->json(['status' => 2, 'message' => 'Ntitubashije kubamenya!']);
    }


    public function loginController(){
       
         $email = Input::get('email');
        $password = Input::get('password');
        $controller = Control::where('email', $email)->first();
            DB::table('controls')
            ->where('email', $email)
            ->update(['post_id' => Input::get('sport')]);
             $data=DB::table('controls')
            ->where('email',$email)
            ->first();
        if ($controller && \Hash::check($password, $controller->password)) {
            // TODO : check if deployment is full to sector level
            return response()
                ->json(
                   $data
                );
        }
        return response()
            ->json(['status' => 2, 'message' => 'Ntitubashije kubamenya!']);
    }



    public function session(){
    $customer=Input::get('phone');
    $category=Input::get('category_id');
    $sport=Input::get('sport_id');
    $membership=Input::get('membership_id');
    $receptionist=Input::get('id');
       

        $todayDate = date("Y-m-d");
        $client=DB::table('customers')->where('phone',$customer)->value('phone');
        if(!$client){
            Customer::create([
                'firstName'       => 'client',
                'lastName'     => 'client',
                'phone'          =>$customer,
                'email'     =>'email',
                'entitie_id'       =>1,
                'dob'        =>'1994-06-28',
                'gender'  =>'any',
                'entity_representative  '=>'0',
            ]);

            Payment::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                ->value('id') ,
            'receptionist_id'     => $receptionist,
            'sport_id'          => $sport,
            'membership_id'     =>$membership,
            'categorie_id'       =>$category,
            'amount'        => DB::table("prices")
                ->where("sport_id",$sport)
                ->where("membership_id",$membership)
                ->where("categorie_id",$category)->value("amount"),
            'duration'      =>1,
            'expiry_date'   =>$todayDate = date("Y-m-d"),
        ]);
        $mytime = date('Y-m-d H:i:s');

        Attendance::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                                     ->value('id') ,
            'controller_id'     => $receptionist,
            'sport_id'          =>$sport ,
            'membership_id'     =>$membership,
            'category_id'       =>$category,
            'payment_id'        =>DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'),
        ]);
           $data['customer_id']="client pass";
                return response()->json([$data]);


        }

        Payment::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                ->value('id') ,
            'receptionist_id'     => $receptionist,
            'sport_id'          => $sport,
            'membership_id'     =>$membership,
            'categorie_id'       =>$category,
            'amount'        => DB::table("prices")
                ->where("sport_id",$sport)
                ->where("membership_id",$membership)
                ->where("categorie_id",$category)->value("amount"),
            'duration'      =>1,
            'expiry_date'   =>$todayDate = date("Y-m-d"),
        ]);
        $mytime = date('Y-m-d H:i:s');

        Attendance::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                                     ->value('id') ,
            'controller_id'     => $receptionist,
            'sport_id'          =>$sport,
            'membership_id'     =>$membership,
            'category_id'       =>$category,
            'payment_id'        =>DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'),
        ]);


    
               $data['customer_id']="client pass";
                return response()->json([$data]);
         
}