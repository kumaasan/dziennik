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
{{--    <div class="flex justify-center items-center w-full h-3/4">--}}
{{--        <div class="space-y-4">--}}
{{--            <div class="grid grid-cols-3 gap-4">--}}
{{--                <div class="bg-gray-200 h-48 w-44 p-4">Item 1</div>--}}
{{--                <div class="bg-gray-200 p-4">Item 2</div>--}}
{{--                <div class="bg-gray-200 p-4">Item 3</div>--}}
{{--            </div>--}}

{{--            <div class="grid grid-cols-4 gap-4">--}}
{{--                <div class="bg-gray-200 p-4">Item 4</div>--}}
{{--                <div class="bg-gray-200 p-4">Item 5</div>--}}
{{--                <div class="bg-gray-200 p-4">Item 6</div>--}}
{{--                <div class="bg-gray-200 p-4">Item 7</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container mx-auto p-4">
        <!-- KPI Items -->
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
            <div class="kpi-item bg-green-500 text-white p-4 rounded-lg shadow">
                @auth
                    <h2 class="text-3xl font-bold">Witaj {{auth()->user()->first_name}} {{auth()->user()->last_name}}</h2>
                @endauth
                @guest
                        <h2 class="text-3xl font-bold">Konto gościa</h2>

                @endguest
            </div>
            <div class="kpi-item bg-yellow-500 text-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Attendance</h2>
                <p class="text-3xl font-bold"></p>

            </div>
        </div>

        <!-- Subject Details -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
            <div class="subject-item bg-white p-4 rounded-lg shadow hover:bg-blue-100 transition-colors">
                <h3 class="text-lg font-medium text-gray-700">Mathematics</h3>
                <p class="text-gray-500">Annual Average: 90%</p>
                <p class="text-gray-500">Teacher: Mr. Smith</p>
            </div>
            <div class="subject-item bg-white p-4 rounded-lg shadow hover:bg-blue-100 transition-colors">
                <h3 class="text-lg font-medium text-gray-700">English</h3>
                <p class="text-gray-500">Annual Average: 88%</p>
                <p class="text-gray-500">Teacher: Ms. Johnson</p>
            </div>
            <div class="subject-item bg-white p-4 rounded-lg shadow hover:bg-blue-100 transition-colors">
                <h3 class="text-lg font-medium text-gray-700">Science</h3>
                <p class="text-gray-500">Annual Average: 85%</p>
                <p class="text-gray-500">Teacher: Dr. Brown</p>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="info-item bg-gray-100 p-4 rounded-lg shadow">
                <h4 class="text-md font-semibold text-gray-600">Upcoming Exams</h4>
                <p class="text-gray-500">Mathematics: Sep 15</p>
                <p class="text-gray-500">English: Sep 20</p>
            </div>
            <div class="info-item bg-gray-100 p-4 rounded-lg shadow">
                <h4 class="text-md font-semibold text-gray-600">Homework Due</h4>
                <p class="text-gray-500">Science Project: Sep 10</p>
            </div>
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
