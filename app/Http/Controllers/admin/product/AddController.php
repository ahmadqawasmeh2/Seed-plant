<?php

namespace App\Http\Controllers\admin\product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\product\AddRequest;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\categories;
use App\Models\admins;
use Auth;

class AddController extends Controller
{
    public function addpage(categories $categories)
    {
        $categories = categories::all();
        return view('admin.products.addproduct')->with('categories', $categories);
    }

    public function add_product(AddRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $fille = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($fille, PATHINFO_FILENAME);

            $extencion = $request->file('image')->getClientOriginalExtension();

            $fileNameStore = $filename . '_' . time() . '.' . $extencion;
        //    $path= $request->file('image')->storeAs('storage/public/app/Product_Img',$fileNameStore);
             $data['image']=$request->file('image')->storeAs('storage/app/Product_Img',$fileNameStore);            }
         else
        {
            $fileNameStore = 'no-image.jpg';
        }
         $data['user_id']=Auth::guard('admins')->user()->id;
        $data = product::Create($data);
        return redirect()->route('admin.admin.showproduct')->with('success', 'Create products successfully');
    }
}
