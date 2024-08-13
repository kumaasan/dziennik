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
                        <p class="text-2xl text-white capitalize">Konto gościa</p>
                    </div>
                @endguest
                @auth()
                    <div class="flex items-center justify-center h-24 rounded bg-gray-50 glassEffect">
                        <p class="text-2xl text-white capitalize">Witaj {{auth()->user()->first_name}} {{auth()->user()->last_name}}</p>
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
        some small footer here :3
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

@endsection
