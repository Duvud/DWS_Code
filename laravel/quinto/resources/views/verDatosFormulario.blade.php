<!-- Stored in resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
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
            
        </div>
        <table>
            @foreach ($datos as $dato)
                <th>{{$dato}}</th>
            @endforeach                    
        </table>        
                
    </body>
</html>