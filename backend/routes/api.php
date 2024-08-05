<?php

use App\Http\Controllers\Api\ExchangeRateController as ApiExchangeRateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('exchange-rate')->group(function (){
    Route::get('/show-current-rate', [ApiExchangeRateController::class, 'showCurrentRate']);
    Route::get('/show-historical-rate', [ApiExchangeRateController::class, 'showHistoricalRate']);
});
