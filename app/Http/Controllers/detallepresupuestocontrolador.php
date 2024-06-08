<?php 

namespace App\Http\Controllers;


use App\Models\detallepresupuesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class detallepresupuestocontrolador extends Controller
{
    public function index()
    {
    
       $response = Http::get('http://127.0.0.1:3000/detallepresupuesto');
        $detallespresupuestos = $response->json();
        return view('detallespresupuestos.index', compact('detallespresupuestos'));

  }
  public function create()
  {
      return view('detallespresupuestos.create');
  }

  public function store(Request $request)
  {
      $response = Http::post('http://localhost:3000/INS_DETALLE_PRESUPUESTO', [
          'VAL_SALIDA' => $request->VAL_SALIDA,
          'FEC_SALIDA' => $request->FEC_SALIDA,
          'DES_SALIDA' => $request->DES_SALIDA,
          
            
        ]);
        return redirect()->route('detallespresupuestos.index')
        ->with('message','Se ha anadido correctamente el detalle');;
  }
  public function destroy($COD_DET_PRESUPUESTO)
    {
        
        $response = Http::delete("http://localhost:3000/detallepresupuesto/delete/{$COD_DET_PRESUPUESTO}");
        return redirect()->route('detallespresupuestos.index')
        ->with('danger','Se ha eliminado correctamente el detalle');;
    }
    public function edit($COD_DET_PRESUPUESTO)
    {
        $response = Http::get("http://localhost:3000/detallepresupuesto/{$COD_DET_PRESUPUESTO}");
        $detallespresupuestos = $response->json();
        return view('detallespresupuestos.edit', compact('detallespresupuestos'));

    }

    public function update(Request $request)
    {
        $response = Http::put("http://localhost:3000/detallepresupuesto/{$request->COD_DET_PRESUPUESTO}", [
            'VAL_SALIDA' => $request->VAL_SALIDA,
            'FEC_SALIDA' => $request->FEC_SALIDA,
            'DES_SALIDA' => $request->DES_SALIDA,
        ]);
    
        return redirect()->route('detallespresupuestos.index')
        ->with('info','Se ha actualizado correctamente el detalle');;
    }

}
