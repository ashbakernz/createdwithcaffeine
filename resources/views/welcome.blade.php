<!DOCTYPE html>
        <html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Created With Caffeine</title>

          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

          <link rel="stylesheet" href="./css/font-awesome.min.css">
          <link rel="stylesheet" href="./css/ionicons.min.css">

          <link rel="stylesheet" type="text/css" href="./css/bulma.css">
          <link rel="stylesheet" href="/css/all.css">
          <link rel="stylesheet" type="text/css" href="./css/hero.css">
          <link rel="stylesheet" type="text/css" href="./css/main.css">
        </head>
        <body>

          <section class="hero is-fullheight header-image">
              <div class="hero-head">

                @include('partials.navigation')
              </div>
              <div class="hero-body">
                <div class="container has-text-centered">
                        <h1 class="title is-2">

                        </h1>
                        <h2 class="subtitle is-5">
                          Learn to code
                        </h2>
                        <a class="button is-primary" href="{{ url('home') }}">
                            <span class="icon">
                                <i class="ion-log-in"></i>
                            </span>
                            <span>Get Started</span>
                        </a>
                      </div>
              </div>
            </section>
            <script src="/js/core_lib/jquery.min.js" type="text/javascript"></script>

            <script src="/js/core_lib/bootstrap.util.js" type="text/javascript"></script>
            <script src="/js/core_lib/bootstrap.dropdown.js" type="text/javascript"></script>

            <script src="/js/bulma.js" type="text/javascript"></script>
            <script src="/js/scripts.js" type="text/javascript"></script>

        </body>
        </html>
