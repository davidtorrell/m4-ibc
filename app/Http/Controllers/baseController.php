<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class baseController extends Controller
{
    private function get_api()
    {
        $r = array();

        $resposta = Http::get('https://restcountries.eu/rest/v2/regionalbloc/eu');
        $r = $resposta->json();

        return $r;
    }

    public function base()
    {
        $paisos = array();
        $paisos=$this->get_api();

        return response()->view('base', compact('paisos'))->header('Content-Type', 'text/xml');
    }

    public function estil()
    {
        $paisos = array();
        $paisos = $this->get_api();

        return response()->view('estil', compact('paisos'))->header('Content-Type', 'text/xml');
    }

    public function esquema()
    {
        $paisos = array();
        $paisos = $this->get_api();

        return response()->view('esquema', compact('paisos'))->header('Content-Type', 'text/xml');
    }

    public function if()
    {
        $paisos = array();
        $paisos = $this->get_api();

        return response()->view('if', compact('paisos'))->header('Content-Type', 'text/xml');
    }

    public function javascript()
    {
        return view('javascript');
    }
}
