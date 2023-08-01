<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomingLetterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/agenda', [IncomingLetterController::class, 'index'])->name('agenda');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});
Route::prefix('transaction')->as('transaction.')->group(function () {
    Route::resource('incoming', \App\Http\Controllers\IncomingLetterController::class);
    Route::resource('outgoing', \App\Http\Controllers\OutgoingLetterController::class);
    Route::resource('{letter}/disposition', \App\Http\Controllers\DispositionController::class)->except(['show']);
});

require __DIR__.'/auth.php';
