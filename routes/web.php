<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\StoreController;
use App\Http\Controllers\backend\PosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\ClientController;




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




//POS
Route::get('/pos',[PosController::class,'Point_of_Sale'])->name('pos');
Route::get('/sale/details/{id}',[PosController::class,'details'])->name('saledetails');
Route::get('/sales',[PosController::class,'Sales'])->name('sales');
Route::get('/sale/list/{id}',[PosController::class,'sale_list'])->name('sale_list');
Route::post('/pos/cart',[PosController::class,'poscart'])->name('poscart');
Route::post('/cart/sale',[PosController::class,'cart'])->name('addcart');
Route::post('/post/method/',[PosController::class,'cart_post'])->name('cart_post');
Route::get('/forget',[PosController::class,'forget'])->name('forget');






//User
Route::get('/adduser',[UserController::class,'adduser'])->name('add.user');
Route::get('/user/manage',[UserController::class,'user_manage'])->name('user.manage');
Route::post('/post/users',[UserController::class,'postuser'])->name('postuser');
Route::get('/user/delete/{id}',[UserController::class,'userdelete'])->name('user.delete');
Route::get('/user/edit/{id}',[UserController::class,'useredit'])->name('user.edit');
Route::put('/user/update/{id}',[UserController::class,'userupdate'])->name('user.update');


//Customer
Route::get('/add/customer', [CustomerController::class,'addcustomer'])->name('add.customer');
Route::get('/customer/manage',[CustomerController::class,'customer_manage'])->name('customer.manage');
Route::post('/customer/post',[CustomerController::class,'store'])->name('customer.post');
Route::get('/customer/edit/{id}',[CustomerController::class,'customeredit'])->name('customer.edit');
Route::get('/customer/delete/{id}',[CustomerController::class,'customerdelete'])->name('customer.delete');
Route::put('/customer/update/{id}',[CustomerController::class,'customerupdate'])->name('customer.update');

Route::get('/client/dashboard',[CustomerController::class,'clientdashboard'])->name('clientdashboard');











//Logout
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


});
