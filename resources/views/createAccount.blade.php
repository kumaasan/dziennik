<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tworzenie konta</title>
    @vite('resources/css/app.css')

</head>
<body>
<section class="bg-gradient-to-r from-cyan-500 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="w-full flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full max-w-xl bg-white rounded-lg shadow-lg md:mt-0 xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-700 md:text-2xl">
                    Tworzenie konta
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('crete.account')}}" method="post">
                    @csrf
                    <div>
                        <label for="firstName" class="block mb-2 text-sm font-medium text-gray-700">Imię:</label>
                        <input type="text" name="firstName" id="firstName" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    </div>
                    <div>
                        <label for="lastName" class="block mb-2 text-sm font-medium text-gray-700">Nazwisko</label>
                        <input type="text" name="lastName" id="lastName" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email:</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Hasło:</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    </div>

{{--                    <div>--}}
{{--                        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Potwierdź hasło:</label>--}}
{{--                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">--}}
{{--                    </div>--}}
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Stwórz konto</button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
