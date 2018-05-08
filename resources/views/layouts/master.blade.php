<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>@yield('pageTitle') | Tiendon</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
    <body class="main-content-color">
      @include('layouts.partials._topMenu')
      @include('layouts.partials._navigation')
      <div id="main" class="main-content-color">
        <div class="container">
          @yield('content')
        </div>
      </div>
    </body>
    @include('layouts.partials._foot')
    <script type="text/javascript" src="js/app.js"></script>
</html>
