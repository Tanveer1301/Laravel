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

Route::get('/home', function () {
    return view('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard']);


use App\Http\Controllers\PropertyController;

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::delete('/properties/{flat_id}', [PropertyController::class, 'destroy'])->name('properties.destroy');
#edit
Route::get('/properties/{flat_id}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
Route::put('/properties/{flat_id}', [PropertyController::class, 'update'])->name('properties.update');

#all properties to dashboard
Route::get('/dashboard', function () {
    return view('dashboard'); // or return redirect()->route('properties.index');
})->middleware(['auth'])->name('dashboard');

#logout
use App\Http\Controllers\Auth\LoginController;
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


