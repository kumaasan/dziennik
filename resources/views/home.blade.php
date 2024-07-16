@extends('layouts.app')

@section('title', 'Home Page')

@section('head')
    <!-- Additional head content for the home page -->
@endsection

@section('content')
    <div class="flex items-center justify-center flex-col border-2 rounded-lg p-8 bg-white shadow-lg">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Średnia roczna:</h2>
        <p class="text-4xl font-semibold text-blue-600 mb-6">4.00</p>

        <h2 class="text-2xl font-bold text-gray-700 mb-4">Zagrożneia:</h2>
        <p class="text-4xl font-semibold text-red-600 mb-6">Brak</p>

        <form action="{{ route('subject') }}">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Wszystkie przedmioty
            </button>
        </form>
    </div>

    @if(session()->has('success'))
        <div class="fixed bg-blue-900 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p>{{session('success')}}</p>
        </div>
    @endif
@endsection

