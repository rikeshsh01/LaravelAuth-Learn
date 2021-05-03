<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
// })
Route::group(['prefix' => 'admin','middleware'=>'auth'],  function () {

    Route::get('/', [\App\Http\Controllers\AdminController::class,'admin'])->name('admin');
    Route::get('/new',[AdminController::class,'new'])->name('new');
    Route::post('/store',[AdminController::class,'store'])->name('store');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
    Route::post('/update/{id}',[AdminController::class,'update'])->name('update');
    Route::get('/delete/{id}',[AdminController::class,'delete'])->name('delete');




    
});

Route::get('/',[PagesController::class,'show'])->name('show');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
