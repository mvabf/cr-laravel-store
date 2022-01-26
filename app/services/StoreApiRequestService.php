<?php

namespace App\Services;

use GuzzleHttp\Client;

class StoreApiRequestService
{
    private $results = array();

    public function getProductsData()
    {
        $client = new Client();

        $url = "https://fakestoreapi.com/products/";

        $response = $client->request("GET", $url);

        $this->results = json_decode($response->getBody());

        return $this->results;
    }
}
