<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitController extends Controller
{
   
    public function GetVisitorDetails()
    {
        date_default_timezone_set('Asia/Dhaka');
         $ip_address  = $_SERVER['REMOTE_ADDR']; 
         $visit_time = date('H:s:ia');
         $visit_date =  date('d-m-Y');

         $visitor = new Visitor();
         $visitor->ip_address = $ip_address;
         $visitor->visit_time = $visit_time;
         $visitor->visit_date = $visit_date;

        $result = $visitor->save();

        return $result;
         
    }
      

   
}
