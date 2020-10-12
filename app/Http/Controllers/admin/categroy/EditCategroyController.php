<?php

namespace App\Http\Controllers\Admin\Categroy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Http\Requests\Admin\categroy\AddRequest;


class EditCategroyController extends Controller
{
    public function edit_categroy(categories $category)
    {
        return view('admin.categroy.Edit')->with('categories',$category);
    }

    public function editcategroy(AddRequest $request , categories $category)
    {
        $category->title = $request->title;
        $category->save();
        return redirect()->route('admin.admin.showcategroy')->with('success','Update categories successfully');
    }

    
    public function delete($id,categories $categories)
    { 
        $categories = categories::find($id);
         $categories->delete();
       return redirect()->route('admin.admin.showcategroy');
   }
     
}

