<section class="flex items-center justify-center">
    <div class="w-full max-w-lg bg-[#DCDCE2] rounded-lg shadow-lg p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-700 md:text-2xl mb-6">
            Tworzenie konta
        </h1>

        <form class="space-y-6" action="{{ route('create.account') }}" method="post">
            @csrf
            <div>
                <label for="firstName" class="block mb-2 text-sm font-medium text-gray-700">Imię:</label>
                <input type="text" name="firstName" id="firstName" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="lastName" class="block mb-2 text-sm font-medium text-gray-700">Nazwisko:</label>
                <input type="text" name="lastName" id="lastName" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Hasło:</label>
                <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="password_confirmed" class="block mb-2 text-sm font-medium text-gray-700">Potwierdź hasło:</label>
                <input type="password" name="password_confirmed" id="password_confirmed" class="bg-gray-50 border border-gray-300 text-gray-700 rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <button type="submit" class="w-full text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Stwórz konto
            </button>
        </form>
    </div>
</section>
