<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\PageController;


Route::group([], function () {
    // Exibe página inicial
    Route::get('/', [PageController::class, 'showHome'])->name('home');

    // Exibe página sobre
    Route::get('/sobre', [PageController::class, 'showSobre'])->name('sobre');

    // Exibe página servicos
    Route::get('/servicos', [PageController::class, 'showServicos'])->name('servicos');

    // Exibe página projetos
    Route::get('/projetos', [PageController::class, 'showProjetos'])->name('projetos');

    // Exibe página contatos
    Route::get('/contatos', [PageController::class, 'showContatos'])->name('contatos');
});