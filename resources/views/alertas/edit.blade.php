@extends('adminlte::page')

@section('title', 'Editar Alerta')

@section('content_header')
    <h1>Editar Alerta</h1>
@stop

@section('content')
    <div class="container">
        <main class="mt-3">
            <form action="{{ route('alertas.update', ['alerta' => $alertas[0]['COD_ALERTA']]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="COD_ALERTA" class="form-label">CODIGO ALERTA</label>
                    <input type="text" class="form-control" id="COD_ALERTA" name="COD_ALERTA"
                           value="{{ $alertas[0]['COD_ALERTA'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="COD_CAMPANA" class="form-label">CODIGO CAMPAÑA</label>
                    <input type="text" class="form-control" id="COD_CAMPANA" name="COD_CAMPANA"
                        value="{{ $alertas[0]['COD_CAMPANA'] }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="TIP_ALERTA" class="form-label">TIPO ALERTA</label>
                    <input type="text" class="form-control" id="TIP_ALERTA" name="TIP_ALERTA"
                    value="{{ $alertas[0]['TIP_ALERTA'] }}" >
                </div>
                <div class="mb-3">
                    <label for="SMS_ALERTA" class="form-label">SMS ALERTA</label>
                    <input type="text" class="form-control" id="SMS_ALERTA" name="SMS_ALERTA"
                    value="{{ $alertas[0]['SMS_ALERTA'] }}" >
                </div>
                <div class="mb-3">
                    <label for="EST_ALERTA" class="form-label">ESTADO ALERTA</label>
                    <input type="text" class="form-control" id="EST_ALERTA" name="EST_ALERTA"
                    value="{{ $alertas[0]['EST_ALERTA'] }}" >
                </div>
                <div class="mb-3">
                    <label for="PRI_ALERTA" class="form-label">PRIORIDAD ALERTA</label>
                    <input type="text" class="form-control" id="PRI_ALERTA" name="PRI_ALERTA"
                    value="{{ $alertas[0]['PRI_ALERTA'] }}" >
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('alertas.index') }}" class="btn btn-secondary">Cancelar</a>
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
