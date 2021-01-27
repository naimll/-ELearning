<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FileController;
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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index']);

Route::get('/login',array('as'=>'log',function () {
    return view('login');
}));


Route::post('/login',[LoginController::class,'doLogin'])->name('login');

Route::get('/admin', function () {
    return view('admin');

})->name('admin');
Route::get('/logout',function(){
    session()->flush();
    return redirect('/');
})->name('logout');

Route::post('/uploadFile',[FileController::class,'upload'])->name('uploadFile');
