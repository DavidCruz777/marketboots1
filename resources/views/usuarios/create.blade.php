@extends('adminlte::page')

@section('title', 'Crear usuario')

@section('content_header')
    <h1>Crear Nuevo usuario</h1>
@stop

@section('content')
   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo usuario</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       
        <main class="mt-3">
            <form action="{{ route('usuarios.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="NOM_USUARIO" class="form-label">NOMBRE</label>
                    <input type="text" class="form-control" id="NOM_USUARIO" name="NOM_USUARIO">
                </div>
                <div class="mb-3">
                    <label for="COR_USUARIO" class="form-label">CORREO</label>
                    <input type="text" class="form-control" id="COR_USUARIO" name="COR_USUARIO">
                </div>
                <div class="mb-3">
                    <label for="CONTRA_USUARIO" class="form-label">CONTRASEÑA</label>
                    <input type="text" class="form-control" id="CONTRA_USUARIO" name="CONTRA_USUARIO">
                </div>
                
                <button type="submit" class="btn btn-primary">Crear usuario</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
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