<?php

namespace App\Http\Controllers;

use App\Services\CurrencyRepositoryInterface;
use App\Services\GetMostChangedCurrencyCommandHandler;
use App\Services\CurrencyPresenter;

class ApiCurrencyController extends Controller
{
    private $currency_repo;
    
    public function __construct(CurrencyRepositoryInterface $currency_repo) {
        $this->currency_repo = $currency_repo;
    }
    public function getCurrencies() {
        $prepared_currencies = [];
        foreach ($this->currency_repo->findAll() as $currency) {
            $prepared_currencies[] = CurrencyPresenter::present($currency);
        }
        return response()->json($prepared_currencies);
    }
    public function getUnstableCurrency() {
        $unstable_currency_handler = app(GetMostChangedCurrencyCommandHandler::class);
        $prepared_currency = CurrencyPresenter::present($unstable_currency_handler->handle());
        return response()->json($prepared_currency);
    }
}
