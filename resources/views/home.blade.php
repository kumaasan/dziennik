<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Better dziennik</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[url('../../public/background/background.svg')] select-none">

<div class=" w-full h-screen">
    <x-sidebar></x-sidebar>
    <div class="flex justify-center items-center w-full h-screen">
        <div class="grid grid-cols-3">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
        </div>
    </div>

@if(session()->has('success'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('success')}}</p>
    </div>
@endif
@if(session()->has('login'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('login')}}</p>
    </div>
@endif
@if(session()->has('logout'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('logout')}}</p>
    </div>
@endif
@if(session('editSuccess'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('editSuccess')}}</p>
    </div>
@endif
@if(session('successPassChange'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('successPassChange')}}</p>
    </div>
@endif
</body>
</html>
