<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\BookingItem;
use App\Models\Service;
use Auth;
use Carbon\Carbon;
use PDF;
use DB;
 
 

class BookingController extends Controller
{
    
	// Pending Orders 
	public function PendingBookings(){
		$bookings = Booking::where('status','pending')->orderBy('id','DESC')->get();
		return view('backend.bookings.pending_bookings',compact('bookings'));

	} // end mehtod 


	// Pending Order Details 
	public function PendingBookingsDetails($booking_id){

		$booking = Booking::with('division','district','city','user')->where('id',$booking_id)->first();
    	$bookingItem = BookingItem::with('service')->where('booking_id',$booking_id)->orderBy('id','DESC')->get();
    	return view('backend.bookings.pending_bookings_details',compact('booking','bookingItem'));

	} // end method 



	// Confirmed Orders 
	public function ConfirmedBookings(){
		$bookings = Booking::where('status','confirmed')->orderBy('id','DESC')->get();
		return view('backend.bookings.confirmed_bookings',compact('bookings'));

	} // end mehtod 


	// Processing Orders 
	public function ProcessingBookings(){
		$bookings = Booking::where('status','processing')->orderBy('id','DESC')->get();
		return view('backend.bookings.processing_bookings',compact('bookings'));

	} // end mehtod 


		    // Shipped Orders 
	public function ShippedBookings(){
		$bookings = Booking::where('status','shipped')->orderBy('id','DESC')->get();
		return view('backend.bookings.shipped_bookings',compact('bookings'));

	} // end mehtod 


			// Delivered Orders 
	public function DeliveredBookings(){
		$bookings = Booking::where('status','delivered')->orderBy('id','DESC')->get();
		return view('backend.bookings.delivered_bookings',compact('bookings'));

	} // end mehtod 


				// Cancel Orders 
	public function CancelBookings(){
		$bookings = Booking::where('status','cancel')->orderBy('id','DESC')->get();
		return view('backend.bookings.cancel_bookings',compact('bookings'));

	} // end mehtod 




	public function PendingToConfirm($booking_id){
   
      Booking::findOrFail($booking_id)->update(['status' => 'confirmed']);

      $notification = array(
			'message' => 'Booking Confirmed Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('pending-bookings')->with($notification);


	} // end method





	public function ConfirmToProcessing($booking_id){
   
      Booking::findOrFail($booking_id)->update(['status' => 'processing']);

      $notification = array(
			'message' => 'Booking Processing started',
			'alert-type' => 'success'
		);

		return redirect()->route('confirmed-bookings')->with($notification);


	} // end method



	 public function ProcessingToShipped($booking_id){
   
      Booking::findOrFail($booking_id)->update(['status' => 'shipped']);

      $notification = array(
			'message' => 'Booking Shipped Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('processing-bookings')->with($notification);


	} // end method


	 public function ShippedToDelivered($booking_id){

	 $service = BookingItem::where('booking_id',$booking_id)->get();
	 foreach ($service as $item) {
	 	Service::where('id',$item->service_id)
	 			->update(['service_qty' => DB::raw('service_qty-'.$item->qty)]);
	 } 
 
      Booking::findOrFail($booking_id)->update(['status' => 'delivered']);

      $notification = array(
			'message' => 'Booking Delivered Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('shipped-bookings')->with($notification);


	} // end method


	public function AdminInvoiceDownload($booking_id){

		$booking = Booking::with('division','district','city','user')->where('id',$booking_id)->first();
    	$bookingItem = BookingItem::with('service')->where('booking_id',$booking_id)->orderBy('id','DESC')->get();
    	 
		$pdf = PDF::loadView('backend.bookings.booking_invoice',compact('booking','bookingItem'))->setPaper('a4')->setOptions([
				'tempDir' => public_path(),
				'chroot' => public_path(),
		]);
		return $pdf->download('invoice.pdf');

	} // end method 



}
 