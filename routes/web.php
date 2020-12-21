<?php

use App\Http\Controllers\EntrepriseController;
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
    return view('pages.dasboard');
});

Route::get('entreprise',[EntrepriseController::class,'index'])->name('entreprise.index');
Route::get('entreprise/{id}/edit',[EntrepriseController::class,'edit'])->name('entreprise.edit');
Route::put('entreprise/{id}',[EntrepriseController::class,'update'])->name('entreprise.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
