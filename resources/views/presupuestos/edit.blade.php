@extends('adminlte::page')

@section('title', 'Editar presupuesto')

@section('content_header')
    <h1>Editar presupuesto</h1>
@stop

@section('content')
    <div class="container">
        <main class="mt-3">
            <form action="{{ route('presupuestos.update', ['presupuesto' => $presupuestos[0]['COD_PRESUPUESTO']]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="COD_PRESUPUESTO" class="form-label">CODIGO PRESUPUESTO</label>
                    <input type="text" class="form-control" id="COD_PRESUPUESTO" name="COD_PRESUPUESTO"
                           value="{{ $presupuestos[0]['COD_PRESUPUESTO'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="COD_RECURSO" class="form-label">CODIGO RECURSOS</label>
                    <input type="text" class="form-control" id="COD_RECURSO" name="COD_RECURSO"
                           value="{{ $presupuestos[0]['COD_RECURSO'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="APLICADO" class="form-label">APLICADO</label>
                    <input type="text" class="form-control" id="APLICADO" name="APLICADO"
                           value="{{ $presupuestos[0]['APLICADO'] }}" >
                </div>

                <div class="mb-3">
                    <label for="NOM_PRESUPUESTO" class="form-label">NOMBRE PRESUPUESTO</label>
                    <input type="text" class="form-control" id="NOM_PRESUPUESTO" name="NOM_PRESUPUESTO"
                           value="{{ $presupuestos[0]['NOM_PRESUPUESTO'] }}">
                </div>

                 <div class="mb-3">
                    <label for="VAL_INICIAL" class="form-label">VALOR INICIAL</label>
                    <input type="text" class="form-control" id="VAL_INICIAL" name="VAL_INICIAL"
                           value="{{ $presupuestos[0]['VAL_INICIAL'] }}">
                </div>

                <div class="mb-3">
                    <label for="FEC_INICIAL" class="form-label">FECHA INICIO</label>
                    <input type="text" class="form-control" id="FEC_INICIAL" name="FEC_INICIAL"
                           value="{{ $presupuestos[0]['FEC_INICIAL'] }}"> 
                </div>

                <div class="mb-3">
                    <label for="FEC_FINAL" class="form-label">FECHA FINAL</label>
                    <input type="text" class="form-control" id="FEC_FINAL" name="FEC_FINAL"
                           value="{{ $presupuestos[0]['FEC_FINAL'] }}">
                </div>

                <div class="mb-3">
                    <label for="DES_PRESUPUESTO" class="form-label">DESCRIPCION</label>
                    <input type="text" class="form-control" id="DES_PRESUPUESTO" name="DES_PRESUPUESTO"
                           value="{{ $presupuestos[0]['DES_PRESUPUESTO'] }}">
                </div>

                <div class="mb-3">
                    <label for="COD_MANAGER" class="form-label">CODIGO MANAGER</label>
                    <input type="text" class="form-control" id="COD_MANAGER" name="COD_MANAGER"
                           value="{{ $presupuestos[0]['COD_MANAGER'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="COD_DET_PRESUPUESTO" class="form-label">CODIGO DETALLE PRESUPUESTO</label>
                    <input type="text" class="form-control" id="COD_DET_PRESUPUESTO" name="COD_DET_PRESUPUESTO"
                           value="{{ $presupuestos[0]['COD_DET_PRESUPUESTO'] }}" readonly>
                </div>
            
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('presupuestos.index') }}" class="btn btn-secondary">Cancelar</a>
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
