<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            



            <div class="max-w-7xl mt-14 mx-auto p-6 lg:p-8">

                <div class="w-full bg-white rounded-lg overflow-hidden shadow-md mb-5 transform hover:scale-105 transition-transform duration-300">
                    <div class="text-center bg-gradient-to-r from-blue-500 to-green-500 py-4 mt-5">
                        <h1 class="text-6xl font-semibold text-white">Welcome</h1>
                    </div>
                    <div class="p-4">
                        <p class="text-3xl text-center font-semibold">Ministry of Humanitarian Affairs and Disaster Management<p>
                        <p class="text-xl text-center font-semibold">Bauchi State Nigeria.<p>
                    </div>
                </div>
                
                
                
                



                <div class="flex justify-center items-center mt-16">
                    <div class="max-w-xl bg-white rounded-lg overflow-hidden text-center p-5 py-8 hover:shadow-md hover:scale-105 transition-transform duration-300 ease-in-out">
                        <a href="/">
                            <img src="{{ asset('assets/images/KauraNew.jpg') }}" alt="Kaura Logo" class="w-96 h-96 sm:w-96 sm:h-96 mx-auto min-w-96 min-h-96 max-w-120 max-h-120 rounded-lg transition-transform duration-300 ease-in-out hover:border border-white">
                        </a>
                    </div>
                </div>
                
                
                <div class="flex justify-center mt-16">
                    <div style="box-shadow: 0 4px 6px -1px rgba(0, 0, 255, 0.1), 0 2px 4px -1px rgba(0, 0, 255, 0.06);" class="max-w-sm bg-white rounded-lg overflow-hidden">
                        <div class="h-80 w-80 rounded-full flex items-center justify-center">
                            <img class="w-full h-full" src="{{asset('assets\images\InventoryImage.jpg')}}" alt="Card Image">
                        </div>
                    </div>
                </div>
                
                
                
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <!-- Card 1 -->
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Pioneering Leadership: Bauchi State Governor's Vision</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Governor Sen. Bala Abdulkadir's visionary establishment of the Ministry of Humanitarian Affairs and Disaster Management in Bauchi State showcases proactive leadership in addressing crises and disasters, centralizing coordination, and prioritizing long-term welfare.
                                </p>
                            </div>
                        </div>
                
                        <!-- Card 2 -->
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Enhancing Disaster Response and Welfare in Bauchi State</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Governor Abdulkadir's innovative Ministry of Humanitarian Affairs and Disaster Management improves disaster response and long-term welfare in Bauchi State. It fosters collaboration, ensures efficient coordination, and reflects a commitment to the well-being of vulnerable populations.
                                </p>
                            </div>
                        </div>
                
                        <!-- Card 3 -->
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Bauchi State's Resilience-Building Approach</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Bauchi State's Governor Sen. Bala Abdulkadir's establishment of the Ministry of Humanitarian Affairs and Disaster Management prioritizes resilience-building. It centralizes coordination, promotes collaboration, and addresses long-term welfare, setting a strong foundation for sustainable development.
                                </p>
                            </div>
                        </div>
                
                        <!-- Card 4 -->
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Innovation and Proactive Governance: Bauchi State's Model</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Governor Abdulkadir's Ministry of Humanitarian Affairs and Disaster Management demonstrates innovation and proactive governance in addressing crises. It centralizes efforts, encourages collaboration, and emphasizes the welfare of vulnerable populations, symbolizing a forward-looking approach.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Coredigit
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>