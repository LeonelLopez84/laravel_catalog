<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/simple-sidebar.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css') }}" />
        
        
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
    <script src="{{ url('//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js') }}"></script>
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
                }
            ]
            });

            $('#myTable tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
            });

            table.columns().every( function () {
            var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        });    
    </script>
    </body>
</html>
