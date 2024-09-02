<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://kit.fontawesome.com/8d62d56333.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'sidetitle')</title>
    @livewireStyles
</head>

<body>

    @yield('content')

    @livewireScripts
</body>



</html>
