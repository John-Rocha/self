<?php

namespace App\Http\Controllers;

use App\Http\Requests\JogoRequest;
use App\Jogo;
use App\TeamBalancerMinMax;
use App\Player;
use Illuminate\Http\Request;

class JogoController extends Controller
{

    public function index()
    {
        return view('form');
    }

    public function store(JogoRequest $request)
    {


        //cria um objeto $experiencia dos valores do array vindo do form
        /*
        $experiencia = array_values($request->except('_token'));
        dd($experiencia);
        $total_times = 2;
        $times = [];
        sort($experiencia);

        foreach (range(1, $total_times) as $time) {
            $times[$time][] = array_pop($experiencia);
            $times[$time][] = array_shift($experiencia);
        }

        dd($times);

        return view('form', [
            'times' => $times
        ]);
        */

        $balancer = new TeamBalancerMinMax();

        foreach($request->except('_token') as $id => $experience) {
            $balancer->addPlayer(new Player(++$id, $experience));
        }

        $teams = $balancer->balance();

        /* if (isset($teams)) {
            return view('form', ['teams' => $teams]);
        } else {
            return redirect()->back();
        } */

        return view('show', ['teams' => $teams]);

    }
}
