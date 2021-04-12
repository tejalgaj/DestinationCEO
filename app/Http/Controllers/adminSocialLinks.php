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
        //return view('contact_details',['admin_address_details'=>$data]);
        //$socialLinks = adminSocialLinksFile::whereId(15)->first();
        

        
        return view('/admin/socialLinks',['admin_social_links_files'=>$socialLinks]);

    }
   public function addData(Request $request)
    {
        $this->validate($request, [
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'google' => 'required',
            'linkedIn' => 'required'        ]);
        $twitter=$request->input('twitter');
        $facebook=$request->input('facebook');
        $instagram=$request->input('instagram');
        $google=$request->input('google');
        $linkedIn=$request->input('linkedIn');
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

    public function redirect()
        {
            $twitter=adminSocialLinksFile::all('twitter');

            //$twitter = DB::table('admin_social_links_files')->where('facebook', 'https://www.facebook.com/destinationceo.ca/')->value('twitter');
            return view('layouts/app')->with('twitter', $twitter);
           // return view('upload_template')->with('twitter', $twitter);
        }
}
