<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield("title")</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <meta charset="utf-8">
    </head>
    <body class="antialiased">
        <div class="container bg-primary text-white p-3">
            <h1>Cafeteria</h1>
        </div>
        <div class="container">
            <h2>@yield("title")</h2>
            @yield("content")
        </div>
    </body>
</html>