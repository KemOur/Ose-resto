<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reservation;

class ApiController extends Controller
{
    //
    public function infos()
    {
        return Config::get('reservation');
    }

    public function store(Request $request)
    {
        $params = [
            'date' => $request->get('date'),
            'heure' => $request->get('heure'),
            'emails' => $request->get('emails'),
            'api_token' => $request->get('api_token',50),
            'subject' => "Réservation confirmé 🥳"
        ];

        DB::table('reservations')->insert([
            'date' => $params['date'],
            'heure' => $params['heure'],
            'emails' => $params['emails'],
            'api_token' => $params['api_token'],
        ]);

        Mail::to(Config::get('reservation.email'))->send(new Reservation($params));
        return response()->json('reservation confirmé depuis l api!');
    }


}
