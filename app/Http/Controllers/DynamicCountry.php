<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicCountry extends Controller
{
    //
    function index()
    {
     $country_list = DB::table('countries')
         ->get();
         dd($country_list);
     return view('user-detail.edit')->with('country_list', $country_list);
    }

}
