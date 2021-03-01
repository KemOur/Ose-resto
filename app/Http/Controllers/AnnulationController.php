<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnulationFormRequest;
use App\Mail\Annulation;
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

    public function token ()
    {

    }

}

