<?php

namespace App\Http\Controllers;

use App\Color;
use App\Match;
use App\Spieler;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	public function index () {
	    $players = Spieler::all();
	    $colors = Color::all();
	    $matches = Match::all();
	    return view('index', ['players' => $players, 'colors' => $colors, 'matches' => $matches]);
	}
}
