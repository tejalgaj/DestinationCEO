<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    //
    public function index()
    {
        //
        $user = auth()->user();
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
            return view('resume2',compact('user'));
        }else{
            return view('resume',compact('user'));
        }
        
    }

    public function download()
    {
        //
        $user = auth()->user();
        $selected_template = session('resume_selected_template', 'default');
        if($selected_template == "Resume Template 2")
        {
            $pdf = \PDF::loadView('resume2',compact('user'));
        }else{
            $pdf = \PDF::loadView('resume',compact('user'));
        }
        //$pdf = \PDF::loadView('resume', compact('user'));
        return $pdf->download('your_resume.pdf');
    }

    public function convertWordToPDF()
    {
            /* Set the PDF Engine Renderer Path */
        $domPdfPath = base_path('vendor/dompdf/dompdf');
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
         
        //Load word file
        $Content = \PhpOffice\PhpWord\IOFactory::load(public_path()."/resume_template/Standard Resume template.docx"); 
 
        //Save it into PDF
        $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
        $PDFWriter->save(public_path()."/resume_template/Resume_Example_2pg.pdf"); 
        echo 'File has been successfully converted';
    }
}
