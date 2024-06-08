@extends('adminlte::page')

@section('title', 'Crear Reporte')

@section('content_header')
    <h1>Crear Nuevo Reporte</h1>
@stop

@section('content')
   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Reporte</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       
        <main class="mt-3">
            <form action="{{ route('reportes.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="COD_DET_PRESUPUESTO" class="form-label">CODIGO DETALLE PRESUPUESTO</label>
                    <input type="text" class="form-control" id="COD_DET_PRESUPUESTO" name="COD_DET_PRESUPUESTO">
                </div>

                <div class="mb-3">
                    <label for="NOM_REPORTE" class="form-label">NOMBRE REPORTE</label>
                    <input type="text" class="form-control" id="NOM_REPORTE" name="NOM_REPORTE">
                </div>
                <div class="mb-3">
                    <label for="TIP_REPORTE" class="form-label">TIPO REPORTE</label>
                    <input type="text" class="form-control" id="TIP_REPORTE" name="TIP_REPORTE">
                </div>
                <div class="mb-3">
                    <label for="FEC_REPORTE" class="form-label">FECHA REPORTE</label>
                    <input type="text" class="form-control" id="FEC_REPORTE" name="FEC_REPORTE">
                </div>
                <div class="mb-3">
                    <label for="COD_REP_GENERADO" class="form-label">CODIGO REPEPORTE GENERADO</label>
                    <input type="text" class="form-control" id="COD_REP_GENERADO" name="COD_REP_GENERADO">
                </div>
                
                <button type="submit" class="btn btn-primary">Crear Reporte</button>
                <a href="{{ route('reportes.index') }}" class="btn btn-secondary">Cancelar</a>
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