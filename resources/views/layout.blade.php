<!doctype html>
<html lang="ua">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$viewdata['description'] ?? 'THE BAG - сумки ручної роботи'}}">
    <meta name="author" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>{{$viewdata['title'] ?? 'THE BAG - Та сама сумка'}}</title>

    <link href="/bootstrap.min.css" rel="stylesheet">
    <link href="/app.css" rel="stylesheet">
    @yield('head')
  </head>
  <body>
    
    <header>
      <nav class="navbar navbar-expand-md bg-light">
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

        <div class="container" id="mainContainer">
        @yield('content', 'Default content')
        </div>

    </main>

    <footer class="footer">
      <div class="container">
        <a class="text-muted" href="https://www.instagram.com/the_bag_is_your_world"><img src="/instagram.png" />
          <span>THE_BAG_IS_YOUR_WORLD</span></a>
      </div>
      <div class="text-center">© {{date("Y")}}</div>
    </footer>

    <script src="/jquery-3.7.1.min.js"></script>
    <script src="/bootstrap.min.js"></script>
    <script src="/popper.min.js"></script>
    @yield('scripts')
  </body>
</html>