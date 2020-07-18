<?php

namespace App\Http\Controllers;

use App\Http\Requests\JogoRequest;
use App\Jogo;
use Illuminate\Http\Request;

class JogoController extends Controller
{

    public function index()
    {
        return view('form');
    }

    public function store(JogoRequest $request)
    {

        $jogos = $request->except('_token');
        sort($jogos);

        return view('form', [
            'jogos' => $jogos
        ]);

    }

    public function show($id)
    {
        //
    }
}
