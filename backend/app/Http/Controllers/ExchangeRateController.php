<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function getExchangeRate()
    {
        $apiKey = env('EXTERNAL_API_KEY');

        $client = new Client();

        $apiUrl = "URL";

        try {
            $response = $client->get($apiUrl);

            $data = json_decode($response->getBody(), true);

            return view('weather', ['weatherData' =>  $data]);
        } catch (\Exception $e) {
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }

}
