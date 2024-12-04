<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('checkout.store');
});

Route::post('/checkout/process',[CheckoutController::class,'process']);
