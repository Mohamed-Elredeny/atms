<?php

use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Users\UsersController;
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

/*
  Test Database
  Route::get('/', function () {
    return view('test');
});*/

Route::get('/',function (){
    //return view('dashboard-login');
    return view('Admin.departments.departments');

});
Route::get('/cpanel',function (){
    return view('dashboard');
})->name('cpanel');
Route::resource('employees',EmployeesController::class);
Route::post('/login', [UsersController::class, 'login'])->name('user.login');
//Users Routes
//1.View Users According to State
Route::get('/viewUsers/{type}/{state}', [UsersController::class, 'viewEmployeesWithState'])->name('user.viewUsers/{type}/{state}');
//View Add users page
Route::get('/addUsersPage', [UsersController::class, 'viewAddUsersPage'])->name('user.addUsersPage');
//Add Users Function
Route::post('/addUsers/{type}/{state}', [UsersController::class, 'addUsers'])->name('user.addUsers/{type}/{state}');

