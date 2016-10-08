<!DOCTYPE html>
        <html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Bulma Forum</title>

          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

          <link rel="stylesheet" href="./css/font-awesome.min.css">
          <link rel="stylesheet" href="./css/ionicons.min.css">

          <link rel="stylesheet" type="text/css" href="./css/bulma.css">

          <link rel="stylesheet" type="text/css" href="./css/hero.css">
          <link rel="stylesheet" type="text/css" href="./css/main.css">
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

    <!-- START ADD NEW TASK MODAL -->
    <div id="modal-add-new-task" class="modal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">New Discussion</p>
        </header>
        <section class="modal-card-body">
          <div class="content">
            <form action="/tasks/add" method="POST">
              {{ csrf_field() }}
              <div class="control">
                <span class="select is-fullwidth">
                  <select required name="type" id="type">
                    <option>General</option>
                    <option>Clients</option>
                    <option>Moviko</option>
                    <option>Not Important</option>
                  </select>
                </span>
                </div>
                <div class="control">
                <textarea required name="task" id="task"  class="textarea" placeholder="Add a new task" style="z-index: auto; position: relative; line-height: 16.8px; font-size: 14px; transition: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"></textarea>

              </div>
            </div>
          </section>
          <footer class="modal-card-foot">
            <button type="submit" class="button">
              Submit
              <span class="icon">
                <i class="ion-plus-round"></i>
              </span>
            </button>
          </form>
        </footer>
      </div>
    </div>

    <!-- Scripts -->
    <script src="/js/jquery-2.2.0.min.js"></script>
    <script src="/js/bulma.js"></script>
    <script src="/js/app.js"></script>
    @yield('scripts')
</body>
</html>
