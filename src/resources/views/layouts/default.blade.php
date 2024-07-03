 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper amber lighten-5 row">
                <a href="#" class="brand-logo center black-text">FashionablyLate</a>
                <a href="#"  class="right col s2 black-text">login</a>
            </div>
        </nav>
    </header>
    <div class="content">
        <h2 class="blown-text text-lighten-1 center heading h4">@yield('title')</p>
        @yield('content')
    </div>
</body>
</html>