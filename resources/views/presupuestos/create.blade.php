@extends('adminlte::page')

@section('title', 'Crear Presupuesto')

@section('content_header')
    <h1>Crear Nuevo Presupuesto</h1>
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
            <form action="{{ route('presupuestos.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="COD_RECURSO" class="form-label">CODIGO RECURSOS</label>
                    <input type="text" class="form-control" id="COD_RECURSO" name="COD_RECURSO">
                </div>
                <div class="mb-3">
                    <label for="APLICADO" class="form-label">APLICADO</label>
                    <input type="text" class="form-control" id="APLICADO" name="APLICADO">
                </div>
                <div class="mb-3">
                    <label for="NOM_PRESUPUESTO" class="form-label">NOMBRE PRESUPUESTO</label>
                    <input type="text" class="form-control" id="NOM_PRESUPUESTO" name="NOM_PRESUPUESTO">
                </div>
                <div class="mb-3">
                    <label for="VAL_INICIAL" class="form-label">VALOR INICIAL</label>
                    <input type="text" class="form-control" id="VAL_INICIAL" name="VAL_INICIAL">
                </div>
                
                <div class="mb-3">
                    <label for="FEC_INICIAL" class="form-label">FECHA INICIAL</label>
                    <input type="text" class="form-control" id="FEC_INICIAL" name="FEC_INICIAL">
                </div>
                
                <div class="mb-3">
                    <label for="FEC_FINAL" class="form-label">FECHA FINAL</label>
                    <input type="text" class="form-control" id="FEC_FINAL" name="FEC_FINAL">
                </div>
                <div class="mb-3">
                    <label for="DES_PRESUPUESTO" class="form-label">DESCRIPCION PRESUPUESTO</label>
                    <input type="text" class="form-control" id="DES_PRESUPUESTO" name="DES_PRESUPUESTO">
                </div>

                <div class="mb-3">
                    <label for="COD_MANAGER" class="form-label">CODIGO DEL MANAGER</label>
                    <input type="text" class="form-control" id="COD_MANAGER" name="COD_MANAGER">
                </div>

                <div class="mb-3">
                    <label for="COD_DET_PRESUPUESTO" class="form-label">CODIGO DETALLE PRESUPUESTO</label>
                    <input type="text" class="form-control" id="COD_DET_PRESUPUESTO" name="COD_DET_PRESUPUESTO">
                </div>

                
                <button type="submit" class="btn btn-primary">Crear presupuestos</button>
                <a href="{{ route('presupuestos.index') }}" class="btn btn-secondary">Cancelar</a>
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