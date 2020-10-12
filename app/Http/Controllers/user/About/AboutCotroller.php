<?php

namespace App\Http\Controllers\user\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutCotroller extends Controller
{
   public function about()
   {
       return view('user.about.about');
   }
}
