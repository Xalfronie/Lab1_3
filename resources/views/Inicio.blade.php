<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Educativo</title>
    @vite('resources/css/app.css')
</head>
<body class="">
<!-- ========================================menu===================================================== -->
    <div class="fixed top-0 left-0 w-full bg-gray-200 shadow-md z-50">
    <nav class="flex justify-between items-center bg-gray-200 p-4">
        <ul class="flex">
            <img src="{{ asset('img/logo2.png') }}" alt="logo" class="h-50 w-10">
            <a href="#" class="pr-6 ps-4"><h1>Mundo Educativo</h1></a>
            <li class="hidden md:block"><a href="#" class="pr-4">Inicio</a></li>
            <li class="hidden md:block"><a href="#" class="pr-4">Acerca de Nosotros</a></li>
            <li class="hidden md:block"><a href="#" class="pr-4">FAQ</a></li>
        </ul>
        <ul class="hidden md:flex">
            <li><a href="{{ route('registro') }}" class="pr-4">Registro</a></li>
            <li><a href="{{ route('login') }}" class="pr-4">Iniciar Sesión</a></li>
        </ul>

        <!-- boton para el menu de telefonos -->
        <button class="md:hidden outline-none mobile-menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </nav>
    </div>

    <!-- menu despegable -->
    <div class="hidden mobile-menu md:hidden bg-gray-200 p-4 pt-20">
        <center><ul class="flex flex-col">
            <li><a href="#" class="pr-4">Inicio</a></li>
            <li><a href="#" class="pr-4">FAQ</a></li>
            <li><a href="#" class="pr-4">Acerca de Nosotros</a></li>
            <li><a href="{{ route('registro') }}" class="pr-4">Registro</a></li>
            <li><a href="#" class="pr-4">Iniciar Sesión</a></li>
        </ul></center>
    </div>
<!-- ========================================menu===================================================== -->
<!-- ========================================acerca de nosotros===================================================== -->
    <div class="min-h-screen bg-white dark:bg-zinc-800 p-5 pt-20">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-zinc-900 dark:text-white">Mundo Educativo</h1>
            <p class="text-zinc-600 dark:text-zinc-300 mt-4">Bienvenidos a nuestra página donde compartimos nuestros principales valores y objetivos.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-zinc-100 dark:bg-zinc-700 p-5 rounded-lg">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-white">Misión</h2>
                <p class="text-zinc-600 dark:text-zinc-300 mt-2">Nuestra misión es ofrecer soluciones innovadoras y efectivas a nuestros clientes, asegurando la máxima calidad en todos nuestros servicios.</p>
                <img src="https://placehold.co/300x200" alt="Misión" class="mt-4 rounded-lg">
            </div>
            <div class="bg-zinc-100 dark:bg-zinc-700 p-5 rounded-lg">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-white">Visión</h2>
                <p class="text-zinc-600 dark:text-zinc-300 mt-2">Ser líderes en el mercado, reconocidos por nuestra integridad, creatividad y sostenibilidad, expandiéndonos a nuevos mercados internacionales.</p>
                <img src="https://placehold.co/300x200" alt="Misión" class="mt-4 rounded-lg">
            </div>
            <div class="bg-zinc-100 dark:bg-zinc-700 p-5 rounded-lg">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-white">Valores</h2>
                <p class="text-zinc-600 dark:text-zinc-300 mt-2">Compromiso con la excelencia, responsabilidad social, innovación continua y respeto por las personas y el medio ambiente.</p>
                <img src="https://placehold.co/300x200" alt="Misión" class="mt-4 rounded-lg">
            </div>
        </div>
    </div>
<!-- ========================================acerca de nosotros===================================================== -->
<!-- ========================================FAQ======================================================-->
    <div class="max-w-7xl mx-auto p-4 flex flex-col md:flex-row items-start">
        <div class="w-full md:w-1/2 p-4">
            <img src="https://placehold.co/500" alt="Imagen representativa" class="rounded-lg shadow-lg">
        </div>
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl font-bold text-center mb-6 dark:text-white">Preguntas Frecuentes</h2>
            <div class="space-y-4">
                <details class="bg-zinc-100 p-4 rounded-lg dark:bg-zinc-800">
                    <summary class="font-semibold cursor-pointer dark:text-white">¿hola?</summary>
                    <p class="mt-2 dark:text-zinc-300">Buenas tardes</p>
                </details>
                <details class="bg-zinc-100 p-4 rounded-lg dark:bg-zinc-800">
                    <summary class="font-semibold cursor-pointer dark:text-white">¿tengo habre?</summary>
                    <p class="mt-2 dark:text-zinc-300">yo tambien</p>
                </details>
                <details class="bg-zinc-100 p-4 rounded-lg dark:bg-zinc-800">
                    <summary class="font-semibold cursor-pointer dark:text-white">¿Cómo puedo contactar con atención al cliente?</summary>
                    <p class="mt-2 dark:text-zinc-300">Puedes contactarnos a través de nuestro formulario de contacto, por correo electrónico o llamando a nuestro número de atención al cliente disponible en la página de contacto.</p>
                </details>
                <details class="bg-zinc-100 p-4 rounded-lg dark:bg-zinc-800">
                    <summary class="font-semibold cursor-pointer dark:text-white">¿Pizza?</summary>
                    <p class="mt-2 dark:text-zinc-300">si </p>
                </details>
            </div>
        </div>
    </div>
<!-- ========================================FAQ======================================================-->

    <script src="{{ asset('js/Inicio.js') }}"></script>
</body>
</html>