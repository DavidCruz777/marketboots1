<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class dashcontrolador extends Controller 
{
    public function index()       
    {
    

        return view('dash.index',compact('dash')); 

    }

}
