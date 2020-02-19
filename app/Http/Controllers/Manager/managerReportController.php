<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Payment;
use DB;
use App\Attendance;
class managerReportController extends Controller
{
    //

    public function attendance(){
    	 $attendances = Attendance::with('payment')->get();
         return view('manager/report.attendance', compact('attendances'));
    }
    public function dailySalesReport(){

    	$payments = Payment::where('status','Yes' )
    				->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
    				->get();
        return view('manager/report.daily', compact('payments'));

    }

    public function summarySalesReport(){
    	 $todayDate = date("Y-m-d");

    	 //gym session
    	   $gymSessionAdult = DB::table("payments")
                ->where("sport_id", 2)
                ->where('status','Yes' )
                ->where("membership_id", 5)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->count();
            $gymSessionAdultAmount = DB::table("prices")
                ->where("sport_id", 2)
                ->where("membership_id", 5)
                ->value("amount");
            $cashGymSessionAdult = $gymSessionAdultAmount * $gymSessionAdult;

            $gymStudent=DB::table("payments")
            ->where("sport_id",6)
            ->where('status','Yes' )
            ->where("membership_id",21)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();

        $gymStudentAmount=DB::table("prices")
            ->where("sport_id",6)
            ->where("membership_id",21)
            ->where("categorie_id",2)->value("amount");

        $cashGymStudent=$gymStudent*$gymStudentAmount;

        $cashGymSession=$cashGymSessionAdult+$cashGymStudent;


         //gym Month
        $gymMonth=DB::table("payments")
            ->where("sport_id",2)
            ->where('status','Yes' )
            ->where("membership_id",6)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $gymMonthAmount= DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",6)
            ->where("categorie_id",3)->value("amount");
        $cashGymMonth=$gymMonth*$gymMonthAmount;

        //GYM YEAR

        $gymYear= DB::table("payments")
            ->where("sport_id",2)
            ->where("membership_id",7)
            ->where('status','Yes' )
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $gymYearAmount= DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",7)
            ->value("amount");
        $cashGymYear=$gymYear*$gymYearAmount;

          //GYM TICKETS

        $gymTicket=DB::table("payments")
            ->where("sport_id",2)
            ->where("membership_id",31)
            ->where('status','Yes' )
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $gymTicketAmount=DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",31)
            ->where("categorie_id",3)->value("amount");
        $cashGym20Tickets=$gymTicket*$gymTicketAmount;


        //SUANA Session

        $saunaSession=DB::table("payments")
            ->where("sport_id",3)
            ->where("membership_id",9)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $saunaSessionAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",9)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaSession=$saunaSession*$saunaSessionAmount;

        //SAUNA MONTHLY

        $saunaMonth=DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",10)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $saunaMonthAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",10)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaMonth=$saunaMonth*$saunaMonthAmount;

        //sauna year

        $saunaYear=DB::table("payments")
            ->where("sport_id",3)
            ->where("membership_id",11)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
             ->count();

        $saunaYearAmount= DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",11)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaYear=$saunaYear*$saunaYearAmount;

        //sauna ticket

        $saunaTicket= DB::table("payments")
            ->where("sport_id",3)
            ->where("membership_id",32)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $saunaTicketAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",32)
            ->where("categorie_id",3)->value("amount");
        $cashSauna20Ticket=$saunaTicket*$saunaTicketAmount;


         //POOL

        //adult session
        $poolSessionAdult=DB::table("payments")
            ->where("sport_id",1)
            ->where("membership_id",1)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();

        $poolSessionAdultAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",1)
            ->where("categorie_id",3)->value("amount");

        $cashPoolSessionAdult=$poolSessionAdultAmount*$poolSessionAdult;

        //student session

        $poolStudent=DB::table("payments")
            ->where("sport_id",7)
            ->where("membership_id",22)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $poolStudentAmount=DB::table("prices")
            ->where("sport_id",7)
            ->where("membership_id",22)
            ->where("categorie_id",2)->value("amount");
        $cashPoolStudent=$poolStudent*$poolStudentAmount;

        //kid session
         $poolSessionKid= DB::table("payments")
            ->where("sport_id",5)
            ->where("membership_id",17)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();

        $poolSessionKidAmount= DB::table("prices")
            ->where("sport_id",5)
            ->where("membership_id",17)
            ->where("categorie_id",1)->value("amount");
        $cashPoolSessionKid=$poolSessionKidAmount*$poolSessionKid;

        $cashPoolSession=$cashPoolSessionKid+$cashPoolSessionAdult+$cashPoolStudent;


        //pool month adult

          $poolMonthAdult=DB::table("payments")
            ->where("sport_id",1)
            ->where("membership_id",2)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $poolMonthAdultAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",2)
            ->where("categorie_id",3)->value("amount");
        $cashPoolMonthAdult=$poolMonthAdultAmount*$poolMonthAdult;

        //pool month kid

         $poolMonthKid=DB::table("payments")
            ->where("sport_id",5)
            ->where("membership_id",18)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();

        $poolMonthKidAmount=DB::table("prices")
            ->where("sport_id",5)
            ->where("membership_id",18)
            ->where("categorie_id",1)->value("amount");
        $cashPoolMonthKid=$poolMonthKidAmount*$poolMonthKid;

        $cashPoolMonth=$cashPoolMonthKid+$cashPoolMonthAdult;

        //pool year

        $poolYear=DB::table("payments")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $poolYearAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->where("categorie_id",3)->value("amount");
        $cashPoolYear=$poolYearAmount*$poolYear;

        //pool ticket

        $poolTicket=DB::table("payments")
            ->where("sport_id",1)
            ->where("membership_id",30)
            ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
            ->count();
        $poolTicketAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",30)
            ->where("categorie_id",3)->value("amount");
        $cashPoolTicket=$poolTicket*$poolTicketAmount;


        return view('manager/report.summary',compact('todayDate','cashGymSession','cashGymMonth','cashGymYear','cashGym20Tickets','cashSaunaSession','cashSaunaMonth','cashSaunaYear','cashSauna20Ticket','cashPoolSession','cashPoolMonth','cashPoolYear','cashPoolTicket'));

    }
}
