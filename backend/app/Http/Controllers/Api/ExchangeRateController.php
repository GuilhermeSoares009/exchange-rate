<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ExchangeRateService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{

    protected $exchangeRate;

    public function __construct(ExchangeRateService $exchangeRate) {
        $this->exchangeRate = $exchangeRate;
    }

    public function showCurrentRate($currency,$date) {
        $rate = $this->exchangeRate->getCurrentExchangeRate($currency, $date);
        return response()->json(['rate' => $rate]);
    }

    public function showHistoricalRate($currency,$date)
    {
        $rate = $this->exchangeRate->getHistoricalExchangeRate($currency,$date);

        return response()->json(['rate' => $rate]);
    }

}
