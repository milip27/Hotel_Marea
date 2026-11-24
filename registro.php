
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta | MAREA</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#f8f6f0] text-[#173044]">

    <main class="grid min-h-screen lg:grid-cols-2">

        <!-- Panel de imagen -->
        <section class="relative hidden min-h-screen overflow-hidden lg:block">

            <img
                src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1400&q=85"
                alt="Hotel junto al mar"
                class="absolute inset-0 h-full w-full object-cover"
            >

            <div class="absolute inset-0 bg-gradient-to-t from-[#102b3d]/90 via-[#102b3d]/20 to-[#102b3d]/30"></div>

            <div class="relative flex min-h-screen flex-col justify-between p-12 xl:p-16">

                <a href="index.php"
                   class="font-serif text-4xl tracking-[0.2em] text-white">
                    MAREA
                </a>

                <div class="max-w-lg pb-8 text-white">
                    <p class="mb-5 text-xs uppercase tracking-[0.35em] text-[#e7d5b2]">
                        Tu próxima escapada
                    </p>

                    <h1 class="mb-6 font-serif text-5xl leading-tight xl:text-6xl">
                        Cada viaje
                        <span class="italic text-[#e7d5b2]">comienza aquí.</span>
                    </h1>

                    <p class="max-w-md text-base leading-8 text-white/85">
                        Crea tu cuenta y prepárate para descubrir una nueva
                        forma de descansar, disfrutar y crear recuerdos.
                    </p>
                </div>

                <p class="text-xs tracking-wide text-white/70">
                    MAREA HOTEL · Una experiencia para recordar
                </p>

            </div>
        </section>


        <!-- Formulario de registro -->
        <section class="flex items-center justify-center px-6 py-12 sm:px-12">

            <div class="w-full max-w-md">

                <a href="index.php"
                   class="mb-8 block text-center font-serif text-3xl tracking-[0.2em] lg:hidden">
                    MAREA
                </a>

                <a href="login.php"
                   class="mb-8 inline-block text-sm text-[#7a817f] transition hover:text-[#173044]">
                    ← Volver al inicio de sesión
                </a>

                <div class="mb-8">
                    <p class="mb-3 text-xs uppercase tracking-[0.25em] text-[#a68d63]">
                        Únete a MAREA
                    </p>

                    <h2 class="mb-3 font-serif text-4xl sm:text-5xl">
                        Crear cuenta
                    </h2>

                    <p class="text-sm leading-7 text-[#737d80]">
                        Regístrate para gestionar tus próximas estancias.
                    </p>
                </div>

                <form action="registro.php" method="POST" class="space-y-5">

                    <!-- Nombre -->
                    <div>
                        <label for="name" class="mb-2 block text-sm font-medium">
                            Nombre completo
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Tu nombre completo"
                            autocomplete="name"
                            required
                            class="w-full rounded-lg border border-[#d9d9d2] bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-[#a5aaa7] focus:border-[#244b63] focus:ring-2 focus:ring-[#244b63]/10"
                        >
                    </div>

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

                    <!-- Teléfono -->
                    <div>
                        <label for="telefono" class="mb-2 block text-sm font-medium">
                            Teléfono <span class="font-normal text-[#929894]">(opcional)</span>
                        </label>

                        <input
                            type="tel"
                            id="telefono"
                            name="telefono"
                            placeholder="Tu número de teléfono"
                            autocomplete="tel"
                            class="w-full rounded-lg border border-[#d9d9d2] bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-[#a5aaa7] focus:border-[#244b63] focus:ring-2 focus:ring-[#244b63]/10"
                        >
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium">
                            Contraseña
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Mínimo 8 caracteres"
                            autocomplete="new-password"
                            minlength="8"
                            required
                            class="w-full rounded-lg border border-[#d9d9d2] bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-[#a5aaa7] focus:border-[#244b63] focus:ring-2 focus:ring-[#244b63]/10"
                        >
                    </div>

                    <!-- Confirmar contraseña -->
                    <div>
                        <label for="password_confirmation" class="mb-2 block text-sm font-medium">
                            Confirmar contraseña
                        </label>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Vuelve a escribir tu contraseña"
                            autocomplete="new-password"
                            minlength="8"
                            required
                            class="w-full rounded-lg border border-[#d9d9d2] bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-[#a5aaa7] focus:border-[#244b63] focus:ring-2 focus:ring-[#244b63]/10"
                        >
                    </div>

                    <!-- Términos -->
                    <div class="flex items-start gap-3 pt-1">
                        <input
                            type="checkbox"
                            id="terminos"
                            name="terminos"
                            value="1"
                            required
                            class="mt-1 h-4 w-4 shrink-0 accent-[#244b63]"
                        >

                        <label for="terminos" class="text-xs leading-6 text-[#737d80]">
                            Acepto los términos y condiciones y el aviso de privacidad.
                        </label>
                    </div>

                    <!-- Botón -->
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-[#173044] px-5 py-4 text-sm tracking-wide text-white transition hover:bg-[#244b63] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#173044]"
                    >
                        Crear mi cuenta
                    </button>

                </form>

                <p class="mt-7 text-center text-sm text-[#737d80]">
                    ¿Ya tienes una cuenta?

                    <a href="login.php"
                       class="font-semibold text-[#173044] underline-offset-4 hover:underline">
                        Inicia sesión
                    </a>
                </p>

                <div class="mt-8 border-t border-[#e3e0d7] pt-5 text-center">
                    <a href="index.php"
                       class="text-xs text-[#929894] transition hover:text-[#173044]">
                        Volver a MAREA Hotel
                    </a>
                </div>

            </div>
        </section>

    </main>

</body>
</html>
