<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class EarthquakeDataApiService {
    protected $url;

    protected function __construct(){
        $this->url = 'https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json';
    }

    public function getData(){
        $response = Http::get($this->url);

        if ($response->successful()) {
            return $response->json(); // Return data dalam format array
        }

        return [
            'error' => 'Failed to retrieve data',
            'status_code' => $response->status(),
            'data' => $response->data()
        ];
    }

}