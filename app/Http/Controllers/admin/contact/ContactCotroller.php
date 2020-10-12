<?php

namespace App\Http\Controllers\Admin\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacts;

class ContactCotroller extends Controller
{
    public function Show_Page()
    {
        $contacts=contacts::all();
        return view('admin.contact.index')->with('contacts',$contacts);
    }

}
