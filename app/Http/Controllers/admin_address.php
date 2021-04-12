<?php

namespace App\Http\Controllers;
use App\Models\admin_address_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_address extends Controller
{
    function getAdminAddress()
    {
        $data=admin_address_detail::all();
        return view('contact_details',['admin_address_details'=>$data]);
       
    }

  
    function update_function(Request $req)
    {
        DB::table('admin_address_details')->where('id', 100)->delete();
        $address=$req->input('addressLine');
        $city=$req->input('city');
        $country=$req->input('Country');
        $email=$req->input('email');
        $phone=$req->input('phoneNumber');
        $province=$req->input('state');
        $postcode=$req->input('postcode');
        DB::insert('insert into admin_address_details (id,address,city,country,email,phone,province,postcode) values (?,?,?,?,?,?,?,?)',
        [100,$address,$city,$country,$email,$phone,$province,$postcode]);

        return redirect('contact_details')->with('success','Data Updated');
    }
    
   
}
