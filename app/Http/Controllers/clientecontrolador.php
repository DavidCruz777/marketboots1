<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class clientecontrolador extends Controller
{
    public function index()
    {
    
       $response = Http::get('http://127.0.0.1:3000/cliente');
        $clientes = $response->json();
        return view('clientes.index', compact('clientes'));

  }
  public function create()
  {
      return view('clientes.create');
  }
  public function store(Request $request)
  {
      $response = Http::post('http://localhost:3000/INS_CLIENTE', [
          'DNI_CLIENTE' => $request->DNI_CLIENTE,
          'RTN_CLIENTE' => $request->RTN_CLIENTE,
          'NOM_CLIENTE' => $request->NOM_CLIENTE,
          'DIR_CLIENTE' => $request-> DIR_CLIENTE,
          'TIPO_PAGO' => $request-> TIPO_PAGO,
          'FEC_INGRESO_CLIENTE' => $request->FEC_INGRESO_CLIENTE,
          
      ]);
     
      return redirect()->route('clientes.index');
      

  }
  public function destroy($COD_CLIENTE)
    {
        $response = Http::delete("http://localhost:3000/cliente/delete/{$COD_CLIENTE}");
        return redirect()->route('clientes.index');
       
    }
    public function edit($COD_CLIENTE)
    {
        $response = Http::get("http://localhost:3000/cliente/{$COD_CLIENTE}");
        $clientes = $response->json();
        return view('clientes.edit', compact('clientes'));

    }

    public function update(Request $request)
    {
        $response = Http::put("http://localhost:3000/cliente/{$request->COD_CLIENTE}", [
            'DNI_CLIENTE' => $request->DNI_CLIENTE,
            'RTN_CLIENTE' => $request->RTN_CLIENTE,
            'NOM_CLIENTE' => $request->NOM_CLIENTE,
            'DIR_CLIENTE' => $request->DIR_CLIENTE,
            'TIPO_PAGO' => $request->TIPO_PAGO,
            'FEC_INGRESO_CLIENTE' => $request->FEC_INGRESO_CLIENTE,
        ]);
    
        return redirect()->route('clientes.index');
       
    }
    
    }
