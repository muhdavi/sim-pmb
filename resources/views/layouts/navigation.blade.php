<nav x-data="{ open: false }" class="w-24 flex flex-col items-center bg-white dark:bg-gray-800 py-4">
    <!-- Left side NavBar -->
    <div class="p-2">
        <!-- App Logo -->
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
        </a>
    </div>

    <!-- Navigation Links -->
    <ul class="mt-2 text-gray-700 dark:text-gray-400 capitalize">
        <!-- Links -->
        <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard') }}" class=" flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                    <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m10 8h-8v10h8V11m-10 4H3v6h8v-6z"></path>
                </svg>
                <span class="text-xs mt-2">dashBoard</span>
            </a>
        </li>

        @if(auth()->user()->as == 'wali')
        <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('backend.kelulusan') }}" class=" flex flex-col items-center">
                <svg class="h-7 w-7 fill-current" viewBox="0 0 24 24">
                    <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3m6.82 6L12 12.72 5.18 9 12 5.28 18.82 9M17 16l-5 2.72L7 16v-3.73L12 15l5-2.73V16z"></path>
                </svg>
                <span class="text-xs mt-2">kelulusan</span>
            </a>
        </li>
        @endif

        @if(auth()->user()->as == 'sekolah')
        <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('backend.pendaftaran') }}" class=" flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
                <span class="text-xs mt-2">pendaftar</span>
            </a>
        </li>
        @endif

        <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('backend.profil') }}" class=" flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-xs mt-2">profil</span>
            </a>
        </li>

        {{--
        <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300 rounded-lg">
            <a href="inbox/" class=" flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                    <path
                        d="M23 3v-.5a2.5 2.5 0 00-5 0V3c-.55 0-1 .45-1 1v4c0
							.55.45 1 1 1h5c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1m-1
							0h-3v-.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V3M6
							11h9v2H6v-2m0-4h9v2H6V7m16 4v5c0 1.11-.89 2-2 2H6l-4
							4V4a2 2 0 012-2h11v2H4v13.17L5.17 16H20v-5h2z"></path>
                </svg>
                <span class="text-xs mt-2">messages</span>
            </a>
        </li>

        <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300 rounded-lg">
            <a href="expenses-dashboard/" class=" flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                    <path
                        d="M21 18v1a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0
							012-2h14a2 2 0 012 2v1h-9a2 2 0 00-2 2v8a2 2 0 002
							2m0-2h10V8H12m4 5.5a1.5 1.5 0 01-1.5-1.5 1.5 1.5 0
							011.5-1.5 1.5 1.5 0 011.5 1.5 1.5 1.5 0 01-1.5 1.5z"></path>
                </svg>
                <span class="text-xs mt-2">earnings</span>
            </a>

        </li>

        <li
            class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
				rounded-lg">
            <a href="users-dashboard/" class=" flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 512 512">
                    <path
                        d="M505 442.7L405.3
							343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
							44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208
							208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7
							17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
							0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
							0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128
							57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
                <span class="text-xs mt-2">jobs</span>
            </a>

        </li>

        <li
            class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
				rounded-lg">
            <a href="meetup/" class=" flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                    <path
                        d="M19 19H5V8h14m0-5h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2
							2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2m-2.47
							8.06L15.47 10l-4.88 4.88-2.12-2.12-1.06 1.06L10.59
							17l5.94-5.94z"></path>
                </svg>
                <span class="text-xs mt-2">schedule</span>
            </a>

        </li>

        <li class="mt-3 p-2 hover:text-blue-600 rounded-lg">
            <a href="social-media-dashboard/" class=" flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                    <path d="M17 10.5V7a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h12a1 1 0 001-1v-3.5l4 4v-11l-4 4z"></path>
                </svg>
                <span class="text-xs mt-2">lesson</span>
            </a>
        </li> --}}

        <li class="mt-3 p-2 hover:text-blue-600 rounded-lg">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class=" flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="text-xs mt-2">logout</span>
                </a>
            </form>
        </li>
    </ul>

    <!-- Hamburger -->
    <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>


    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
