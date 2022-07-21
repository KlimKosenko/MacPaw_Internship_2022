<?php

namespace App;

use Illuminate\Support\Facades\Http;

class NasaService
{
    public function callNasaApi(){
        $startDate= date('Y-m-d',strtotime("-3 days"));
        $endDate = date('Y-m-d');
        $response = Http::get('https://api.nasa.gov/neo/rest/v1/feed?start_date='.$startDate.'&end_date='.$endDate.'&api_key='.config('services.api_nasa.token'));
        return $response->json();
    }
}
