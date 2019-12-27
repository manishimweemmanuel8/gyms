<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class reportController extends Controller
{
	
    public function index()
    {
        // $payments = Payment::all();
        return view('report.report');
    }

    //GYM 
    public static function gymSessionAdult(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",2)
            ->where("membership_id",5)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        public static function gymStudent(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",6)
            ->where("membership_id",21)
            ->where("created_at", $todayDate)
            ->where("category_id",2)->count();
        }

        public static function gymMonth(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",2)
            ->where("membership_id",6)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }

      

        public static function gymYear(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",2)
            ->where("membership_id",7)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }

        //GYM AMOUNT
        public static function gymSessionAdultAmount(){
    	return DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",5)
            ->where("category_id",3)->value("amount");
        }

        public static function gymStudentAmount(){
    	return DB::table("prices")
            ->where("sport_id",6)
            ->where("membership_id",21)
            ->where("category_id",2)->value("amount");
        }

        public static function gymMonthAmount(){
    	return DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",6)
            ->where("category_id",3)->value("amount");
        }

        public static function gymYearAmount(){
    	return DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",7)
            ->where("category_id",3)->value("amount");
        }

        //MASSAGE
          public static function massageSessionAdult(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",4)
            ->where("membership_id",13)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }

        //MASSAGE AMOUNT

        public static function massageSessionAdultAmount(){
    	return DB::table("prices")
             ->where("sport_id",4)
            ->where("membership_id",13)
            ->where("category_id",3)->value("amount");
        }

        //SWIMMING POOL

        public static function poolSessionAdult(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",1)
            ->where("membership_id",1)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function poolSessionAdultAmount(){
    	return DB::table("prices")
             ->where("sport_id",1)
            ->where("membership_id",1)
            ->where("category_id",3)->value("amount");
        }


        public static function poolStudent(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",7)
            ->where("membership_id",22)
            ->where("created_at", $todayDate)
            ->where("category_id",2)->count();
        }
        //AMOUNT
        public static function poolStudentAmount(){
    	return DB::table("prices")
             ->where("sport_id",7)
            ->where("membership_id",22)
            ->where("category_id",2)->value("amount");
        }


        public static function poolSessionKid(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",5)
            ->where("membership_id",17)
            ->where("created_at", $todayDate)
            ->where("category_id",1)->count();
        }
        //AMOUNT
        public static function poolSessionKidAmount(){
    	return DB::table("prices")
             ->where("sport_id",5)
            ->where("membership_id",17)
            ->where("category_id",1)->value("amount");
        }

         public static function poolMonthAdult(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",1)
            ->where("membership_id",2)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function poolMonthAdultAmount(){
    	return DB::table("prices")
             ->where("sport_id",1)
            ->where("membership_id",2)
            ->where("category_id",3)->value("amount");
        }

         public static function poolMonthKid(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",5)
            ->where("membership_id",18)
            ->where("created_at", $todayDate)
            ->where("category_id",1)->count();
        }
        //AMOUNT
        public static function poolMonthKidAmount(){
    	return DB::table("prices")
             ->where("sport_id",5)
            ->where("membership_id",18)
            ->where("category_id",1)->value("amount");
        }

          public static function poolYear(){
    	$todayDate = date("Y-m-d");
    	return DB::table("attendances")
             ->where("sport_id",1)
            ->where("membership_id",3)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function poolYearAmount(){
    	return DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->where("category_id",3)->value("amount");
        }

          public static function saunaSession(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",9)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function saunaSessionAmount(){
        return DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",9)
            ->where("category_id",3)->value("amount");
        }

          public static function saunaMonth(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",10)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function saunaMonthAmount(){
        return DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",10)
            ->where("category_id",3)->value("amount");
        }

        public static function saunaYear(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",11)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function saunaYearAmount(){
        return DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",11)
            ->where("category_id",3)->value("amount");
        }

        public static function gymPoolSession(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",8)
            ->where("membership_id",23)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function gymPoolSessionAmount(){
        return DB::table("prices")
            ->where("sport_id",8)
            ->where("membership_id",23)
            ->where("category_id",3)->value("amount");
        }

         public static function gymPoolMonth(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",8)
            ->where("membership_id",24)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function gymPoolMonthAmount(){
        return DB::table("prices")
            ->where("sport_id",8)
            ->where("membership_id",24)
            ->where("category_id",3)->value("amount");
        }

         public static function gymSaunaSession(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",9)
            ->where("membership_id",25)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function gymSaunaSessionAmount(){
        return DB::table("prices")
            ->where("sport_id",9)
            ->where("membership_id",25)
            ->where("category_id",3)->value("amount");
        }

         public static function gymSaunaMonth(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",9)
            ->where("membership_id",26)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function gymSaunaMonthAmount(){
        return DB::table("prices")
            ->where("sport_id",9)
            ->where("membership_id",26)
            ->where("category_id",3)->value("amount");
        }

         public static function saunaMassageSession(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",10)
            ->where("membership_id",27)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function saunaMassageSessionAmount(){
        return DB::table("prices")
            ->where("sport_id",10)
            ->where("membership_id",27)
            ->where("category_id",3)->value("amount");
        }

        public static function saunaPoolSession(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",11)
            ->where("membership_id",28)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function saunaPoolSessionAmount(){
        return DB::table("prices")
            ->where("sport_id",11)
            ->where("membership_id",28)
            ->where("category_id",3)->value("amount");
        }


        public static function saunaPoolMonth(){
        $todayDate = date("Y-m-d");
        return DB::table("attendances")
            ->where("sport_id",11)
            ->where("membership_id",29)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        }
        //AMOUNT
        public static function saunaPoolMonthAmount(){
        return DB::table("prices")
            ->where("sport_id",11)
            ->where("membership_id",29)
            ->where("category_id",3)->value("amount");
        }





}
