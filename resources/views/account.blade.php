<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Konto</title>
</head>
<body class="bg-[url('../../public/background/background.svg')]">
<div class="flex flex-col justify-between">
    <x-sidebar></x-sidebar>
    <div class="flex justify-center items-center w-full h-screen">
        <x-edit-account-form :minimalAverage="$minimalAverage" />
    </div>
    <x-footer></x-footer>
</div>

</body>
</html>
