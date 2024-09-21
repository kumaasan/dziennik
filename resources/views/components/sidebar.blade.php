<header class="bg-[rgb(40,64,90)] max-lg:bg-[rgb(40,64,90)]  bg-opacity-80    text-white">
    <nav class="flex items-center justify-between px-12 h-16 lg:gap-8 py-12">
        <a href="{{route('homePage')}}">
            <img src="{{asset('logo.svg')}}" alt="logo" class="w-20 invert-color">
        </a>

        <div class="dropdownMenu  max-lg:hidden bg-[rgb(40,64,90)] lg:bg-transparent bg-opacity-80 backdrop-filter backdrop-blur-xl    absolute top-24 left-0 max-lg:rounded-b-2xl max-lg:z-50  w-full flex flex-col gap-6 items-center py-2 text-lg font-bold lg:static lg:flex-row lg:justify-around">
            <ul class="flex flex-col items-center gap-6 lg:flex-row lg:gap-8">
                <li class="whitespace-nowrap hover:underline hover:text-gray-400 hover:scale-105 transition-all">
                    <a href="{{route('homePage')}}">Strona główna</a>
                </li>
                <li class="whitespace-nowrap hover:underline hover:text-gray-400 hover:scale-105 transition-all">
                    <a href="{{route('subject.showAll')}}">Wszystkie przedmioty</a>
                </li>
                <li class="whitespace-nowrap hover:underline hover:text-gray-400 hover:scale-105 transition-all">
                    <a href="{{route('subject.addNewSubject')}}">Edytuj przedmioty</a>
                </li>
                <li class="whitespace-nowrap hover:underline hover:text-gray-400 hover:scale-105 transition-all">
                    <a href="{{route('account.show')}}">Konto</a>
                </li>
            </ul>
            <div class="flex flex-row items-center gap-x-2 max-lg:pb-8 lg:flex-row">
                @guest
                    <button type="button" class="rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:scale-105 transition-all">
                        <a href="{{route('login')}}">Zaloguj się</a>
                    </button>
                    <button type="button" class="rounded-md bg-transparent border-[1px] border-white text-white px-3 py-2 text-sm font-semibold shadow-sm ring-1 ring-inset ring-gray-300 hover:scale-105 transition-all">
                        <a href="{{route('create.account.form')}}">Zarejestruj się</a>
                    </button>

                @endguest

                @auth
                    <button class="rounded-md bg-transparent border-[1px] border-white text-white px-3 py-2 text-sm font-semibold shadow-sm ring-1 ring-inset ring-gray-300 hover:scale-105 transition-all">
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

    document.addEventListener('click', function(event) {
        const dropdownMenu = document.querySelector('.dropdownMenu');
        const toggleButton = document.querySelector('.toggleButton');
        const isClickInside = dropdownMenu.contains(event.target) || toggleButton.contains(event.target);

        if (!isClickInside) {
            dropdownMenu.classList.add('max-lg:hidden');
        }
    });
</script>
