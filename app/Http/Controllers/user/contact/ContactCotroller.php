<?php

namespace App\Http\Controllers\user\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactCotroller extends Controller
{
    public function contact()
    {
        return view('user.contact.contact');
    }
}
