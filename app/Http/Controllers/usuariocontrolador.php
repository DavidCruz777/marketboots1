<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class usuariocontrolador extends Controller
{
    public function index()
    {
    
       $response = Http::get('http://127.0.0.1:3000/usuario');
        $usuarios = $response->json();
        return view('usuarios.index', compact('usuarios'));

  }
  public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/INS_USUARIO', [
          'NOM_USUARIO' => $request->NOM_USUARIO,
          'COR_USUARIO' => $request->COR_USUARIO,
          'CONTRA_USUARIO' => $request->CONTRA_USUARIO,
          
            
        ]);
        return redirect()->route('usuarios.index');
    }
    public function destroy($COD_USUARIO)
    {
        $response = Http::delete("http://localhost:3000/usuario/{$COD_USUARIO}");
        return redirect()->route('usuarios.index');
    }

    public function edit($COD_USUARIO)
    {
        $response = Http::get("http://localhost:3000/usuario/{$COD_USUARIO}");
        $usuarios = $response->json();
        return view('usuarios.edit', compact('usuarios'));
    }

    public function update(Request $request)
    {
        $response = Http::put("http://localhost:3000/usuario/{$request->COD_USUARIO}", [
            'NOM_USUARIO' => $request->NOM_USUARIO,
            'COR_USUARIO' => $request->COR_USUARIO,
            'CONTRA_USUARIO' => $request->CONTRA_USUARIO,
        ]);
        return redirect()->route('usuarios.index');
    
    }

}
