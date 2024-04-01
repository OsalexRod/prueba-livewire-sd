<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\PruebaVistaController;
use App\Livewire\ClienteController;
use App\Livewire\WireAlpine;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/prueba', PruebaVistaController::class);
Route::get('/cliente', ClienteController::class);
Route::get('/wirealpine', WireAlpine::class);