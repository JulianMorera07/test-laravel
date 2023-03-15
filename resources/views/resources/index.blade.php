<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        <a href="{{route('hotel.index')}}" class="scale-100 p-6 bg-gray dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <div >

                </div>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Ver hoteles</h2>

                <p class="mt-4 text-gray-800 dark:text-white text-sm leading-relaxed">
                    En esta opición podrá ver y agregar nuevos hoteles. Para agregar nuevos hoteles por favor tenga en cuenta tener los siguiente datos antes de continuar:<br>
                    - Nombre del hotel<br>
                    - Direción del hotel<br>
                    - Ciudad del hotel<br>
                    - NIT del hotel<br>
                    - Número de habitaciones en el hotel<br>
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
        </a>

        <a href="{{route('room.index')}}" class="scale-100 p-6 bg-gray dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <div>

                </div>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Ver habitaciones asiganadas</h2>

                <p class="mt-4 text-gray-800 dark:text-white text-sm leading-relaxed">
                    Dentro de esta sección podrá ver y asiganar tipos de habitaciones a los hoteles de dercameron, dentro de este tipo usted podra escoger:<br>
                    - Estandar<br>
                    - Junior<br>
                    - Suite<br>
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
        </a>
    </div>
</x-app-layout>
