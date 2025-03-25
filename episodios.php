<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CastWave</title>
    <link rel="icon" href="img/logo.webp" type="image/png">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="functions/modal.js"></script>
    <script type="module" src="functions/index.js"></script>
</head>

<body id="contenedorBodyEpisodios" class="bg-image bg-cover bg-center bg-no-repeat" style="background-image: url('img/fondo.webp');">
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


    <section>

        <div class="p-10">
            <div
                class="w-full h-100 flex flex-col gap-4 p-10 justify-end rounded-lg bg-cover bg-center bg-no-repeat bg-[url('https://blog.freemusicprojects.com/wp-content/uploads/2019/10/music-production-banner.jpg')]">
                <h1 class="text-white font-bold text-5xl">Reproduce tus pistas</h1>
            </div>
        </div>


        <div id="contenedorHome" class="w-full flex flex-row flex-wrap items-center justify-center gap-8 px-10">

        </div>
    </section>

    <br><br>

    <?php include 'footer.php'; ?>
</body>

</html>