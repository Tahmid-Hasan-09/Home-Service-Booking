<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Service;
use App\Models\MultiImg; 
use App\Models\BlogPost;
use App\Models\NewsletterEmail;

class IndexController extends Controller
{
    public function index(){
		$blogpost = BlogPost::latest()->get();
		$categories = Category::orderBy('category_name_en','ASC')->get();
		$categoriesLimit = Category::orderBy('category_name_en','DESC')->limit(4)->get();
		$services = Service::where('status',1)->orderBy('id','DESC')->limit(6)->get();
		$featured = Service::where('featured',1)->orderBy('id','DESC')->limit(6)->get();

		$hot_deals = Service::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(3)->get();
		$special_offer = Service::where('special_offer',1)->orderBy('id','DESC')->limit(6)->get();
		$special_deals = Service::where('special_deals',1)->orderBy('id','DESC')->limit(3)->get();

		$skip_category_0 = Category::skip(0)->first();
    	$skip_service_0 = Service::where('status',1)->where('category_id',$skip_category_0->id)->orderBy('id','DESC')->get();

    	$skip_category_1 = Category::skip(1)->first();
    	$skip_service_1 = Service::where('status',1)->where('category_id',$skip_category_1->id)->orderBy('id','DESC')->get();

    	

        return view('frontEnd.index',compact('categories','services','categoriesLimit','featured','special_offer','special_deals','skip_category_0','skip_service_0','skip_category_1','skip_service_1','blogpost'));
    }

    public function UserLogout(){
    	Auth::logout();
    	return Redirect()->route('login');
    }

    public function UserProfile(){
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('frontend.profile.user_profile',compact('user'));
    }

    public function UserProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
		$data->name = $request->name;
		$data->email = $request->email;
		$data->phone = $request->phone;


		if ($request->file('profile_photo_path')) {
			$file = $request->file('profile_photo_path');
			@unlink(public_path('upload/user_images/'.$data->profile_photo_path));
			$filename = date('YmdHi').$file->getClientOriginalName();
			$file->move(public_path('upload/user_images'),$filename);
			$data['profile_photo_path'] = $filename;
		}
		$data->save();

		$notification = array(
			'message' => 'User Profile Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('dashboard')->with($notification);

    } // end method 

    public function UserChangePassword(){
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('frontend.profile.change_password',compact('user'));
    }

    public function UserPasswordUpdate(Request $request){

		$validateData = $request->validate([
			'oldpassword' => 'required',
			'password' => 'required|confirmed',
		]);

		$hashedPassword = Auth::user()->password;
		if (Hash::check($request->oldpassword,$hashedPassword)) {
			$user = User::find(Auth::id());
			$user->password = Hash::make($request->password);
			$user->save();
			Auth::logout();
			return redirect()->route('user.logout');
		}else{
			return redirect()->back();
		}


	}// end method

	public function ServiceDetails($id,$slug){
		$service = Service::findOrFail($id);

		$multiImag = MultiImg::where('service_id',$id)->get();
		$breadservice_cat = Service::with(['category'])->where('id',$id)->get();
		$breadservice_subcat = Service::with(['subcategory'])->where('id',$id)->get();
		$cat_id = $service->category_id;
		$relatedService = Service::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();
	 	return view('frontend.service.service_details',compact('service','multiImag','relatedService','breadservice_cat','breadservice_subcat'));

	}

	public function TagWiseService($tag){
		$services = Service::where('status',1)->where('service_tags_en',$tag)->where('service_tags_bn',$tag)->orderBy('id','DESC')->paginate(3);
		$categories = Category::orderBy('category_name_en','ASC')->get();
		return view('frontend.tags.tags_view',compact('services','categories'));

	}

	// Category wise data
	public function CatWiseService($cat_id,$slug){
		$services = Service::where('status',1)->where('category_id',$cat_id)->orderBy('id','DESC')->paginate(6);
		$categories = Category::orderBy('category_name_en','ASC')->get();

		$breadcat = Category::where('id',$cat_id)->get();

		return view('frontend.service.category_view',compact('services','categories'));

	}

	// Subcategory wise data
	public function SubCatWiseService($subcat_id,$slug){
		$services = Service::where('status',1)->where('subcategory_id',$subcat_id)->orderBy('id','DESC')->paginate(6);
		$categories = Category::orderBy('category_name_en','ASC')->get();

		$breadsubcat = SubCategory::with(['category'])->where('id',$subcat_id)->get();

		return view('frontend.service.subcategory_view',compact('services','categories','breadsubcat'));

	}

	/// Service View With Ajax
	public function ServiceViewAjax($id){
		$service = Service::with('category')->findOrFail($id);

		return response()->json(array(
			'service' => $service,
		));

	} // end method 

	/// NewsletterEmail Sent to Database
	public function NewsletterEmail(Request $request){
		NewsletterEmail::insert([
			'email' => $request->email,
		]);

		$notification = array(
			'message' => 'Thanks for Subscription to NewsLetter',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

	} // end method 

	// Service Seach 
	public function ServiceSearch(Request $request){

		$request->validate(["search" => "required"]);

		$item = $request->search;
		// echo "$item";
        $categories = Category::orderBy('category_name_en','ASC')->get();
		$services = Service::where('service_name_en','LIKE',"%$item%")->get();
		return view('frontend.service.search',compact('services','categories'));

	} // end method 

	///// Advance Search Options 

	public function SearchService(Request $request){

		$request->validate(["search" => "required"]);

		$item = $request->search;		 
        
		$services = Service::where('service_name_en','LIKE',"%$item%")->select('service_name_en','service_thambnail','selling_price','id','service_slug_en')->limit(8)->get();
		return view('frontend.service.search_service',compact('services'));



	} // end method 


}
