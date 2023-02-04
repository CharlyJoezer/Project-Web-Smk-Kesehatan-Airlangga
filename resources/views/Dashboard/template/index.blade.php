<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK KESEHATAN AIRLANGGA</title>
    <link href="/bootstrap-5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/font/bootstrap-icons.css">
    
    <link rel="icon" type="image/x-icon" href="/asset/logo_skakes.png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="main-container">
      @include('dashboard.template.sidebar')
      <div class="wrapper-container">
        @include('dashboard.template.navbar')
        <div class="wrapper-main-content">
          @yield('content')
        </div>
      </div>
    </div>



    <script src="/js/script.js"></script>
    <script src="/bootstrap-5/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>