<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class baseController extends Controller
{
    public function index()
    {
        $retorn = array();

        $resposta = Http::get('https://restcountries.eu/rest/v2/regionalbloc/eu');

        $retorn = $resposta->json();

        // dd($retorn);

        return response()->view('xml', compact('retorn'))->header('Content-Type', 'text/xml');
    }
}
