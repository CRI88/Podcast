<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CastWave</title>
    <link rel="icon" href="img/logo.webp" type="image/png">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="functions/modal.js"></script>
</head>

<body class="bg-image bg-cover bg-center bg-no-repeat" style="background-image: url('img/fondo.webp');">
    <?php include 'header.php'; ?>

    <div id="authModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96 relative">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">
                &times;
            </button>

            <div id="loginForm">
                <h2 class="text-xl font-bold text-center mb-4">Iniciar Sesión</h2>
                <input type="email" placeholder="Correo electrónico" class="w-full border p-2 mb-2 rounded-lg">
                <input type="password" placeholder="Contraseña" class="w-full border p-2 mb-4 rounded-lg">
                <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-700"
                    onclick="window.location.href='index.php'">Ingresar</button>
                <p class="text-sm text-center mt-4">
                    ¿No tienes cuenta?
                    <a href="#" class="text-blue-500 hover:underline" onclick="showRegister()">Regístrate</a>
                </p>
            </div>

            <div id="registerForm" class="hidden">
                <h2 class="text-xl font-bold text-center mb-4">Registro</h2>
                <input type="text" placeholder="Nombre" class="w-full border p-2 mb-2 rounded-lg">
                <input type="email" placeholder="Correo electrónico" class="w-full border p-2 mb-2 rounded-lg">
                <input type="password" placeholder="Contraseña" class="w-full border p-2 mb-4 rounded-lg">
                <button class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-700"
                    onclick="window.location.href='index.php'">Registrarse</button>
                <p class="text-sm text-center mt-4">
                    ¿Ya tienes cuenta?
                    <a href="#" class="text-blue-500 hover:underline" onclick="showLogin()">Iniciar sesión</a>
                </p>
            </div>
        </div>
    </div>


    <div class="max-w-4xl mx-auto mt-8 mb-8 p-6 bg-gray-800 shadow-md rounded-lg">
        <h1 class="text-3xl font-bold text-white text-center">Bienvenido a CastWave</h1>
        <p class="mt-4 text-gray-300 text-lg text-center">
            Descubre los mejores <span class="text-blue-500 font-bold">podcasts</span> de la comunidad. Explora una
            variedad de temas, desde <span class="text-purple-500 font-bold">tecnología</span> hasta
            <span class="text-blue-500 font-bold">entretenimiento</span>, pasando por educación, cultura y más.
        </p>
        <p class="mt-4 text-gray-300 text-lg text-center">
            En <span class="text-purple-500 font-bold">CastWave</span>, creemos en el poder de la voz para conectar,
            inspirar e informar. Nuestra plataforma está diseñada para que puedas encontrar contenido relevante y
            de calidad, producido por <span class="text-blue-500 font-bold">creadores apasionados</span> de todo el
            mundo.
        </p>
        <p class="mt-4 text-gray-300 text-lg text-center">
            Ya seas un oyente fiel o un <span class="text-purple-500 font-bold">creador de contenido</span>
            buscando una audiencia, aquí tienes un espacio donde tu voz importa.
        </p>
    </div>

    <div class="max-w-4xl mx-auto mt-8 mb-8 p-6 bg-gray-900 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-white text-center">Episodio Más Reciente</h2>

        <div class="flex justify-center mt-4">
            <img src="img/tecno.png" alt="Episodio más reciente" class="w-128 h-64 rounded-lg shadow-lg">
        </div>

        <p class="mt-4 text-gray-300 text-lg text-center">
            🎙️ "Título del Episodio" - Una conversación fascinante sobre el impacto de la tecnología en nuestras vidas.
        </p>

        <div class="mt-4 flex justify-center">
            <audio controls class="w-full max-w-lg">
                <source src="audios/episodio-mas-reciente.mp3" type="audio/mpeg">
                Tu navegador no soporta el reproductor de audio.
            </audio>
        </div>
    </div>

    <div class="max-w-4xl mx-auto flex justify-center mt-8 mb-8">
        <a href="episodios.php" class="bg-blue-600 text-white py-3 px-6 rounded-lg text-lg hover:bg-blue-700">
            Ver más podcasts
        </a>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>