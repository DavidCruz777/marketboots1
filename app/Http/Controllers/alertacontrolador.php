<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class alertacontrolador extends Controller
{
    public function index()
    {
    
       $response = Http::get('http://127.0.0.1:3000/alerta');
        $alertas = $response->json();
        return view('alertas.index', compact('alertas'));

  }
  public function create()
  {
      return view('alertas.create');
  }

  public function store(Request $request)
  {
      $response = Http::post('http://localhost:3000/INS_ALERTA', [
          'COD_CAMPANA' => $request->COD_CAMPANA,
          'TIP_ALERTA' => $request->TIP_ALERTA,
          'SMS_ALERTA' => $request->SMS_ALERTA,
          'EST_ALERTA' => $request->EST_ALERTA,
          'PRI_ALERTA' => $request->PRI_ALERTA,
            
        ]);
        return redirect()->route('alertas.index');
        
    }
    public function destroy($COD_ALERTA)
      {
          $response = Http::delete("http://localhost:3000/alerta/delete/{$COD_ALERTA}");
          return redirect()->route('alertas.index');
          
      }
      public function edit($COD_ALERTA)
      {
          $response = Http::get("http://localhost:3000/alerta/{$COD_ALERTA}");
          $alertas = $response->json();
          return view('alertas.edit', compact('alertas'));
  
      }
  
      public function update(Request $request)
    {
        $response = Http::put("http://localhost:3000/alertas/{$request->COD_ALERTA}", [
            'COD_CAMPANA' => $request->COD_CAMPANA,
            'TIP_ALERTA' => $request->TIP_ALERTA,
            'SMS_ALERTA' => $request->SMS_ALERTA,
            'EST_ALERTA' => $request->EST_ALERTA,
            'PRI_ALERTA' => $request->PRI_ALERTA,
        ]);
    
        return redirect()->route('alertas.index');
       
    }
  
  }
  