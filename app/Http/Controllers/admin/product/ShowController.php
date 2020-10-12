<?php

namespace App\Http\Controllers\admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function Show_page(product $product)
    {
        $product=product::where("user_id",Auth::guard('admins')->user()->id)
        ->where("delete","=",0)->orderBy('created_at','desc')->get();
        return view('admin.products.showproduct')->with('product',$product);
    }
}
