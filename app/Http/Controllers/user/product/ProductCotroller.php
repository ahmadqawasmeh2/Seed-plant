<?php

namespace App\Http\Controllers\user\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\categories;
class ProductCotroller extends Controller
{
  public function product()
  {
    $Product=Product::paginate(6);
    $categories=categories::all();
    $count=product::count();
      return view('user.product.product', compact('Product','count','categories'));
  }
}
