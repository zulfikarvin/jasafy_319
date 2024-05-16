<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

<<<<<<< HEAD
Route::get('/',[RegistrationController::class,"index"] );
=======
Route::get('/', function () {
    return view('welcome');
});

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
