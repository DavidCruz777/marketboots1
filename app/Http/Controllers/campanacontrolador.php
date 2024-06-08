<?php 

namespace App\Http\Controllers;


use App\Models\campana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class campanacontrolador extends Controller
{
    public function index()
    {
    
       $response = Http::get('http://127.0.0.1:3000/campana');
        $campanas = $response->json();
        return view('campanas.index', compact('campanas'));

  }
  public function create()
  {
      return view('campanas.create');
  }
  public function store(Request $request)
  {
      $response = Http::post('http://localhost:3000/INS_CAMPANA', [
          'COD_RECURSO' => $request->COD_RECURSO,
          'COD_PERSONA' => $request->COD_PERSONA,
          'COD_PRESUPUESTO' => $request->COD_PRESUPUESTO,
          'NOM_CAMPANA' => $request->NOM_CAMPANA,
          'FEC_INICIO' => $request->FEC_INICIO,
          'FEC_FINAL' => $request->FEC_FINAL,
          'DES_CAMPANA' => $request->DES_CAMPANA,
          'COD_MANAGER' => $request->COD_MANAGER
      ]);
      return redirect()->route('campanas.index')
      ->with('message','Se ha anadido correctamente la campana');;
  }
  public function destroy($COD_CAMPANA)
  {
      $response = Http::delete("http://localhost:3000/campana/delete/{$COD_CAMPANA}");
      return redirect()->route('campanas.index')
      ->with('danger','Se ha eliminado correctamente la campana');;
  }
  public function edit($COD_CAMPANA)
  {
      $response = Http::get("http://localhost:3000/campana/{$COD_CAMPANA}");
      $campanas = $response->json();
      return view('campanas.edit', compact('campanas'));

  }

  public function update(Request $request)
  {
      $response = Http::put("http://localhost:3000/campana/{$request->COD_CAMPANA}", [
        'COD_RECURSO ' => $request->COD_RECURSO,
        'COD_PERSONA' => $request->COD_PERSONA,
        'COD_PRESUPUESTO' => $request->COD_PRESUPUESTO,
        'NOM_CAMPANA' => $request->NOM_CAMPANA,
        'FEC_INICIO' => $request->FEC_INICIO,
        'FEC_FINAL' => $request->FEC_FINAL,
        'DES_CAMPANA' => $request->DES_CAMPANA,
        'COD_MANAGER' => $request->COD_MANAGER
      ]);
  
      return redirect()->route('campanas.index');
      
  }
  
}
