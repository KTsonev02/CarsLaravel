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
    $cars = \App\Models\Car::all();
    return view('welcome', compact('cars'));
});

Route::get('cars/show/{car}', [\App\Http\Controllers\CarController::class, 'show'])->name('cars.show');
