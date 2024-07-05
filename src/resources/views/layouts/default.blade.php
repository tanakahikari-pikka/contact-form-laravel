 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @yield('css')

</head>
    <body>
        <div class="app">
            <header class="header">
                <h1 class="header_logo">FashionablyLate</h1>
                @yield('link')
                <!-- <form action="/" method="post">
                    @csrf
                    <input class="header_button" type="submit" value="あ">
                </form> -->
            </header>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html> 