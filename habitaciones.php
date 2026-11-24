
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones | MAREA Hotel</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8f6f0] text-[#173044]">

    <!-- Navegación -->
    <header class="relative z-10 border-b border-[#e7e2d7] bg-[#f8f6f0]">

        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6 lg:px-10">

            <a href="index.php" class="font-serif text-3xl tracking-[0.18em]">
                MAREA
            </a>

            <div class="hidden items-center gap-7 text-sm md:flex">
                <a href="index.php" class="transition hover:text-[#b38b4b]">Inicio</a>

                <a href="habitaciones.php" class="border-b border-[#b38b4b] pb-1">Habitaciones</a>

                <a href="informacion.php" class="transition hover:text-[#b38b4b]">El hotel</a>

                <a href="actividades.php" class="transition hover:text-[#b38b4b]">Actividades</a>
            </div>

            <a href="login.php"
               class="border border-[#173044] px-5 py-3 text-xs tracking-wide transition hover:bg-[#173044] hover:text-white">
                Iniciar sesión
            </a>

        </nav>

    </header>


    <!-- Portada -->
    <section class="relative flex min-h-[480px] items-center overflow-hidden md:min-h-[550px]">

        <img
            src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=2000&q=85"
            alt="Habitación elegante de hotel"
            class="absolute inset-0 h-full w-full object-cover"
        >

        <div class="absolute inset-0 bg-[#102b3d]/45"></div>

        <div class="relative mx-auto w-full max-w-7xl px-6 py-20 text-white lg:px-10">

            <p class="mb-5 text-xs uppercase tracking-[0.35em] text-[#e7d5b2]">
                Descanso frente al mar
            </p>

            <h1 class="max-w-3xl font-serif text-5xl leading-tight md:text-7xl">
                Encuentra tu
                <span class="italic text-[#e7d5b2]">espacio ideal.</span>
            </h1>

            <p class="mt-6 max-w-lg text-sm leading-7 text-white/85 md:text-base">
                Habitaciones diseñadas para desconectar de la rutina,
                disfrutar de la tranquilidad y hacer de cada estancia
                un recuerdo especial.
            </p>

        </div>
    </section>


    <!-- Introducción -->
    <section class="mx-auto max-w-7xl px-6 py-16 text-center md:py-20">

        <p class="mb-4 text-xs uppercase tracking-[0.3em] text-[#a68d63]">
            Tu estancia, a tu manera
        </p>

        <h2 class="font-serif text-4xl leading-tight md:text-5xl">
            Un lugar para sentirte bien
        </h2>

        <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-[#737d80]">
            Desde espacios acogedores hasta suites llenas de detalles,
            encuentra la habitación que mejor se adapte a tu viaje.
        </p>

    </section>


    <!-- Habitaciones -->
    <section class="mx-auto max-w-7xl px-6 pb-20 lg:px-10">

        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">

            <!-- Estándar -->
            <article class="group overflow-hidden border border-[#e8e3d9] bg-white">

                <div class="relative h-64 overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=900&q=85"
                        alt="Habitación estándar"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                    <span class="absolute left-5 top-5 bg-[#f8f6f0] px-4 py-2 text-xs tracking-wide">
                        Esencial
                    </span>
                </div>

                <div class="p-7">

                    <p class="mb-3 text-xs uppercase tracking-[0.2em] text-[#a68d63]">
                        Comodidad y tranquilidad
                    </p>

                    <h3 class="font-serif text-3xl">Habitación estándar</h3>

                    <div class="mt-3 flex items-center gap-2">
                        <span class="tracking-widest text-[#c49a42]">★★★★☆</span>
                        <span class="text-sm text-[#737d80]">4.0/5</span>
                    </div>

                    <p class="mt-4 text-sm leading-7 text-[#737d80]">
                        Un espacio acogedor con todo lo necesario para
                        disfrutar de una estancia cómoda y relajante.
                    </p>

                    <div class="my-6 border-t border-[#e8e3d9]"></div>

                    <div class="flex items-end justify-between gap-3">
                        <div>
                            <p class="text-xs text-[#929894]">Desde</p>
                            <p class="mt-1 text-2xl font-medium">
                                $1,200
                                <span class="text-xs font-normal text-[#737d80]">MXN / noche</span>
                            </p>
                        </div>

                        <a href="disponibilidad.php"
                           class="border border-[#173044] px-4 py-3 text-xs transition hover:bg-[#173044] hover:text-white">
                            Ver habitación
                        </a>
                    </div>

                </div>
            </article>


            <!-- Deluxe -->
            <article class="group overflow-hidden border border-[#e8e3d9] bg-white">

                <div class="relative h-64 overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=900&q=85"
                        alt="Habitación deluxe"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                    <span class="absolute left-5 top-5 bg-[#f8f6f0] px-4 py-2 text-xs tracking-wide">
                        Favorita
                    </span>
                </div>

                <div class="p-7">

                    <p class="mb-3 text-xs uppercase tracking-[0.2em] text-[#a68d63]">
                        Un toque especial
                    </p>

                    <h3 class="font-serif text-3xl">Habitación deluxe</h3>

                    <div class="mt-3 flex items-center gap-2">
                        <span class="tracking-widest text-[#c49a42]">★★★★☆</span>
                        <span class="text-sm text-[#737d80]">4.5/5</span>
                    </div>

                    <p class="mt-4 text-sm leading-7 text-[#737d80]">
                        Más amplitud, detalles cuidados y un ambiente
                        pensado para descansar con un extra de comodidad.
                    </p>

                    <div class="my-6 border-t border-[#e8e3d9]"></div>

                    <div class="flex items-end justify-between gap-3">
                        <div>
                            <p class="text-xs text-[#929894]">Desde</p>
                            <p class="mt-1 text-2xl font-medium">
                                $1,800
                                <span class="text-xs font-normal text-[#737d80]">MXN / noche</span>
                            </p>
                        </div>

                        <a href="disponibilidad.php"
                           class="border border-[#173044] px-4 py-3 text-xs transition hover:bg-[#173044] hover:text-white">
                            Ver habitación
                        </a>
                    </div>

                </div>
            </article>


            <!-- Suite -->
            <article class="group overflow-hidden border border-[#e8e3d9] bg-white">

                <div class="relative h-64 overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=900&q=85"
                        alt="Suite de hotel"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                    <span class="absolute left-5 top-5 bg-[#f8f6f0] px-4 py-2 text-xs tracking-wide">
                        Experiencia premium
                    </span>
                </div>

                <div class="p-7">

                    <p class="mb-3 text-xs uppercase tracking-[0.2em] text-[#a68d63]">
                        Espacio para disfrutar
                    </p>

                    <h3 class="font-serif text-3xl">Suite</h3>

                    <div class="mt-3 flex items-center gap-2">
                        <span class="tracking-widest text-[#c49a42]">★★★★☆</span>
                        <span class="text-sm text-[#737d80]">4.0/5</span>
                    </div>

                    <p class="mt-4 text-sm leading-7 text-[#737d80]">
                        Una estancia más exclusiva, con espacio adicional
                        para relajarte y disfrutar cada momento.
                    </p>

                    <div class="my-6 border-t border-[#e8e3d9]"></div>

                    <div class="flex items-end justify-between gap-3">
                        <div>
                            <p class="text-xs text-[#929894]">Desde</p>
                            <p class="mt-1 text-2xl font-medium">
                                $2,600
                                <span class="text-xs font-normal text-[#737d80]">MXN / noche</span>
                            </p>
                        </div>

                        <a href="disponibilidad.php"
                           class="border border-[#173044] px-4 py-3 text-xs transition hover:bg-[#173044] hover:text-white">
                            Ver habitación
                        </a>
                    </div>

                </div>
            </article>

        </div>

        <p class="mt-6 text-center text-xs leading-6 text-[#929894]">
            Precios ilustrativos para el diseño. No representan tarifas reales ni disponibilidad confirmada.
        </p>

    </section>


    <!-- Llamada a la acción -->
    <section class="bg-[#173044] px-6 py-20 text-center text-white md:py-24">

        <p class="mb-4 text-xs uppercase tracking-[0.3em] text-[#e7d5b2]">
            Tu próxima escapada
        </p>

        <h2 class="mx-auto max-w-2xl font-serif text-4xl leading-tight md:text-5xl">
            Regálate unos días para disfrutar.
        </h2>

        <p class="mx-auto mt-5 max-w-xl text-sm leading-7 text-white/70">
            Descubre el espacio perfecto para hacer una pausa
            y disfrutar de una estancia inolvidable.
        </p>

        <a href="disponibilidad.php"
           class="mt-8 inline-block bg-[#e7d5b2] px-8 py-4 text-sm text-[#173044] transition hover:bg-white">
            Consultar disponibilidad
        </a>

    </section>


    <!-- Pie de página -->
    <footer class="bg-[#102638] px-6 py-12 text-white">

        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-8 md:flex-row">

            <div class="text-center md:text-left">
                <a href="index.php" class="font-serif text-3xl tracking-[0.2em]">
                    MAREA
                </a>

                <p class="mt-3 text-xs text-white/60">
                    Un lugar para descansar y volver a ti.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-6 text-xs text-white/70">
                <a href="informacion.php" class="hover:text-white">El hotel</a>
                <a href="habitaciones.php" class="hover:text-white">Habitaciones</a>
                <a href="actividades.php" class="hover:text-white">Experiencias</a>
                <a href="login.php" class="hover:text-white">Mi cuenta</a>
            </div>

        </div>

        <div class="mx-auto mt-10 max-w-7xl border-t border-white/15 pt-6 text-center text-xs text-white/50">
            © <?= date('Y') ?> MAREA Hotel. Todos los derechos reservados.
        </div>

    </footer>

</body>
</html>
