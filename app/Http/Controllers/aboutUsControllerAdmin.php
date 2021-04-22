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
       
    //   $adminAbout_obj = new adminAboutUsFile;
      
    //   $adminAbout_obj->about= $request->input('about');
     
    //    $adminAbout_obj->save();
    DB::table('admin_about_us_files')->where('id', 2)->delete();
       $about=$request->input('about');
       DB::insert('insert into admin_about_us_files (id,about) values (?,?)',
        [2,$about]);

            /*  DB::update('update admin_about_us_files set about=? where id=?',
       [$about,2]);
*/
       return redirect('admin/aboutUs')->with('success','Data Updated');
     

        

}


public function display()
        {
        $about = adminAboutUsFile::all('about');
       // $twitter=adminSocialLinksFile::all('twitter');

        return view('/view_aboutUs')->with('about', $about);
        }




}
