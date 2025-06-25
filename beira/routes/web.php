<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/historia', [SiteController::class, 'historia'])->name('historia');
Route::get('/galeria', [SiteController::class, 'galeria'])->name('galeria');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
Route::post('/contato', [SiteController::class, 'postContato'])->name('contato.enviar');
