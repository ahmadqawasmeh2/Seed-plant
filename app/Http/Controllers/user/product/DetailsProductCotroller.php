<?php

namespace App\Http\Controllers\user\product;

use App\Http\Controllers\Controller;
use App\Models\Product;
class DetailsProductCotroller extends Controller
{
    public function detailsproduct($id)
    {
   
       $product=Product::findOrFail($id);
      $products=Product::orderBy('created_at','desc')->paginate(3);
        return view('user.product.detais',compact('products','product'));
    }
}
