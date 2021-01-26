<html>
<head>
    <title>@yield('Titulo')</title>
</head>
    <body>
        @section('sidebar')
        Este es mi master sidebar.
        @show
        <div class="container">
        @yield('content')
    </div>
    </body>
</html>