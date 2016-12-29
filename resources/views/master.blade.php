<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/simple-sidebar.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('https://cdn.datatables.net/buttons/1.2.4/css/buttons.bootstrap.min.css') }}" />
        
        
        
    </head>
    <body>
        <div id="wrapper">
         @include('sidebar')
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Catalogo de Clientes</h2>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('bower_components/pdfmake/build/vfs_fonts.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            var table=$('#myTable').DataTable( {
                processing: true,
                serverSide: true,
                ajax: {
                    url: "catalogo/api",
                    type: "post"
                },
                columns: [
                    { data: "ID",name:"ID" },
                    { data: "Rfc",name:"Rfc" },
                    { data: "RazonSocial", name:"RazonSocial" },
                    { data: "Status", name:"Status" },
                    { data: "Contribuyente", name:"Contribuyente" },
                    { data: "Estado",name:"Estado"},
                    { data: "Pais",name:"Pais"},
                    { data: "Ejecutivo", name:"Ejecutivo"}
                ],
                dom:"Blfrtip",
                buttons: [
                    {
                        extend: 'pdf',
                        text: 'Save current page',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }
                ],
                columnDefs: [
                {
                    "render": function (data, type, row) {
                        return (data === 1) ? 'Activo' : 'Inactivo';
                    },
                    "targets": 3
                },
                {
                    "render": function (data, type, row) {
                        return (data === 1) ? 'Sí' : 'No';
                    },
                    "targets": 4
                },
                {
                    "searchable":false,
                    "targets":[0,3,4,5,6,7]
                }
            ]
            });
        });    
    </script>
    </body>
</html>
