<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('user-detail', 'App\Http\Controllers\UserDetailController')->middleware('auth');

Route::resource('education', 'App\Http\Controllers\EducationController')->middleware('auth');
//Route::post('/experience/post', 'App\Http\Controllers\ExperienceController@store')->middleware('auth');
Route::resource('experience', 'App\Http\Controllers\ExperienceController')->middleware('auth');

Route::resource('skills', 'App\Http\Controllers\SkillController')->middleware('auth');

Route::resource('additional-experience', 'App\Http\Controllers\AdditionalExperienceController')->middleware('auth');

Route::get('/resume', 'App\Http\Controllers\ResumeController@index')->name('resume.index');
Route::get('/resume/download', 'App\Http\Controllers\ResumeController@download')->name('resume.download');


//Route::get('/dynamic_dependent', 'DynamicDependent@index');
