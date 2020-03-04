<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{ 

    protected $redirectTo = '/manager/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('manager.auth:manager');
    }

    /**
     * Show the Manager dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index() {
    //     return view('manager.home');
    // }

    public function summarySalesReport(){
         $todayDate = date("Y-m-d");

         //gym session
           $gymSessionAdult = DB::table("attendances")
                ->where("sport_id", 2)
                ->where("membership_id", 5)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->count();
            $gymSessionAdultAmount = DB::table("prices")
                ->where("sport_id", 2)
                ->where("membership_id", 5)
                ->value("amount");
            $cashGymSessionAdult = $gymSessionAdultAmount * $gymSessionAdult;

            $gymStudent=DB::table("attendances")
            ->where("sport_id",6)
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
        $gymMonth=DB::table("attendances")
            ->where("sport_id",2)
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

        $gymAttendace=$cashGymSession+$gymMonth+$gymYear+$gymTicket;

        $gymParticipants=$gymTicket+$gymYear+$gymStudent+$gymMonth+$gymSessionAdult;
        $gymSales=$cashGymSession+$cashGym20Tickets+$cashGymYear+$cashGymMonth;


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


        $saunaParticipants=$saunaTicket+$saunaYear+$saunaMonth+$saunaSession;
        $saunaSales=$cashSauna20Ticket+$cashSaunaSession+$cashSaunaMonth+$cashSaunaYear;


         //POOL



        //adult session
        $poolSessionAdult=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",1)
            ->where('created_at', date('Y-m-d'))
            ->count();

        $poolSessionAdultAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",1)
            ->where("categorie_id",3)->value("amount");

        $cashPoolSessionAdult=$poolSessionAdultAmount*$poolSessionAdult;

        //student session

        $poolStudent=DB::table("attendances")
            ->where("sport_id",7)
            ->where("membership_id",22)
            ->where('created_at', date('Y-m-d'))
            ->count();
        $poolStudentAmount=DB::table("prices")
            ->where("sport_id",7)
            ->where("membership_id",22)
            ->where("categorie_id",2)->value("amount");
        $cashPoolStudent=$poolStudent*$poolStudentAmount;

        //kid session
         $poolSessionKid= DB::table("attendances")
            ->where("sport_id",5)
            ->where("membership_id",17)
            ->where('created_at', date('Y-m-d'))
            ->count();

        $poolSessionKidAmount= DB::table("prices")
            ->where("sport_id",5)
            ->where("membership_id",17)
            ->where("categorie_id",1)->value("amount");
        $cashPoolSessionKid=$poolSessionKidAmount*$poolSessionKid;

        $cashPoolSession=$cashPoolSessionKid+$cashPoolSessionAdult+$cashPoolStudent;


        //pool month adult

          $poolMonthAdult=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",2)
            ->where('created_at', date('Y-m-d'))
            ->count();
        $poolMonthAdultAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",2)
            ->where("categorie_id",3)->value("amount");
        $cashPoolMonthAdult=$poolMonthAdultAmount*$poolMonthAdult;

        //pool month kid

         $poolMonthKid=DB::table("attendances")
            ->where("sport_id",5)
            ->where("membership_id",18)
            ->where('created_at', date('Y-m-d'))
            ->count();

        $poolMonthKidAmount=DB::table("prices")
            ->where("sport_id",5)
            ->where("membership_id",18)
            ->where("categorie_id",1)->value("amount");
        $cashPoolMonthKid=$poolMonthKidAmount*$poolMonthKid;

        $cashPoolMonth=$cashPoolMonthKid+$cashPoolMonthAdult;

        //pool year

        $poolYear=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->where('created_at', date('Y-m-d'))
            ->count();
        $poolYearAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->where("categorie_id",3)->value("amount");
        $cashPoolYear=$poolYearAmount*$poolYear;

        //pool ticket

        $poolTicket=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",30)
            ->where('created_at', date('Y-m-d'))
            ->count();
        $poolTicketAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",30)
            ->where("categorie_id",3)->value("amount");
        $cashPoolTicket=$poolTicket*$poolTicketAmount;

        $poolParticipants=$poolTicket+$poolYear+$poolMonthKid+$poolMonthAdult+$poolStudent+$poolSessionKid+$poolSessionAdult;
        $poolSales=$cashPoolTicket+$cashPoolSession+$cashPoolMonth+$cashPoolYear;


        return view('manager/home',compact('poolParticipants','poolSales','gymParticipants','gymSales','saunaParticipants','saunaSales'));

    }


}