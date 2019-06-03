<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="stylesheet" href="/assets/build/css/main.css">
    </head>
    <body>
        @yield('body')
    </body>
    <footer>
        Witten by: {{$page->writer}} <br>
        Using : <img src="assets/images/jigsaw.png" width="80" height="28" alt="JIGSAW image">
    </footer>
</html>
