<?php

namespace App\Http\Controllers\admin\categroy;
use App\Http\Requests\Admin\categroy\AddRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    public function add_page()
    {
        return view('admin.categroy.addcategroy');
    }

     public function add_categroy(AddRequest $request)
     {
        $data=$request->all();
        $data['user_id']=Auth::guard('admins')->user()->id;
        $data=categories::create($data);
        return redirect()->route('admin.admin.showcategroy')->with('success','Create categories successfully');

     }

    
}
