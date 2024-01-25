<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        @vite(['resources/css/app.css','resources/css/style.css','resources/js/bundle.js','resources/js/utilities1.js','resources/js/app.js'])
    </head>
    <body   x-data="{ page: 'analytics', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
            x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
            :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">
            @include('admin.layout.preloader')
            <div class="flex h-screen overflow-hidde">
                @include('admin.layout.sidebar')
                <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                    @include('admin.layout.header')
                    <main>
                        <div class="mx-auto container p-4 md:p-6 2xl:p-0 min-h-screen">
                                {{ $slot }}
                        </div>
                    </main>
                    <footer class="sticky bottom-0 z-999 drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
                        <div class="container  bg-white/90 p-1">
                            <div class="flex gap-10  mx-auto  justify-between items-center py-1 px-4">
                                <p class=" p-2 shadow-black dark:text-black/95">© Copyrigth 2024 . Tous droits reserevés.</p>
                                <p class=" p-2 shadow-black dark:text-black/95">Developpé par <a href="mailto: durandjosephadji25@gmail.com" class="text-blue-700 font-bold">Durand kushiki 777</a></p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
    </body>
</html>
