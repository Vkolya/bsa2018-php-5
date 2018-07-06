<?php

namespace App\Services;

use App\Services\Currency;

class CurrencyGenerator
{
    public static function generate(): array
    {
        return [
            new Currency(
                1,
                'Bitcoin',
                6540.99,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/1.png',
                -2.16
            ),
            new Currency(
                2,
                'Ethereum',
                459.13,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/1027.png',
                -3.68
            ),
            new Currency(
                3,
                'Litecoin',
                81.49,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/2.png',
                -3.91
            ),
            new Currency(
                4,
                'EOS',
                8.34,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/1765.png',
                -3.45
            ),
            new Currency(
                5,
                'Dash',
                236.4,
                'https://s2.coinmarketcap.com/static/img/coins/16x16/131.png',
                -4.59
            ),
        ];
    }
}