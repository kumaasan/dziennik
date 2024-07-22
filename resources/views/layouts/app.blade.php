<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Dziennik Szkolny')</title>
    @yield('head')
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500">


<div class=" w-full h-screen">
    @yield('content')
</div>

</body>
</html>
