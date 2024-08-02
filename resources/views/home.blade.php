@extends('layouts.app')

@section('title', 'Strona Głowna')

@section('head')
@endsection

@section('content')

    <x-sidebar></x-sidebar>
    <!-- main content -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800 ">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                @guest()
                    <div class="flex items-center justify-center h-24 rounded bg-gray-50 glassEffect">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">Konto gościa</p>
                    </div>
                @endguest
                @auth()
                    <div class="flex items-center justify-center h-24 rounded bg-gray-50 whiteGlassEffect">
                        <p class="text-2xl text-white">Witaj {{auth()->user()->first_name}}</p>
                    </div>
                @endauth

                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded h-28 bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded h-28 bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
        </div>
    </div>

    {{--    <div class="flex items-center justify-center flex-col border-2 rounded-lg p-8 bg-white shadow-lg">--}}
    {{--        <h2 class="text-2xl font-bold text-gray-700 mb-4">Średnia roczna:</h2>--}}
    {{--        <p class="text-4xl font-semibold text-blue-600 mb-6">4.00</p>--}}

    {{--        <h2 class="text-2xl font-bold text-gray-700 mb-4">Zagrożneia:</h2>--}}
    {{--        <p class="text-4xl font-semibold text-red-600 mb-6">Brak</p>--}}

    {{--        <form action="{{ route('subject') }}">--}}
    {{--            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
    {{--                Wszystkie przedmioty--}}
    {{--            </button>--}}
    {{--        </form>--}}
    {{--    </div>--}}

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

@endsection
