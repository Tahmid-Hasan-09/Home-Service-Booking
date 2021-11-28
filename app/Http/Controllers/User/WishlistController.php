<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Wishlist;
use Carbon\Carbon;

class WishlistController extends Controller
{
    
	public function ViewWishlist(){
		return view('frontend.wishlist.view_wishlist');
	}

	public function GetWishlistService(){

		$wishlist = Wishlist::with('service')->where('user_id',Auth::id())->latest()->get();
		return response()->json($wishlist);
	} // end mehtod 


	public function RemoveWishlistService($id){

		Wishlist::where('user_id',Auth::id())->where('id',$id)->delete();
		return response()->json(['success' => 'Service Successfully  Removed']);
	}


	


}
 