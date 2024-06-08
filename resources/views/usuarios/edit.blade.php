@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
    <div class="container">
        <main class="mt-3">
            <form action="{{ route('usuarios.update', ['usuario' => $usuarios[0]['COD_USUARIO']]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="COD_USUARIO" class="form-label">CODIGO USUARIO</label>
                    <input type="text" class="form-control" id="COD_USUARIO" name="COD_USUARIO"
                           value="{{ $usuarios[0]['COD_USUARIO'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="NOM_USUARIO" class="form-label">NOMBRE USUARIO</label>
                    <input type="text" class="form-control" id="NOM_USUARIO" name="NOM_USUARIO"
                           value="{{ $usuarios[0]['NOM_USUARIO'] }}">
                </div>
                 <div class="mb-3">
                    <label for="COR_USUARIO" class="form-label">CORREO USUARIO</label>
                    <input type="text" class="form-control" id="COR_USUARIO" name="COR_USUARIO"
                           value="{{ $usuarios[0]['COR_USUARIO'] }}">
                </div>
                <div class="mb-3">
                    <label for="CONTRA_USUARIO" class="form-label">CONTRASEÑA USUARIO</label>
                    <input type="text" class="form-control" id="CONTRA_USUARIO" name="CONTRA_USUARIO"
                           value="{{ $usuarios[0]['CONTRA_USUARIO'] }}">
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </main>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
