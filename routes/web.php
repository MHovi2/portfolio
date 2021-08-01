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

Route::get('/', [BackendController::class, '']);

Route::prefix('admin')->group(function () {
    Route::get('/', 'BackendController@index');

    Auth::routes(['register' => true]);

    //Index Route ...........
    Route::get('/index', [BackendController::class, 'index'])->name('index');

    //Home Route ...........
    Route::get('home', [BackendController::class, 'home'])->name('home');
    Route::post('home', [BackendController::class, 'updateData']);

    //About Info Route ...........
    Route::get('info', [BackendController::class, 'info'])->name('info');
    Route::post('info', [BackendController::class, 'updateAboutInfo']);
    //About Skill Route ...........
    Route::get('skill', [BackendController::class, 'skills'])->name('skills');
    Route::post('skill', [BackendController::class, 'skills_add'])->name('skills');

    Route::post('skill', [BackendController::class, 'updateSkill']);


    //About Exp & Edu Route ...........
    Route::get('expedu', [BackendController::class, 'expedu'])->name('expedu');
    Route::post('expedu', [BackendController::class, 'addexpedu']);

    // Projects ROute .........
    Route::get('projects', [BackendController::class, 'projects'])->name('projects');
    Route::post('projects', [BackendController::class, 'addProject']);
    Route::get('showProject/{id}', [BackendController::class, 'showProject']);
    Route::post('update-project', [BackendController::class, 'updateProject'])->name('update.project');


    //Contact-details Projects ROute .........
    Route::get('contact-details', [BackendController::class, 'contactDetails'])->name('cd');
    Route::post('contact-details', [BackendController::class, 'updateDetails']);

    //Portfolio Projects ROute .........
    Route::get('social-links', [BackendController::class, 'socialLinks'])->name('sl');
    Route::post('social-links', [BackendController::class, 'updateLink']);



    //BLog  ROute .........
    Route::get('blog', [BackendController::class, 'blog'])->name('blog');
    Route::post('blog', [BackendController::class, 'addBlog']);
    Route::get('update-blog/{id}', [BackendController::class, 'showData']);
    Route::post('update-blog', [BackendController::class, 'updateBlog'])->name('update.blog');
});



//Home Controller add Info..
