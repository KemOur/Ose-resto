<?php
namespace App\Http\Controllers;
use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reservation;
use Illuminate\Support\Facades\Config;
class ReservationController extends Controller
{
    //
    public function show()
    {
        return view('reservation');
    }


    public function send(ReservationRequest $request)
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


        return redirect('/')
            ->with('status','Nous vous confirmons votre réservation 🤗!');

    }
}
