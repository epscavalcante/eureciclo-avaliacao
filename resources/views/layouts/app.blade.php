<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>

    <header class="p-1 bg-dark text-white fixed-top">
        <div class="container">
            <div
                class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-center">
                <a href="/" class="d-flex align-items-center text-white text-decoration-none">
                    <img src="{{ asset('img/eureciclo-logo.png') }}" alt="" width="150">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dot mx-3 d-none d-sm-block" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                    </svg>
                </a>
                <span class="fs-5 mb-0
                ">Avaliação para desenvolvedor</span>
            </div>
        </div>
    </header>

    <main class="container my-5 pt-5">
        @yield('content')
    </main>

    <footer class="text-center">
        &copy; {{ date('Y') }} - <a href="https://epscavalcante.dev" target="_blank"
            class="text-decoration-none text-dark fw-bold">Eduardo Cavalcante</a>
    </footer>
</body>

</html>
