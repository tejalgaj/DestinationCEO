<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;



class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Experience::where('user_id', '=', auth()->user()->id)->exists()) {
            $experiences = auth()->user()->experiences;
            // Education Detail found
            $exp_status_count = (!empty(auth()->user()->experiences)?auth()->user()->experiences->count():0);
            //return view('experience.index',compact('experiences'));
            return view('experience.index')->with(compact('experiences'))->with(compact('exp_status_count'));
         }else{
            return view('experience.create');
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
        return view('experience.create');
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
            'job_title'=>'required',
            'employer'=>'required',
            'startdate'=>'required',
            'country'=>'required',
            
            
           // 'tags'=>'exist:tags,id',
        ]);
       // dd(request('work_responsibilities'));
        //dd(request());
        $experience = new Experience();
         $experience->job_title = request('job_title');
         $experience->user_id = auth()->id();
     $experience->employer = request('employer');
         $experience->startdate = request('startdate').'-01';
         
         if(request('currently_working')=='yes')
         {
             $enddate_value = NULL;
         }else{
            $enddate_value = request('enddate').'-01';
         }
         
         $experience->enddate = $enddate_value;
         $experience->currently_working = request('currently_working');

         
         
         $experience->work_responsibilities = request('work_responsibilities');


         $experience->city = ucfirst(request('city'));
         $experience->state = ucfirst(request('state'));
         $experience->country = ucfirst(request('country'));
        //  dd(request('startdate'));
        //  dd(request('enddate'));
         $experience->save();
         
        return redirect()->route('experience.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
        return view('experience.edit',compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        //
        request()->validate([
            'job_title'=>'required',
            'employer'=>'required',
            'startdate'=>'required',
            'country'=>'required',
            
           // 'tags'=>'exist:tags,id',
        ]);

       
       
         $experience->job_title = request('job_title');
         $experience->user_id = auth()->id();
     $experience->employer = request('employer');
         $experience->startdate = request('startdate').'-01';
         if(request('currently_working')=='true')
         {
             $enddate_value = NULL;
         }else{
            $enddate_value = request('enddate').'-01';
         }
         
         $experience->enddate = $enddate_value;
         $experience->currently_working = request('currently_working');

        
         $experience->work_responsibilities = request('work_responsibilities');

         $experience->city = ucfirst(request('city'));
         $experience->state = ucfirst(request('state'));
         $experience->country = ucfirst(request('country'));
        //  dd(request('startdate'));
        //  dd(request('enddate'));
         $experience->save();
         
        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
        $experience->delete();
        return back();
    }
}
