@extends('adminlte::page')

@section('title', 'Editar Manager')

@section('content_header')
    <h1>Editar manager</h1>
@stop

@section('content')
    <div class="container">
        <main class="mt-3">
            <form action="{{ route('managers.update', ['manager' => $managers[0]['COD_MANAGER']]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="COD_MANAGER" class="form-label">CODIGO MANAGER</label>
                    <input type="text" class="form-control" id="COD_MANAGER" name="COD_MANAGER"
                           value="{{ $managers[0]['COD_MANAGER'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="NOM_MANAGER" class="form-label">NOMBRE MANAGER</label>
                    <input type="text" class="form-control" id="NOM_MANAGER" name="NOM_MANAGER"
                           value="{{ $managers[0]['NOM_MANAGER'] }}">
                </div>
                 <div class="mb-3">
                    <label for="TEL_MANAGER" class="form-label">TELEFONO MANAGER </label>
                    <input type="text" class="form-control" id="TEL_MANAGER" name="TEL_MANAGER"
                           value="{{ $managers[0]['TEL_MANAGER'] }}">
                </div>
                <div class="mb-3">
                    <label for="COR_MANAGER" class="form-label">CORREO MANAGER</label>
                    <input type="text" class="form-control" id="COR_MANAGER" name="COR_MANAGER"
                           value="{{ $managers[0]['COR_MANAGER'] }}">
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('managers.index') }}" class="btn btn-secondary">Cancelar</a>
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
