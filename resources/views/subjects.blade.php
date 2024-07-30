<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Oceny</title>
</head>

<body class="bg-[url('../../public/background/background.svg')]">
<x-sidebar></x-sidebar>
<!-- main content -->
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <!-- First Row (Unchanged) -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
        </div>

        <!-- Modified Second Row -->
        <div class="grid grid-cols-2 gap-4 mb-4">
            <!-- First big rectangle -->
            <div class="flex items-center justify-center h-48 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">1</p>
            </div>
            <!-- Spacing between rectangles -->
            <div class="flex items-center justify-center h-48 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
        </div>

        <!-- Rows Underneath the Second Row's Rectangles -->
        <div class="grid grid-cols-2 gap-4 mb-4">
            <!-- Below first big rectangle -->
            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center justify-center h-28 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">1</p>
                </div>
                <div class="flex items-center justify-center h-28 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">1</p>
                </div>
            </div>
            <!-- Below second big rectangle -->
            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center justify-center h-28 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center h-28 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
        </div>

        <!-- Last Row (Unchanged) -->
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center justify-center rounded h-28 bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded h-28 bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-center items-center w-full h-screen">
    <div class="w-full max-w-md p-6 pt-1 bg-white rounded-lg shadow-lg">

        <form class="space-y-4" method="post" action="{{route('showSubjects')}}">
            @csrf
            <label for="subjects" class="block text-sm font-medium text-gray-900">Wybierz przedmiot</label>
            <select name="subjects" id="subjects" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Dalej</button>
        </form>

        <div class="space-y-4">
            <div class="w-full">
                <a href="{{route('subject.showAll')}}" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 block text-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Wszystkie przedmioty</a>
            </div>

        </div>
        <div class="space-y-4">
            <div class="w-full">
                <a href="{{route('loginPage')}}" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 block text-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Logowanie</a>
            </div>
        </div>

        <div class="space-y-4">
            <div class="w-full">
                <a href="{{route('homePage')}}" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 block text-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Home page
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
