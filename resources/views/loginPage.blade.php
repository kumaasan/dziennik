<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logowanie</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500">

<x-sidebar></x-sidebar>

<section class="min-h-screen flex items-center justify-center">
    <div class="w-full flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full max-w-xl bg-[#F8F8FF] rounded-lg shadow-lg md:mt-0 xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-700 md:text-2xl">
                    Zaloguj się
                </h1>

                <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="post">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        @if ($errors->has('email'))
                            <div class="text-red-500 text-sm mt-2">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Hasło:</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        @if ($errors->has('password'))
                            <div class="text-red-500 text-sm mt-2">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Zaloguj się</button>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('password.reset.form') }}" class="text-sm font-medium text-blue-700 hover:underline">Zapomniałes hasła?</a>
                        <div class="text-sm text-gray-700">
                            Nie masz jeszcze konta? <a href="{{ route('create.account.form') }}" class="font-medium text-blue-700 hover:underline">utwórz konto</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>
