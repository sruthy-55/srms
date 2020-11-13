<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\customerController;



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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/menu', function () {
    return view('menu');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/adminlogin', function () {
    return view('admin.adminlogin');
});

//Route::post("Admin",[AdminAuth::class,'AdminLogin']);
//Route::view("adminlogin",'adminlogin');

Route::get('/adminhome', function () {
    return view('admin.adminhome');
});

Route::get('/orderlist', function() {
    return view('admin.orderlist');
});

Route::get('/foodlist', function() {
    return view('admin.foodlist');
});

Route::get('/staffapprove', function() {
    return view('admin.staffapprove');
});

Route::get('/tblreserved', function() {
    return view('admin.tblreserved');
});

//Route::get('/adminlogout', function() {
  //  return view('admin.adminlogout');
//});
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/home', function () {
    return view('customer.home');
});
Route::get('/login', function () {
    return view('customer.customerlogin');
});

//Route::post('/cusLogin','customerController@cusLogin');
Route::post('email',[customerController::class,'cusLogin']);
Route::get('/cusProfile', [customerController::class,'cusProfile']);

Route::get('/register', function () {
    return view('customer.customerRegister');
});
Route::post('/register',[customerController::class,'cusReg']);
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
Route::post('Register', [ 'as' => 'register', 'uses' => 'RegisterController@do']);
Route::get('/logout', function () {
    if(session()->has('txtName'))
    {
        session()->pull('txtName');
    }
    return redirect('login');
});


