public function getCustomers(){
        $payment=Input::get('payment');
        $post=Input::get('sport_id');
        // 1=>gym,2=>pool,3=>sauna,4>massage


        // if ($post==1) {
            # code...
        
     

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
                            ->whereIn('sport_id', [2,8,9])
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->whereIn('sport_id', [2,8,9])
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->whereIn('sport_id', [2,8,9])
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->whereIn('sport_id', [2,8,9])
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
                    ->whereIn('sport_id', [2,8,9])->value("id");

                    if($client){

                    $attend = DB::table('attendances')
                    ->where('created_at', $todayDate)
                    ->where('customer_id', $payment)
                    ->value("id");

                if ($attend) {
                    $data['customer_id']="client attend";
                    return response()->json([$data]);
                } else{
                    Attendance::create([
                        'customer_id' => $payment,
                        'controller_id' => 1,
                        'sport_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->whereIn('sport_id', [2,8,9])
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->whereIn('sport_id', [2,8,9])
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->whereIn('sport_id', [2,8,9])
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $entitie_id)
                           ->where('expiry_date', '>=', $todayDate)
                            ->whereIn('sport_id', [2,8,9])
                            ->value('id'),
                    ]);
                   
                   

               $data['customer_id']="client pass";
                return response()->json([$data]);
                                            
                }
            }
            else{
            
                 // $data['customer_id']="clallowed";
                    // return response()->json([$data]);


                }
            }
            
// }
// elseif ($post=2) {
//  # code...
//    $entitie_id=DB::table('customers')->where('id', $payment)
//                     ->value("entitie_id");

//                     if ($entitie_id==1) {
//                         # code...
//                           $todayDate = date("Y-m-d");
//             $client = DB::table('payments')->where('customer_id', $payment)
//                     ->where('expiry_date', '>=', $todayDate)
//                     ->where('sport_id', Input::get('sport_id'))->value("id");

//                     if($client){

//                     $attend = DB::table('attendances')
//                     ->where('created_at', $todayDate)
//                     ->where('payment_id', $client)
//                     ->value("payment_id");

//                 if ($attend) {
//                     $data['customer_id']="client attend";
//                     return response()->json([$data]);
//                 } else {
//                     Attendance::create([
//                         'customer_id' => $payment,
//                         'controller_id' => 1,
//                         'sport_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [1,5,7,8,11])
//                             ->value('sport_id'),
//                         'membership_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [1,5,7,8,11])
//                             ->value('membership_id'),

//                         'category_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [1,5,7,8,11])
//                             ->value('categorie_id'),
//                         'payment_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [1,5,7,8,11])
//                             ->value('id'),
//                     ]);
                   
                   

//                $data['customer_id']="client pass";
//                     return response()->json([$data]);
                                            
//                 }
//             }
//             else{
               
//                  $data['customer_id']="client not allowed";
//                     return response()->json([$data]);

//                 }

//                     }else{

//             $todayDate = date("Y-m-d");
//             $client = DB::table('payments')->where('customer_id', $entitie_id)
//                     ->where('expiry_date', '>=', $todayDate)
//                     ->whereIn('sport_id', [1,5,7,8,11])->value("id");

//                     if($client){

//                     $attend = DB::table('attendances')
//                     ->where('created_at', $todayDate)
//                     ->where('customer_id', $payment)
//                     ->value("id");

//                 if ($attend) {
//                     $data['customer_id']="client attend";
//                     return response()->json([$data]);
//                 } else{
//                     Attendance::create([
//                         'customer_id' => $payment,
//                         'controller_id' => 1,
//                         'sport_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [1,5,7,8,11])
//                             ->value('sport_id'),
//                         'membership_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [1,5,7,8,11])
//                             ->value('membership_id'),

//                         'category_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [1,5,7,8,11])
//                             ->value('categorie_id'),
//                         'payment_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [1,5,7,8,11])
//                             ->value('id'),
//                     ]);
                   
                   

//                $data['customer_id']="client pass";
//                 return response()->json([$data]);
                                            
//                 }
//             }
//             else{
            

//                  $data['customer_id']="client not allowed";
//                     return response()->json([$data]);


//                 }
//             }
// }elseif (post==3) {
//  # code...
//    $entitie_id=DB::table('customers')->where('id', $payment)
//                     ->value("entitie_id");

//                     if ($entitie_id==1) {
//                         # code...
//                           $todayDate = date("Y-m-d");
//             $client = DB::table('payments')->where('customer_id', $payment)
//                     ->where('expiry_date', '>=', $todayDate)
//                     ->where('sport_id', Input::get('sport_id'))->value("id");

//                     if($client){

//                     $attend = DB::table('attendances')
//                     ->where('created_at', $todayDate)
//                     ->where('payment_id', $client)
//                     ->value("payment_id");

//                 if ($attend) {
//                     $data['customer_id']="client attend";
//                     return response()->json([$data]);
//                 } else {
//                     Attendance::create([
//                         'customer_id' => $payment,
//                         'controller_id' => 1,
//                         'sport_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [3,9,10,11])
//                             ->value('sport_id'),
//                         'membership_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [3,9,10,11])
//                             ->value('membership_id'),

//                         'category_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [3,9,10,11])
//                             ->value('categorie_id'),
//                         'payment_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [3,9,10,11])
//                             ->value('id'),
//                     ]);
                   
                   

//                $data['customer_id']="client pass";
//                     return response()->json([$data]);
                                            
//                 }
//             }
//             else{
               
//                  $data['customer_id']="client not allowed";
//                     return response()->json([$data]);

//                 }

//                     }else{

//             $todayDate = date("Y-m-d");
//             $client = DB::table('payments')->where('customer_id', $entitie_id)
//                     ->where('expiry_date', '>=', $todayDate)
//                     ->whereIn('sport_id', [3,9,10,11])->value("id");

//                     if($client){

//                     $attend = DB::table('attendances')
//                     ->where('created_at', $todayDate)
//                     ->where('customer_id', $payment)
//                     ->value("id");

//                 if ($attend) {
//                     $data['customer_id']="client attend";
//                     return response()->json([$data]);
//                 } else{
//                     Attendance::create([
//                         'customer_id' => $payment,
//                         'controller_id' => 1,
//                         'sport_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [3,9,10,11])
//                             ->value('sport_id'),
//                         'membership_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [3,9,10,11])
//                             ->value('membership_id'),

//                         'category_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [3,9,10,11])
//                             ->value('categorie_id'),
//                         'payment_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [3,9,10,11])
//                             ->value('id'),
//                     ]);
                   
                   

//                $data['customer_id']="client pass";
//                 return response()->json([$data]);
                                            
//                 }
//             }
//             else{
            

//                  $data['customer_id']="client not allowed";
//                     return response()->json([$data]);


//                 }
//             }
// }elseif ($post==4) {
//  # code...
//    $entitie_id=DB::table('customers')->where('id', $payment)
//                     ->value("entitie_id");

//                     if ($entitie_id==1) {
//                         # code...
//                           $todayDate = date("Y-m-d");
//             $client = DB::table('payments')->where('customer_id', $payment)
//                     ->where('expiry_date', '>=', $todayDate)
//                     ->where('sport_id', Input::get('sport_id'))->value("id");

//                     if($client){

//                     $attend = DB::table('attendances')
//                     ->where('created_at', $todayDate)
//                     ->where('payment_id', $client)
//                     ->value("payment_id");

//                 if ($attend) {
//                     $data['customer_id']="client attend";
//                     return response()->json([$data]);
//                 } else {
//                     Attendance::create([
//                         'customer_id' => $payment,
//                         'controller_id' => 1,
//                         'sport_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [4,10])
//                             ->value('sport_id'),
//                         'membership_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [4,10])
//                             ->value('membership_id'),

//                         'category_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [4,10])
//                             ->value('categorie_id'),
//                         'payment_id' => DB::table('payments')->where('customer_id', $payment)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [4,10])
//                             ->value('id'),
//                     ]);
                   
                   

//                $data['customer_id']="client pass";
//                     return response()->json([$data]);
                                            
//                 }
//             }
//             else{
               
//                  $data['customer_id']="client not allowed";
//                     return response()->json([$data]);

//                 }

//                     }else{

//             $todayDate = date("Y-m-d");
//             $client = DB::table('payments')->where('customer_id', $entitie_id)
//                     ->where('expiry_date', '>=', $todayDate)
//                     ->whereIn('sport_id', [4,10])->value("id");

//                     if($client){

//                     $attend = DB::table('attendances')
//                     ->where('created_at', $todayDate)
//                     ->where('customer_id', $payment)
//                     ->value("id");

//                 if ($attend) {
//                     $data['customer_id']="client attend";
//                     return response()->json([$data]);
//                 } else{
//                     Attendance::create([
//                         'customer_id' => $payment,
//                         'controller_id' => 1,
//                         'sport_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [4,10])
//                             ->value('sport_id'),
//                         'membership_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [4,10])
//                             ->value('membership_id'),

//                         'category_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [4,10])
//                             ->value('categorie_id'),
//                         'payment_id' => DB::table('payments')->where('customer_id', $entitie_id)
//                             ->where('expiry_date', '>=', $todayDate)
//                             ->whereIn('sport_id', [4,10])
//                             ->value('id'),
//                     ]);
                   
                   

//                $data['customer_id']="client pass";
//                 return response()->json([$data]);
                                            
//                 }
//             }
//             else{
            

//                  $data['customer_id']="client not allowed";
//                     return response()->json([$data]);


//                 }
//             }
// }else{
//  $data['customer_id']="we don't have this sport";
//                     return response()->json([$data]);

// }
}
}











