<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\RegistrationController;
=======
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\ActualActionController;
//alert Controller
>>>>>>> d6123fa78c74751f7abac8aff5418480cbd35421

<<<<<<< HEAD
Route::get('/',[RegistrationController::class,"index"] );
=======
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
>>>>>>> c1984afb68adba50b461486f8bda812eaa5d8fbf
=======


Route::get('confirm-action', [ConfirmationController::class, 'confirmAction'])->name('confirm.action');
Route::get('actual-action', [ActualActionController::class, 'performAction'])->name('actual.action');
>>>>>>> d6123fa78c74751f7abac8aff5418480cbd35421
