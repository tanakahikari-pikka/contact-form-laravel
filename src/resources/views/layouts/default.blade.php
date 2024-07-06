 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @yield('css')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
    <body>
        <div class="app">
            <header class="header">
                <h1 class="header_logo">FashionablyLate</h1>
                @yield('link')
            </header>
            <div class="content">
                <div class="heading_title text-align-center header_title mt-3">
                    @yield('heading')
                </div>
                @yield('content')
            </div>
        </div>
    </body>
</html> 