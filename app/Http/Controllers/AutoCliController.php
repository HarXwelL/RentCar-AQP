<?php

namespace App\Http\Controllers;

use App\Models\AutoCli;
use Illuminate\Http\Request;

class AutoCliController extends Controller
{
    public function index(Request $request)
    {
        $price = $request->get('price');
        $capacity = $request->get('capacity');

        $autos = AutoCli::orderby('id','DESC')
            ->price($price)
            ->capacity($capacity)
            ->paginate(15);

        return view('clientes.autos', compact('autos'));
            
    }
}
