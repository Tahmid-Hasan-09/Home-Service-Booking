<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Booking;

class ReportController extends Controller
{
     public function ReportView(){

     	return view('backend.report.report_view');
     }


   public function ReportByDate(Request $request){
   	// return $request->all();
   	$date = new DateTime($request->date);
   	$formatDate = $date->format('d F Y');
   	// return $formatDate;
   	$bookings = Booking::where('booking_date',$formatDate)->latest()->get();
   	return view('backend.report.report_show',compact('bookings'));



   } // end mehtod 



   public function ReportByMonth(Request $request){
   	$bookings = Booking::where('booking_month',$request->month)->where('booking_year',$request->year_name)->latest()->get();
   	return view('backend.report.report_show',compact('bookings'));
   } // end mehtod 


      public function ReportByYear(Request $request){

   	$bookings = Booking::where('booking_year',$request->year)->latest()->get();
   	return view('backend.report.report_show',compact('bookings'));

   } // end mehtod 


}
 