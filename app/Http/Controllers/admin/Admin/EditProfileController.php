<?php

namespace App\Http\Controllers\admin\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\admins;

class EditProfileController extends Controller
{
    public function edit_page()
    {
        $admins= admins::get();
        $products=product::where("user_id",Auth::guard('admins')->user()->id)->orderBy('created_at','desc')->get();
         return view('admin.user.profile' , compact('products','admins'));
    }


    public function updateprofile(Request $request)
    {
        $admins = admins::find(Auth::guard('admins')->user()->id);
        $admins->name     = $request->name;
        $admins->email    =$request->email;
        $admins->image    =$request->has("image")?$request->image:$admins->image;
        $admins->password = $request->has("password") ? bcrypt($request->password) : $admins->password;
        $admins->save();
        return redirect()->route('admin.admin.edit')->with('success','Update Profile successfully');
    }

    public function deleteuser(admins $admins)
    { 
        $admins->Active = 0;
         $admins->save();
        return redirect()->route('admin.admin.show');
   }
}
