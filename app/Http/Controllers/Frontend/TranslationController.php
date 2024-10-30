<?php

namespace App\Http\Controllers\Frontend;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function detectLanguage(Request $request)
    {
        $client = new Client();

        $response = $client->request('POST', 'https://google-translate1.p.rapidapi.com/language/translate/v2/detect', [
            'multipart' => [
                [
                    'name' => 'q',
                    'contents' => 'English is hard, but detectably so'
                ]
            ],
            'headers' => [
                'Accept-Encoding' => 'application/gzip',
                'x-rapidapi-host' => 'google-translate1.p.rapidapi.com',
                'x-rapidapi-key' => env('RAPIDAPI_KEY'),
            ],
        ]);

        return response()->json(json_decode($response->getBody()->getContents(), true));
    }
}
