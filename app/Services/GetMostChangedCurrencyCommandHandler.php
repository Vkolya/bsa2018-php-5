<?php

namespace App\Services;

class GetMostChangedCurrencyCommandHandler
{
    private $currency_repo;
    
    public function __construct(CurrencyRepositoryInterface $currency_repo) {
        $this->currency_repo = $currency_repo;
    }
    public function handle(): Currency
    {
        $currencies = $this->currency_repo->findAll();
        usort($currencies, function($currency_1,$currency_2)  {
            return (float)$currency_1->getDailyChangePercent() < (float)$currency_2->getDailyChangePercent();
        });
            
       return $currencies[0];
    }
}