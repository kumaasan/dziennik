<header class="backdrop-blur-lg backdrop-filter bg-white/10 max-lg:backdrop-filter max-lg:backdrop-blur-lg max-lg:bg-white/10 text-white">
    <nav class="flex items-center justify-between px-12 h-16 lg:gap-8 py-12">
        <img src="{{asset('logo.svg')}}" alt="logo" class="w-20 invert-color">

        <div class="dropdownMenu max-lg:hidden absolute top-24 left-0 max-lg:rounded-b-2xl max-lg:z-50 max-lg:bg-white/10 max-lg:backdrop-filter max-lg:backdrop-blur-lg w-full flex flex-col gap-6 items-center py-2 text-lg font-bold lg:static lg:flex-row lg:justify-around">
            <ul class="flex flex-col items-center gap-6 lg:flex-row lg:gap-8">
                <li class="whitespace-nowrap hover:underline hover:text-gray-400">
                    <a href="{{route('homePage')}}">Strona główna</a>
                </li>
                <li class="whitespace-nowrap hover:underline hover:text-gray-400">
                    <a href="{{route('subject.showAll')}}">Wszystkie przedmioty</a>
                </li>
                <li class="whitespace-nowrap hover:underline hover:text-gray-400">
                    <a href="{{route('subject.addNewSubject')}}">Edytuj przedmioty</a>
                </li>
                <li class="whitespace-nowrap hover:underline hover:text-gray-400">
                    <a href="{{route('account.show')}}">Konto</a>
                </li>
            </ul>

            <div class="flex flex-row items-center lg:flex-row">
                @guest
                    <button class="px-4 py-2 whitespace-nowrap rounded-l-xl text-white m-0 bg-red-500 hover:bg-red-600 transition">
                        <a href="{{route('loginPage')}}">Zaloguj się</a>
                    </button>
                    <button class="px-4 whitespace-nowrap py-2 rounded-r-xl bg-orange-500 transition">
                        <a href="{{route('create.account.form')}}">Stwórz konto</a>
                    </button>
                @endguest

                @auth
                    <button class="px-4 py-2 rounded-lg text-white bg-red-500 hover:bg-red-600 transition">
                        <a href="{{route('logout')}}">Wyloguj się</a>
                    </button>
                @endauth
            </div>
        </div>

        <div class="toggleButton cursor-pointer lg:hidden">
            <svg class="size-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>
        </div>
    </nav>
</header>

<script>
    document.querySelector('.toggleButton').addEventListener('click', function() {
        document.querySelector('.dropdownMenu').classList.toggle('max-lg:hidden');
    });
</script>
