<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::middleware('auth')->prefix('/dashboard')->group(function () {
    Route::resource('links', LinkController::class);
    Route::resource('settings', UserController::class)->only('edit', 'update');
});

Route::post('/visit/{link}', [VisitController::class, 'store']);

require __DIR__.'/auth.php';

Route::get('/{user}', [UserController::class, 'show']);
