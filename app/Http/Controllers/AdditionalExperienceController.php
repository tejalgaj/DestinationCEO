<?php

namespace App\Http\Controllers;

use App\Models\AdditionalExperience;
use Illuminate\Http\Request;

class AdditionalExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (AdditionalExperience::where('user_id', '=', auth()->user()->id)->exists()) {
            $additionalExperiences = auth()->user()->additionalExperience;
            return view('additional-experience.index',compact('additionalExperiences'));
         }else{
            return view('additional-experience.create');
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
        return view('additional-experience.create');
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
      
        $additionalExperience = new AdditionalExperience();
         $additionalExperience->role = request('role');
         $additionalExperience->user_id = auth()->id();
     $additionalExperience->responsibilities = request('responsibilities');
        
         $additionalExperience->save();
         
        return redirect()->route('additional-experience.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdditionalExperience  $additionalExperience
     * @return \Illuminate\Http\Response
     */
    public function show(AdditionalExperience $additionalExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdditionalExperience  $additionalExperience
     * @return \Illuminate\Http\Response
     */
    public function edit(AdditionalExperience $additionalExperience)
    {
        //
        
        return view('additional-experience.edit',compact('additionalExperience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdditionalExperience  $additionalExperience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdditionalExperience $additionalExperience)
    {
        //
        
         $additionalExperience->role = request('role');
         $additionalExperience->user_id = auth()->id();
     $additionalExperience->responsibilities = request('responsibilities');
        
         $additionalExperience->save();
         
        return redirect()->route('additional-experience.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdditionalExperience  $additionalExperience
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdditionalExperience $additionalExperience)
    {
        //
        
        $additionalExperience->delete();
        return back();
    }
}
