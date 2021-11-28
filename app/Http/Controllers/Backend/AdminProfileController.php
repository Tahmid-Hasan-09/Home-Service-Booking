<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Auth;
use Image;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
	public function AdminProfile(){

		$id = Auth::user()->id;
		$adminData = Admin::find($id);
		return view('admin.admin_profile_view',compact('adminData'));
	}

    public function AdminProfileEdit(){ 

		$id = Auth::user()->id;
		$editData = Admin::find($id);
		return view('admin.admin_profile_edit',compact('editData'));

	}

    public function AdminProfileStore(Request $request){
		
		// $id = Auth::user()->id;
		// $data = Admin::find($id);
		// $data->email = $request->email;

		// if ($request->file('profile_photo_path')) {
		// 	$file = $request->file('profile_photo_path');
		// 	@unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
		// 	$filename = date('YmdHi').$file->getClientOriginalName();
		// 	$file->move(public_path('upload/admin_images'),$filename);
		// 	$data['profile_photo_path'] = $filename;
		// }
		// $data->save();

		$admin_id = $request->id;
		$old_img = $request->old_image;

		if ($request->file('profile_photo_path')) {

		unlink($old_img);
		$image = $request->file('profile_photo_path');
		$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
		Image::make($image)->resize(225,225)->save('upload/admin_images/'.$name_gen);
		$save_url = 'upload/admin_images/'.$name_gen;

		Admin::findOrFail($admin_id)->update([
			'name' => $request->name,
			'email' => $request->email,		 
			'profile_photo_path' => $save_url,
		]);

			$notification = array(
				'message' => 'Admin Profile Updated Successfully',
				'alert-type' => 'success'
			);


			return redirect()->route('admin.profile')->with($notification);
		}else{
			Admin::findOrFail($admin_id)->update([
				'name' => $request->name,
				'email' => $request->email,		 
			]);
	
				$notification = array(
					'message' => 'Admin Profile Updated Successfully',
					'alert-type' => 'success'
				);
	
	
				return redirect()->route('admin.profile')->with($notification);
		}
	}

	public function AdminChangePassword(){

		return view('admin.admin_change_password');

	}

	public function AdminUpdateChangePassword(Request $request){

		$validateData = $request->validate([
			'oldpassword' => 'required',
			'password' => 'required|confirmed',
		]);

		$hashedPassword = Auth::user()->password;
		if (Hash::check($request->oldpassword,$hashedPassword)) {
			$admin = Admin::find(Auth::id());
			$admin->password = Hash::make($request->password);
			$admin->save();
			Auth::logout();
			return redirect()->route('admin.logout');
		}else{
			return redirect()->back();
		}

	}// end method

	public function AllUsers(){
		$users = User::latest()->get();
		return view('backend.user.all_user',compact('users'));
	}
}
