<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ChuckNorisAPI
{
    const URL_BASE = "https://api.chucknorris.io/jokes/random";

    protected $client;


    public function __construct() {
        $this->client = new Client();
    }

    public function getRandom() {

        $req = $this->client->get(self::URL_BASE);
        $res = $req->getBody();
        return json_decode($res, true);
    }

}
