@extends('adminlte::page')

@section('title', 'Crear Manager')

@section('content_header')
    <h1>Crear Nuevo Manager</h1>
@stop

@section('content')
   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Manager</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       
        <main class="mt-3">
            <form action="{{ route('managers.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="NOM_MANAGER" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" id="NOM_MANAGER" name="NOM_MANAGER">
                </div>
                <div class="mb-3">
                    <label for="TEL_MANAGER" class="form-label">TELEFONO</label>
                    <input type="text" class="form-control" id="TEL_MANAGER" name="TEL_MANAGER">
                </div>
                <div class="mb-3">
                    <label for="COR_MANAGER" class="form-label">CORREO</label>
                    <input type="text" class="form-control" id="COR_MANAGER" name="COR_MANAGER">
                </div>
                
                <button type="submit" class="btn btn-primary">Crear Manager</button>
                <a href="{{ route('managers.index') }}" class="btn btn-secondary">Cancelar</a>
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