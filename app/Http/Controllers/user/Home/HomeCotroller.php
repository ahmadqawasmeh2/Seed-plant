<?php

namespace App\Http\Controllers\user\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class HomeCotroller extends Controller
{
    public function home(product $products)
    {
        $products=product::get();
        $product=product::orderBy('created_at','desc')->paginate(3);
        return view('user.index',compact('products','product'));
    }
}
