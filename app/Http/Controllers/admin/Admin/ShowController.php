<?php

namespace App\Http\Controllers\admin\Admin;

use App\Http\Controllers\Controller;
use App\Models\admins;
use Illuminate\Support\Facades\Auth;
class ShowController extends Controller
{
    public function show_page()
    {
        $admins=admins::where("Active","=",1)->orderBy('created_at','desc')->get();

        return view('admin.user.showuser')->with('admins',$admins);
    }
}
