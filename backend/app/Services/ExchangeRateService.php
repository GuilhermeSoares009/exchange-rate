<?php

namespace App\Services;

use GuzzleHttp\Client;

class ExchangeRateService
{

    protected $client;
    protected $apiUrl = 'Url';

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getCurrentExchangeRate($currency) {
        $response = $this->client->get($this->apiUrl. 'USD');
        $data = json_decode($response->getBody(),true);

        return $data['rates'][$currency] ?? null;
    }
    
    public function getHistoricalExchangeRate($currency,$date){
        $apiUrl = "url_api";
        $response = $this->client->get($apiUrl);
        $data = json_decode($response->getBody(),true);

        return $data['rates'][$currency] ?? null;
    }
}
