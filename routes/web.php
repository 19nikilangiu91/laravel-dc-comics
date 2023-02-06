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
Route::get('/person/delete/{person}', [MainController::class, 'personDelete'])
    ->name('person.delete');

// Create Route
Route::get('/person/create', [MainController::class, 'personCreate'])
    ->name('person.create');

// Store Route
Route::post('/person/store', [MainController::class, 'personStore'])
    ->name('person.store');

// Bonus 1
// Show Route
Route::get('/person/show/{person}', [MainController::class, 'personShow'])
    ->name('person.show');

// Edit Route
Route::get('/person/edit/{person}', [MainController::class, 'personEdit'])
    ->name('person.edit');

// Upgrade Route
Route::post('/person/update/{person}', [MainController::class, 'personUpdate'])
    ->name('person.update');