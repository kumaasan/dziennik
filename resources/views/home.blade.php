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
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
            <div class="kpi-item bg-blue-500 text-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Ilość przedmiotów</h2>
                @auth
                    <p class="text-3xl font-bold">{{$subjects->count()}}</p>
                @endauth
                @guest
                    <p class="text-3xl font-bold">Brak</p>

                @endguest
            </div>
            <div class="kpi-item bg-green-500 max-lg:flex max-lg:justify-center text-white p-4 rounded-lg shadow">
                @auth
                    <h2 class="text-3xl font-bold">
                        Witaj {{auth()->user()->first_name}} {{auth()->user()->last_name}}</h2>
                @endauth
                @guest
                    <h2 class="text-3xl font-bold">Konto gościa</h2>
                @endguest
            </div>
            <div class="kpi-item bg-yellow-500 text-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Średnia roczna</h2>
                <p class="text-3xl font-bold">4.20</p>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
            @foreach($subjects->take(3) as $subject)
                <div class="subject-item bg-white p-4 rounded-lg shadow hover:bg-green-300 transition-colors">
                    <h3 class="text-lg font-medium text-gray-700">{{$subject->name}}</h3>
                    <p class="text-gray-500">Średnia: {{$subject->average}}</p>
                    <p class="text-gray-500"></p>
                </div>
            @endforeach
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
