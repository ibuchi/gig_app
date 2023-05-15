<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\Gigs;
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
});

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    
    Route::get('/gigs/new-gig', [App\Http\Controllers\GigsController::class, 'create'])->name('create');
    Route::post('/gigs/new-gig', [App\Http\Controllers\GigsController::class, 'store'])->name('store');
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    
    Route::get('/gigs/{id}/edit', [App\Http\Controllers\GigsController::class, 'edit'])->name('edit');
    Route::put('/gigs/{id}/edit', [App\Http\Controllers\GigsController::class, 'update'])->name('update');
    
    
    Route::get('/delete/{id}', [App\Http\Controllers\GigsController::class, 'destroy'])->name('destroy');
});


require __DIR__.'/auth.php';
