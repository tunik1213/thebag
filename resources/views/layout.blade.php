<!doctype html>
<html lang="ua">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The bag</title>

    <link href="/bootstrap.min.css" rel="stylesheet">
    <link href="app.css" rel="stylesheet">
  </head>
  <body>
    
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light">
        <div id="header-container" class="container">
          <a class="navbar-brand" href="/">
            <!-- <img id="logo-image" src="/logo.png" /> -->
            <span>THE BAG</span>
          </a>
          <!-- <span id="header-slogan">Сумка - твій всесвіт!</span> -->
        </div>
        
      </nav>
    </header>

    <main role="main" class="">

        @yield('content', 'Default content')

    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">footer content here.</span>
      </div>
    </footer>

    <script src="/jquery-3.3.1.slim.min.js"></script>
    <script src="/bootstrap.min.js"></script>
    <script src="/popper.min.js"></script>
  </body>
</html>