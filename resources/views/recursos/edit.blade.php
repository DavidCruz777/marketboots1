@extends('adminlte::page')

@section('title', 'Editar recurso')

@section('content_header')
    <h1>Editar Recurso</h1>
@stop

@section('content')
    <div class="container">
        <main class="mt-3">
        <form action="{{ route('recursos.update', ['recurso' => $recursos[0]['COD_RECURSO']]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="COD_RECURSO" class="form-label">CODIGO RECURSO</label>
                    <input type="text" class="form-control" id="COD_RECURSO" name="COD_RECURSO"
                           value="{{ $recursos[0]['COD_RECURSO'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="NOM_RECURSO" class="form-label">NOMBRE RECURSO</label>
                    <input type="text" class="form-control" id="NOM_RECURSO" name="NOM_RECURSO"
                           value="{{ $recursos[0]['NOM_RECURSO'] }}">
                </div>
                 <div class="mb-3">
                    <label for="TIP_RECURSO" class="form-label">TIPO RECURSO</label>
                    <input type="text" class="form-control" id="TIP_RECURSO" name="TIP_RECURSO"
                           value="{{ $recursos[0]['TIP_RECURSO'] }}">
                </div>
                <div class="mb-3">
                    <label for="DESC_RECURSO" class="form-label">DESCRIPCION</label>
                    <input type="text" class="form-control" id="DESC_RECURSO" name="DESC_RECURSO"
                           value="{{ $recursos[0]['DESC_RECURSO'] }}">
                </div>

               

                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('recursos.index') }}" class="btn btn-secondary">Cancelar</a>
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
