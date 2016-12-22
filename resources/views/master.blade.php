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
            $('#myTable').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "catalogo/api",
                    "type": "post"
                },
                "columns": [
                    { data: "ID",name:"ID" },
                    { data: "Rfc",name:"Rfc" },
                    { data: "RazonSocial", name:"RazonSocial" },
                    { data: "Status", name:"Status" },
                    { data: "Contribuyente", name:"Contribuyente" },
                    { data: "Estado", name:"Nombre" },
                    { data: "Pais", name:"Nombre" },
                ]
            } );
        });    
    </script>
    </body>
</html>
