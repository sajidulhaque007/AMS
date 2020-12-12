<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lp', function () {
    return view('welcome2');
});
// Route::get('dashboard', function () {
//     return view('/dashboard/dashboard');
// });
Route::get('dashboard2', function () {
    return view('/dashboard2');
});

Route::resource('departments','\App\Http\Controllers\DepartmentController');
Route::resource('employees','\App\Http\Controllers\EmployeeController');
Route::resource('attendances','\App\Http\Controllers\AttendanceController');