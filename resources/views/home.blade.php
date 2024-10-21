<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Better dziennik</title>
    <link rel="icon" href="{{asset('logo.svg')}}">
    <link rel="masc-icon" href="{{asset('logo.svg')}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[url('../../public/background/background.svg')]">

<div class=" w-full h-screen flex flex-col justify-between gap-10">
    <x-sidebar></x-sidebar>
    <div class="container mx-auto lg:space-y-20 max-lg:space-y-10 p-4">
        <div class=" gap-4 mb-6">
            <div class="kpi-item bg-white text-white p-4 rounded-lg shadow ">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight text-center">
                    @auth Witaj {{auth()->user()->first_name}}!@endauth
                    @guest Używasz konta gościa! @endguest
                </h2>
                <p class="text-gray-900 text-center mt-4">Twoja średnia roczna: {{$finalAverage}}</p>
            </div>
        </div>
        @auth()
        <div class="grid grid-cols-1 sm:grid-cols-2 @if(count($subjects) == 2)  lg:grid-cols-2  @elseif(count($subjects) == 1) lg:grid-cols-1 @else lg:grid-cols-3 @endif gap-4  mb-6 lower">
                @foreach($subjects as $subject)
                    <div class="subject-item flex flex-col gap-y-1 text-center bg-white p-3   rounded-lg shadow transition-colors">
                        <h3 class="text-3xl font-semibold text-center max-lg:flex max-lg:justify-center uppercase text-gray-700">{{$subject->name}}</h3>
                        <p class="text-lg max-lg:flex max-lg:justify-center font-medium capitalize text-gray-700">Ilość ocen: {{$subject->amountOfGrades}} </p>
                        <p class="text-lg max-lg:flex max-lg:justify-center capitalize font-medium text-gray-700">Ocena końcowa: {!! $subject->final_grade !!}</p>
                        <p class=" max-lg:flex font-medium max-lg:justify-center @if($subject->isPassing) text-green-500 @else text-red-700 @endif @if($subject->isPassing == 0) text-black @endif">Średnia: {{$subject->average}}</p>
                    </div>
                @endforeach
        </div>
        @endauth
        @guest
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                <div class="subject-item bg-white p-4 rounded-lg shadow transition-colors">
                    <h3 class="text-lg font-medium text-gray-700">Przedmiot: </h3>
                    <p class="text-lg max-lg:flex max-lg:justify-center font-medium capitalize text-gray-700">Ilość ocen: </p>
                    <p class="text-lg max-lg:flex max-lg:justify-center capitalize font-medium text-gray-700">Ocena końcowa:</p>
                    <p class=" max-lg:flex font-medium max-lg:justify-center">Średnia:</p>
                    <p class="text-gray-700">Średnia: </p>
                </div>
                <div class="subject-item bg-white p-4 rounded-lg shadow transition-colors">
                    <h3 class="text-lg font-medium text-gray-700">Przedmiot: </h3>
                    <p class="text-lg max-lg:flex max-lg:justify-center font-medium capitalize text-gray-700">Ilość ocen: </p>
                    <p class="text-lg max-lg:flex max-lg:justify-center capitalize font-medium text-gray-700">Ocena końcowa:</p>
                    <p class=" max-lg:flex font-medium max-lg:justify-center">Średnia:</p>
                    <p class="text-gray-700">Średnia: </p>
                </div>
                <div class="subject-item bg-white p-4 rounded-lg shadow transition-colors">
                    <h3 class="text-lg font-medium text-gray-700">Przedmiot: </h3>
                    <p class="text-lg max-lg:flex max-lg:justify-center font-medium capitalize text-gray-700">Ilość ocen: </p>
                    <p class="text-lg max-lg:flex max-lg:justify-center capitalize font-medium text-gray-700">Ocena końcowa:</p>
                    <p class=" max-lg:flex font-medium max-lg:justify-center">Średnia:</p>
                    <p class="text-gray-700">Średnia: </p>
                </div>
            </div>
        @endguest
    </div>
    <x-footer></x-footer>
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
