@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1>Crear Nuevo Cliente</h1>
@stop

@section('content')
   
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Cliente</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <div class="container">
       
        
        <main class="mt-3">
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="DNI_CLIENTE" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="DNI_CLIENTE" name="DNI_CLIENTE">
                </div>
                <div class="mb-3">
                    <label for="RTN_CLIENTE" class="form-label">RTN </label>
                    <input type="text" class="form-control" id="rRTN_CLIENTE" name="RTN_CLIENTE">
                </div>
                <div class="mb-3">
                    <label for="NOM_CLIENTE" class="form-label">NOMBRE </label>
                    <input type="text" class="form-control" id="NOM_CLIENTE" name="NOM_CLIENTE">
                </div>
                <div class="mb-3">
                    <label for="DIR_CLIENTE" class="form-label">DIRECCION </label>
                    <input type="text" class="form-control" id="DIR_CLIENTE" name="DIR_CLIENTE">
                </div>
                <div class="mb-3">
                    <label for="TIPO_PAGO" class="form-label">TIPO DE PAGO </label>
                    <input type="text" class="form-control" id="TIPO_PAGO" name="TIPO_PAGO">
                </div>
                <div class="mb-3">
                    <label for="FEC_INGRESO_CLIENTE" class="form-label">FECHA DE INGRESO </label>
                    <input type="date" class="form-control" id="FEC_INGRESO_CLIENTE" name="FEC_INGRESO_CLIENTE">
                </div>
                <button type="submit" class="btn btn-primary">Crear Cliente</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
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