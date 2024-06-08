@extends('adminlte::page')

@section('title', 'Crear Campaña')

@section('content_header')
    <h1>Crear Nuevo Campaña</h1>
@stop

@section('content')
   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Campaña</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       
        <main class="mt-3">
            <form action="{{ route('campanas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="COD_RECURSO" class="form-label">CODIGO RECURSO</label>
                    <input type="text" class="form-control" id="COD_RECURSO" name="COD_RECURSO">
                </div>

               <div class="mb-3">
                    <label for="COD_PERSONA" class="form-label">CODIGO PERSONA</label>
                    <input type="text" class="form-control" id="COD_PERSONA" name="COD_PERSONA">
                </div>

                <div class="mb-3">
                    <label for="COD_PRESUPUESTO" class="form-label">CODIGO PRESUPUESTO</label>
                    <input type="text" class="form-control" id="COD_PRESUPUESTO" name="COD_PRESUPUESTO">
                </div>


                <div class="mb-3">
                    <label for="NOM_CAMPANA" class="form-label">NOMBRE CAMPAÑA</label>
                    <input type="text" class="form-control" id="NOM_CAMPANA" name="NOM_CAMPANA">
                </div>
                <div class="mb-3">
                    <label for="FEC_INICIO" class="form-label">FECHA INICIO</label>
                    <input type="text" class="form-control" id="FEC_INICIO" name="FEC_INICIO">
                </div>
                <div class="mb-3">
                    <label for="FEC_FINAL" class="form-label">FECHA FINAL</label>
                    <input type="text" class="form-control" id="FEC_FINAL" name="FEC_FINAL">
                </div>
                
                <div class="mb-3">
                    <label for="DES_CAMPANA" class="form-label">DESCRIPCION CAMPAÑA</label>
                    <input type="text" class="form-control" id="DES_CAMPANA" name="DES_CAMPANA">
                </div>

                <div class="mb-3">
                    <label for="COD_MANAGER" class="form-label">CODIGO MANAGER</label>
                    <input type="text" class="form-control" id="COD_MANAGER" name="COD_MANAGER">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Crear campañas</button>
                <a href="{{ route('campanas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </main>
    </div>
    
    <!-- Agregar enlaces a los archivos JS de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop