<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{'/css/style.css'}}">
    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <li><a href="/">Home</a> </li>
            <li><a href="/characters">Personnages</a></li>
            <li><a href="/designers">Dessinateurs</a></li>
            <li><a href="/add_character">Ajouter un personnage</a></li>
            <li><a href="/add_designer">Ajouter un dessinateur</a></li>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div>
            
        </div>
    </footer>
</body>
</html>