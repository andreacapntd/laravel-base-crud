<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Laravel base crud</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

  </head>

  <body>

    {{-- Header --}}

    @include('partials.header')

    {{-- Main --}}

    <main>

      @yield('content')

    </main>

    {{-- Footer --}}

    @include('partials.footer')

  </body>

</html>
