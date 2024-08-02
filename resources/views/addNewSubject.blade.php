<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dodaj przedmioty</title>
</head>
<body class="bg-[url('../../public/background/background.svg')] h-screen flex flex-col">

<x-sidebar></x-sidebar>

<section class="flex flex-grow items-center justify-center ml-64">
    <div class="w-full max-w-xl bg-[#DCDCE2] rounded-lg shadow-lg p-8">
        <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-700 md:text-2xl mb-6">
            Dodaj nowy przedmiot:
        </h2>
        <form class="space-y-6" action="{{ route('subject.addNew')}}" method="post">
            @csrf
            <div>
                <input type="text" name="newSubject" id="newSubject" placeholder="np. Matematyka" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                <input type="hidden" name="userId" value="{{auth()->user()->id}}">
            </div>
            <button type="submit" class="w-full text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Dodaj</button>
        </form>
    </div>
</section>


<section class="flex flex-grow items-center justify-center ml-64">
    <div class="w-full max-w-xl bg-[#DCDCE2] rounded-lg shadow-lg p-8">
        <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-700 md:text-2xl mb-6">
            Usuń istniejący przedmiot:
        </h2>
        <form class="space-y-6" action="{{ route('subject.delete') }}" method="post">
            @csrf
            <select name="subjectId" required>
                <option selected disabled>Wybierz przedmiot</option>
                @foreach($subjectName as $names)
                    <option value="{{ $names->id }}">{{ $names->name }}</option>
                @endforeach
            </select>
            <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
            <button type="submit" class="w-full text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Usuń</button>
        </form>
    </div>
</section>
@if(session()->has('added'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('added')}}</p>
    </div>
@endif
@if(session()->has('deleted'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('deleted')}}</p>
    </div>
@endif
</body>
</html>
