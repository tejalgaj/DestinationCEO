<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Education::where('user_id', '=', auth()->user()->id)->exists()) {
            $education = auth()->user()->education;
            $user_status_count = (!empty(auth()->user()->details)?auth()->user()->details->count():0);
            // Education Detail found
            return view('education.index')->with(compact('education'))->with(compact('user_status_count'));
         }else{
            return view('education.create');
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
        return view('education.create');
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
            'schoolname'=>'required',
            'degree'=>'required',
            'graduated'=>'required',
            'enddate'=>'required',
           // 'tags'=>'exist:tags,id',
        ]);

        
        $education = new Education();
         $education->schoolname = request('schoolname');
         $education->user_id = auth()->id();
     $education->degree = request('degree');
         $education->enddate = request('enddate').'-01';
         $education->gpa = request('gpa');
         $education->graduated = request('graduated');
         

         $filter_relevant_courses = $education->getArrayFiltered(request('relevant_courses'));
         $education->relevant_courses = json_encode($filter_relevant_courses);
    
         $filter_awards = $education->getArrayFiltered(request('awards'));
         $education->awards = json_encode($filter_awards);
    
         $filter_extra_activity = $education->getArrayFiltered(request('extra_activity'));
         $education->extra_activity = json_encode($filter_extra_activity);

         
         $education->city = request('city');
         $education->state = request('state');
         $education->fieldofstudy = request('fieldofstudy');
         $education->country = request('country');
        //  dd(request('startdate'));
        //  dd(request('enddate'));
         $education->save();
         


         //return response()->json(['success'=>'Form Data is successfully Stored']);
        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
        
        return view('education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
        request()->validate([
            'schoolname'=>'required',
            'degree'=>'required',
            'graduated'=>'required',
            'enddate'=>'required',
           // 'tags'=>'exist:tags,id',
        ]);

        
        
         $education->schoolname = request('schoolname');
         $education->user_id = auth()->id();
     $education->degree = request('degree');
     $education->gpa = request('gpa');
     $education->graduated = request('graduated');

     $filter_relevant_courses = $education->getArrayFiltered(request('relevant_courses'));
     $education->relevant_courses = json_encode($filter_relevant_courses);

     $filter_awards = $education->getArrayFiltered(request('awards'));
     $education->awards = json_encode($filter_awards);

     $filter_extra_activity = $education->getArrayFiltered(request('extra_activity'));
     $education->extra_activity = json_encode($filter_extra_activity);

    
         $education->enddate = request('enddate').'-01';
         $education->city = request('city');
         $education->state = request('state');
         $education->fieldofstudy = request('fieldofstudy');
         $education->country = request('country');
        //  dd(request('startdate'));
        //  dd(request('enddate'));
         $education->save();
         
        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
        $education->delete();
        return back();
    }

    
}
