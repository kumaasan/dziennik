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
    <div class="flex-grow flex justify-center items-center w-full min-h-screen p-4">
        <div class="w-full max-w-4xl">
            @if($amountOfGrades == 0)
                <section class="flex flex-grow items-center justify-center">
                    <form action="{{ route('subject.addNewSubject') }}" method="get"
                          class="flex flex-col items-center justify-center bg-[#DCDCE1] border-2 border-gray-300 rounded-lg shadow-lg p-10 w-[450px]">
                        <div class="text-center w-full">
                            <h3 class="text-3xl font-bold text-gray-700 mb-6">Nie masz jeszcze żadnych ocen</h3>
                            <p class="text-lg text-gray-700 mb-8">Dodaj je tutaj</p>
                        </div>
                        <a href="{{route('subject.showAll')}}"
                           class="w-full flex items-center justify-center text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-6 py-3 focus:outline-none">
                            Dodaj oceny
                        </a>
                    </form>
                </section>
            @else
                @foreach($subjects as $subject)
                    <div class="flex flex-wrap -mx-2 mb-4">
                        <div class="w-full md:w-3/5 px-2 mb-4 md:mb-0">
                            <div
                                class="flex flex-col items-center justify-center border-2 rounded-lg p-3 bg-[#DCDCE1] shadow-lg h-full">
                                <h2 class="text-2xl font-bold text-gray-700 mb-4">{{$subject->name}}</h2>
                                <div class="flex gap-3 w-full">
                                    <div class="flex-1">
                                        <form action="{{route('delete.grade')}}" method="post"
                                              class="flex flex-col gap-3 w-full">
                                            @csrf
                                            @method('DELETE')
                                            <div>
                                                <label for="weight" class="block text-sm font-medium text-gray-700">Waga</label>
                                                <input type="number" id="weight" name="weight" class="mt-1 block w-full bg-[#F9FAFB] border-gray-300 rounded-md shadow-sm">
                                                @if ($errors->has('weight'))
                                                    <div class="text-red-500 text-sm mt-2">
                                                        {{ $errors->first('weight') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div>
                                                <label for="grade" class="block text-sm font-medium text-gray-700">Ocena</label>
                                                <input type="number" id="grade" name="grade" class="mt-1 block bg-[#F9FAFB] w-full border-gray-300 rounded-md shadow-sm">
                                                @if ($errors->has('grade'))
                                                    <div class="text-red-500 text-sm mt-2">
                                                        {{ $errors->first('grade') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <button type="button" disabled class="w-full text-white bg-gray-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                                Dodaj
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/5 px-2">
                            <div
                                class="flex flex-col items-center justify-center border-2 rounded-lg p-3 bg-[#DCDCE1] shadow-lg h-full">
                                <h2 class="text-2xl font-bold text-gray-700 mb-4">Oceny:</h2>
                                <div class="flex items-center justify-center flex-wrap gap-1 h-full mb-2">
                                    @foreach($subject->grades as $grade)
                                        <form id="delete-grade-{{ $grade->id }}" action="{{ route('delete.grade') }}"
                                              method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $grade->id }}">
                                            <input type="hidden" name="weight" value="{{ $grade->weight }}">
                                            <input type="hidden" name="grade" value="{{ $grade->grade }}">
                                        </form>

                                        <span class="grade-span bg-[#F9FAFB] rounded-full px-3 py-1 cursor-pointer" onclick="confirmDeleteGrade('{{ $grade->id }}', '{{ $grade->grade }}', '{{ $grade->weight }}')">
                                            {{ $grade->grade }}
                                        </span>
                                    @endforeach
                                </div>
                                <a href="{{ route('subject.showAll') }}"
                                   class="w-full text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none text-center">
                                    Zapisz
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<x-footer></x-footer>
@if(session()->has('deletedGrade'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('deletedGrade')}}</p>
    </div>
@endif

@if(session()->has('gradeDeleteFail'))
    <div class="fixed bg-blue-900 text-white py-5 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session('gradeDeleteFail')}}</p>
    </div>
@endif

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDeleteGrade(gradeId, grade, weight) {
        Swal.fire({
            title: 'Potwierdzenie usunięcia',
            text: `Czy na pewno chcesz usunąć ocenę ${grade} o wadze ${weight}?`,
            icon: 'warning',
            showCancelButton: true,
            background: '#F9FAFB',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tak, usuń',
            cancelButtonText: 'Anuluj'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-grade-${gradeId}`).submit();
            }
        });
    }
</script>

</body>
</html>
