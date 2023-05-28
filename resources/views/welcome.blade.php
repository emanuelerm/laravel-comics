<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.navbar')
    <main>
        @foreach ($comics as $comic)
        <div class="card">
            <div class="card-title">
                <h1>{{ $comic['title'] }}</h1>
            </div>
            <div class="card-body">
                <p>{{ $comic['description'] }}</p>
                <small>{{ $comic['price'] }}</small>
            </div>
        </div>
        @endforeach
    </main>

</body>

</html>
