<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\ActualActionController;
//alert Controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('confirm-action', [ConfirmationController::class, 'confirmAction'])->name('confirm.action');
Route::get('actual-action', [ActualActionController::class, 'performAction'])->name('actual.action');
