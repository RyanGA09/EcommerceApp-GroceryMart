<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <link rel="shortcut icon" href="/assets/images/favicon/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="/assets/css/main.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    </head>

    <body>
        @include('user.components.header')
        @include('user.components.navbar')
        <main>
            @yield('content')
        </main>
        @include('components.footer')

    </body>
</html>
