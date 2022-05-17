<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;





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




//Login
Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'login_user'])->name('login_user');
Route::group(['middleware'=>'auth'],function()
// ,'middleware'=>'auth'

{
    Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){

        //Dashboard //last
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        //dash


        });





//User
Route::get('/adduser',[UserController::class,'adduser'])->name('add.user');
Route::get('/user/manage',[UserController::class,'user_manage'])->name('user.manage');
Route::post('/post/users',[UserController::class,'postuser'])->name('postuser');
Route::get('/user/delete/{id}',[UserController::class,'userdelete'])->name('user.delete');
Route::get('/user/edit/{id}',[UserController::class,'useredit'])->name('user.edit');
Route::put('/user/update/{id}',[UserController::class,'userupdate'])->name('user.update');

//Logout
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


});
