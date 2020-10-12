<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admins;
use Auth;
use App\Http\Requests\Admin\auth\LoginRequest;

class LoginController extends Controller
{
  public function login_page()
  
  {
      return view('admin.auth.login');
  }

   public function login(LoginRequest $request){

  $admins = admins::where('email' , $request->email)->first();
  if ($admins) {
      if ($admins->Active == 0) {
  return redirect()->back()->withInput($request->only('email'))->withErrors([__('Invalid Login')]);
      }
  }

  if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password,'active' => 1])) {
      return redirect()->intended(route('admin.admin.home'));
  }
  return redirect()->back()->withInput($request->only('email'))->withErrors([__('I am not registered or the email is wrong The password is wrong')]);
}

public function logout(){
    Auth::guard('admins')->logout();
    return redirect()->route('login.login.login_page');
}

}
