<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('logo.svg')}}"
    @vite('resources/css/app.css')
    <title>Konto</title>
</head>
<body class="bg-[url('../../public/background/background.svg')]">
<div class="flex flex-col w-full h-screen justify-between gap-20">
    <x-sidebar></x-sidebar>
    <div class="flex justify-center items-center">
        <x-edit-account-form :minimalAverage="$minimalAverage" />
    </div>
    <x-footer></x-footer>
</div>

</body>
</html>
