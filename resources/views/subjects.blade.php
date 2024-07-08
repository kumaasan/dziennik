<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Oceny</title>
</head>
{{-- from cyan 600/700 to blue-800/700--}}
<body class="bg-gradient-to-r from-cyan-500 to-blue-500">
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
