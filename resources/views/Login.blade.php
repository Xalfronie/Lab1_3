<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
<body>
    <div class="min-h-screen flex flex-col sm:flex-row items-center justify-center bg-zinc-100 dark:bg-zinc-900">
    <div class="flex flex-col w-full sm:w-1/2 p-8">
        <h2 class="text-2xl font-bold text-center text-zinc-800 dark:text-white mb-6">Iniciar sesión</h2>
        <div class="mb-6">
            <button onclick="window.location.href='/'" class="text-indigo-600 dark:text-indigo-400 hover:underline">
                ← Regresar al inicio
            </button>
        </div>
        <div class="mb-6 text-center">
        <div class="flex gap-4 mb-6">
            <button class="w-full flex items-center justify-center bg-white dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-700 rounded-lg py-2 px-4 shadow-sm">
                <img src="{{ asset('img/google.png') }}" alt="Google Logo" class="h-5 mr-2" crossorigin="anonymous">
                Usar Google
            </button>
        </div>
            <hr class="border-zinc-300 dark:border-zinc-700 mb-6">
        </div>
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
        <div>
            <label for="email" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">Correo:</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 bg-white border border-zinc-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-zinc-800 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white" placeholder="you@example.com">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">Contraseña:</label>
            <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 bg-white border border-zinc-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-zinc-800 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white" placeholder="••••••••">
        </div>
        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-900">Sign in</button>
        </form>
        <div class="mt-6 text-center">
        <button class="text-indigo-600 hover:text-indigo-800 dark:hover:text-indigo-400 text-sm font-medium">¿Olvidó su contraseña?</button>
        <p class="mt-4 text-sm text-zinc-600 dark:text-zinc-400">¿No tienes una cuenta? <a href="{{ route('registro') }}" class="text-indigo-600 hover:text-indigo-800 dark:hover:text-indigo-400">Registro</a></p>
        </div>
    </div>
    <div class="hidden sm:block sm:w-1/2">
        <img src="https://placehold.co/600x600" alt="Login Image" class="w-full h-full object-cover">
    </div>
    </div>
</body>
</body>
</html>