<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  
  <title>@yield("title", "Droguería Cabildo Mayor Yanaconas")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    {{-- Variables CSS globales --}}
    <style>
        :root {
            --verde-oscuro:   #1a5c2a;
            --verde-medio:    #2d7a3e;
            --verde-claro:    #4a9e5c;
            --verde-suave:    #e8f4ea;
            --verde-borde:    #c5dfc9;
            --dorado:         #b8960c;
            --dorado-claro:   #f0d060;
            --crema:          #fdf9f0;
            --texto-oscuro:   #1c2b1e;
            --texto-medio:    #3d4f40;
            --blanco:         #ffffff;
        }

        main{
            margin:0;
            font-family:"Roboto", sans-serif;
            padding:0;
            width:100%;
            overflow-x:hidden;
        }       
    </style>

    {{-- CSS de componentes globales --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}"> --}}

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    @vite(['resources/css/components/navbar.css'])
    @vite(['resources/css/components/footer.css'])

    {{-- Estilos adiccionales --}}
    @stack('styles')
 
</head>

<body>

    {{-- Navbar global --}}
    <x-navbar/>

    {{-- Contenido de las paginas --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer global --}}
    <x-footer />

    {{-- Bootstrap JS --}}
    <script src="https://unpkg.com/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Scripts adicionales por página --}}
    @stack('scripts')
  
</body>

</html>