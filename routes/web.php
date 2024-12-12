<?php

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


// Rota para listar todas as promotorias
use App\Http\Controllers\PromotoriaController;

// Rota para listar todas as promotorias
Route::get('/', [PromotoriaController::class, 'index'])->name('promotorias.index'); // Corrigido o nome da rota

