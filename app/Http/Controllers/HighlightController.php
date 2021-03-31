<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Highlight::where('user_id', '=', auth()->user()->id)->exists()) {
            $highlight = auth()->user()->highlight;
            //return view('highlight.index',compact('highlight'));
            $highlight_status_count = !empty(auth()->user()->highlight)?auth()->user()->highlight->count():0;
            return view('highlight.index')->with(compact('highlight'))->with(compact('highlight_status_count'));
         }else{
            return view('highlight.create');
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
        return view('highlight.create');
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
            'hard_skills'=>'required',
            'soft_skills'=>'required',
            'communication_language'=>'required',
            'objective'=>'required'
        ]);

        $highlight = new Highlight();
        
         
         $highlight->user_id = auth()->id();

         $filter_hard_skills = $highlight->getArrayFiltered(request('hard_skills'));
        $highlight->hard_skills = json_encode($filter_hard_skills);

        $filter_soft_skills = $highlight->getArrayFiltered(request('soft_skills'));
        $highlight->soft_skills = json_encode($filter_soft_skills);

     $highlight->communication_language = request('communication_language');
     $highlight->objective = request('objective');
         $highlight->save();
       
        return redirect()->route('highlight.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function show(Highlight $highlight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function edit(Highlight $highlight)
    {
        //
        return view('highlight.edit',compact('highlight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Highlight $highlight)
    {
        //
        request()->validate([
            'hard_skills'=>'required',
            'soft_skills'=>'required',
            'communication_language'=>'required',
            'objective'=>'required'
        ]);

       
         $highlight->hard_skills = request('hard_skills');
         $highlight->user_id = auth()->id();
         $highlight->soft_skills = request('soft_skills');
     $highlight->communication_language = request('communication_language');
     $highlight->objective = request('objective');
         $highlight->save();
        
        return redirect()->route('highlight.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Highlight $highlight)
    {
        //
        $highlight->delete();
        return back();
    }
}
