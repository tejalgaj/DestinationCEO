<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\skills_scanning_controller;

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
Route::get('resume-scan',[skills_scanning_controller::class,'getSkills']);


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
Route::get('/resume/convert-html-to-word', 'App\Http\Controllers\ResumeController@wordExport');

Route::get('/resume/direct-convert-html-to-word', 'App\Http\Controllers\ResumeController@directwordExport');


Route::post('/set-selected-template', 'App\Http\Controllers\UserDetailController@storeSessionData');

Route::resource('highlight', 'App\Http\Controllers\HighlightController')->middleware('auth');


//Route::get('/dynamic_dependent', 'DynamicDependent@index');
