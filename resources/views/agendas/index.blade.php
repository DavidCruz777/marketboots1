@extends('adminlte::page')

@section('title', 'presupuesto')  

@section('content_header')
    <h1>AGENDA</h1>
@stop

@section('content')
   <div class="container">
    <main class="mt-3">
        <a href="" class="btn btn-primary mb-3">Crear agenda</a>
        <table id="mitabla" class="table table-striped">
            <thead>
                <tr>
                    <th>CODIGO.AGENDA</th>
                    <th>NOMBRE.RECURSO</th>
                    <th>TIPO.RECURSO</th>
                    <th>DESCRICCION</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presupuestos as $presupuesto)
                <tr>
                    <td>{{ $presupuesto['COD_PRESUPUESTO'] }}</td>

                    <td>
                        <a href=""
                            class="btn btn-info btn-sm">Editar</a>
                        <form action="" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop