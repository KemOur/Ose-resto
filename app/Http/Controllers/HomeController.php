<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $reservation = [
            'name' => (Config::get('reservation.name')),
            'surname' => (Config::get('reservation.surname')),
            'description' => (Config::get('reservation.description'))
        ];
        return view('home', $reservation);
    }
}
