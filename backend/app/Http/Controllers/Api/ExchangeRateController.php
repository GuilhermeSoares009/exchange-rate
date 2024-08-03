<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{
    public function getRate($currency) {
        
        $client = new Client();
        $apiKey = env('EXTERNAL_API_KEY');
        $url = "https://api.exemplo.com/latest?api_key={$apiKey}&symbols={$currency}";

        try {
            $response = $client->get($url);
            $data = json_decode($response->getBody(),true);

            if (isset($data['rates'][$currency])) {
                $rate = $data['rates'][$currency];
                return response()->json(['currency'=>$currency,'rate'=>$rate]);
            }else{
                return response()->json(['error' => 'Rate not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch excgange rate',
            'message' => $e->getMessage()]);
        }

    }
}
