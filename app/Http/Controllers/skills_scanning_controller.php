<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skills_keyword;

class skills_scanning_controller extends Controller
{
    //
    function getSkills()
    {
//return view('resume_scan');
$data=skills_keyword::all();
return view('resume_scan',['skills_keywords'=>$data]);
    }
}
