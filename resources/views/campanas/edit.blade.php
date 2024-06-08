@extends('adminlte::page')

@section('title', 'Editar campañas')

@section('content_header')
    <h1>Editar campaña</h1>
@stop

@section('content')
    <div class="container">
        <main class="mt-3">
            <form action="{{ route('campanas.update', ['campana' => $campanas[0]['COD_CAMPANA']]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="COD_CAMPANA" class="form-label">CODIGO CAMPAÑA</label>
                    <input type="text" class="form-control" id="COD_CAMPANA" name="COD_CAMPANA"
                           value="{{ $campanas[0]['COD_CAMPANA'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="COD_RECURSO" class="form-label">CODIGO COD_RECURSO</label>
                    <input type="text" class="form-control" id="COD_RECURSO" name="COD_RECURSO"
                           value="{{ $campanas[0]['COD_RECURSO'] }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="COD_PERSONA" class="form-label">CODIGO PERSONA</label>
                    <input type="text" class="form-control" id="COD_PERSONA" name="COD_PERSONA"
                           value="{{ $campanas[0]['COD_PERSONA'] }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="COD_PRESUPUESTO" class="form-label">CODIGO PRESUPUESTO</label>
                    <input type="text" class="form-control" id="COD_PRESUPUESTO" name="COD_PRESUPUESTO"
                           value="{{ $campanas[0]['COD_CAMPANA'] }}"readonly>
                </div>
                 <div class="mb-3">
                    <label for="NOM_CAMPANA" class="form-label">NOMBRE CAMPAÑA</label>
                    <input type="text" class="form-control" id="NOM_CAMPANA" name="NOM_CAMPANA"
                           value="{{ $campanas[0]['NOM_CAMPANA'] }}">
                </div>
                <div class="mb-3">
                    <label for="FEC_INICIO" class="form-label">FECHA INICIO</label>
                    <input type="text" class="form-control" id="FEC_INICIO" name="FEC_INICIO"
                           value="{{ $campanas[0]['FEC_INICIO'] }}"> 
                </div>
                <div class="mb-3">
                    <label for="FEC_FINAL" class="form-label">FECHA FINAL</label>
                    <input type="text" class="form-control" id="FEC_FINAL" name="FEC_FINAL"
                           value="{{ $campanas[0]['FEC_FINAL'] }}">
                </div>
                <div class="mb-3">
                    <label for="DES_CAMPANA	" class="form-label">DESCRIPCION</label>
                    <input type="text" class="form-control" id="DES_CAMPANA	" name="DES_CAMPANA	"
                           value="{{ $campanas[0]['DES_CAMPANA'] }}">
                </div>

                <div class="mb-3">
                    <label for="COD_MANAGER	" class="form-label">CODIGO MANAGER</label>
                    <input type="text" class="form-control" id="COD_MANAGER	" name="COD_MANAGER	"
                           value="{{ $campanas[0]['COD_MANAGER'] }}"readonly>
                </div>
        

                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('campanas.index') }}" class="btn btn-secondary">Cancelar</a>
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
