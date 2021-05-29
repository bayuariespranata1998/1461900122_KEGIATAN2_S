<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\crud;
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
    return view('index');
});
Route::get('/tampil',[crud::class,'index']);
Route::get('/SELECTLIKE',[crud::class,'SELECTLIKE']);
Route::get('/Join',[crud::class,'Join']);
Route::get('/Last',[crud::class,'Last']);