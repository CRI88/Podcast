<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="functions/modal.js"></script>
</head>

<body>
    <header class="bg-gradient-to-r bg-blue-200 via-pink-400 to-yellow-600">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-12 w-auto rounded-lg" src="img/logo.webp" alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="index.php"
                    class="text-sm font-semibold text-gray-900 hover:text-gray-600 hover:border-b-2 hover:border-gray-300 transition-all duration-300">Inicio</a>
                <a href="episodios.php"
                    class="text-sm font-semibold text-gray-900 hover:text-gray-600 hover:border-b-2 hover:border-gray-300 transition-all duration-300">Podcasts</a>
                <a href="contacto.php"
                    class="text-sm font-semibold text-gray-900 hover:text-gray-600 hover:border-b-2 hover:border-gray-300 transition-all duration-300">Participación</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <button onclick="openModal()"
                    class="inline-flex items-center px-4 py-2 text-sm font-semibold text-white bg-blue-500 hover:bg-blue-700 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Iniciar sesión
                    <span aria-hidden="true" class="ml-2">&rarr;</span>
                </button>
            </div>
        </nav>
    </header>
</body>

</html>