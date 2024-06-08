<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\personacontrolador;
use App\Http\Controllers\recursocontrolador;
use App\Http\Controllers\presupuestocontrolador;
use App\Http\Controllers\agendacontrolador;
use App\Http\Controllers\alertacontrolador;
use App\Http\Controllers\reportecontrolador;
use App\Http\Controllers\usuariocontrolador;
use App\Http\Controllers\clientecontrolador;
use App\Http\Controllers\managercontrolador;
use App\Http\Controllers\detallepresupuestocontrolador;
use App\Http\Controllers\campanacontrolador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('dash');
})->middleware(['auth', 'verified'])->name('dash');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');
require __DIR__.'/auth.php';
/*
Route::get('dash/modpersona',function(){
    return view('modpersona.persona');
});

Route::get('dash/modrecurso',function(){
    return view('modrecurso.recurso');
});

Route::get('dash/modpresupuesto',function(){
    return view('modpresupuesto.presupuesto');
});

Route::get('dash/modagenda',function(){
    return view('modagenda.agenda');
});

Route::get('dash/modalerta',function(){
    return view('modalerta.alerta');
});

Route::get('dash/modreporte',function(){
    return view('modreporte.reporte');
});

/*
PANEL PRINCIPAL
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/


Route::resource('recursos', recursocontrolador::class);
Route::resource('personas', personacontrolador::class);
Route::resource('presupuestos', presupuestocontrolador::class);
Route::resource('usuarios', usuariocontrolador::class);
Route::resource('clientes', clientecontrolador::class);
Route::resource('managers', managercontrolador::class);
Route::resource('detallespresupuestos', detallepresupuestocontrolador::class);
Route::resource('campanas', campanacontrolador::class);
Route::resource('alertas', alertacontrolador::class);
Route::resource('reportes', reportecontrolador::class);


