@extends('adminlte::page')

@section('title', 'Editar Detalle_de_presupuesto')

@section('content_header')
    <h1>Editar Detalle</h1>
@stop

@section('content')
    <div class="container">
        <main class="mt-3">
        <form action="{{ route('detallespresupuestos.update', ['detallespresupuesto' => $detallespresupuestos[0]['COD_DET_PRESUPUESTO']]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="COD_DET_PRESUPUESTO" class="form-label">CODIGO DETALLE</label>
                    <input type="text" class="form-control" id="COD_DET_PRESUPUESTO" name="COD_DET_PRESUPUESTO"
                           value="{{ $detallespresupuestos[0]['COD_DET_PRESUPUESTO'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="VAL_SALIDA" class="form-label">VALOR SALIDA</label>
                    <input type="text" class="form-control" id="VAL_SALIDA" name="VAL_SALIDA"
                           value="{{ $detallespresupuestos[0]['VAL_SALIDA'] }}">
                </div>
                 <div class="mb-3">
                    <label for="FEC_SALIDA" class="form-label">FECHA SALIDA</label>
                    <input type="text" class="form-control" id="FEC_SALIDA" name="FEC_SALIDA"
                           value="{{ $detallespresupuestos[0]['FEC_SALIDA'] }}">
                </div>
                <div class="mb-3">
                    <label for="DES_SALIDA" class="form-label">DESCRIPCION</label>
                    <input type="text" class="form-control" id="DES_SALIDA" name="DES_SALIDA"
                           value="{{ $detallespresupuestos[0]['DES_SALIDA'] }}">
                           

                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('detallespresupuestos.index') }}" class="btn btn-secondary">Cancelar</a>
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
