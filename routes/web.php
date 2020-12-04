<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Support\Facades\Mail;
use App\Http\controllers\adminController;
=======


>>>>>>> 798402e1befb55ec3a3acc3ca775a738dc30a1d6
use App\Http\Controllers\customerController;
use App\Http\controllers\reservationController;
use App\Http\controllers\mailController;
use App\Http\controllers\CategoryController;
use App\Http\controllers\MenuaddController;
use App\Http\controllers\MenuController;
use App\Mail\TestMail;



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
Route::post('tblreserve',[reservationController::class,'reserve']);

//-----------------------------admin-----------------------------

Route::get('/adminlogin', function () {
    return view('admin.adminlogin');
});

Route::post('/email1',[adminController::class,'adminLogin']);
Route::get('/adminhome',[adminController::class,'adminhome']);
Route::get('/adminlogout', function () {
    if(session()->has('txtName'))
    {
        session()->pull('txtName');
    }
    return redirect('adminlogin');
});
/*Route::get('/adminhome', function () {
    return view('adminhome');
});*/

Route::get('/orderlist', function() {
    return view('admin.orderlist');
});
Route::get('/foodmenu', function() {
    return view('admin.foodmenu');
});
Route::get('/tblmanage', function() {
    return view('admin.tblmanage');
});

//-------------adminapprove-------------------
Route::get('/adminapprove', function() {
    return view('adminapprove');
});

Route::get('/adminapprove', [adminController::class,'adminReserve']);

//Route::get('reservation','adminController@adminReserve');
Route::get('change-status','adminController@changeStatus');
Route ::group(['middleware' => ['auth' , 'admin']],function(){
Route::get('/adminapproval','App\Http\Controllers\adminController@adminReserve')->name('admindashboard');
Route::get('/approve/{id}','App\Http\Controllers\adminController@approve')->name('admin.approve');
Route::get('/reject/{id}','App\Http\Controllers\adminController@decline')->name('admin.decline');
});
Route::post('adminapprove', [ 'as' => 'adminapprove', 'uses' => 'adminController@do']);
Route::post('delete','App\Http\Controllers\adminController@deletebtn');





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


Route::get('/admin.adminlogin', function () {
    return view('admin.adminlogin');
});

Route::post("Admin",[AdminAuth::class,'AdminLogin']);
Route::view("adminlogin",'adminlogin');

Route::get('/admin.adminhome', function () {
    return view('admin.adminhome');
});

Route::get('/admin.orderlist', function() {
    return view('admin.orderlist');
});

Route::get('/admin.foodlist', function() {
    return view('admin.foodlist');
});

Route::get('/admin.staffapprove', function() {
    return view('admin.staffapprove');
});

Route::get('/admin.tblreserved', function() {
    return view('admin.tblreserved');
});

Route::get('/admin.adminlogout', function() {
    return view('admin.adminlogout');
});
Route::get('/gallery', function () {
    return view('gallery');
});

//----------------------staff---------------------------------------
Route::get('/staffhome', function () {
    return view('staff.staffhome');
});
Route::get('/stafflogin', function () {
    return view('staff.stafflogin');
});

Route::get('/staffregister', function () {
    return view('staff.staffregister');
});
Route::post('email2',[staffController::class,'staffLogin']);
Route::get('/staffProfile', [staffController::class,'staffProfile']);
Route::post('/register2',[staffController::class,'staffReg']);
Route::get('/stafflogout', function () {
    if(session()->has('txtName'))
    {
        session()->pull('txtName');
    }
    return redirect('stafflogin');
});

Route::get('/foodmenu', function () {
    return view('staff.foodmenu');
});

Route::get('/tablemanage', function () {
    return view('staff.tablemanage');
});

//------------------------------customer--------------------------------

Route::get('/home', function () {
    return view('customer.home');
});
Route::get('/login', function () {
    return view('customer.customerlogin');
});
<<<<<<< HEAD
Route::get('/selectmenu', function () {
    return view('customer.selectmenu');
});

=======

//Route::post('/cusLogin','customerController@cusLogin');
>>>>>>> 798402e1befb55ec3a3acc3ca775a738dc30a1d6
Route::post('email',[customerController::class,'cusLogin']);
Route::get('/cusProfile', [customerController::class,'cusProfile']);

Route::get('/register', function () {
    return view('customer.customerRegister');
});
Route::post('/register',[customerController::class,'cusReg']);
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
Route::post('Register', [ 'as' => 'register', 'uses' => 'RegisterController@do']);
Route::get('/customerlogout', function () {
    if(session()->has('txtName'))
    {
        session()->pull('txtName');
    }
    return redirect('login');
});
Route::post('/admin/reservations/{reservations}', 'App\Http\Controllers\adminController@completedUpdate')->name('completedUpdate');
//-----------------------------email-----------------------------
//Route::get('/send-email',[MailController::class,'sendEmail']);
Route::get('/email',function () {
    Mail::to('email@email.com')->send(new TestMail());
    return new TestMail();
});
Route::get('/emailsend', function () {
    return view('emails.emailsend');
});
//Route::post('send',[mailController::class,'sendEmail']);
Route::get('/send','App\Http\Controllers\mailController@sendEmail')->name('send');
//----------------category------------------
Route::get('/add', function () {
    return view('categoryadd');
});
//Route::view('add','categoryadd');
Route::post('add',[CategoryController::class,'save']);

Route::get('viewcategorylist',[CategoryController::class,'show']);
Route::post('viewcategorylist',[CategoryController::class,'show']);


Route::get('delete/{id}',[CategoryController::class,'delete']);


Route::get('edit/{id}',[CategoryController::class,'showData']);
Route::post('edit',[CategoryController::class,'update']);




//---------------------menuadd--------------------------------------------------------------
Route::get('/menuadd', function () {
    return view('menuadd');
});
Route::get('/menuadded', function () {
    return view('menuadded');
});
Route::post('menuadded',[MenuaddController::class,'menu_add']);


Route::get('/viewaddmenu', [adminController::class,'menuAdd']);
//
//
//
Route::resource('menus','App\Http\Controllers\MenuController');

<<<<<<< HEAD
Route::get('/viewmenu', [customerController::class,'ViewMenu']);
=======

>>>>>>> 798402e1befb55ec3a3acc3ca775a738dc30a1d6
