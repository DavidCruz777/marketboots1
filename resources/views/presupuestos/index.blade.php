@extends('adminlte::page')

@section('title', 'presupuesto')  
@section('plugins.Sweetalert2',true)

@section('content_header')
    <h1>PRESUPUESTO</h1>
@stop

@section('content')
<head>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" type="text/css"> <!-- Bootstrap CSS -->
  <script src="//code.jquery.com/jquery-3.7.0.js" type="text/javascript"></script> <!-- jQuery -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" type="text/css"> <!-- DataTables CSS -->
  <link rel="stylesheet" href="//cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" type="text/css"> <!-- DataTables Buttons CSS -->
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script> <!-- DataTables JavaScript -->
  <script src="//cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js" type="text/javascript"></script> <!-- DataTables Buttons JavaScript -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" type="text/javascript"></script> <!-- JSZip (Required for DataTables Buttons) -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script> <!-- pdfmake (Required for DataTables Buttons) -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script> <!-- vfs_fonts (Required for DataTables Buttons PDF Export) -->
  <script src="//cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js" type="text/javascript"></script> <!-- DataTables Buttons HTML5 -->
  <script src="//cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js" type="text/javascript"></script> <!-- DataTables Buttons Print -->
</head>
   <div class="container">
    <main class="mt-3">
        <a href="{{ route('presupuestos.create') }}" class="btn btn-primary mb-3">Crear Presupuesto</a>
        <table id="mitabla" class="table table-striped">
            <thead>
                <tr>
                    <th>CODIGO.PRESUPUESTO</th>
                    <th>CODIGO.RECURSO</th>
                    <th>APLICADO</th>
                    <th>NOMOBRE.PRESUPUESTO</th>
                    <th>VALOR.INICIAL</th>
                    <th>FECHA.INICIAL</th>
                    <th>FECHA.FINAL</th>
                    <th>DESCRIPCION</th>
                    <th>CODIGO.MANAGER</th>
                    <th>CODIGO.DETALLE.PRESUPUESTO</th>
                    <th>ACCIONES</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($presupuestos as $presupuesto)
                <tr>
                    <td>{{ $presupuesto['COD_PRESUPUESTO'] }}</td>
                    <td>{{ $presupuesto['COD_RECURSO'] }}</td>
                    <td>{{ $presupuesto['APLICADO'] }}</td>
                    <td>{{ $presupuesto['NOM_PRESUPUESTO'] }}</td>
                    <td>{{ $presupuesto['VAL_INICIAL'] }}</td>
                    <td>{{ $presupuesto['FEC_INICIAL'] }}</td>
                    <td>{{ $presupuesto['FEC_FINAL'] }}</td>
                    <td>{{ $presupuesto['DES_PRESUPUESTO'] }}</td>
                    <td>{{ $presupuesto['COD_MANAGER'] }}</td>
                    <td>{{ $presupuesto['COD_DET_PRESUPUESTO'] }}</td>
                    <td>
                        <a href="{{ route('presupuestos.edit', $presupuesto['COD_PRESUPUESTO']) }}"
                            class="btn btn-info btn-sm">Editar</a>
                        <form action="{{ route('presupuestos.destroy', $presupuesto['COD_PRESUPUESTO']) }}" method="POST"
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
        <script>
  new DataTable('#mitabla', {
    language: {
      url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json',
    },
    dom: 'Bfrtip',
    buttons:{
      buttons:[
                { extend: 'copy', text: '<i class="bi bi-clipboard-check-fill"></i>',titleAttr:'Copiar',className:'btn btn-secondary' },
                { extend: 'excel', text: '<i class="bi bi-file-earmark-spreadsheet"></i>',titleAttr:'Exportar a Excel',className:'btn btn-succes' },
                { extend: 'csv', text: '<i class="bi bi-filetype-csv"></i>',titleAttr:'Exportar a csv',className:'btn btn-succes' },
                { extend: 'pdf', text: '<i class="bi bi-file-earmark-pdf"></i>',titleAttr:'Exportar a PDF',className:'btn btn-danger' },
                { extend: 'print', text: '<i class="bi bi-printer"></i>',titleAttr:'Imprimir',className:'btn btn-info' },

        ]
    },
   /*buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],*/
});
</script>
    @stop
    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script> Swal.fire({
  title: "Exitoso!",
  text: "",
  icon: "success"
});
</script>

@stop
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    @section('js')
    @stop