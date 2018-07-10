<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        {{ Html::style('twbs/bootstrap/dist/css/bootstrap.min.css') }}
        {{ Html::style('src/css/app.css') }}
        @yield('styles')
        <script src="https://use.fontawesome.com/2535c0424b.js"></script>
    </head>
    <body>
      @include('partails.header')
      <div class="container">
        @yield('content')
      </div>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                crossorigin="anonymous">
       </script>
        {{ Html::script('twbs/bootstrap/dist/js/bootstrap.min.js') }}

        @yield('scripts')
    </body>
</html>
