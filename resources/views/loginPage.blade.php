<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logowanie</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[url('../../public/background/background.svg')]">
<div class="flex flex-col w-full h-screen justify-between gap-20">
    <x-sidebar></x-sidebar>
    <x-login-form></x-login-form>
    <x-footer></x-footer>
</div>
</body>
</html>
