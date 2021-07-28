<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BackendController;
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

Route::get('/', 'BackendController@index');

Auth::routes(['register' => true]);

//Index Route ...........
Route::get('/index', 'HomeController@index')->name('index');

//Home Route ...........
Route::get('/home', 'BackendController@home')->name('home');
Route::post('/home', [BackendController::class, 'updateData']);

//About Info Route ...........
Route::get('/info', 'BackendController@info')->name('info');
Route::post('/info', [BackendController::class, 'updateAboutInfo']);
//About Skill Route ...........
Route::get('/skill', 'BackendController@skills')->name('skills');
Route::post('/skill', 'BackendController@skills_add')->name('skills');

//About Exp & Edu Route ...........
Route::get('/expedu', 'BackendController@expedu')->name('expedu');

//Portfolio Projects ROute .........
Route::get('/projects', 'BackendController@projects')->name('projects');
Route::post('/projects', [BackendController::class, 'addProject']);

//Contact-details Projects ROute .........
Route::get('/contact-details', 'BackendController@contactDetails')->name('cd');
Route::post('/contact-details', [BackendController::class, 'updateDetails']);

//Portfolio Projects ROute .........
Route::get('/social-links', 'BackendController@socialLinks')->name('sl');
Route::post('/social-links', [BackendController::class, 'updateLink']);

//BLog  ROute .........
Route::get('/blog', 'BackendController@blog')->name('blog');
Route::post('/blog', [BackendController::class, 'addBlog']);



//Home Controller add Info..
