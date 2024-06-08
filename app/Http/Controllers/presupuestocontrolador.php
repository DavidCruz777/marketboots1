<?php 

namespace App\Http\Controllers;


use App\Models\presupuesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class presupuestocontrolador extends Controller
{
    public function index()
    {
    
       $response = Http::get('http://127.0.0.1:3000/presupuesto');
        $presupuestos = $response->json();
        return view('presupuestos.index', compact('presupuestos'));

  }
  public function create()
    {
        return view('presupuestos.create');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/INS_PRESUPUESTO', [
          'COD_RECURSO' => $request->COD_RECURSO,
          'APLICADO' => $request->APLICADO,
          'NOM_PRESUPUESTO' => $request->NOM_PRESUPUESTO,
          'VAL_INICIAL' => $request->VAL_INICIAL,
          'FEC_INICIAL' => $request->FEC_INICIAl,
          'FEC_FINAL' => $request->FEC_FINAL,
          'DES_PRESUPUESTO' => $request->DES_PRESUPUESTO,
          'COD_MANAGER' => $request->COD_MANAGER,
          'COD_DET_PRESUPUESTO' => $request->COD_DET_PRESUPUESTO,
          
            
        ]);
        return redirect()->route('presupuestos.index');
    }
    public function destroy($COD_PRESUPUESTO)
    {
          $response = Http::delete("http://localhost:3000/presupuesto/delete/{$COD_PRESUPUESTO}");
          return redirect()->route('presupuestos.index');

    }
    public function edit($COD_PRESUPUESTO)
      {
          $response = Http::get("http://localhost:3000/presupuesto/{$COD_PRESUPUESTO}");
          $presupuestos = $response->json();
          return view('presupuestos.edit', compact('presupuestos'));
  
      }
  
      public function update(Request $request)
  {
      $response = Http::put("http://localhost:3000/presupuesto/{$request->COD_PRESUPUESTO}", [
        'COD_RECURSO' => $request->COD_RECURSO,
        'APLICADO' => $request->APLICADO,
        'NOM_PRESUPUESTO' => $request->NOM_PRESUPUESTO,
        'VAL_INICIAL' => $request->VAL_INICIAL,
        'FEC_INICIAL' => $request->FEC_INICIAl,
        'FEC_FINAL' => $request->FEC_FINAL,
        'DES_PRESUPUESTO' => $request->DES_PRESUPUESTO,
        'COD_MANAGER' => $request->COD_MANAGER,
        'COD_DET_PRESUPUESTO' => $request->COD_DET_PRESUPUESTO,
      ]);
  
      return redirect()->route('presupuestos.index');
  }


}
