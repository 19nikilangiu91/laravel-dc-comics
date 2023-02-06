<?php

use Illuminate\Support\Facades\Route;

// Importo Il MainController
use App\Http\Controllers\MainController;

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

// Home Route
Route::get('/', [MainController::class, 'home'])
    ->name('home');

// Delete Route
Route::get('/person/delete/{people}', [MainController::class, 'personDelete'])
    ->name('person.delete');

// Create Route
Route::get('/person/create', [MainController::class, 'personCreate'])
    ->name('person.create');

// Store Route
Route::post('/person/store', [MainController::class, 'personStore'])
    ->name('person.store');