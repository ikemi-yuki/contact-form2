<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="{{ asset('css/sanitize.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/common.css') }}" rel="stylesheet" />
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">Contact Form</a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
