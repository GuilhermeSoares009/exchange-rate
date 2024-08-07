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

    public function showCurrentRate() {
        $rate = $this->exchangeRate->getCurrentExchangeRate();
        return response()->json(['rate' => $rate]);
    }

    public function showHistoricalRate()
    {
        $rate = $this->exchangeRate->getHistoricalExchangeRate();

        return response()->json(['rate' => $rate]);
    }

}
