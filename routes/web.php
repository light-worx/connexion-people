<?php

use Illuminate\Support\Facades\Route;
use Modules\People\Http\Controllers\PeopleController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('cores', PeopleController::class)->names('core');
});
