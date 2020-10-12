<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\admins;
use App\Models\categories;
use App\Models\product;
use App\Models\contacts;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function home_page()

    {
        $admins = admins::count();
        $categories = categories::count();
        $products = product::count();
        $contacts = contacts::count();

        return view('admin.index', compact('admins',
                'categories',
                'products',
                'contacts'
            )
        );
    }
    

        
}
