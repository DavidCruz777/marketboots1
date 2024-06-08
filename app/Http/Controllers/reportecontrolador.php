<?php 

namespace App\Http\Controllers;


use App\Models\reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class reportecontrolador extends Controller
{
    public function index()
    {
    
       $response = Http::get('http://127.0.0.1:3000/reporte');
        $reportes = $response->json();
        return view('reportes.index', compact('reportes'));

  }
  public function create()
  {
      return view('reportes.create');
  }

  public function store(Request $request)
  {
      $response = Http::post('http://localhost:3000/INS_REPORTE', [
        'COD_DET_PRESUPUESTO' => $request->COD_DET_PRESUPUESTO,
        'NOM_REPORTE' => $request->NOM_REPORTE,
        'TIP_REPORTE' => $request->TIP_REPORTE,
        'FEC_REPORTE' => $request->FEC_REPORTE,
        'COD_REP_GENERADO' => $request->COD_REP_GENERADO,
          
            
        ]);
        return redirect()->route('reportes.index');
  }

  public function destroy($COD_REPORTE)
    {
        $response = Http::delete("http://localhost:3000/reportes/delete/{$COD_REPORTE}");
        return redirect()->route('reportes.index');
    }
    public function edit($COD_REPORTE)
    {
        $response = Http::get("http://localhost:3000/reporte/{$COD_REPORTE}");
        $reportes = $response->json();
        return view('reportes.edit', compact('reportes'));

    }

    public function update(Request $request)
    {
        $response = Http::put("http://localhost:3000/reporte/{$request->COD_REPORTE}", [
            'COD_DET_PRESUPUESTO' => $request->COD_DET_PRESUPUESTO,
            'NOM_REPORTE' => $request->NOM_REPORTE,
            'TIP_REPORTE' => $request->TIP_REPORTE,
            'FEC_REPORTE' => $request->FEC_REPORTE,
            'COD_REP_GENERADO' => $request->COD_REP_GENERADO,
        ]);
    
        return redirect()->route('reportes.index');
    }
    

}
