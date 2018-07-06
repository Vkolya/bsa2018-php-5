<?php

namespace App\Services;

class GetPopularCurrenciesCommandHandler
{
    const POPULAR_COUNT = 3;
    
    private $currency_repo;
    
    public function __construct(CurrencyRepositoryInterface $currency_repo) {
        $this->currency_repo = $currency_repo;
    }
    public function handle(int $count = self::POPULAR_COUNT): array
    {
        $currencies = $this->currency_repo->findAll();
        
        usort($currencies, function($currency_1,$currency_2)  {
            return $currency_1->getPrice() < $currency_2->getPrice();
        });
            
        return array_slice($currencies, 0, $count);
     
    }
}