<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Booking;
use App\Models\BookingItem;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon;

 
use App\Mail\BookingMail;
use PDF;

class AllUserController extends Controller
{
    public function MyBookings(){

    	$bookings = Booking::where('user_id',Auth::id())->orderBy('id','DESC')->get();
    	return view('frontend.user.booking.booking_view',compact('bookings'));
    } // end mehtod 



    public function BookingDetails($booking_id){

    	$booking = Booking::with('division','district','city','user')->where('id',$booking_id)->where('user_id',Auth::id())->first();
    	$bookingItem = BookingItem::with('service')->where('booking_id',$booking_id)->orderBy('id','DESC')->get();
    	return view('frontend.user.booking.booking_details',compact('booking','bookingItem'));

    } // end mehtod 



    public function InvoiceDownload($booking_id){
        $booking = Booking::with('division','district','city','user')->where('id',$booking_id)->where('user_id',Auth::id())->first();
        $bookingItem = BookingItem::with('service')->where('booking_id',$booking_id)->orderBy('id','DESC')->get();
    	// return view('frontend.user.booking.booking_invoice',compact('booking','bookingItem'));
		$pdf = PDF::loadView('frontend.user.booking.booking_invoice',compact('booking','bookingItem'))->setPaper('a4')->setOptions([
				'tempDir' => public_path(),
				'chroot' => public_path(),
		]);
		return $pdf->download('invoice.pdf');



    } // end mehtod 


    public function ComplainBooking(Request $request,$booking_id){

        Booking::findOrFail($booking_id)->update([
            'complain_date' => Carbon::now()->format('d F Y'),
            'complain_reason' => $request->complain_reason,
            'complain_booking' => 1,
        ]);


      $notification = array(
            'message' => 'Complain Submitted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('my.bookings')->with($notification);

    } // end method 



    public function ComplainBookingList(){

        $bookings = Booking::where('user_id',Auth::id())->where('complain_reason','!=',NULL)->orderBy('id','DESC')->get();
        return view('frontend.user.booking.complain_booking_view',compact('bookings'));

    } // end method 



    public function CancelBookings(){

        $bookings = Booking::where('user_id',Auth::id())->where('status','cancel')->orderBy('id','DESC')->get();
        return view('frontend.user.booking.cancel_booking_view',compact('bookings'));

    } // end method 



    ///////////// Order Traking ///////

    public function BookingTraking(Request $request){

        $invoice = $request->code;

        $track = Booking::where('invoice_no',$invoice)->first();

        if ($track) {
            
            // echo "<pre>";
            // print_r($track);

        return view('frontend.traking.track_booking',compact('track'));

        }else{

            $notification = array(
            'message' => 'Invoice Number Is Invalid',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);

        }

    } // end mehtod 




}
 