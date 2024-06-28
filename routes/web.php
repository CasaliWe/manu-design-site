<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\PageController;
use App\Http\Controllers\FrontEnd\HelpersController;

// páginas públicas
Route::group([], function () {
    // Exibe página inicial
    Route::get('/', [PageController::class, 'showHome'])->name('home');

    // Exibe página sobre
    Route::get('/sobre', [PageController::class, 'showSobre'])->name('sobre');
});


// helpers
Route::group([], function () {
    // Envio de e-mail
    Route::post('/enviar-email', [HelpersController::class, 'enviarEmail'])->name('enviar-email');
});