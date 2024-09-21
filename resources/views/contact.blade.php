<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kontakt</title>
</head>
<body class="bg-[url('../../public/background/background.svg')]">
<x-sidebar></x-sidebar>
<div class="flex justify-center items-center w-full min-h-screen">
    <x-contact-form></x-contact-form>
</div>
<x-footer></x-footer>
</body>
</html>
