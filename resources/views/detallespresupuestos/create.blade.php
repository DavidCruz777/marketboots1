@extends('adminlte::page')

@section('title', 'Crear Recurso')

@section('content_header')
    <h1>Crear Nuevo Detalle Presupuesto</h1>
@stop

@section('content')
   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Detalle Presupuesto</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       
        <main class="mt-3">
            <form action="{{ route('detallespresupuestos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="VAL_SALIDA" class="form-label">VALOR SALIDA</label>
                    <input type="text" class="form-control" id="VAL_SALIDA" name="VAL_SALIDA">
                </div>
                <div class="mb-3">
                    <label for="FEC_SALIDA" class="form-label">FECHA SALIDA</label>
                    <input type="text" class="form-control" id="FEC_SALIDA" name="FEC_SALIDA">
                </div>
                <div class="mb-3">
                    <label for="DES_SALIDA" class="form-label">DESCRIPCION SALIDA</label>
                    <input type="text" class="form-control" id="DES_SALIDA" name="DES_SALIDA">
                </div>
                
                <button type="submit" class="btn btn-primary">Crear Detalle Presupuesto</button>
                <a href="{{ route('detallespresupuestos.index') }}" class="btn btn-secondary">Cancelar</a>
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