<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dziennik Szkolny</title>
</head>

<body class="bg-gradient-to-r from-cyan-500 to-blue-500">

<div class="flex justify-center items-center w-full h-screen">
    <div class="flex items-center justify-center flex-col border-2 rounded-lg w-3/5 bg-white shadow-lg">

        <h2 class="text-2xl font-bold mt-6 text-gray-700">{{$subject->name}}</h2>

        <form class="space-y-4 w-4/5" method="post" action="{{route('addGrade')}}">
            @csrf
            <div class="mb-6">
                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-700">Podaj oceny wagi 1:</label>
                <input type="text" name="gradesW1" placeholder="Np. 5, 4, 3" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-700">Podaj oceny wagi 2:</label>
                <input type="text" name="gradesW2" placeholder="Np. 5, 4, 3" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-700">Podaj oceny wagi 3:</label>
                <input type="text" name="gradesW3" placeholder="Np. 5, 4, 3" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-700">Podaj oceny wagi 4:</label>
                <input type="text" name="gradesW4" placeholder="Np. 5, 4, 3" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-700">Podaj oceny wagi 5:</label>
                <input type="text" name="gradesW5" placeholder="Np. 5, 4, 3" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-700">Podaj oceny wagi 6:</label>
                <input type="text" name="gradesW6" placeholder="Np. 5, 4, 3" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <button type="submit" class="w-full mb-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Oblicz średnią</button>
            </div>
        </form>

        <h2 class="text-2xl font-bold text-gray-700 mb-4">Średnia:</h2>
        <p class="text-4xl font-semibold text-green-600 mb-6">4.20</p>

    </div>
</div>
</body>
</html>
