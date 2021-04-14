<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadTemplateFile;
use PDF;

class UploadTemplatesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('create');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'filenames' => 'required'        ]);
  
       // $files = [];
       $files = " ";
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $UploadTemplateFile)
            {
                //$UploadTemplateFile= new UploadTemplateFile();
                $name = basename($UploadTemplateFile->getClientOriginalName());
                //$name = basename($UploadTemplateFile->getClientOriginalName(), '.'.$UploadTemplateFile->getClientOriginalExtension()); //commented by tejal
              
       // return redirect('/upload_template_form')->with('templates', $templates);


                $UploadTemplateFile->move(public_path('files/templates'), $name); 
       
         
                $files = $name;  
            }
         }
         
         $UploadTemplateFile= new UploadTemplateFile();
        // $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
       
        // $PDFWriter->save(public_path("/files/templates/$templates->filenames.pdf")); 
 
         $UploadTemplateFile->filenames = $files;
         $UploadTemplateFile->save();
  
        return back()->with('success', 'Data Your files has been successfully added');
    }
        public function display()
        {
        $templates = UploadTemplateFile::all();
        return view('/upload_template_form')->with('templates', $templates);
        }

        public function delete($filenames)
        {

             //   $UploadTemplateFile->delete(public_path('files/templates'), $name); 

             $UploadTemplateFile= new UploadTemplateFile();
      
               // $name = $UploadTemplateFile->getClientOriginalName();
               // $docx = new UploadTemplateFile();

              //  $docx->word2pdf('$name', '$name.pdf');
              $UploadTemplateFile->delete(public_path('files/templates'), $filenames);  
             // UploadTemplateFile::delete($UploadTemplateFile);
            
        $templates = UploadTemplateFile::find($filenames);
        unlink(public_path("/files/templates/$templates->filenames"));
        $templates->delete();
          //    $UploadTemplateFile->delete(public_path('files/templates'), $filenames);  
      // $file_path= delete(public_path('files/templates'),$filenames);
        //unlink($UploadTemplateFile);

        return redirect('/upload_template_form')->with('templates', $templates);
       // Storage::disk('public')->delete("files/templates/{{'$templates->filenames'}}");

      //  return redirect()->back()->with('message', 'IT WORKS!');


    
        }




    //     public function convertWordToPDF()
    // {
        
    //         /* Set the PDF Engine Renderer Path */
    //     $domPdfPath = base_path('vendor/dompdf/dompdf');
    //     \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
    //     \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
         
    //     //Load word file
    //     $Content = \PhpOffice\PhpWord\IOFactory::load(public_path('files/templates/$templates->filenames')); 
    //     $UploadTemplateFile= new UploadTemplateFile();
    //     $UploadTemplateFile->filenames = $files;
    //     $UploadTemplateFile->save();
    //     //Save it into PDF
    //     $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($UploadTemplateFile,'PDF');
    //     $PDFWriter->save(public_path('files/templates/$templates->filenames.pdf'));
    //     $UploadTemplateFile->filenames = $files;
    //     $UploadTemplateFile->save(); 
    //     $templates = UploadTemplateFile::all();
    //     return view('/upload_template_form')->with('templates', $PDFWriter);   
    //     //     echo 'File has been successfully converted';
    // }
    // public function convertWordToPDF1($filenames)
    // {
    //         /* Set the PDF Engine Renderer Path */
    //     $domPdfPath = base_path('vendor/dompdf/dompdf');
    //     \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
    //     \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
         
    //     //Load word file
    //     $templates = UploadTemplateFile::find($filenames);

    //     $Content = \PhpOffice\PhpWord\IOFactory::load(public_path("/files/templates/$templates->filenames")); 
 
    //     //Save it into PDF
    //     $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
       
    //     $PDFWriter->save(public_path("(/files/templates/$templates->filenames).pdf")); 
    //     return redirect('/upload_template_form')->with('templates', $templates);

    //     echo 'File has been successfully converted';}
}
