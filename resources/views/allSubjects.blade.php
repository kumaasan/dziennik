<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wszystkie przedmioty</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[url('../../public/background/background.svg')]">
<x-sidebar></x-sidebar>
<div class="flex">
    <div class="flex-shrink-0 w-64">
        <!-- This div matches the width of the sidebar to create the space -->
    </div>
    <div class="flex-grow flex justify-center items-center w-full min-h-screen p-4">
        <div class="w-full max-w-4xl">
            @foreach($subjects as $subject)
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-3/5 px-2 mb-4 md:mb-0">
                        <div class="flex flex-col items-center justify-center border-2 rounded-lg p-3 bg-[#DCDCE1] shadow-lg h-full">
                            <h2 class="text-2xl font-bold text-gray-700 mb-4">{{$subject->name}}</h2>
                            <div class="flex gap-3 w-full">
                                <div class="flex-1">
                                    <form action="{{route('addGrade', ['subject_id' =>  $subject->id]) }}" method="post" class="flex flex-col gap-3 w-full">
                                        @csrf
                                        <div>
                                            <label for="weight" class="block text-sm font-medium text-gray-700">Waga</label>
                                            <input type="number" id="weight" name="weight" class="mt-1 block w-full bg-[#F9FAFB] border-gray-300 rounded-md shadow-sm">
                                        </div>
                                        <div>
                                            <label for="grade" class="block text-sm font-medium text-gray-700">Ocena</label>
                                            <input type="number" id="grade" name="grade" class="mt-1 block bg-[#F9FAFB] w-full border-gray-300 rounded-md shadow-sm">
                                        </div>
                                        <button type="submit" class="w-full text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                            Dodaj
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-2/5 px-2">
                        <div class="flex flex-col items-center justify-center border-2 rounded-lg p-3 bg-[#DCDCE1] shadow-lg h-full">
                            <h2 class="text-2xl font-bold text-gray-700 mb-4">Oceny:</h2>
                            <div class="flex flex-wrap gap-1 h-full mb-2">
                                @foreach($subject->grades as $grade)
                                    <span weight="{{$grade->weight}}" class="grade-span bg-[#F9FAFB] rounded-full px-3 py-1">{{ $grade->grade }}</span>
                                @endforeach
                            </div>
                            <span class="hidden" id="grade-weight"></span>
                            <h2 class="text-2xl font-bold text-gray-700 mb-4">Średnia:</h2>
                            <p class="text-2xl font-bold text-green-500 mb-4">@if($subject->average >0) {{$subject->average}} @endif</p>
                            <button type="button" class="w-full mt-5 text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                Edytuj
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
            @auth
                <div class="h-[400px] w-3/5 flex items-center justify-center bg-gray-50 glassEffect">elo</div>
            @endauth
        </div>
    </div>
</div>

<script>
    let grades = document.getElementsByClassName('grade-span');
    Array.from(grades).forEach(e => {
        e.addEventListener('click', function(){
            Swal.fire('Waga oceny: ' + e.getAttribute('weight'));
        })
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
