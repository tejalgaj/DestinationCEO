<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (UserDetail::where('user_id', '=', auth()->user()->id)->exists()) {
            // user Detail found
           
            $userdetail = auth()->user()->details;
            return view('user-detail.index',compact('userdetail'));
         }else{
            return view('user-detail.create');
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user-detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'credibleintro'=>'required',
           // 'tags'=>'exist:tags,id',
        ]);



        
        $user_detail = new UserDetail();
         $user_detail->firstname = request('firstname');
         $user_detail->user_id = auth()->id();
     $user_detail->lastname = request('lastname');
         $user_detail->country = request('country');

         $user_detail->zipcode = request('zipcode');
         $user_detail->city = request('city');
         $user_detail->state = request('state');
         $user_detail->email = request('email');
         $user_detail->phone = request('phone');
         $user_detail->credibleintro = request('credibleintro');
         $user_detail->github = request('github');
         $user_detail->linkedin = request('linkedin');

         $user_detail->address = request('address');

         $user_detail->save();
         
        return redirect()->route('user-detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        //
        return view('user-detail.edit',compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        //
        request()->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'credibleintro'=>'required',
           // 'tags'=>'exist:tags,id',
        ]);



        
      
         $userDetail->firstname = request('firstname');
         $userDetail->user_id = auth()->id();
     $userDetail->lastname = request('lastname');
         $userDetail->country = request('country');

         $userDetail->zipcode = request('zipcode');
         $userDetail->city = request('city');
         $userDetail->state = request('state');
         $userDetail->email = request('email');
         $userDetail->phone = request('phone');
         $userDetail->credibleintro = request('credibleintro');
         $userDetail->github = request('github');
         $userDetail->linkedin = request('linkedin');
         $userDetail->address = request('address');

         $userDetail->save();
         
        return redirect()->route('user-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        //
        $userDetail->delete();
        return back();
    }

    
     public function storeSessionData(Request $request) {
       // $request->session()->put('resume_selected_template','Virat Gandhi');
        session(['resume_selected_template' => $request->template_title]);
        return response()->json(['code'=>200, 'message'=>'session stored successfully'], 200);
        
     }
     public function deleteSessionData(Request $request) {
        $request->session()->forget('resume_selected_template');
        echo "Data has been removed from session.";
     }

     public function compose(View $view)
    {
       $user_status = (!empty(auth()->user()->details)?auth()->user()->details->count():0);
       $edu_status = (!empty(auth()->user()->education)?auth()->user()->education->count():0);
       $exp_status = (!empty(auth()->user()->experiences)?auth()->user()->experiences->count():0);
       $skill_status = (!empty(auth()->user()->skills)?auth()->user()->skills->count():0);
       $add_exp_status = (!empty(auth()->user()->additionalExperience)?auth()->user()->additionalExperience->count():0);
       $tech_exp_status = (!empty(auth()->user()->technicalExperience)?auth()->user()->technicalExperience->count():0);

       $highlight_status = !empty(auth()->user()->highlight)?auth()->user()->highlight->count():0;
        $view->with('userDetailstatus',  $user_status)
             ->with('educationStatus', $edu_status)
             ->with('experiencesStatus', $exp_status)
             ->with('skillStatus', $skill_status)
             ->with('additionalExperienceStatus', $add_exp_status)
             ->with('technicalExperienceStatus', $tech_exp_status)
             ->with('highlightStatus', $highlight_status);
             
    }

    
}
