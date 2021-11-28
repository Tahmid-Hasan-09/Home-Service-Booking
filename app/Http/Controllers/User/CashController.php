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

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;

class CashController extends Controller
{
     public function CashOrder(Request $request){


    	if (Session::has('coupon')) {
    		$total_amount = Session::get('coupon')['total_amount'];
    	}else{
    		$total_amount = round(Cart::total());
    	}
 
	 

	  // dd($charge);

     $booking_id = Booking::insertGetId([
     	'user_id' => Auth::id(),
     	'division_id' => $request->division_id,
     	'district_id' => $request->district_id,
     	'city_id' => $request->city_id,
     	'name' => $request->name,
     	'email' => $request->email,
     	'phone' => $request->phone,
     	'post_code' => $request->post_code,
     	'notes' => $request->notes,
        'address' => $request->address,
     	'payment_type' => 'Cash On Delivery',
     	'payment_method' => 'Cash On Delivery',
     	 
     	'currency' =>  'Bdt',
     	'amount' => $total_amount,
     	 

     	'invoice_no' => 'HSS'.mt_rand(10000000,99999999),
     	'booking_date' => Carbon::now()->format('d F Y'),
     	'booking_month' => Carbon::now()->format('F'),
     	'booking_year' => Carbon::now()->format('Y'),
     	'status' => 'pending',
     	'created_at' => Carbon::now(),	 

     ]);

     // Start Send Email 
     $invoice = Booking::findOrFail($booking_id);
     	$data = [
     		'invoice_no' => $invoice->invoice_no,
     		'amount' => $total_amount,
     		'name' => $invoice->name,
     	    'email' => $invoice->email,
     	];

     	Mail::to($request->email)->send(new BookingMail($data));

     // End Send Email 


     $carts = Cart::content();
     foreach ($carts as $cart) {
     	BookingItem::insert([
     		'booking_id' => $booking_id, 
     		'service_id' => $cart->id,
     		'qty' => $cart->qty,
     		'price' => $cart->price,
     		'created_at' => Carbon::now(),

     	]);
     }


     if (Session::has('coupon')) {
     	Session::forget('coupon');
     }

     Cart::destroy();

     $notification = array(
        'message' => 'Your booking has been successfully placed',
        'alert-type' => 'success'
    );


		return redirect()->route('dashboard')->with($notification);
 

    } // end method 





}
 