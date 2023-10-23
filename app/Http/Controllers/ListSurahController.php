<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ListSurahController extends Controller
{
    public function getSurah(){
        $url = 'http://api.alquran.cloud/v1/surah';

        $client = new Client();
        $response = $client->request('GET', $url, [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

        $surahData = json_decode($response->getBody(), true);

        return view('surah', ['surahData' => $surahData]);
    }

    public function getSurahQuranUthmani($surahNumber){

        $url = "http://api.alquran.cloud/v1/surah/$surahNumber/quran-uthmani";

        $client = new Client();
        $response = $client->request('GET', $url, [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

        $surahQuranData = json_decode($response->getBody(), true);

        return view('surah_quran', ['surahQuranData' => $surahQuranData]);
    }
}
