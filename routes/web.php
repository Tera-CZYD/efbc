<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\editController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[userController::class, 'sched']);
//Route::view('/ministries', 'etr/ministries');
Route::get('/ministries',[userController::class, 'ministries']);
Route::get('/about',[userController::class, 'about']);
Route::view('/services', 'etr/services');
Route::view('/contact', 'etr/contact');

Route::get('/login',[adminController::class, 'login']);
Route::get('/register',[adminController::class, 'register']);
Route::post('reg',[adminController::class, 'reg']);
Route::post('check', [adminController::class,'check']);

Route::get('profile',[adminController::class, 'profile']);
Route::get('/editHome',[adminController::class, 'adminhome']);
Route::get('/editMinistries',[adminController::class, 'adminministries']);
Route::get('/editAbout',[adminController::class, 'adminabout']);
Route::get('/editAnnouncements',[adminController::class, 'adminAnnounce']);


Route::get('logout',[adminController::class, 'logout']);
Route::view('/admin', 'etr/admin/admin');
Route::post('addPastor',[editController::class, 'addPastor']);
Route::post('addSched',[editController::class, 'addSched']);
Route::post('addMinistry',[editController::class, 'addMinistry']);
Route::post('addAnnounce',[editController::class, 'addAnnounce']);

Route::get('editAnnounce/{id}',[editController::class, 'showAnnounce']);
Route::get('editPastor/{id}',[editController::class, 'showPastor']);
Route::get('users/{id}',[editController::class, 'showUser']);
Route::get('sched/{id}',[editController::class, 'showSched']);
Route::get('user/{id}',[editController::class, 'showUser']);
Route::get('ministry/{id}',[editController::class, 'showMinistry']);

Route::post('updateHero',[editController::class, 'updateHero']);
Route::post('updateCaption',[editController::class, 'updatecaption']);
Route::post('updateAbout',[editController::class, 'updateAbout']);
Route::post('editPastor/updatePastor/{id}',[editController::class, 'updatePastors']);
Route::post('editAnnounce/updateAnnounce/{id}',[editController::class, 'updateAnnounce']);
Route::post('sched/updateSched/{id}',[editController::class, 'updateSched']);
Route::post('user/updateAdmin/{id}',[editController::class, 'updateUser']);
Route::post('ministry/updateMinistry/{id}',[editController::class, 'updateMinistry']);


Route::get('deleteUser/{id}',[editController::class, 'deleteUser']);
Route::get('deletePastor/{id}',[editController::class, 'deletepastor']);
Route::get('deleteMinistry/{id}',[editController::class, 'deleteministry']);
Route::get('delete/{id}',[editController::class, 'destroy']);
Route::get('deleteAnnounce/{id}',[editController::class, 'deleteAnnounce']);

Route::view('/editServices', 'etr/admin/editservices');
//Route::view('/login', 'etr/admin/login');
// /Route::view('/editHome', 'etr/admin/edithome');
//Route::view('/editMinistries', 'etr/admin/editministries');
//Route::view('/editAbout', 'etr/admin/editabout');
