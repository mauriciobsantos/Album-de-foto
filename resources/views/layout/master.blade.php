<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fotos</title>
    
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
    <body>
        @include('templates.menu')
        
        <div class="container">
            @yield('content')
        </div>
        
        <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    </body>
</html>