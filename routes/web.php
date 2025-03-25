<?php

use Illuminate\Support\Facades\Route;
use Packages\Http\Controllers\PackagesController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('packages', PackagesController::class)->names('packages');
});
