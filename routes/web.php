<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\skills_scanning_controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin_address;
use App\Http\Controllers\footer_address_detail;
use App\Models\admin_address_detail;
use App\Http\Controllers\update_footer_address;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
use App\Http\Controllers\UploadTemplatesController;
use App\Http\Controllers\adminSocialLinks;
use App\Http\Controllers\aboutUsControllerAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('main');
});


//Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/contact',[ContactController::class,'contact']);
//Route::post('/contact', 'ContactController@contactPost')->name('contactPost');
Route::post('/contact',[ContactController::class,'contactPost']);





//admin contact address details
Route::get('contact_details',[admin_address::class,'getAdminAddress']);
//Route::get('app',[update_footer_address::class,'getFooterAddress']);
Route::post('/update/{id}',[admin_address::class,'update_function']);   

//admin contact address details end

Route::get('/resume-builder', function () {
    return view('resume_builder');
})->middleware('auth');

Route::get('/resume-template', function () {
    $templates = App\Models\UploadTemplateFile::all();
    return view('template_select',[
        'template_formats'=>$templates
    ]);
})->middleware('auth');

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/testimonialform', function () {
    return view('testimonialform');
});

Route::get('/googlereviews', function () {
    return view('googlereviews');
});

Route::get('/scraper', function () {
    return view('scraper');
});

Route::view('/testimonialform','testimonialform');
Route::post('App\Http\Controllers\TestimonialController','App\Http\Controllers\TestimonialController@index');
Route::post('/addimage','App\Http\Controllers\TestimonialController@store')->name('addimage');


Route::get('/testimonialpage','App\Http\Controllers\TestimonialController@display');

Route::get('/editimage/{id}', 'App\Http\Controllers\TestimonialController@edit');
Route::put('/updateimage/{id}', 'App\Http\Controllers\TestimonialController@update');

Route::get('/googlereviews','App\Http\Controllers\TestimonialController@show');
Route::get('/deleteimage/{id}', 'App\Http\Controllers\TestimonialController@delete');

/*
Route::get('/resume-scan', function () {
    return view('resume_scan');
});

*/
Route::get('resume-scan',[skills_scanning_controller::class,'getSkills']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('user-detail', 'App\Http\Controllers\UserDetailController')->middleware('auth');

Route::resource('education', 'App\Http\Controllers\EducationController')->middleware('auth');

Route::resource('experience', 'App\Http\Controllers\ExperienceController')->middleware('auth');

Route::resource('skills', 'App\Http\Controllers\SkillController')->middleware('auth');

Route::resource('additional-experience', 'App\Http\Controllers\AdditionalExperienceController')->middleware('auth');
Route::resource('technical-experience', 'App\Http\Controllers\TechnicalExperienceController')->middleware('auth');

Route::get('/resume', 'App\Http\Controllers\ResumeController@preview')->name('resume-format.resume.preview')->middleware('auth');
Route::get('/resume/download', 'App\Http\Controllers\ResumeController@download')->name('resume-format.resume.download')->middleware('auth');


Route::get('/resume/direct-convert-html-to-word', 'App\Http\Controllers\ResumeController@directwordExport')->name('resume-format.resume.DOCdownload')->middleware('auth');
Route::get('/resume/direct-convert-html-to-text', 'App\Http\Controllers\ResumeController@directtextExport')->name('resume-format.resume.TXTdownload');

Route::get('/resume/getPreviewUrl', 'App\Http\Controllers\ResumeController@previewURL');

Route::post('/set-selected-template', 'App\Http\Controllers\UserDetailController@storeSessionData');

Route::resource('highlight', 'App\Http\Controllers\HighlightController')->middleware('auth');



//Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Auth::routes();



//gurvir's routes
Route::get('/upload_template', function () {
    return view('upload_template');
})->middleware('auth');
Route::get('/admin/socialLinks', function () {
    return view('admin/socialLinks');
})->middleware('auth');

// Route::get('/layouts/app', function () {
//     return view('layouts/app');
// })->middleware('auth');

Route::get('/admin/aboutUs', function () {
    return view('admin/aboutUs');
})->middleware('auth');
Route::get('/{{$template->filenames}}', function () {
    return view('{{$template->filenames}}');
})->middleware('auth');
Route::get('/{{$twitter1->twitter}}', function () {
    return view('{{$twitter1->twitter}}');
})->middleware('auth');
Route::get('/upload_template_form', function () {
    return view('upload_template_form');
})->middleware('auth');
Route::get('/view_aboutUs', 'App\Http\Controllers\aboutUsControllerAdmin@display');
Route::get('/admin/aboutUs', 'App\Http\Controllers\aboutUsControllerAdmin@index')->middleware('auth');
Route::get('/admin/socialLinks', 'App\Http\Controllers\adminSocialLinks@index')->middleware('auth');

//Route::get('admin/aboutUs',[aboutUsControllerAdmin::class,'getAdminAddress']);
//Route::get('app',[update_footer_address::class,'getFooterAddress']);
  

Route::get('/upload_template_form', 'App\Http\Controllers\UploadTemplatesController@display')->middleware('auth');

Route::get('/deleteFile/{id}', 'App\Http\Controllers\UploadTemplatesController@delete')->middleware('auth');


Route::get('UploadTemplateFile', [UploadTemplatesController::class, 'create'])->middleware('auth'); 
Route::post('UploadTemplateFile', [UploadTemplatesController::class, 'store'])->middleware('auth');

Route::get('adminSocialLinksFile', [adminSocialLinks::class, 'index'])->middleware('auth'); 
Route::post('/updateSociallinks/{id}',[adminSocialLinks::class,'addData']); 

Route::get('adminAboutUsFile', [aboutUsControllerAdmin::class, 'index'])->middleware('auth');
Route::post('adminAboutUsFile', [aboutUsControllerAdmin::class, 'addData'])->middleware('auth');
//Route::post('adminAboutUsFile', [aboutUsControllerAdmin::class, 'showData']);

Route::get('/admin/aboutUs/{id}', 'App\Http\Controllers\aboutUsControllerAdmin@showData')->middleware('auth');


Route::get('/document/convert', 'App\Http\Controllers\UploadTemplatesController@convertWordToPDF1')->name('wordtopdf')->middleware('auth');
//Route::get('#', 'App\Http\Controllers\adminSocialLinks@redirect');
Route::get('/layouts/app', 'App\Http\Controllers\adminSocialLinks@redirect')->middleware('auth');