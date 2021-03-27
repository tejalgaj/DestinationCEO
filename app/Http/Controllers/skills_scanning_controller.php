<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\hard_skills_keyword;
use App\Models\soft_skills_keyword;


class skills_scanning_controller extends Controller
{
    function getSkills()
    {
        
$data=hard_skills_keyword::all();
$data2=soft_skills_keyword::all();
return view('resume_scan',['hard_skills_keywords'=>$data,'soft_skills_keywords'=>$data2]);
    }
}
