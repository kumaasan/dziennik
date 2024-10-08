<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('logo.svg')}}"
    @vite('resources/css/app.css')
    <title>Kontakt</title>
</head>
<body class="bg-[url('../../public/background/background.svg')]">
<div class="flex flex-col justify-between w-full h-screen gap-20">
    <x-sidebar></x-sidebar>
    <x-contact-form></x-contact-form>
    <x-footer></x-footer>
</div>

</body>
</html>
