<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
   public  function index()
   {
           
     return view('testimonialform');
   
  }

  public function store(Request $request)
  {
       

       $testimonial = new Testimonial();
       $testimonial->name = $request->input('name');
       $testimonial->jobtitle = $request->input('jobtitle');
       $testimonial->view = $request->input('view');
       $testimonial->status = 'not approved'; //added by tejal
       
       if($request->hasfile('image')){
       $file = $request->file('image');
       $extension = $file-> getClientOriginalExtension();
       $filename= time() . '.' . $extension;
       $file->move('uploads/testimonial/', $filename);
       $testimonial->image = $filename;
 }
 else
 {
        //return $request; //commented by tejal
        $testimonial->image ='';

 }

        $testimonial->save();

        return view('testimonialform');
  }

  public function display()
  {
       $testimonials = Testimonial::where('status', 'approved')->get();
       return view('testimonial')->with('testimonials', $testimonials);

  }


  public function show()
  {
       $testimonials = Testimonial::where('status', 'not approved')->get();
       return view('googlereviews')->with('testimonials', $testimonials);

  }

//   public function edit($id)
//   {

//      $testimonials = Testimonial::find($id);
//      return view('testimonialupdateform')->with('testimonials', $testimonials);
//   }
//updated by tejal
  public function edit($id)
  {

     $testimonials = Testimonial::find($id);
     $testimonials->status = 'approved';
     $testimonials-> save();
     return redirect('/googlereviews')-> with ('testimonials',$testimonials);
  }

  public function update(Request $request, $id)
  {
     $testimonials = Testimonial::find($id);
     $testimonials->status = $request->input('status');
     $testimonials-> save();
     return redirect('/googlereviews')-> with ('testimonials',$testimonials);

  }

  public function delete($id)
  {
         $testimonials = Testimonial::find($id);
         $testimonials->delete();
         return redirect('/googlereviews')->with('testimonials',$testimonials);



  }
  


}



       
                
                 
                 
                 
                 
                

                
                
    


    




