<!doctype html>
<html lang="es-mx">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="{{ asset('build/assets/app-B0bZIBd4.css') }}" rel="stylesheet">
  </head>


  <body>
    @include('partials.navbar')

    <div class="container" style="padding:15px">
      @yield('content')
    </div>
    
    <script src="{{ asset('build/assets/app-CdKKdC1I.js') }}"></script>

  </body>
</html>

