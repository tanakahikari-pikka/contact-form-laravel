 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="header_logo">FashionablyLate</h1>
            <a class="header_button" href="">button</a>
            <!-- @yield('enter') -->
        </header>
        <div class="content">
            @yield('title')
            @yield('content')
        </div>
    </div>
</body>
</html>