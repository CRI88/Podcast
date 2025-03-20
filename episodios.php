<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CastWave</title>
    <link rel="icon" href="img/logo.webp" type="image/png">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="functions/modal.js"></script>
    <script type="module" src="functions/episodios.js" defer></script>
</head>
<body id="contenedorBodyEpisodios">
    <?php include 'header.php'; ?>

    <!-- Modal de Inicio de Sesión / Registro -->
    <div id="authModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96 relative">
            <!-- Botón de Cerrar -->
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">
                &times;
            </button>

            <!-- Formulario de Inicio de Sesión -->
            <div id="loginForm">
                <h2 class="text-xl font-bold text-center mb-4">Iniciar Sesión</h2>
                <input type="email" placeholder="Correo electrónico" class="w-full border p-2 mb-2 rounded-lg">
                <input type="password" placeholder="Contraseña" class="w-full border p-2 mb-4 rounded-lg">
                <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-700" onclick="window.location.href='episodios.php'">Ingresar</button>
                <p class="text-sm text-center mt-4">
                    ¿No tienes cuenta?
                    <a href="#" class="text-blue-500 hover:underline" onclick="showRegister()">Regístrate</a>
                </p>
            </div>

            <!-- Formulario de Registro (Oculto por defecto) -->
            <div id="registerForm" class="hidden">
                <h2 class="text-xl font-bold text-center mb-4">Registro</h2>
                <input type="text" placeholder="Nombre" class="w-full border p-2 mb-2 rounded-lg">
                <input type="email" placeholder="Correo electrónico" class="w-full border p-2 mb-2 rounded-lg">
                <input type="password" placeholder="Contraseña" class="w-full border p-2 mb-4 rounded-lg">
                <button class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-700" onclick="window.location.href='episodios.php'">Registrarse</button>
                <p class="text-sm text-center mt-4">
                    ¿Ya tienes cuenta?
                    <a href="#" class="text-blue-500 hover:underline" onclick="showLogin()">Iniciar sesión</a>
                </p>
            </div>
        </div>
    </div>






    <h1 class="w-full text-3xl text-blue-500 text-center">Podcasts</h1>
    <div id="divListaPodcasts" class="flex flex-col gap-4 p-10">
    </div>







    <?php include 'footer.php'; ?>
</body>
</html>