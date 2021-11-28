<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use DB;

class ComplainController extends Controller
{
    public function ComplainRequest(){

    	$bookings = Booking::where('complain_booking',1)->orderBy('id','DESC')->get();
    	return view('backend.complain_booking.complain_request',compact('bookings'));

    }
  

    public function ComplainRequestApprove($booking_id){

    	Booking::where('id',$booking_id)->update(['complain_booking' => 2]);

    	$notification = array(
            'message' => 'Complain Accepted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    } // end mehtod 

    public function ComplainRequestReject($booking_id){

    	Booking::where('id',$booking_id)->update(['complain_booking' => 3]);

    	$notification = array(
            'message' => 'Complain Rejected',
            'alert-type' => 'failure'
        );

        return redirect()->back()->with($notification);


    } // end mehtod 


    public function ComplainAllRequest(){ 
    	$bookings = Booking::where('complain_booking','>',1)->orderBy('id','DESC')->get();
    	return view('backend.complain_booking.all_complain_request',compact('bookings'));

    }
}
