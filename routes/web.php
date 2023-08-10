<?php

use App\Http\Controllers\website\ContactusController;
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
    return view('website.index');
});


Route::post('contactusMessage',[ContactusController::class,'saveData'])->name('contactus.send');



// Routes of dashboard

Route::group(['prefix'=>'admin'],function (){

    Route::get('/home', function () {
        return view('dashboard.home');
    });

    Route::get('/login', function () {
        return view('dashboard.auth.login');
    });


});


