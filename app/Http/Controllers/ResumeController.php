<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;


use PhpOffice\PhpWord\Element\Field;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\SimpleType\TblWidth;
use PhpOffice\PhpWord\Shared\Html;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Element\ListItemRun;




class ResumeController extends Controller
{
    //
    public function preview()
    {
        //
        $user = auth()->user();
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
           $temp2_classname = $this->temp2Class();
            return view('resume-format.resume2',compact('user','temp2_classname'));
        }else{
            return view('resume-format.resume',compact('user'));
        }
        
    }

    public function temp2Class()
    {
        $user = auth()->user();
        $column_count = 0;
            $column_array = array('email','linkedin','github','phone');
            foreach($column_array as $ud)
            {
                if(!is_null($user->details->$ud))
                {
                    $column_count++;
                }
            }
            if((!is_null($user->details->address)||!is_null($user->details->city) ||!is_null($user->details->state)||!is_null($user->details->zipcode)))
        {
            $column_count++;
        }
        if ($column_count == 5)
        $col_class = 'details-col-20';
    elseif ($column_count == 4)
    $col_class = 'details-col-25';
    else
    $col_class = 'details-col-33';
    
    return $col_class;
    }

    public function download()
    {
        //
        $user = auth()->user();
        
        
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
            $temp2_classname = $this->temp2Class();
       
            $pdf = \PDF::loadView('resume-format.resume2',compact('user','temp2_classname'));
        }else{
            $pdf = \PDF::loadView('resume-format.resume',compact('user'));
        }
        //$pdf = \PDF::loadView('resume', compact('user'));
        $fileName = $user->name.'_'.time();
        return $pdf->download($fileName.'.pdf');
    }

    public function directwordExport()
    {
        $user = auth()->user();
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
            $temp2_classname = $this->temp2Class();
            return view('resume-format.resume2_word',compact('user','temp2_classname'));
        }else{
            return view('resume-format.resume1_word',compact('user'));
        }
        
       
    }

    public function directtextExport()
    {
        $user = auth()->user();
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
            return view('resume-format.resume2_txt',compact('user'));
        }else{
            return view('resume-format.resume1_txt',compact('user'));
        }
        
       
    }

    

    
    public function previewURL()
    {
       $preview_url = route('resume-format.resume.preview');
       return response()->json(['code'=>200, 'data' => $preview_url], 200); 
             
    }
}
