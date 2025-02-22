@extends('adminlte::page')

@section('title', 'Crear Recurso')

@section('content_header')
    <h1>Crear Nuevo Recursos</h1>
@stop

@section('content')
   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Recursos</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       
        <main class="mt-3">
            <form action="{{ route('recursos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="NOM_RECURSO" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" id="NOM_RECURSO" name="NOM_RECURSO">
                </div>
                <div class="mb-3">
                    <label for="TIP_RECURSO" class="form-label">TIPO DE RECURSOS</label>
                    <input type="text" class="form-control" id="TIP_RECURSO" name="TIP_RECURSO">
                </div>
                <div class="mb-3">
                    <label for="DESC_RECURSO" class="form-label">DESCRIPCION</label>
                    <input type="text" class="form-control" id="DESC_RECURSO" name="DESC_RECURSO">
                </div>
                
                <button type="submit" class="btn btn-primary">Crear Recurso</button>
                <a href="{{ route('recursos.index') }}" class="btn btn-secondary">Cancelar</a>
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