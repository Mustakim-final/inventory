<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//employee

Route::get('home/add/employee',[EmployeeController::class,'addempage'])->name('add-employee');
Route::post('home/add/employee/post',[EmployeeController::class,'postemploye'])->name('insert-employee');
Route::get('home/all-employe',[EmployeeController::class,'allemploye'])->name('all-employe');
Route::get('home/employe/delete/{id}',[EmployeeController::class,'employedelete'])->name('employe-delete');
Route::get('home/employe/view/{id}',[EmployeeController::class,'employeview'])->name('employe-view');
Route::post('home/employe/update/{id}',[EmployeeController::class,'employeupdate'])->name('employe-update');

//customer  route

Route::get('home/add/customer',[CustomerController::class,'addempage'])->name('add-customer');
Route::post('home/add/customer/post',[CustomerController::class,'postcustomer'])->name('insert-customer');
Route::get('home/all-customers',[CustomerController::class,'allcustomer'])->name('all-customer');
Route::get('home/customer/delete/{id}',[CustomerController::class,'customerdelete'])->name('customer-delete');
Route::get('home/customer/view/{id}',[CustomerController::class,'customerview'])->name('customer-view');
Route::post('home/customer/update/{id}',[CustomerController::class,'customerupdate'])->name('customer-update');

//supliers route
Route::get('home/add/supliers',[SuplierController::class,'addempage'])->name('add-suplier');
Route::post('home/add/supliers/post',[SuplierController::class,'postsuplier'])->name('insert-suplier');
Route::get('home/all-supliers',[SuplierController::class,'allsupliers'])->name('all-supliers');
