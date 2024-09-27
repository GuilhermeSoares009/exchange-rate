<?php

namespace App\Services;

use Carbon\Carbon;
use GuzzleHttp\Client;

class ExchangeRateService
{

    protected $client;
    protected $apiUrl = 'https://openexchangerates.org/api/';

    public function __construct()
    {
        $this->client = new Client([
            'verify' => false,
        ]);
    }

    public function getCurrentExchangeRate()
    {
        $url = $this->apiUrl . 'latest.json?app_id=' . env('EXTERNAL_API_KEY');
        $response = $this->client->get($url);
        $data = json_decode($response->getBody(), true);

        return $data;
    }

    public function getHistoricalExchangeRate()
    {
        $date = Carbon::now()->toDateString();
        $url = $this->apiUrl . "historical/{$date}.json?app_id=" . env('EXTERNAL_API_KEY');
        $response = $this->client->get($url);
        $data = json_decode($response->getBody(), true);

        return $data;
    }
}
