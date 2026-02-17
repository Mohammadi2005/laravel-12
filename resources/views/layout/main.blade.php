<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    @vite("resources/css/app.css"),
</head>
<body>
    <header>
        <nav>
            <h1>header for main layout</h1>
        </nav>
    </header>
    <hr>
    @stack('script')

    @yield("content")

    <hr>
    <footer>
        <h1>footer for main layout</h1>
    </footer>
    <script src="/js/script.js"></script>
    @vite("resources/js/app.js"),
</body>
</html>
