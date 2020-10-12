<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\categories;
use App\Http\Requests\Admin\product\AddRequest;
use Illuminate\Support\Facades\Auth;

class EditProductCotroller extends Controller
{
    public function edit_products(product $products, categories $categories)
    {
        $categories = categories::get();
      
        return view('admin.products.editproduct', compact('products', 'categories'));
    }


    public function editproducts(AddRequest $request, product $products)
    {

        if ($request->hasFile('image')) {
            $fille = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($fille, PATHINFO_FILENAME);

            $extencion = $request->file('image')->getClientOriginalExtension();

            $fileNameStore = $filename . '_' . time() . '.' . $extencion;
            //    $path= $request->file('image')->storeAs('storage/public/app/Product_Img',$fileNameStore);
            $data['image'] = $request->file('image')->storeAs('storage/app/Product_Img', $fileNameStore);
        } else {
            $fileNameStore = 'no-image.jpg';
        }


        $products->title  = $request->title;
        $products->price  = $request->price;
        $products->image  = $request->image;
        $products->desc   = $request->desc;
        $products->cat_id = $request->cat_id;
        $products->save();
        return redirect()->route('admin.admin.showproduct')->with('success', 'Update Products successfully');
    }

    public function delete(product $products)
    { 
        $products->delete = 1;
         $products->save();
       return redirect()->route('admin.admin.showproduct');
   }
}
