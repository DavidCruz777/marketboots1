<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class agendacontrolador extends Controller
{
    public function index()
    {

        
        return view('agenda.index',compact('agenda')); 

    }

}

