@extends('adminlte::page')

@section('title', 'Editar Reporte')

@section('content_header')
    <h1>Editar Reporte</h1>
@stop

@section('content')
    <div class="container">
        <main class="mt-3">
            <form action="{{ route('reportes.update', ['reporte' => $reportes[0]['COD_REPORTE']]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="COD_REPORTE" class="form-label">CODIGO REPORTE</label>
                    <input type="text" class="form-control" id="COD_REPORTE" name="COD_REPORTE"
                           value="{{ $reportes[0]['COD_REPORTE'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="COD_DET_PRESUPUESTO" class="form-label">CODIGO DETALLE PRESUPUESTO</label>
                    <input type="text" class="form-control" id="COD_DET_PRESUPUESTO" name="COD_DET_PRESUPUESTO"
                           value="{{ $reportes[0]['COD_DET_PRESUPUESTO'] }}">
                </div>
                 <div class="mb-3">
                    <label for="NOM_REPORTE" class="form-label">NOMBRE REPORTE</label>
                    <input type="text" class="form-control" id="NOM_REPORTE" name="NOM_REPORTE"
                           value="{{ $reportes[0]['NOM_REPORTE'] }}">
                </div>
                <div class="mb-3">
                    <label for="TIP_REPORTE" class="form-label">TIPO REPORTE</label>
                    <input type="text" class="form-control" id="TIP_REPORTE" name="TIP_REPORTE"
                           value="{{ $reportes[0]['TIP_REPORTE'] }}">
                </div>
                <div class="mb-3">
                    <label for="FEC_REPORTE" class="form-label">FECHA REPORTE</label>
                    <input type="text" class="form-control" id="FEC_REPORTE" name="FEC_REPORTE"
                           value="{{ $reportes[0]['FEC_REPORTE'] }}">
                </div>
                <div class="mb-3">
                    <label for="COD_REP_GENERADO" class="form-label">CODIGO REPORTE GENERADO</label>
                    <input type="text" class="form-control" id="COD_REP_GENERADO" name="COD_REP_GENERADO"
                           value="{{ $reportes[0]['COD_REP_GENERADO'] }}">
                </div>

                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
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
