<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnulationRequest;
use App\Mail\Annulation;
use App\Models\Reservation;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AnnulationController extends Controller
{
    //
    public function annulation()
    {
        return view('annulation');
    }

    public function annulReservation (AnnulationRequest $request,$api_token)
    {
        $params = [
            'date' => $request->get('date'),
            'heure' => $request->get('heure'),
            'emails' => $request->get('emails'),
            'api_token' => $request->get('api_token',50),
            'subject' => "Annulation confirmé !"
        ];

        Mail::to(Config::get('reservation.email'))->send(new Annulation($params));

        DB::table('reservations')->where('api_token', $api_token )->delete();
        return redirect('/')->with('succès', 'Réservation annulée');
    }
}

