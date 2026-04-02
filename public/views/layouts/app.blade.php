<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="resourses/css/style.css">
    <link rel="stylesheet" type="text/css" href="resourses/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resourses/owl/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="resourses/owl/owl.theme.default.min.css"> -->
    @vite(['resources/css/style.css', 'resources/css/bootstrap.min.css', 
        'resources/owl/owl.carousel.min.css', 'resources/owl/owl.theme.default.min.css', 'resources/js/jquery.min.js', 'resources/js/bootstrap.bundle.js',
                'resources/js/script.js', 'resources/owl/owl.carousel.min.js',
                'resources/owl/owl.carousel.js', 'resources/js/index.js'])
    <title>
        @yield('title', 'Fregat')
    </title>

</head>

<body>

    <x-header />
    <main>

        @yield('content')

    </main>
    <x-footer />

</body>

</html>