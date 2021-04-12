<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminAboutUsFile;
use Illuminate\Support\Facades\DB;

class aboutUsControllerAdmin extends Controller
{
    //
    public function index()
    {
        $about = adminAboutUsFile::whereId(2)->first();
        

       
        return view('/admin/aboutUs')->with(compact('about'));

    }
    public function addData(Request $request)
    {
        $this->validate($request, [
            'about' => 'required'        ]);
     
    //   $adminAbout_obj = new adminAboutUsFile;
      
    //   $adminAbout_obj->about= $request->input('about');
     
    //    $adminAbout_obj->save();
       $about=$request->input('about');
              DB::update('update admin_about_us_files set about=? where id=?',
       [$about,2]);

       return redirect('admin/aboutUs')->with('success','Data Updated');
     

        

}


public function display()
        {
        $about = adminAboutUsFile::all('about');
       // $twitter=adminSocialLinksFile::all('twitter');

        return view('/view_aboutUs')->with('about', $about);
        }




}
