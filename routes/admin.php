<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminPageController;


Route::group([], function () {
    // Exibe página dashboard
    Route::get('/', [AdminPageController::class, 'showDashboard'])->name('admin.dashboard');
});