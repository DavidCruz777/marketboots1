@extends('adminlte::page')

@section('title', 'Crear Alerta')

@section('content_header')
    <h1>Crear Nuevo Alerta</h1>
@stop

@section('content')
   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Alerta</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       
        <main class="mt-3">
            <form action="{{ route('alertas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="COD_CAMPANA" class="form-label">CODIGO CAMPAÑA</label>
                    <input type="text" class="form-control" id="COD_CAMPANA" name="COD_CAMPANA">
                </div>
                <div class="mb-3">
                    <label for="TIP_ALERTA" class="form-label">TIPO ALERTA</label>
                    <input type="text" class="form-control" id="TIP_ALERTA" name="TIP_ALERTA">
                </div>
                <div class="mb-3">
                    <label for="SMS_ALERTA" class="form-label">SMS ALERTA</label>
                    <input type="text" class="form-control" id="SMS_ALERTA" name="SMS_ALERTA">
                </div>
                <div class="mb-3">
                    <label for="EST_ALERTA" class="form-label">ESTADO ALERTA</label>
                    <input type="text" class="form-control" id="EST_ALERTA" name="EST_ALERTA">
                </div>
                <div class="mb-3">
                    <label for="PRI_ALERTA" class="form-label">PRIORIDAD ALERTA</label>
                    <input type="text" class="form-control" id="PRI_ALERTA" name="PRI_ALERTA">
                </div>
                
                <button type="submit" class="btn btn-primary">Crear alertas</button>
                <a href="{{ route('alertas.index') }}" class="btn btn-secondary">Cancelar</a>
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