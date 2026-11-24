
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | MAREA</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#f8f6f0] text-[#173044]">

    <main class="grid min-h-screen lg:grid-cols-2">

        <!-- Lado izquierdo: imagen del hotel -->
        <section class="relative hidden min-h-screen overflow-hidden lg:block">

            <img
                src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1400&q=85"
                alt="Piscina de un hotel junto al mar"
                class="absolute inset-0 h-full w-full object-cover"
            >

            <div class="absolute inset-0 bg-gradient-to-t from-[#102b3d]/90 via-[#102b3d]/20 to-[#102b3d]/30"></div>

            <div class="relative flex h-full min-h-screen flex-col justify-between p-12 xl:p-16">

                <a href="index.php"
                   class="font-serif text-4xl tracking-[0.2em] text-white">
                    MAREA
                </a>

                <div class="max-w-lg pb-8 text-white">
                    <p class="mb-5 text-xs uppercase tracking-[0.35em] text-[#e7d5b2]">
                        Tu refugio junto al mar
                    </p>

                    <h1 class="mb-6 font-serif text-5xl leading-tight xl:text-6xl">
                        El descanso que
                        <span class="italic text-[#e7d5b2]">mereces.</span>
                    </h1>

                    <p class="max-w-md text-base leading-8 text-white/85">
                        Vuelve a disfrutar de momentos especiales.
                        Tu próxima escapada comienza aquí.
                    </p>
                </div>

                <p class="text-xs tracking-wide text-white/70">
                    MAREA HOTEL · Una experiencia para recordar
                </p>

            </div>
        </section>


        <!-- Lado derecho: formulario -->
        <section class="flex min-h-screen items-center justify-center px-6 py-12 sm:px-12">

            <div class="w-full max-w-md">

                <!-- Encabezado móvil -->
                <a href="index.php"
                   class="mb-12 block text-center font-serif text-3xl tracking-[0.2em] lg:hidden">
                    MAREA
                </a>

                <a href="index.php"
                   class="mb-12 hidden text-sm text-[#7a817f] transition hover:text-[#173044] lg:inline-block">
                    ← Volver al inicio
                </a>

                <div class="mb-10">
                    <p class="mb-3 text-xs uppercase tracking-[0.25em] text-[#a68d63]">
                        Nos alegra tenerte aquí
                    </p>

                    <h2 class="mb-4 font-serif text-4xl sm:text-5xl">
                        Bienvenido
                    </h2>

                    <p class="text-sm leading-7 text-[#737d80]">
                        Inicia sesión para consultar tus reservas y
                        continuar planeando tu próxima estancia.
                    </p>
                </div>

                <form action="login.php" method="POST" class="space-y-6">

                    <!-- Correo -->
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="tu@correo.com"
                            autocomplete="email"
                            required
                            class="w-full rounded-lg border border-[#d9d9d2] bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-[#a5aaa7] focus:border-[#244b63] focus:ring-2 focus:ring-[#244b63]/10"
                        >
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <div class="mb-2 flex items-center justify-between gap-3">
                            <label for="password" class="text-sm font-medium">
                                Contraseña
                            </label>

                            <a href="recuperar.php"
                               class="text-xs text-[#58788a] transition hover:text-[#173044]">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Ingresa tu contraseña"
                            autocomplete="current-password"
                            required
                            class="w-full rounded-lg border border-[#d9d9d2] bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-[#a5aaa7] focus:border-[#244b63] focus:ring-2 focus:ring-[#244b63]/10"
                        >
                    </div>

                    <!-- Recordar sesión -->
                    <div class="flex items-center gap-3">
                        <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                            value="1"
                            class="h-4 w-4 accent-[#244b63]"
                        >

                        <label for="remember" class="text-sm text-[#737d80]">
                            Recordar mi sesión
                        </label>
                    </div>

                    <!-- Botón principal -->
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-[#173044] px-5 py-4 text-sm tracking-wide text-white transition hover:bg-[#244b63] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#173044]"
                    >
                        Iniciar sesión
                    </button>

                </form>

                <!-- Separador -->
                <div class="my-8 flex items-center gap-4">
                    <div class="h-px flex-1 bg-[#deddd5]"></div>
                    <span class="text-xs text-[#929894]">O continúa con</span>
                    <div class="h-px flex-1 bg-[#deddd5]"></div>
                </div>

                <!-- Google: visual por ahora -->
                <button
                    type="button"
                    class="flex w-full items-center justify-center gap-3 rounded-lg border border-[#d9d9d2] bg-white px-5 py-3.5 text-sm transition hover:bg-[#f0eee7]"
                >
                    <svg class="h-5 w-5" viewBox="0 0 48 48" aria-hidden="true">
                        <path fill="#4285F4" d="M43.6 24.5c0-1.4-.1-2.8-.4-4.1H24v7.8h11a9.4 9.4 0 0 1-4.1 6.2v5.1h6.6c3.9-3.6 6.1-8.8 6.1-15z"/>
                        <path fill="#34A853" d="M24 44c5.5 0 10.1-1.8 13.5-4.8l-6.6-5.1c-1.8 1.2-4.1 1.9-6.9 1.9-5.3 0-9.8-3.6-11.4-8.4H5.8v5.3A20 20 0 0 0 24 44z"/>
                        <path fill="#FBBC05" d="M12.6 27.6a12 12 0 0 1 0-7.2v-5.3H5.8a20 20 0 0 0 0 17.8z"/>
                        <path fill="#EA4335" d="M24 12c3 0 5.7 1 7.8 3.1l5.8-5.8C34.1 6 29.5 4 24 4A20 20 0 0 0 5.8 15.1l6.8 5.3C14.2 15.6 18.7 12 24 12z"/>
                    </svg>

                    Continuar con Google
                </button>

                <!-- Registro -->
                <p class="mt-8 text-center text-sm text-[#737d80]">
                    ¿Todavía no tienes una cuenta?
                    <a href="registro.php"
                       class="font-semibold text-[#173044] underline-offset-4 hover:underline">
                        Crear cuenta
                    </a>
                </p>

                <div class="mt-12 border-t border-[#e3e0d7] pt-6 text-center">
                    <p class="text-xs leading-6 text-[#929894]">
                        Al continuar, podrás acceder a tu espacio personal
                        en MAREA Hotel.
                    </p>
                </div>

            </div>
        </section>

    </main>

</body>
</html>

