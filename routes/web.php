<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\skills_scanning_controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin_address;
use App\Http\Controllers\footer_address_detail;
use App\Models\admin_address_detail;
use App\Http\Controllers\update_footer_address;

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


//Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/contact',[ContactController::class,'contact']);
//Route::post('/contact', 'ContactController@contactPost')->name('contactPost');
Route::post('/contact',[ContactController::class,'contactPost']);


Route::get('/', function () {
    return view('main');
});



//admin contact address details
Route::get('contact_details',[admin_address::class,'getAdminAddress']);
Route::get('app',[update_footer_address::class,'getFooterAddress']);
Route::post('/update/{id}',[admin_address::class,'update_function']);   

//admin contact address details end

Route::get('/resume-builder', function () {
    return view('resume_builder');
})->middleware('auth');

Route::get('/resume-template', function () {
    return view('template_select');
})->middleware('auth');

/*
Route::get('/resume-scan', function () {
    return view('resume_scan');
});

*/
Route::get('resume-scan',[skills_scanning_controller::class,'getSkills'])->middleware('auth');;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('user-detail', 'App\Http\Controllers\UserDetailController')->middleware('auth');

Route::resource('education', 'App\Http\Controllers\EducationController')->middleware('auth');
//Route::post('/experience/post', 'App\Http\Controllers\ExperienceController@store')->middleware('auth');
Route::resource('experience', 'App\Http\Controllers\ExperienceController')->middleware('auth');

Route::resource('skills', 'App\Http\Controllers\SkillController')->middleware('auth');

Route::resource('additional-experience', 'App\Http\Controllers\AdditionalExperienceController')->middleware('auth');
Route::resource('technical-experience', 'App\Http\Controllers\TechnicalExperienceController')->middleware('auth');

Route::get('/resume', 'App\Http\Controllers\ResumeController@index')->name('resume.index');
Route::get('/resume/download', 'App\Http\Controllers\ResumeController@download')->name('resume.download');
Route::get('/resume/convert-word-to-pdf', 'App\Http\Controllers\ResumeController@convertWordToPDF')->name('resume.wordtopdf');


Route::post('/set-selected-template', 'App\Http\Controllers\UserDetailController@storeSessionData');

Route::resource('highlight', 'App\Http\Controllers\HighlightController')->middleware('auth');


//Route::get('/dynamic_dependent', 'DynamicDependent@index');
