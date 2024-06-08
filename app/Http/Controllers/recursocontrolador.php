<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class recursocontrolador extends Controller
{
    public function index()
    {
         $response = Http::get('http://127.0.0.1:3000/recursos');
        $recursos = $response->json();
        return view('recursos.index', compact('recursos'));
    }

    public function create()
    {
        return view('recursos.create');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/INS_RECURSO', [
            'NOM_RECURSO' => $request->NOM_RECURSO,
            'TIP_RECURSO' => $request->TIP_RECURSO,
            'DESC_RECURSO' => $request->DESC_RECURSO,
            
              
          ]);
          return redirect()->route('recursos.index');
    }

    public function destroy($COD_RECURSO)
    {
        $response = Http::delete("http://localhost:3000/recursos/delete/{$COD_RECURSO}");
        return redirect()->route('recursos.index');
    }
    public function edit($COD_RECURSO)
    {
        $response = Http::get("http://localhost:3000/recursos/{$COD_RECURSO}");
        $recursos = $response->json();
        return view('recursos.edit', compact('recursos'));

    }

    public function update(Request $request)
    {
        $response = Http::put("http://localhost:3000/recursos/{$request->COD_RECURSO}", [
            'NOM_RECURSO' => $request->NOM_RECURSO,
            'TIP_RECURSO' => $request->TIP_RECURSO,
            'DESC_RECURSO' => $request->DESC_RECURSO,
            
        ]);
    
        return redirect()->route('recursos.index');
    }
    
    }
