<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('contato-form');
    }

    public function dados(Request $request)
    {
        return view('contato', $request->all());
    }

    public function create(Request $request)
    {
        $contato = new Contato();
        return view('contato', $request->all());
    }
}
