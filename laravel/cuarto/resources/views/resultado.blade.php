<!-- Stored in resources/views/layouts/resultado.blade.php-->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
            Hola, {{$nombre}}
        </div>
    </body>
</html>