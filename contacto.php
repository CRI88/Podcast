<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CastWave</title>
    <link rel="icon" href="img/logo.webp" type="image/png">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="functions/modal.js" defer></script>
    <script src="functions/contacto.js" defer></script>
</head>

<body class="bg-image bg-cover bg-center bg-no-repeat" style="background-image: url('img/fondo.webp');">
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
                <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-700"
                    onclick="window.location.href='contacto.php'">Ingresar</button>
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
                <button class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-700"
                    onclick="window.location.href='contacto.php'">Registrarse</button>
                <p class="text-sm text-center mt-4">
                    ¿Ya tienes cuenta?
                    <a href="#" class="text-blue-500 hover:underline" onclick="showLogin()">Iniciar sesión</a>
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto mt-8 mb-8 p-6 bg-gray-800 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-white text-center">¿Cómo Participar?</h2>
        <p class="mt-4 text-gray-300 text-lg">
            Para participar y compartir tu podcast con nuestra comunidad, simplemente rellena el formulario con tus
            datos y sube tu archivo en formato MP3. Asegúrate de que el contenido sea apropiado para todos los oyentes.
        </p>
        <p class="mt-4 text-gray-300 text-lg">
            Al subir tu podcast, aceptas nuestros <span class="font-bold text-purple-500">Términos y Condiciones</span>
            y das tu consentimiento para que tu contenido sea compartido públicamente en el sitio. Los episodios subidos
            estarán disponibles para ser escuchados por cualquier persona que visite la página.
        </p>
        <p class="mt-4 text-gray-300 text-lg">
            ¡Estamos emocionados de escuchar lo que tienes para compartir! Si tienes alguna duda o necesitas ayuda, no
            dudes en contactarnos.
        </p>
    </div>


    <div class="max-w-4xl mx-auto mt-8 mb-8 p-6 bg-gray-800 shadow-md rounded-lg">
        <h1 class="text-3xl font-bold text-center text-white">Contacto</h1>
        <p class="text-center mt-4 text-gray-400">¿Tienes alguna duda o sugerencia? ¡Contáctanos!</p>

        <form class="w-full mt-8 space-y-4" id="contact-form" enctype="multipart/form-data">
            <!-- Campo de Nombre -->
            <div class="flex flex-col">
                <input type="text" placeholder="Nombre"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Campo de Correo Electrónico -->
            <div class="flex flex-col">
                <input type="email" placeholder="Correo electrónico"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Campo de Mensaje -->
            <div class="flex flex-col">
                <textarea placeholder="Mensaje"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
            </div>

            <!-- Campo de Carga de Archivos -->
            <div class="flex flex-col">
                <input type="file" id="file-upload" accept=".mp3"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                <span id="file-error" class="text-red-500 text-sm hidden mt-2">Formato de archivo no permitido. Solo
                    MP3.</span>
            </div>

            <!-- Botón de Enviar -->
            <div class="flex flex-col">
                <button type="submit" id="submitButton"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Enviar
                </button>
            </div>
        </form>
    </div>


    <!-- Modal de Éxito al Enviar el Formulario -->
    <div id="successModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 w-96 text-center">
            <h2 class="text-xl font-bold mb-4">¡Formulario Enviado!</h2>
            <p class="text-gray-300 mb-4">Tu mensaje ha sido enviado correctamente.</p>
            <button onclick="closeSuccessModal()" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                Cerrar
            </button>
        </div>
    </div>



    <?php include 'footer.php'; ?>
</body>

</html>