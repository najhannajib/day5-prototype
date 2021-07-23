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

use App\Http\Controllers\VendorController;
 Route::resource('vendors', VendorController::class); 

 use App\Http\Controllers\RfxController;
 Route::resource('rfxes', RfxController::class); 

 use App\Http\Controllers\KerjaController;
 Route::resource('kerjas', KerjaController::class); 
