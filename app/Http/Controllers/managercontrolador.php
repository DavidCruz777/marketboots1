<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class managercontrolador extends Controller
{
    public function index()
    {
    
       $response = Http::get('http://127.0.0.1:3000/manager');
        $managers = $response->json();
        return view('managers.index', compact('managers'));

  }
  public function create()
  {
      return view('managers.create');
  }

  public function store(Request $request)
  {
      $response = Http::post('http://localhost:3000/INS_MANAGER', [
        'NOM_MANAGER' => $request->NOM_MANAGER,
        'TEL_MANAGER' => $request->TEL_MANAGER,
        'COR_MANAGER' => $request->COR_MANAGER,
        
          
      ]);
      return redirect()->route('managers.index');
  }
  public function destroy($COD_MANAGER)
  {
      $response = Http::delete("http://localhost:3000/mananer/delete/{$COD_MANAGER}");
      return redirect()->route('managers.index');
  }
  public function edit($COD_MANAGER)
    {
        $response = Http::get("http://localhost:3000/manager/{$COD_MANAGER}");
        $managers = $response->json();
        return view('managers.edit', compact('managers'));

    }

    public function update(Request $request)
{
    $response = Http::put("http://localhost:3000/manager/{$request->COD_MANAGER}", [
        'NOM_MANAGER' => $request->NOM_MANAGER,
        'TEL_MANAGER' => $request->TEL_MANAGER,
        'COR_MANAGER' => $request->COR_MANAGER,
    ]);

    return redirect()->route('managers.index');
}

}
