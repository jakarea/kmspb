<?php

use App\Http\Controllers\RegistrationController;
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


Route::get('/registation',[RegistrationController::class,'registration'])->name('registration.index');
Route::post('/registation',[RegistrationController::class,'store'])->name('registration.store');
Route::get('/members',[RegistrationController::class, 'members'])->name('registration.members');;