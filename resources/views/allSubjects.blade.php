<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wszystkie przedmioty</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500">

<div class="flex justify-center items-center w-full min-h-screen p-4">
    <div class="w-full max-w-4xl">
        @foreach($subjects as $subject)
            <div class="flex flex-wrap -mx-2 mb-4">
                <div class="w-full md:w-3/5 px-2 mb-4 md:mb-0">
                    <div class="flex flex-col items-center justify-center border-2 rounded-lg p-3 bg-white shadow-lg h-full">
                        <h2 class="text-2xl font-bold text-gray-700 mb-4">{{$subject->name}}</h2>
                        <div class="flex gap-3 w-full">
                            <div class="flex-1">
                                <form action="{{route('addGrade')}}" method="post" class="flex flex-col gap-3 w-full">
                                    @csrf
                                    <div>
                                        <label for="weight" class="block text-sm font-medium text-gray-700">Waga</label>
                                        <input type="number" id="weight" name="weight" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    </div>
                                    <div>
                                        <label for="grade" class="block text-sm font-medium text-gray-700">Ocena</label>
                                        <input type="number" id="grade" name="grade" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    </div>
                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                        Dodaj
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-2/5 px-2">
                    <div class="flex flex-col items-center justify-center border-2 rounded-lg p-3 bg-white shadow-lg h-full">
                        <h2 class="text-2xl font-bold text-gray-700 mb-4">Oceny:</h2>
                        <div class="flex flex-wrap gap-1 mb-2">
                            <span class="bg-gray-200 rounded-full px-3 py-1">2</span>
                            <span class="bg-gray-200 rounded-full px-3 py-1">4</span>
                            <span class="bg-gray-200 rounded-full px-3 py-1">5</span>
                            <span class="bg-gray-200 rounded-full px-3 py-1">6</span>
                            <span class="bg-gray-200 rounded-full px-3 py-1">2</span>
                            <span class="bg-gray-200 rounded-full px-3 py-1">1</span>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-700 mb-4">Średnia:</h2>
                        <p class="text-2xl font-bold text-green-500 mb-4">4.20</p>
                        <button type="button" class="w-full mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                            Edytuj
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
