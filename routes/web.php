<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    Route::resource('links', LinkController::class);
    Route::resource('settings', UserController::class)->only('edit', 'update');
})->middleware(['auth'])->name('dashboard');

Route::post('/visit/{link}', [VisitController::class, 'store']);

require __DIR__.'/auth.php';

Route::get('/{user}', [UserController::class, 'show']);
