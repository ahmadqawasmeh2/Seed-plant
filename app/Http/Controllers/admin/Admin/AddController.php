<?php

namespace App\Http\Controllers\admin\Admin;
use App\Http\Requests\Admin\Admin\AddRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admins;

class AddController extends Controller
{
    public function add_page()
    {
        return view('admin.user.adduser');
    }

    public function add_Admin(AddRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $fille = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($fille, PATHINFO_FILENAME);

            $extencion = $request->file('image')->getClientOriginalExtension();

            $fileNameStore = $filename . '_' . time() . '.' . $extencion;
            // $path=$request->file('Product_Img')->storeAs('public/Product_Img', $fileNameStore);
           $path= $request->file('image')->storeAs('Admin_img',$fileNameStore);
           $data['image']=$request->file('image')->storeAs('storage/app/Admin_img',$fileNameStore);
            }
         else
        {
            $fileNameStore = 'no-image.jpg';
        }
        $data['password'] = bcrypt($request->password);
        $data = admins::Create($data);
        return redirect()->route('admin.admin.show')->with('success', 'Create Admins successfully');
    }

}
