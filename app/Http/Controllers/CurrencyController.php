<?php

namespace App\Http\Controllers;

use App\Services\GetPopularCurrenciesCommandHandler;
 
class CurrencyController extends Controller
{
     
    public function getPopularCurrencies() {
        $popular_currency_handler = app(GetPopularCurrenciesCommandHandler::class);
        return view('popular_currencies',[
            'currencies' => $popular_currency_handler->handle()
        ]);
    }
}
