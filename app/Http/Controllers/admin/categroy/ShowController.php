<?php

namespace App\Http\Controllers\admin\categroy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use Illuminate\Support\Facades\Auth;
class ShowController extends Controller
{
    public function show_page(categories $categories )
    {
        $categories=categories::where("user_id",Auth::guard('admins')->user()->id)
        ->where('delete','=',0)
        ->orderBy('created_at','desc')->get();
        return view('admin.categroy.showcategroy')->with('categories',$categories);
    }
}

