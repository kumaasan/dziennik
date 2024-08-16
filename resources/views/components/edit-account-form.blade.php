<form class="w-3/5 mx-auto bg-[#DCDCE2] rounded-lg shadow-lg px-8 pb-8 space-y-6" method="post" action="{{route('account.update')}}">
    @csrf
    @method('patch')
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-700 md:text-2xl mb-6">
        Edytuj konto
    </h1>

    <!-- First Name Input -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-700">Imie</label>
        <input type="text" name="new_first_name" value="{{ old('new_first_name', auth()->user()->first_name) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        @error('new_first_name')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Last Name Input -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-700">Nazwisko</label>
        <input type="text" name="new_last_name" value="{{ old('new_last_name', auth()->user()->last_name) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
        @error('new_last_name')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email Input -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="new_email" value="{{ old('new_email', auth()->user()->email) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        @error('new_email')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Minimal Average Input -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-700">Minimalna średnia</label>
        <input type="text" name="minimal_average" value="{{$minimalAverage}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        @error('minimal_average')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password Reset Link -->
    <a href="{{route('password.reset.form')}}" class="mb-5 flex items-center space-x-2">
        <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"/>
        </svg>
        <label class="text-sm font-medium text-gray-700">Zmień hasło</label>
    </a>

    <!-- Submit Button -->
    <button type="submit" class="w-full text-white bg-[#1e3a8a] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Zapisz</button>
</form>

