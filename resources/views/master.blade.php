<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/simple-sidebar.css') }}" />
        
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
    <script src="{{ assets('public/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ assets('public/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>