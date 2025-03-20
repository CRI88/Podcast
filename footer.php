<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <footer class="bg-gradient-to-r from-black via-purple-400 to-black text-white py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-center md:text-left">
                    <a href="#" class="flex items-center space-x-3">
                        <img class="h-12 w-auto rounded-lg" src="img/logo.webp" alt="Logo">
                        <span class="text-black text-lg font-semibold">CastWave</span>
                    </a>
                    <p class="mt-2 text-black text-sm">Tu plataforma favorita para podcasts y contenido exclusivo.</p>
                </div>

                <nav class="flex flex-wrap justify-center gap-6 md:gap-12">
                    <a href="index.php" class="text-sm text-black font-semibold hover:text-gray-200 transition duration-300">Inicio</a>
                    <a href="episodios.php" class="text-sm text-black font-semibold hover:text-gray-200 transition duration-300">Podcasts</a>
                    <a href="contacto.php" class="text-sm text-black font-semibold hover:text-gray-200 transition duration-300">Participación</a>
                </nav>

                <div class="flex space-x-6">
                    <a href="https://www.facebook.com/" class="text-black hover:text-gray-200 transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h11.495v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.788 4.661-4.788 1.325 0 2.463.098 2.795.142v3.24l-1.918.001c-1.504 0-1.794.714-1.794 1.763v2.312h3.59l-.467 3.622h-3.123V24h6.128c.732 0 1.325-.593 1.325-1.324V1.325C24 .593 23.407 0 22.675 0z" />
                        </svg>
                    </a>
                    <a href="https://github.com/" class="text-black hover:text-gray-200 transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c-5.468 0-9.837 4.369-9.837 9.837 0 4.337 3.536 7.897 8.09 8.729.592.11.81-.258.81-.577v-2.02c-3.293.716-3.987-1.584-3.987-1.584-.537-1.362-1.313-1.725-1.313-1.725-1.072-.733.08-.718.08-.718 1.186.083 1.81 1.217 1.81 1.217 1.054 1.807 2.764 1.284 3.438.982.108-.764.413-1.284.753-1.58-2.635-.3-5.411-1.317-5.411-5.863 0-1.294.464-2.354 1.223-3.18-.122-.3-.53-1.514.116-3.156 0 0 1.003-.321 3.287 1.214a11.435 11.435 0 0 1 2.99-.402c1.014.005 2.036.137 2.99.402 2.283-1.535 3.287-1.214 3.287-1.214.647 1.642.239 2.856.116 3.156.761.826 1.223 1.886 1.223 3.18 0 4.56-2.781 5.56-5.426 5.854.425.365.803 1.085.803 2.185v3.244c0 .323.216.694.818.576 4.548-.831 8.078-4.391 8.078-8.728 0-5.468-4.368-9.837-9.837-9.837z" />
                        </svg>
                    </a>
                    <a href="https://x.com/" class="text-black hover:text-gray-200 transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57c-.885.39-1.83.654-2.825.775a4.92 4.92 0 0 0 2.163-2.723 9.9 9.9 0 0 1-3.127 1.194 4.92 4.92 0 0 0-8.384 4.482A13.97 13.97 0 0 1 1.64 3.16a4.92 4.92 0 0 0 1.523 6.56A4.92 4.92 0 0 1 .96 8.88v.06a4.92 4.92 0 0 0 3.946 4.828 4.92 4.92 0 0 1-2.212.085 4.92 4.92 0 0 0 4.6 3.417A9.86 9.86 0 0 1 0 19.54a13.92 13.92 0 0 0 7.548 2.212c9.056 0 14.012-7.502 14.012-14.012 0-.213 0-.425-.015-.637A9.98 9.98 0 0 0 24 4.59a9.83 9.83 0 0 1-2.847.775 4.92 4.92 0 0 0 2.163-2.723z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="border-t border-black my-6"></div>

            <p class="text-center text-sm text-black">
                © 2025 CastWave. Todos los derechos reservados.
            </p>
        </div>
    </footer>
</body>

</html>