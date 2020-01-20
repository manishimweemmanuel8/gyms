<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class reportController extends Controller
{




    public function store(Request $request){
        $from = $request->get('from');
        $to = $request->get('to');
        //GYM
        //gym adult
        $gymSessionAdult = DB::table("attendances")
            ->where("sport_id", 2)
            ->where("membership_id", 5)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id", 3)->count();
        $gymSessionAdultAmount = DB::table("prices")
            ->where("sport_id", 2)
            ->where("membership_id", 5)
            ->where("categorie_id", 3)->value("amount");
        $cashGymSessionAdult = $gymSessionAdultAmount * $gymSessionAdult;

        //gym student
        $gymStudent=DB::table("attendances")
            ->where("sport_id",6)
            ->where("membership_id",21)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",2)->count();

        $gymStudentAmount=DB::table("prices")
            ->where("sport_id",6)
            ->where("membership_id",21)
            ->where("categorie_id",2)->value("amount");

        $cashGymStudent=$gymStudent*$gymStudentAmount;
        //gym Month
        $gymMonth=DB::table("attendances")
            ->where("sport_id",2)
            ->where("membership_id",6)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $gymMonthAmount= DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",6)
            ->where("categorie_id",3)->value("amount");
        $cashGymMonth=$gymMonth*$gymMonthAmount;

        //GYM YEAR

        $gymYear= DB::table("attendances")
            ->where("sport_id",2)
            ->where("membership_id",7)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $gymYearAmount= DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",7)
            ->where("categorie_id",3)->value("amount");
        $cashGymYear=$gymYear*$gymYearAmount;

        //GYM TICKETS

        $gymTicket=DB::table("attendances")
            ->where("sport_id",2)
            ->where("membership_id",31)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $gymTicketAmount=DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",31)
            ->where("categorie_id",3)->value("amount");
        $cashGymTickets=$gymTicket*$gymTicketAmount;

        //TOTAL SALES

        $gymTotalSales=$cashGymSessionAdult+$cashGymStudent+$cashGymMonth+$cashGymYear+$cashGymTickets;

        //GYM ATTENDANCE

        $gymAttandanceSession=$gymSessionAdult+$gymStudent;
        $gymAttandanceSubscribers=$gymMonth+$gymYear;
        $gymTotalService=$gymAttandanceSubscribers+$gymAttandanceSession;

        //MASSAGE
        //session

        $massageSessionAdult=DB::table("attendances")
            ->where("sport_id",4)
            ->where("membership_id",13)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $massageSessionAdultAmount=DB::table("prices")
            ->where("sport_id",4)
            ->where("membership_id",13)
            ->where("categorie_id",3)->value("amount");
        $cashMassageSession=$massageSessionAdultAmount*$massageSessionAdult;

        //tickets
        $massageTicket=DB::table("attendances")
            ->where("sport_id",4)
            ->where("membership_id",33)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $massageTicketAmount= DB::table("prices")
            ->where("sport_id",4)
            ->where("membership_id",33)
            ->where("categorie_id",3)->value("amount");
        $cashMassageTicket=$massageTicketAmount*$massageTicket;

        $massageTotalSales=$cashMassageTicket+$cashMassageSession;
        $massageTotalService=$massageTicket+$massageSessionAdult;


        //POOL

        //adult session
        $poolSessionAdult=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",1)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();

        $poolSessionAdultAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",1)
            ->where("categorie_id",3)->value("amount");

        $cashPoolSessionAdult=$poolSessionAdultAmount*$poolSessionAdult;

        //student

        $poolStudent=DB::table("attendances")
            ->where("sport_id",7)
            ->where("membership_id",22)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",2)->count();
        $poolStudentAmount=DB::table("prices")
            ->where("sport_id",7)
            ->where("membership_id",22)
            ->where("categorie_id",2)->value("amount");
        $cashPoolStudent=$poolStudent*$poolStudentAmount;

        $poolSessionKid= DB::table("attendances")
            ->where("sport_id",5)
            ->where("membership_id",17)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",1)->count();

        $poolSessionKidAmount= DB::table("prices")
            ->where("sport_id",5)
            ->where("membership_id",17)
            ->where("categorie_id",1)->value("amount");
        $cashPoolSessionKid=$poolSessionKidAmount*$poolSessionKid;

        $poolMonthAdult=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",2)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $poolMonthAdultAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",2)
            ->where("categorie_id",3)->value("amount");
        $cashPoolMonthAdult=$poolMonthAdultAmount*$poolMonthAdult;

        $poolMonthKid=DB::table("attendances")
            ->where("sport_id",5)
            ->where("membership_id",18)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",1)->count();

        $poolMonthKidAmount=DB::table("prices")
            ->where("sport_id",5)
            ->where("membership_id",18)
            ->where("categorie_id",1)->value("amount");
        $cashPoolMonthKid=$poolMonthKidAmount*$poolMonthKid;

        $poolYear=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $poolYearAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->where("categorie_id",3)->value("amount");
        $cashPoolYear=$poolYearAmount*$poolYear;

        $poolTicket=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",30)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $poolTicketAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",30)
            ->where("categorie_id",3)->value("amount");
        $cashPoolTicket=$poolTicket*$poolTicketAmount;

        $poolTotalSales=$cashPoolTicket+$cashPoolYear+$cashPoolMonthKid+$cashPoolMonthAdult+$cashPoolSessionAdult+$cashPoolStudent;

        //SUANA

        $saunaSession=DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",9)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $saunaSessionAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",9)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaSession=$saunaSession*$saunaSessionAmount;

        $saunaMonth=DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",10)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $saunaMonthAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",10)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaMonth=$saunaMonth*$saunaMonthAmount;

        $saunaYear=DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",11)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();

        $saunaYearAmount= DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",11)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaYear=$saunaYear*$saunaYearAmount;

        $saunaTicket= DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",32)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $saunaTicketAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",32)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaTicket=$saunaTicket*$saunaTicketAmount;

        $saunaTotalSales=$cashSaunaTicket+$cashSaunaYear+$cashSaunaMonth+$cashSaunaSession;

        $saunaAttendanceSubscribers=$saunaMonth+$saunaYear;
        $saunaTotalAttendance=$saunaYear+$saunaMonth+$saunaSession+$saunaTicket;

        //GYM AND POOL

        $gymPoolSession=DB::table("attendances")
            ->where("sport_id",8)
            ->where("membership_id",23)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $gymPoolSessionAmount=DB::table("prices")
            ->where("sport_id",8)
            ->where("membership_id",23)
            ->where("categorie_id",3)->value("amount");
        $cashGymPoolSession=$gymPoolSession*$gymPoolSessionAmount;

        $gymPoolMonth=DB::table("attendances")
            ->where("sport_id",8)
            ->where("membership_id",24)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $gymPoolMonthAmount=DB::table("prices")
            ->where("sport_id",8)
            ->where("membership_id",24)
            ->where("categorie_id",3)->value("amount");
        $cashGymPoolMonth=$gymPoolMonth*$gymPoolMonthAmount;

        $gymSaunaSession=DB::table("attendances")
            ->where("sport_id",9)
            ->where("membership_id",25)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $gymSaunaSessionAmount=DB::table("prices")
            ->where("sport_id",9)
            ->where("membership_id",25)
            ->where("categorie_id",3)->value("amount");
        $cashGymSaunaSession=$gymSaunaSession*$gymSaunaSessionAmount;

        $gymSaunaMonth=DB::table("attendances")
            ->where("sport_id",9)
            ->where("membership_id",26)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $gymSaunaMonthAmount= DB::table("prices")
            ->where("sport_id",9)
            ->where("membership_id",26)
            ->where("categorie_id",3)->value("amount");
        $cashGymSaunaMonth=$gymSaunaSessionAmount*$gymSaunaMonth;

        $saunaMassageSession=DB::table("attendances")
            ->where("sport_id",10)
            ->where("membership_id",27)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $saunaMassageSessionAmount=DB::table("prices")
            ->where("sport_id",10)
            ->where("membership_id",27)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaMassageSession=$saunaMassageSession*$saunaMassageSessionAmount;

        $saunaPoolSession=DB::table("attendances")
            ->where("sport_id",11)
            ->where("membership_id",28)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $saunaPoolSessionAmount=DB::table("prices")
            ->where("sport_id",11)
            ->where("membership_id",28)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaPoolSession=$saunaPoolSession*$saunaPoolSessionAmount;

        $saunaPoolMonth=DB::table("attendances")
            ->where("sport_id",11)
            ->where("membership_id",29)
            ->whereBetween('created_at', [$from, $to])
            ->where("category_id",3)->count();
        $saunaPoolMonthAmount=DB::table("prices")
            ->where("sport_id",11)
            ->where("membership_id",29)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaPoolMonth=$saunaPoolMonth*$saunaPoolMonthAmount;

        $combinationTotalSales=$cashSaunaPoolMonth+$cashSaunaPoolSession+$cashSaunaMassageSession+$cashGymSaunaMonth+$cashGymSaunaSession+$cashGymPoolMonth+$cashGymPoolSession;

        $combinationAttendanceSession=$gymPoolSession+$gymSaunaSession+$saunaMassageSession+$saunaPoolSession;
        $combinationAttendanceMonth=$gymPoolMonth+$gymSaunaMonth+$saunaPoolMonth;
        $combinationAttendanceTotalService=$combinationAttendanceSession+$combinationAttendanceMonth;

        $attendanceReportSession=$gymSessionAdult+$gymStudent+$massageSessionAdult+$poolSessionAdult+$poolSessionKid+$saunaSession+$gymPoolSession+$gymSaunaSession+$gymPoolSession
            +$gymSaunaSession+$saunaMassageSession+$saunaPoolSession;

        $attendanceReportMonth=$gymMonth+$poolMonthKid+$poolMonthAdult+$saunaMonth+$gymYear+$poolYear+$saunaYear+$gymPoolMonth+$gymSaunaMonth+$saunaPoolMonth;
        $attendanceReportTickets=$gymTicket+$poolTicket+$saunaTicket+$massageTicket;

        $attendanceReport=$attendanceReportMonth+$attendanceReportSession+$attendanceReportTickets;



        return view('report.report', compact('gymSessionAdult', 'gymSessionAdultAmount', 'cashGymSessionAdult','gymStudent',
                'gymStudentAmount','gymStudent','cashGymStudent','gymMonth','gymMonthAmount','cashGymMonth','gymYear','gymYearAmount','cashGymYear',
                'gymTicket','gymTicketAmount','cashGymTickets','gymTotalSales','gymAttandanceSession','gymAttandanceSubscribers','gymTotalService'
                ,'massageSessionAdult','massageSessionAdultAmount','cashMassageSession','massageTicket','massageTicketAmount','cashMassageTicket','massageTotalSales',
                'massageTotalService','poolSessionAdult','poolSessionAdultAmount','cashPoolSessionAdult','poolStudent','poolStudentAmount','cashPoolStudent','poolSessionKid',
                'poolSessionKidAmount','cashPoolSessionKid','poolMonthAdult','poolMonthAdultAmount','cashPoolMonthAdult','poolMonthKid','poolMonthKidAmount','cashPoolMonthKid',
                'poolYear','poolYearAmount','cashPoolYear','poolTicket','poolTicketAmount','cashPoolTicket','poolTotalSales','saunaSession','saunaSessionAmount',
                'cashSaunaSession','saunaMonthAmount','saunaMonth','cashSaunaMonth','saunaYearAmount','saunaYear','cashSaunaYear','saunaTicket','saunaTicketAmount',
                'cashSaunaTicket','saunaTotalSales','saunaAttendanceSubscribers','saunaTotalAttendance','gymPoolSessionAmount','gymPoolSession','cashGymPoolSession',
                'gymPoolMonth','gymPoolMonthAmount','cashGymPoolMonth','gymSaunaSession','gymSaunaSessionAmount','cashGymSaunaSession','gymSaunaMonth','gymSaunaMonthAmount',
                'cashGymSaunaMonth','saunaMassageSession','saunaMassageSessionAmount','cashSaunaMassageSession','saunaPoolSession','saunaPoolSessionAmount',
                'cashSaunaPoolSession','saunaPoolMonth','saunaPoolMonthAmount','cashSaunaPoolMonth','combinationTotalSales','combinationAttendanceSession',
                'combinationAttendanceMonth','combinationAttendanceTotalService','attendanceReportSession','attendanceReportMonth','attendanceReportTickets','attendanceReport')
        );


    }

    public function index(Request $request)
    {

            $todayDate = date("Y-m-d");
        //GYM
        //gym adult
            $gymSessionAdult = DB::table("attendances")
                ->where("sport_id", 2)
                ->where("membership_id", 5)
                ->where("created_at", $todayDate)
                ->where("category_id", 3)->count();
            $gymSessionAdultAmount = DB::table("prices")
                ->where("sport_id", 2)
                ->where("membership_id", 5)
                ->where("categorie_id", 3)->value("amount");
            $cashGymSessionAdult = $gymSessionAdultAmount * $gymSessionAdult;

           //gym student
        $gymStudent=DB::table("attendances")
            ->where("sport_id",6)
            ->where("membership_id",21)
            ->where("created_at", $todayDate)
            ->where("category_id",2)->count();

        $gymStudentAmount=DB::table("prices")
            ->where("sport_id",6)
            ->where("membership_id",21)
            ->where("categorie_id",2)->value("amount");

        $cashGymStudent=$gymStudent*$gymStudentAmount;
        //gym Month
        $gymMonth=DB::table("attendances")
            ->where("sport_id",2)
            ->where("membership_id",6)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $gymMonthAmount= DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",6)
            ->where("categorie_id",3)->value("amount");
        $cashGymMonth=$gymMonth*$gymMonthAmount;

        //GYM YEAR

        $gymYear= DB::table("attendances")
            ->where("sport_id",2)
            ->where("membership_id",7)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $gymYearAmount= DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",7)
            ->where("categorie_id",3)->value("amount");
        $cashGymYear=$gymYear*$gymYearAmount;

        //GYM TICKETS

        $gymTicket=DB::table("attendances")
            ->where("sport_id",2)
            ->where("membership_id",31)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $gymTicketAmount=DB::table("prices")
            ->where("sport_id",2)
            ->where("membership_id",31)
            ->where("categorie_id",3)->value("amount");
        $cashGymTickets=$gymTicket*$gymTicketAmount;

        //TOTAL SALES

        $gymTotalSales=$cashGymSessionAdult+$cashGymStudent+$cashGymMonth+$cashGymYear+$cashGymTickets;

        //GYM ATTENDANCE

        $gymAttandanceSession=$gymSessionAdult+$gymStudent;
        $gymAttandanceSubscribers=$gymMonth+$gymYear;
        $gymTotalService=$gymAttandanceSubscribers+$gymAttandanceSession;

        //MASSAGE
        //session

        $massageSessionAdult=DB::table("attendances")
            ->where("sport_id",4)
            ->where("membership_id",13)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $massageSessionAdultAmount=DB::table("prices")
            ->where("sport_id",4)
            ->where("membership_id",13)
            ->where("categorie_id",3)->value("amount");
        $cashMassageSession=$massageSessionAdultAmount*$massageSessionAdult;

        //tickets
        $massageTicket=DB::table("attendances")
            ->where("sport_id",4)
            ->where("membership_id",33)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $massageTicketAmount= DB::table("prices")
            ->where("sport_id",4)
            ->where("membership_id",33)
            ->where("categorie_id",3)->value("amount");
        $cashMassageTicket=$massageTicketAmount*$massageTicket;

        $massageTotalSales=$cashMassageTicket+$cashMassageSession;
        $massageTotalService=$massageTicket+$massageSessionAdult;


        //POOL

        //adult session
        $poolSessionAdult=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",1)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();

        $poolSessionAdultAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",1)
            ->where("categorie_id",3)->value("amount");

        $cashPoolSessionAdult=$poolSessionAdultAmount*$poolSessionAdult;

        //student

        $poolStudent=DB::table("attendances")
            ->where("sport_id",7)
            ->where("membership_id",22)
            ->where("created_at", $todayDate)
            ->where("category_id",2)->count();
        $poolStudentAmount=DB::table("prices")
            ->where("sport_id",7)
            ->where("membership_id",22)
            ->where("categorie_id",2)->value("amount");
        $cashPoolStudent=$poolStudent*$poolStudentAmount;

        $poolSessionKid= DB::table("attendances")
            ->where("sport_id",5)
            ->where("membership_id",17)
            ->where("created_at", $todayDate)
            ->where("category_id",1)->count();

        $poolSessionKidAmount= DB::table("prices")
            ->where("sport_id",5)
            ->where("membership_id",17)
            ->where("categorie_id",1)->value("amount");
        $cashPoolSessionKid=$poolSessionKidAmount*$poolSessionKid;

        $poolMonthAdult=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",2)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $poolMonthAdultAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",2)
            ->where("categorie_id",3)->value("amount");
        $cashPoolMonthAdult=$poolMonthAdultAmount*$poolMonthAdult;

        $poolMonthKid=DB::table("attendances")
            ->where("sport_id",5)
            ->where("membership_id",18)
            ->where("created_at", $todayDate)
            ->where("category_id",1)->count();

        $poolMonthKidAmount=DB::table("prices")
            ->where("sport_id",5)
            ->where("membership_id",18)
            ->where("categorie_id",1)->value("amount");
        $cashPoolMonthKid=$poolMonthKidAmount*$poolMonthKid;

        $poolYear=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $poolYearAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",3)
            ->where("categorie_id",3)->value("amount");
        $cashPoolYear=$poolYearAmount*$poolYear;

        $poolTicket=DB::table("attendances")
            ->where("sport_id",1)
            ->where("membership_id",30)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $poolTicketAmount=DB::table("prices")
            ->where("sport_id",1)
            ->where("membership_id",30)
            ->where("categorie_id",3)->value("amount");
        $cashPoolTicket=$poolTicket*$poolTicketAmount;

        $poolTotalSales=$cashPoolTicket+$cashPoolYear+$cashPoolMonthKid+$cashPoolMonthAdult+$cashPoolSessionAdult+$cashPoolStudent;

        //SUANA

        $saunaSession=DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",9)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $saunaSessionAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",9)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaSession=$saunaSession*$saunaSessionAmount;

        $saunaMonth=DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",10)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $saunaMonthAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",10)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaMonth=$saunaMonth*$saunaMonthAmount;

        $saunaYear=DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",11)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();

        $saunaYearAmount= DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",11)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaYear=$saunaYear*$saunaYearAmount;

        $saunaTicket= DB::table("attendances")
            ->where("sport_id",3)
            ->where("membership_id",32)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $saunaTicketAmount=DB::table("prices")
            ->where("sport_id",3)
            ->where("membership_id",32)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaTicket=$saunaTicket*$saunaTicketAmount;

        $saunaTotalSales=$cashSaunaTicket+$cashSaunaYear+$cashSaunaMonth+$cashSaunaSession;

        $saunaAttendanceSubscribers=$saunaMonth+$saunaYear;
        $saunaTotalAttendance=$saunaYear+$saunaMonth+$saunaSession+$saunaTicket;

        //GYM AND POOL

        $gymPoolSession=DB::table("attendances")
            ->where("sport_id",8)
            ->where("membership_id",23)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $gymPoolSessionAmount=DB::table("prices")
            ->where("sport_id",8)
            ->where("membership_id",23)
            ->where("categorie_id",3)->value("amount");
        $cashGymPoolSession=$gymPoolSession*$gymPoolSessionAmount;

        $gymPoolMonth=DB::table("attendances")
            ->where("sport_id",8)
            ->where("membership_id",24)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $gymPoolMonthAmount=DB::table("prices")
            ->where("sport_id",8)
            ->where("membership_id",24)
            ->where("categorie_id",3)->value("amount");
        $cashGymPoolMonth=$gymPoolMonth*$gymPoolMonthAmount;

        $gymSaunaSession=DB::table("attendances")
            ->where("sport_id",9)
            ->where("membership_id",25)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $gymSaunaSessionAmount=DB::table("prices")
            ->where("sport_id",9)
            ->where("membership_id",25)
            ->where("categorie_id",3)->value("amount");
        $cashGymSaunaSession=$gymSaunaSession*$gymSaunaSessionAmount;

        $gymSaunaMonth=DB::table("attendances")
            ->where("sport_id",9)
            ->where("membership_id",26)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $gymSaunaMonthAmount= DB::table("prices")
            ->where("sport_id",9)
            ->where("membership_id",26)
            ->where("categorie_id",3)->value("amount");
        $cashGymSaunaMonth=$gymSaunaSessionAmount*$gymSaunaMonth;

        $saunaMassageSession=DB::table("attendances")
            ->where("sport_id",10)
            ->where("membership_id",27)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $saunaMassageSessionAmount=DB::table("prices")
            ->where("sport_id",10)
            ->where("membership_id",27)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaMassageSession=$saunaMassageSession*$saunaMassageSessionAmount;

        $saunaPoolSession=DB::table("attendances")
            ->where("sport_id",11)
            ->where("membership_id",28)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $saunaPoolSessionAmount=DB::table("prices")
            ->where("sport_id",11)
            ->where("membership_id",28)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaPoolSession=$saunaPoolSession*$saunaPoolSessionAmount;

        $saunaPoolMonth=DB::table("attendances")
            ->where("sport_id",11)
            ->where("membership_id",29)
            ->where("created_at", $todayDate)
            ->where("category_id",3)->count();
        $saunaPoolMonthAmount=DB::table("prices")
            ->where("sport_id",11)
            ->where("membership_id",29)
            ->where("categorie_id",3)->value("amount");
        $cashSaunaPoolMonth=$saunaPoolMonth*$saunaPoolMonthAmount;

        $combinationTotalSales=$cashSaunaPoolMonth+$cashSaunaPoolSession+$cashSaunaMassageSession+$cashGymSaunaMonth+$cashGymSaunaSession+$cashGymPoolMonth+$cashGymPoolSession;

        $combinationAttendanceSession=$gymPoolSession+$gymSaunaSession+$saunaMassageSession+$saunaPoolSession;
        $combinationAttendanceMonth=$gymPoolMonth+$gymSaunaMonth+$saunaPoolMonth;
        $combinationAttendanceTotalService=$combinationAttendanceSession+$combinationAttendanceMonth;

        $attendanceReportSession=$gymSessionAdult+$gymStudent+$massageSessionAdult+$poolSessionAdult+$poolSessionKid+$saunaSession+$gymPoolSession+$gymSaunaSession+$gymPoolSession
            +$gymSaunaSession+$saunaMassageSession+$saunaPoolSession;

        $attendanceReportMonth=$gymMonth+$poolMonthKid+$poolMonthAdult+$saunaMonth+$gymYear+$poolYear+$saunaYear+$gymPoolMonth+$gymSaunaMonth+$saunaPoolMonth;
        $attendanceReportTickets=$gymTicket+$poolTicket+$saunaTicket+$massageTicket;

        $attendanceReport=$attendanceReportMonth+$attendanceReportSession+$attendanceReportTickets;



        return view('report.report', compact('gymSessionAdult', 'gymSessionAdultAmount', 'cashGymSessionAdult','gymStudent',
                'gymStudentAmount','gymStudent','cashGymStudent','gymMonth','gymMonthAmount','cashGymMonth','gymYear','gymYearAmount','cashGymYear',
                'gymTicket','gymTicketAmount','cashGymTickets','gymTotalSales','gymAttandanceSession','gymAttandanceSubscribers','gymTotalService'
            ,'massageSessionAdult','massageSessionAdultAmount','cashMassageSession','massageTicket','massageTicketAmount','cashMassageTicket','massageTotalSales',
                'massageTotalService','poolSessionAdult','poolSessionAdultAmount','cashPoolSessionAdult','poolStudent','poolStudentAmount','cashPoolStudent','poolSessionKid',
                'poolSessionKidAmount','cashPoolSessionKid','poolMonthAdult','poolMonthAdultAmount','cashPoolMonthAdult','poolMonthKid','poolMonthKidAmount','cashPoolMonthKid',
                'poolYear','poolYearAmount','cashPoolYear','poolTicket','poolTicketAmount','cashPoolTicket','poolTotalSales','saunaSession','saunaSessionAmount',
                'cashSaunaSession','saunaMonthAmount','saunaMonth','cashSaunaMonth','saunaYearAmount','saunaYear','cashSaunaYear','saunaTicket','saunaTicketAmount',
                'cashSaunaTicket','saunaTotalSales','saunaAttendanceSubscribers','saunaTotalAttendance','gymPoolSessionAmount','gymPoolSession','cashGymPoolSession',
                'gymPoolMonth','gymPoolMonthAmount','cashGymPoolMonth','gymSaunaSession','gymSaunaSessionAmount','cashGymSaunaSession','gymSaunaMonth','gymSaunaMonthAmount',
                'cashGymSaunaMonth','saunaMassageSession','saunaMassageSessionAmount','cashSaunaMassageSession','saunaPoolSession','saunaPoolSessionAmount',
                'cashSaunaPoolSession','saunaPoolMonth','saunaPoolMonthAmount','cashSaunaPoolMonth','combinationTotalSales','combinationAttendanceSession',
                'combinationAttendanceMonth','combinationAttendanceTotalService','attendanceReportSession','attendanceReportMonth','attendanceReportTickets','attendanceReport')
        );


}












}
