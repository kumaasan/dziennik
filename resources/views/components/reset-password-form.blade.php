<form class="w-3/5 mx-auto bg-[#DCDCE2] rounded-lg shadow-lg px-8 pb-8 space-y-6" method="post" action="{{ route('account.changePassword') }}">
    @csrf
    @method('PATCH')
    <h1 class="text-xl font-bold pt-5 leading-tight tracking-tight text-gray-700 md:text-2xl mb-6">
        Zmień hasło
    </h1>
    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email:</label>
        <input type="email" name="email" id="email" value="{{old('email')}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>
    <div class="mb-5">
        <label for="" class="block mb-2 text-sm font-medium text-gray-700">Nowe hasło:</label>
        <input type="password" name="new_password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
    </div>
    <div class="mb-5">
        <label for="" class="block mb-2 text-sm font-medium text-gray-700">Potwierdź nowe hasło:</label>
        <input type="password" name="new_password_confirmed" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>
    <button type="submit" class="w-full text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Zapisz</button>
</form>
