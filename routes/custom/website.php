<?php

use App\Http\Controllers\Website\SalesDataController;
use Illuminate\Support\Facades\Route;




Route::group([
    'as' => 'website.',
], function () {
    Route::apiResource('sales-data', SalesDataController::class)->except(['show']);
});
