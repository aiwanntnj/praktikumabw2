<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- Header content -->
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('profil') }}">Profil</a></li>
                <li><a href="{{ route('pendidikan') }}">Pendidikan</a></li>
                <li><a href="{{ route('keahlian') }}">Keahlian</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
