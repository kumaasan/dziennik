<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Konto</title>
</head>
<body class="bg-[url('../../public/background/background.svg')] select-none">

<div class="flex flex-col min-h-screen gap-40">
    <x-sidebar></x-sidebar>
    <div class="flex-grow flex justify-center items-center w-full">
        <x-reset-password-form></x-reset-password-form>
    </div>
    <x-footer />
</div>
</body>
</html>
