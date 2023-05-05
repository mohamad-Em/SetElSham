<?php

use App\Http\Controllers\Admin\CornerController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\VarietieController;
use App\Http\Controllers\Controller;
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
    return view('admin.index');
});
Route::group(['namespace' => 'Admin'],function(){
    Route::get('login',[LoginController::class,'login'])->name('admin.login');
    Route::post('store',[LoginController::class,'store'])->name('admin.store');
});
Route::group(['namespace' => 'Admin' , 'prefix' => 'admin' , 'middleware' => 'check_admin'],function(){
    Route::get('home',[LoginController::class,'home'])->name('admin.home');
    Route::get('logout',[LoginController::class,'logout'])->name('admin.logout');
});
Route::group(['namespace' => 'Admin' , 'prefix' => 'corners' , 'middleware' => 'check_admin'],function(){
    Route::get('/',[CornerController::class,'corners'])->name('admin.corners');
    Route::get('create',[CornerController::class,'create'])->name('admin.corners.create');
    Route::post('store',[CornerController::class,'store'])->name('admin.corners.store');
    Route::get('edit/{id}',[CornerController::class,'edit'])->name('admin.corners.edit');
    Route::post('update/{id}',[CornerController::class,'update'])->name('admin.corners.update');
    Route::get('delete/{id}',[CornerController::class,'delete'])->name('admin.corners.delete');
});
Route::group(['namespace' => 'Admin' , 'prefix' => 'corners/varieties' , 'middleware' => 'check_admin'],function(){
    Route::get('/{cornerId}',[VarietieController::class,'varieties'])->name('admin.corners.varieties');
    Route::get('create/{cornerId}',[VarietieController::class,'create'])->name('admin.corners.varieties.create');
    Route::post('store',[VarietieController::class,'store'])->name('admin.corners.varieties.store');
    Route::get('edit/{id}',[VarietieController::class,'edit'])->name('admin.corners.varieties.edit');
    Route::post('update/{id}',[VarietieController::class,'update'])->name('admin.corners.varieties.update');
    Route::get('delete/{id}',[VarietieController::class,'delete'])->name('admin.corners.varieties.delete');



});
