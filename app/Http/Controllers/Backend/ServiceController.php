<?php

namespace App\Http\Controllers\Backend;

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;


use App\Models\Service;
use App\Models\MultiImg;
use Carbon\Carbon;
use Image;

class ServiceController extends Controller
{
    public function AddService(){
		$categories = Category::latest()->get();
		return view('backend.service.service_add',compact('categories'));

	}


	public function StoreService(Request $request){

    $request->validate([
      'file' => 'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
    ]);

    if ($files = $request->file('file')) {
      $destinationPath = 'upload/pdf'; // upload path
      $digitalItem = date('YmdHis') . "." . $files->getClientOriginalExtension();
      $files->move($destinationPath,$digitalItem);
    }
 


        $image = $request->file('service_thambnail');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/services/thambnail/'.$name_gen);
    	$save_url = 'upload/services/thambnail/'.$name_gen;

      $service_id = Service::insertGetId([
      	'category_id' => $request->category_id,
      	'subcategory_id' => $request->subcategory_id,     	
      	'service_name_en' => $request->service_name_en,
      	'service_name_bn' => $request->service_name_bn,
      	'service_slug_en' =>  strtolower(str_replace(' ', '-', $request->service_name_en)),
      	'service_slug_bn' => str_replace(' ', '-', $request->service_name_bn),
      	'service_code' => $request->service_code,
      	'service_qty' => $request->service_qty,
      	'service_tags_en' => $request->service_tags_en,
      	'service_tags_bn' => $request->service_tags_bn,
      	'selling_price' => $request->selling_price,
      	'discount_price' => $request->discount_price,
      	'short_descp_en' => $request->short_descp_en,
      	'short_descp_bn' => $request->short_descp_bn,
      	'long_descp_en' => $request->long_descp_en,
      	'long_descp_bn' => $request->long_descp_bn,
      	'hot_deals' => $request->hot_deals,
      	'featured' => $request->featured,
      	'special_offer' => $request->special_offer,
      	'special_deals' => $request->special_deals,
      	'service_thambnail' => $save_url,
        
      	'status' => 1,
      	'created_at' => Carbon::now(),   

      ]);


      ////////// Multiple Image Upload Start ///////////

      $images = $request->file('multi_img');
      foreach ($images as $img) {
      	$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
    	Image::make($img)->resize(917,1000)->save('upload/services/multi-image/'.$make_name);
    	$uploadPath = 'upload/services/multi-image/'.$make_name;

    	MultiImg::insert([

    		'service_id' => $service_id,
    		'photo_name' => $uploadPath,
    		'created_at' => Carbon::now(), 

    	]);

      }

      ////////// Een Multiple Image Upload Start ///////////


       $notification = array(
			'message' => 'Service Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-service')->with($notification);


	} // end method



	public function ManageService(){

		$services = Service::latest()->get();
		return view('backend.service.service_view',compact('services'));
	}


	public function EditService($id){

		$multiImgs = MultiImg::where('service_id',$id)->get();

		$categories = Category::latest()->get();
		$subcategory = SubCategory::latest()->get();
		
		$services = Service::findOrFail($id);
		return view('backend.service.service_edit',compact('categories','subcategory','services','multiImgs'));

	}


	public function ServiceDataUpdate(Request $request){

		$service_id = $request->id;

         Service::findOrFail($service_id)->update([
      	'category_id' => $request->category_id,
      	'subcategory_id' => $request->subcategory_id,
      	
      	'service_name_en' => $request->service_name_en,
      	'service_name_bn' => $request->service_name_bn,
      	'service_slug_en' =>  strtolower(str_replace(' ', '-', $request->service_name_en)),
      	'service_slug_bn' => str_replace(' ', '-', $request->service_name_bn),
      	'service_code' => $request->service_code,

      	'service_qty' => $request->service_qty,
      	'service_tags_en' => $request->service_tags_en,
      	'service_tags_bn' => $request->service_tags_bn,
      	
      	'selling_price' => $request->selling_price,
      	'discount_price' => $request->discount_price,
      	'short_descp_en' => $request->short_descp_en,
      	'short_descp_bn' => $request->short_descp_bn,
      	'long_descp_en' => $request->long_descp_en,
      	'long_descp_bn' => $request->long_descp_bn,

      	'hot_deals' => $request->hot_deals,
      	'featured' => $request->featured,
      	'special_offer' => $request->special_offer,
      	'special_deals' => $request->special_deals,      	 
      	'status' => 1,
      	'created_at' => Carbon::now(),   

      ]);

          $notification = array(
			'message' => 'Service Updated Without Image Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-service')->with($notification);


	} // end method 


/// Multiple Image Update
	public function MultiImageUpdate(Request $request){
		$imgs = $request->multi_img;

		foreach ($imgs as $id => $img) {
	    $imgDel = MultiImg::findOrFail($id);
	    unlink($imgDel->photo_name);
	     
    	$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
    	Image::make($img)->resize(917,1000)->save('upload/services/multi-image/'.$make_name);
    	$uploadPath = 'upload/services/multi-image/'.$make_name;

    	MultiImg::where('id',$id)->update([
    		'photo_name' => $uploadPath,
    		'updated_at' => Carbon::now(),

    	]);

	 } // end foreach

       $notification = array(
			'message' => 'Service Image Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

	} // end mehtod 


 /// Service Main Thambnail Update /// 
 public function ThambnailImageUpdate(Request $request){
 	$pro_id = $request->id;
 	$oldImage = $request->old_img;
 	unlink($oldImage);

    $image = $request->file('service_thambnail');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/services/thambnail/'.$name_gen);
    	$save_url = 'upload/services/thambnail/'.$name_gen;

    	Service::findOrFail($pro_id)->update([
    		'service_thambnail' => $save_url,
    		'updated_at' => Carbon::now(),

    	]);

         $notification = array(
			'message' => 'Service Image Thambnail Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

     } // end method


 //// Multi Image Delete ////
     public function MultiImageDelete($id){
     	$oldimg = MultiImg::findOrFail($id);
     	unlink($oldimg->photo_name);
     	MultiImg::findOrFail($id)->delete();

     	$notification = array(
			'message' => 'Service Image Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

     } // end method 



     public function ServiceInactive($id){
     	Service::findOrFail($id)->update(['status' => 0]);
     	$notification = array(
			'message' => 'Service Inactive',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
     }


  public function ServiceActive($id){
  	Service::findOrFail($id)->update(['status' => 1]);
     	$notification = array(
			'message' => 'Service Active',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
     	
     }



     public function ServiceDelete($id){
     	$service = Service::findOrFail($id);
     	unlink($service->service_thambnail);
     	Service::findOrFail($id)->delete();

     	$images = MultiImg::where('service_id',$id)->get();
     	foreach ($images as $img) {
     		unlink($img->photo_name);
     		MultiImg::where('service_id',$id)->delete();
     	}

     	$notification = array(
			'message' => 'Service Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

     }// end method 



  // service Stock 
public function ServiceStock(){

    $services = Service::latest()->get();
    return view('backend.service.service_stock',compact('services'));
  }
}
