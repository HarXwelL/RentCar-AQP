<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlquilerCli extends Controller
{
    public function index()
    {
        $autos = autos::all();

        return view('administrador.autos')->with('autos');
    }
}
