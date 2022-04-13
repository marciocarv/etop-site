<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\QuemController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [IndexController::class, 'home'])->name('home');

Route::get('/quemsomos', [QuemController::class, 'quem'])->name('quemsomos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
