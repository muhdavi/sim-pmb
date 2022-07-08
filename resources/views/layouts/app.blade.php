<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIMPMB') }} 1.0</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen w-full flex overflow-hidden select-none">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="pt-2 pb-2 px-10 flex-1 bg-gray-200 dark:bg-black transition duration-500 ease-in-out overflow-y-auto">
                {{ $slot }}
            </main>

                {{--
            <aside class="w-1/4 my-1 mr-1 px-6 py-4 flex flex-col bg-gray-200 dark:bg-black dark:text-gray-400 rounded-r-lg overflow-y-auto">
                    <!-- Right side NavBar -->
                    <div class="flex items-center justify-between">
                        <!-- Info -->
                        <a href="inbox/" class="relative">
                            <!-- Left side -->
                            <span>
                                <svg class="h-5 w-5 hover:text-red-600 dark-hover:text-red-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                            </span>

                            <div class="absolute w-2 h-2 left-0 mb-6 ml-2 bottom-0">
                                <span class="px-2 py-1 bg-red-600 rounded-full text-white text-xs">7</span>
                            </div>
                        </a>

                        <div class="flex items-center">
                            <!-- Right side -->
                            <img class="h-10 w-10 rounded-full object-cover" src="https://i.pinimg.com/originals/68/e1/e1/68e1e137959d363f172dc3cc50904669.jpg" alt="tempest profile"/>
                            <button class="ml-1 focus:outline-none">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 192 512">
                                    <path d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72 72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72
							72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0
							352c0 39.8 32.2 72 72 72s72-32.2
							72-72-32.2-72-72-72-72 32.2-72 72z"></path>
                                </svg>

                            </button>

                        </div>

                    </div>

                    <span class="mt-4 text-gray-600">Monthly earnings</span>
                    <span class="mt-1 text-3xl font-semibold">$ 1,579.20</span>

                    <button class="mt-8 flex items-center py-4 px-3 text-white rounded-lg bg-green-400 shadow focus:outline-none">
                        <!-- Action -->
                        <svg class="h-5 w-5 fill-current mr-2 ml-3" viewBox="0 0 24 24">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                        </svg>
                        <span>Bill your Students</span>
                    </button>

                    <div class="mt-12 flex items-center">
                        <!-- Payments -->
                        <span>Payments</span>
                        <button class="ml-2 focus:outline-none">
                            <svg class="h-5 w-5 fill-current" viewBox="0 0 256 512">
                                <path
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9
						0l-22.6-22.6c-9.4-9.4-9.4-24.6
						0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3
						103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1
						34z"></path>
                            </svg>
                        </button>
                    </div>

                    <a
                        href="/"
                        class="mt-8 p-4 flex justify-between bg-gray-300 rounded-lg
			font-semibold capitalize">
                        <!-- link -->

                        <div class="flex">

                            <img
                                class="h-10 w-10 rounded-full object-cover"
                                src="https://lh3.googleusercontent.com/cX0xwvJKCNIFrl2wIwoYiIURxmZt1y7tF3wJvynqcnQG5tmYdKBLpDDvhXzmVZzrstAEkw=s151"
                                alt="veldora profile"/>

                            <div class="flex flex-col ml-4">

                                <span>veldora</span>
                                <span class="text-sm text-gray-600">english</span>

                            </div>

                        </div>

                        <span>$ 25</span>

                    </a>

                    <a
                        href="/"
                        class="mt-2 p-4 flex justify-between bg-gray-300 rounded-lg
			font-semibold capitalize">
                        <!-- link -->

                        <div class="flex">

                            <img
                                class="h-10 w-10 rounded-full object-cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1RZ5sKLtFG-Q2xfXlLa5DbFsmF52Gc-C49B4s63CtSxLkzQY&s"
                                alt="accelerator profile"/>

                            <div class="flex flex-col ml-4">

                                <span>accelerator</span>
                                <span class="text-sm text-gray-600">english</span>

                            </div>

                        </div>

                        <span>$ 25</span>

                    </a>
                    <a
                        href="/"
                        class="mt-2 p-4 flex justify-between bg-gray-300 rounded-lg
			font-semibold capitalize">
                        <!-- link -->
                        <div class="flex">
                            <img
                                class="h-10 w-10 rounded-full object-cover"
                                src="data:image/jpeg;base64,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"
                                alt="syndicate profile"/>
                            <div class="flex flex-col ml-4">
                                <span>syndicate</span>
                                <span class="text-sm text-gray-600">english</span>
                            </div>
                        </div>
                        <span>$ 25</span>
                    </a>
                    <div class="mt-4 flex justify-center capitalize text-blue-600">
                        <a href="expenses-dashboard/">see all</a>
                    </div>
                </aside>
                --}}
        </div>
    </body>
</html>
