
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña | MAREA</title>

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
                        Siempre hay una
                        <span class="italic text-[#e7d5b2]">nueva oportunidad.</span>
                    </h1>

                    <p class="max-w-md text-base leading-8 text-white/85">
                        Recupera el acceso a tu cuenta y continúa disfrutando
                        de tu experiencia en MAREA.
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

                <a href="login.php"
                   class="mb-12 inline-block text-sm text-[#7a817f] transition hover:text-[#173044]">
                    ← Volver al inicio de sesión
                </a>

                <div class="mb-10">
                    <p class="mb-3 text-xs uppercase tracking-[0.25em] text-[#a68d63]">
                        Recupera tu acceso
                    </p>

                    <h2 class="mb-4 font-serif text-4xl sm:text-5xl">
                        ¿Olvidaste tu contraseña?
                    </h2>

                    <p class="text-sm leading-7 text-[#737d80]">
                        No te preocupes. Ingresa el correo electrónico
                        asociado a tu cuenta y te ayudaremos a recuperar
                        el acceso.
                    </p>
                </div>

                <!-- Correo electrónico -->
                <form action="recuperar.php" method="POST" class="space-y-6">

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

                    <!-- Botón principal -->
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-[#173044] px-5 py-4 text-sm tracking-wide text-white transition hover:bg-[#244b63] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#173044]"
                    >
                        Enviar instrucciones
                    </button>
                </form>

                <p class="mt-8 text-center text-sm text-[#737d80]">
                    ¿Recordaste tu contraseña?
                    <a href="login.php"
                       class="font-semibold text-[#173044] underline-offset-4 hover:underline">
                        Inicia sesión
                    </a>
                </p>

                <div class="mt-12 border-t border-[#e3e0d7] pt-6 text-center">
                    <p class="text-xs leading-6 text-[#929894]">
                        Tu información y tu cuenta están protegidas
                        en MAREA Hotel.
                    </p>
                </div>

            </div>
        </section>

    </main>

</body>
</html>
