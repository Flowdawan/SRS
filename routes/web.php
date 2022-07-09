<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SrsController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('registration', [AuthController::class, 'registration'])->name('register');

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::get('dashboard', [AuthController::class, 'dashboard']); 

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::view('/', 'dashboard')->middleware('auth');

// SRS creation
Route::view('start', 'srs_creator')->middleware('auth');

Route::view('editname', 'edit_p_name')->middleware('auth');
Route::view('editdescription', 'edit_p_description')->middleware('auth');
Route::view('editteam', 'edit_team')->middleware('auth');
Route::view('editmust', 'edit_must')->middleware('auth');
Route::view('editcould', 'edit_could')->middleware('auth');
Route::view('editshould', 'edit_should')->middleware('auth');
Route::view('editwont', 'edit_wont')->middleware('auth');
Route::view('editscope', 'edit_p_scope')->middleware('auth');


// All project edit routes
Route::post('post-projectname', [SrsController::class, 'store_name'])->name('projectname.post'); 
Route::post('post-could', [SrsController::class, 'store_could'])->name('could.post'); 
Route::post('post-must', [SrsController::class, 'store_must'])->name('must.post'); 
Route::post('post-description', [SrsController::class, 'store_description'])->name('description.post'); 
Route::post('post-scope', [SrsController::class, 'store_scope'])->name('scope.post'); 
Route::post('post-should', [SrsController::class, 'store_should'])->name('should.post'); 
Route::post('post-team', [SrsController::class, 'store_team'])->name('team.post'); 
Route::post('post-wont', [SrsController::class, 'store_wont'])->name('wont.post'); 
