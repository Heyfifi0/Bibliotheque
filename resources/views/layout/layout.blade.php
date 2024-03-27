<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body class="flex">
    <div class="navbar">
        @include('components.navbar')
    </div>


    <div class="flex-1 justify-center ml-10 mt-2">
        @yield('content')
    </div>
</body>
</html>