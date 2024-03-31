<div class="sm:flex sm:items-center sm:justify-between">
    <div>
        <div class="flex items-center gap-x-3">
            <a href="{{ route('dashboard') }}">
                <img alt="Logotipo SupportGenius" height="50" src="../img/support_genius.png" width="100">
            </a>
            {{-- <h1 class="text-black-500 text-lg">Fórum</h1> --}}

            <span
                class="rounded-full bg-blue-100 px-3 py-1 text-xs text-blue-600 dark:bg-gray-800 dark:text-blue-400">{{ $supports->total() }}
                dúvidas
            </span>
        </div>
    </div>

    <div class="mt-4 flex items-center gap-x-3">
        <a class="flex w-1/2 items-center justify-center gap-x-2 rounded-lg border bg-white px-5 py-2 text-sm text-gray-700 transition-colors duration-200 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-gray-800 sm:w-auto"
            href="{{ route('supports.create') }}">
            <svg class="h-5 w-5" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span>Nova Dúvida</span>
        </a>
    </div>
</div>

<div class="mt-6 md:flex md:items-center md:justify-between">
    <div class="relative mt-4 flex items-center md:mt-0">
        <span class="absolute">
            <svg class="mx-3 h-5 w-5 text-gray-400 dark:text-gray-600" fill="none" stroke-width="1.5"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </span>
        <form action="{{ route('supports.index') }}" method="get">
            <input
                class="block w-full rounded-lg border border-gray-200 bg-white py-1.5 pl-11 pr-5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 rtl:pl-5 rtl:pr-11 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300 md:w-80"
                name="filter" placeholder="Procurar" type="text" value="{{ $filters['filter'] ?? '' }}">
        </form>
    </div>
</div>
