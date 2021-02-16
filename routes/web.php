<?php

use App\Http\Controllers\ContactanosController;
use App\Mail\ContactanosMailable;
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

Route::view("/","index");
Route::view("migraciones","migraciones");
Route::view("seeders","seeders");
Route::view("mail","mail");


/*Falta crear el formulario y darle la ruta en el action*/ 
Route::get("contactanos",[ContactanosController::class,"index"])->name("contactanos.index");
Route::get("contactanos",[ContactanosController::class,"store"])->name("contactanos.store");
