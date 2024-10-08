<footer class="w-full pt-5 bg-[rgb(40,64,90)] max-lg:bg-[rgb(40,64,90)] bg-opacity-80 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <a href="{{route('homePage')}}" class="flex items-center justify-center">
                <img src="{{asset('logo.svg')}}" alt="logo" class="w-20 invert-color">
            </a>
            <ul class="text-md flex items-center justify-center flex-col gap-7 md:flex-row md:gap-12 transition-all duration-500 py-10 mb-10 border-b border-gray-200">
                <li><a href="{{route('homePage')}}" class="text-white transform hover:underline hover:text-gray-400 hover:scale-105 transition-all">Strona główna</a></li>
                <li><a href="{{route('account.show')}}" class="text-white hover:underline hover:text-gray-400 hover:scale-105 transition-all">Konto</a></li>
                <li><a href="{{route('subject.showAll')}}" class="text-white hover:underline hover:text-gray-400 hover:scale-105 transition-all">Oceny</a></li>
                <li><a href="{{route('policy.page')}}" class="text-white hover:underline hover:text-gray-400 hover:scale-105 transition-all">Polityka prywatności</a></li>
                <li><a href="{{route('contact.page')}}" class="text-white hover:underline hover:text-gray-400 hover:scale-105 transition-all">Kontakt</a></li>
            </ul>
            <span class="text-md pb-10 text-white text-center block">©Better Dziennik 2024, Wszelkie prawa zastrzeżone.</span>
        </div>
    </div>
</footer>

