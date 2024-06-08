<?php

namespace App\Http\Controllers;


use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class personacontrolador extends Controller 
{
    public function index()       
    {
    
        
    $response = Http::get('http://127.0.0.1:3000/personas');
        $personas = $response->json();
        return view('personas.index', compact('personas'));

    }

}
