<?php

namespace App\Http\Controllers;

use App\Models\TechnicalExperience;
use Illuminate\Http\Request;

class TechnicalExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (TechnicalExperience::where('user_id', '=', auth()->user()->id)->exists()) {
            $technicalExperiences = auth()->user()->technicalExperience;
            return view('technical-experience.index',compact('technicalExperiences'));
         }else{
            return view('technical-experience.create');
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
        return view('technical-experience.create');
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
            'project_title'=>'required',
            'project_description'=>'required',
            'technology_stack'=>'required'
        ]);

        
        $technicalExperience = new TechnicalExperience();
         $technicalExperience->project_title = ucfirst(request('project_title'));
         $technicalExperience->user_id = auth()->id();
         $technicalExperience->project_year = request('project_year');
     $technicalExperience->project_description = request('project_description');
     $technicalExperience->technology_stack = request('technology_stack');
         $technicalExperience->save();
         return response()->json(['code'=>200, 'message'=>'tse Created successfully','data' => $technicalExperience], 200); 
       // return redirect()->route('technical-experience.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TechnicalExperience  $technicalExperience
     * @return \Illuminate\Http\Response
     */
    public function show(TechnicalExperience $technicalExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TechnicalExperience  $technicalExperience
     * @return \Illuminate\Http\Response
     */
    public function edit(TechnicalExperience $technicalExperience)
    {
        //
        return view('technical-experience.edit',compact('technicalExperience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TechnicalExperience  $technicalExperience
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, TechnicalExperience $technicalExperience)
    public function update(Request $request)
    {
        //
        request()->validate([
            'project_title'=>'required',
            'project_description'=>'required',
            'technology_stack'=>'required'
        ]);

        
        $technicalExperience = TechnicalExperience::find($request->id);
         $technicalExperience->project_title = ucfirst(request('project_title'));
         $technicalExperience->user_id = auth()->id();
         $technicalExperience->project_year = request('project_year');
     $technicalExperience->project_description = request('project_description');
     $technicalExperience->technology_stack = request('technology_stack');
         $technicalExperience->save();
         return response()->json(['code'=>200, 'message'=>'tse updated successfully','data' => $technicalExperience], 200); 
        //return redirect()->route('technical-experience.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TechnicalExperience  $technicalExperience
     * @return \Illuminate\Http\Response
     */
    public function destroy(TechnicalExperience $technicalExperience)
    {
        //
        $technicalExperience->delete();
        return back();
    }
}
