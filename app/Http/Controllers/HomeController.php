<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	 public function index($lang)
     {
         if ($lang == 'en'){
             $lang = 'en';
         }
         else{
             $lang = 'id';
         }
		return view('home.home', compact('lang'));
    }
    public function info( $lang )
    {
        if ($lang == 'en'){
            $lang = 'en';
        }
        else{
            $lang = 'id';
        }
        return view('home.info',compact('lang'));
    }

   
}
