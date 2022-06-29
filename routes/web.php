<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\admin\adminController;
use App\Http\Controllers\Backend\admin\category\categoryController;
use App\Http\Controllers\Backend\admin\employee\EmployeeController;
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

Route::get('/', [LoginController::class, 'showlogin']);
Route::post('/login', [LoginController::class, 'logincheck'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['name' => 'admin', 'as' => 'admin.'], function ()
{

        Route::get('/admin-Dashboard', [adminController::class, 'index'])->name('index');
        // Route::POST('manufacturer-list-store', [adminController::class, 'store'])->name('store');
        // Route::get('manufacturer-edit/{id}', [adminController::class, 'edit'])->name('edit');
        // Route::put('manufacturer-update/{id}', [adminController::class, 'update'])->name('update');
        // Route::get('manufacturer-datatable-list', [adminController::class, 'datatable'])->name('datatable');
        // Route::get('manufacturer-destroy/{id}', [adminController::class, 'destroy'])->name('destroy');
 });


Route::group(['name' => 'category', 'as' => 'category.'], function ()
{

        Route::get('/category', [categoryController::class, 'index'])->name('index');
        Route::POST('category-list-store', [categoryController::class, 'store'])->name('store');
        Route::get('category-edit/{id}', [categoryController::class, 'edit'])->name('edit');
        Route::put('category-update/{id}', [categoryController::class, 'update'])->name('update');
        Route::get('category-datatable-list', [categoryController::class, 'datatable'])->name('datatable');
        Route::get('category-destroy/{id}', [categoryController::class, 'destroy'])->name('destroy');
 });


 Route::group(['name' => 'employee', 'as' => 'employee.'], function ()
{

        Route::get('/employee', [EmployeeController::class, 'index'])->name('index');
        Route::POST('employee-list-store', [EmployeeController::class, 'store'])->name('store');
        Route::get('employee-edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
        Route::put('employee-update/{id}', [EmployeeController::class, 'update'])->name('update');
        Route::get('employee-datatable-list', [EmployeeController::class, 'datatable'])->name('datatable');
        Route::get('employee-destroy/{id}', [EmployeeController::class, 'destroy'])->name('destroy');
 });
