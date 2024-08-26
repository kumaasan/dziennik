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
<x-sidebar></x-sidebar>
<div class="flex">
    <div class=" mt-[-40px]  flex justify-center items-center w-full min-h-screen">
        <x-edit-account-form :minimalAverage="$minimalAverage" />
    </div>
</div>
</body>
</html>
