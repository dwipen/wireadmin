<?php

use Illuminate\Support\Facades\Route;
use App\Repositories\PaypalRepository;
use Illuminate\Http\Request;

Route::post('/payment/paypal/ipn', function(Request $request){
     (new PaypalRepository())->ipn($request);
})->name('api.paypal.callback');
