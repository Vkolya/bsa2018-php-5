<?php

namespace App\Services;

use App\Services\CurrencyRepositoryInterface;

class GetCurrenciesCommandHandler
{
    private $currency_repo;
    
    public function __construct(CurrencyRepositoryInterface $currency_repo) {
        $this->currency_repo = $currency_repo;
    }
    
    public function handle(): array
    {
        return $this->currency_repo->findAll();
    }
}