<!DOCTYPE html>
        <html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Created With Caffeine</title>

          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

          <link rel="stylesheet" href="/css/font-awesome.min.css">
          <link rel="stylesheet" href="/css/ionicons.min.css">

          <link rel="stylesheet" type="text/css" href="/css/bulma.css">

          <link rel="stylesheet" type="text/css" href="/css/hero.css">
          <link rel="stylesheet" type="text/css" href="/css/main.css">
          @yield('styles')
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

    </head>

<body>

    <div id="app">
      @include('partials.navigation')
      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/jquery-2.2.0.min.js"></script>
    <script src="/js/bulma.js"></script>
    <script src="/js/app.js"></script>
    @yield('scripts')
</body>
</html>
