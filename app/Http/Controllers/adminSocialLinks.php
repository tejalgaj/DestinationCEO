<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminSocialLinksFile;
use Illuminate\Support\Facades\DB;

class adminSocialLinks extends Controller
{
    //

    public function index()
    {
        $socialLinks=adminSocialLinksFile::all();
   
        return view('/admin/socialLinks',['admin_social_links_files'=>$socialLinks]);

    }
   public function addData(Request $req)
    {
       
        $twitter=$req->input('twitter');
        $facebook=$req->input('facebook');
        $instagram=$req->input('instagram');
        $google=$req->input('google');
        $linkedIn=$req->input('linkedIn');
       // $postcode=$req->input('postcode');
        DB::update('update admin_social_links_files set twitter=?, facebook=?,instagram=?,google=?,linkedIn=? where id=?',
        [$twitter,$facebook,$instagram,$google,$linkedIn,1]);

        return redirect('admin/socialLinks')->with('success','Data Updated');

        

        //   $adminLinks = new adminSocialLinksFile;
        //   $adminLinks->twitter= $files;
        //   $adminLinks->facebook=  $files;
        //   $adminLinks->instagram= $files;
        //   $adminLinks->google=  $files;
        //   $adminLinks->linkedIn=  $files;

    }

  
}
