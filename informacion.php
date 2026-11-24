
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Información del hotel | MAREA</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
          rel="stylesheet">
</head>

<body class="bg-[#faf8f3] text-[#173044]"
      style="font-family: 'DM Sans', sans-serif;">

    <!-- NAVEGACIÓN -->
    <header class="sticky top-0 z-50 border-b border-[#e8e2d7] bg-[#faf8f3]/95 backdrop-blur">

        <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 md:px-8">

            <a href="index.php" class="text-3xl tracking-[0.22em]"
               style="font-family: 'Playfair Display', serif;">
                MAREA
            </a>

            <div class="hidden items-center gap-7 text-sm md:flex">
                <a href="index.php" class="transition hover:text-[#b38b4b]">Inicio</a>
                <a href="habitaciones.php" class="transition hover:text-[#b38b4b]">Habitaciones</a>
                <a href="informacion.php" class="border-b border-[#b38b4b] pb-1">El hotel</a>
                <a href="actividades.php" class="transition hover:text-[#b38b4b]">Actividades</a>
            </div>

            <a href="habitaciones.php"
               class="bg-[#173044] px-5 py-3 text-xs tracking-wider text-white transition hover:bg-[#294b60]">
                RESERVAR
            </a>

        </nav>
    </header>


    <!-- PORTADA -->
    <section class="relative flex min-h-[440px] items-center justify-center bg-cover bg-center text-center"
             style="background-image: linear-gradient(rgba(12,31,43,.45), rgba(12,31,43,.65)), url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=2000&q=85');">

        <div class="max-w-3xl px-6 py-24 text-white">

            <p class="mb-5 text-xs tracking-[0.35em] text-[#e4c58e]">
                BIENVENIDO A MAREA
            </p>

            <h1 class="text-5xl leading-tight md:text-7xl"
                style="font-family: 'Playfair Display', serif;">
                Conoce nuestro hotel.
            </h1>

            <p class="mx-auto mt-6 max-w-xl text-sm leading-7 text-white/85 md:text-base">
                Un refugio junto al mar donde la tranquilidad, la comodidad
                y los pequeños detalles hacen especial cada estancia.
            </p>

        </div>
    </section>


    <!-- INFORMACIÓN GENERAL -->
    <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 md:grid-cols-2 md:py-24">

        <div>

            <p class="mb-4 text-xs tracking-[0.3em] text-[#b38b4b]">
                NUESTRA ESENCIA
            </p>

            <h2 class="text-4xl leading-tight md:text-5xl"
                style="font-family: 'Playfair Display', serif;">
                Un lugar para desconectar y disfrutar.
            </h2>

            <p class="mt-6 leading-8 text-[#66747a]">
                MAREA es un hotel costero ficticio ubicado en Mazatlán,
                Sinaloa. Fue concebido para ofrecer a sus huéspedes un
                ambiente moderno, elegante y relajante, ideal para unas
                vacaciones, una escapada en pareja o un viaje en familia.
            </p>

            <p class="mt-4 leading-8 text-[#66747a]">
                Nuestro concepto combina espacios cómodos, atención
                personalizada y una atmósfera inspirada en los colores
                y la tranquilidad del océano.
            </p>

            <a href="habitaciones.php"
               class="mt-8 inline-block border-b border-[#b38b4b] pb-2 text-sm transition hover:text-[#b38b4b]">
                CONOCE LAS HABITACIONES →
            </a>

        </div>

        <div class="grid grid-cols-2 gap-4">

            <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?auto=format&fit=crop&w=800&q=85"
                 alt="Habitación elegante de hotel"
                 class="mt-10 h-64 w-full object-cover md:h-80">

            <img src="https://images.unsplash.com/photo-1575429198097-0414ec08e8cd?auto=format&fit=crop&w=800&q=85"
                 alt="Alberca de hotel"
                 class="h-64 w-full object-cover md:h-80">

        </div>

    </section>


    <!-- HORARIOS -->
    <section class="bg-[#173044] px-6 py-20 text-white md:py-24">

        <div class="mx-auto max-w-7xl">

            <div class="mx-auto mb-12 max-w-2xl text-center">

                <p class="mb-4 text-xs tracking-[0.3em] text-[#d0ae70]">
                    PLANEA TU ESTANCIA
                </p>

                <h2 class="text-4xl md:text-5xl"
                    style="font-family: 'Playfair Display', serif;">
                    Horarios del hotel
                </h2>

                <p class="mt-5 text-sm leading-7 text-white/65">
                    Conoce los horarios establecidos para organizar
                    tu llegada y salida con tranquilidad.
                </p>

            </div>

            <div class="mx-auto grid max-w-3xl gap-6 md:grid-cols-2">

                <article class="border border-white/15 bg-white/5 p-8 text-center">

                    <div class="mb-4 text-3xl text-[#d0ae70]">↘</div>

                    <p class="text-xs tracking-[0.25em] text-white/65">
                        CHECK-IN
                    </p>

                    <h3 class="mt-3 text-4xl"
                        style="font-family: 'Playfair Display', serif;">
                        3:00 p. m.
                    </h3>

                    <p class="mt-4 text-sm leading-6 text-white/65">
                        Horario a partir del cual puedes ingresar
                        a tu habitación.
                    </p>

                </article>

                <article class="border border-white/15 bg-white/5 p-8 text-center">

                    <div class="mb-4 text-3xl text-[#d0ae70]">↗</div>

                    <p class="text-xs tracking-[0.25em] text-white/65">
                        CHECK-OUT
                    </p>

                    <h3 class="mt-3 text-4xl"
                        style="font-family: 'Playfair Display', serif;">
                        12:00 p. m.
                    </h3>

                    <p class="mt-4 text-sm leading-6 text-white/65">
                        Hora límite para entregar la habitación
                        el día de salida.
                    </p>

                </article>

            </div>

            <p class="mx-auto mt-8 max-w-2xl text-center text-xs leading-6 text-white/45">
                La entrada anticipada y la salida tardía estarán sujetas
                a disponibilidad y podrían generar cargos adicionales.
            </p>

        </div>
    </section>


    <!-- SERVICIOS -->
    <section class="mx-auto max-w-7xl px-6 py-20 md:py-24">

        <div class="mb-14 text-center">

            <p class="mb-4 text-xs tracking-[0.3em] text-[#b38b4b]">
                COMODIDAD DURANTE TU VISITA
            </p>

            <h2 class="text-4xl md:text-5xl"
                style="font-family: 'Playfair Display', serif;">
                Servicios e instalaciones
            </h2>

            <p class="mx-auto mt-5 max-w-xl text-sm leading-7 text-[#66747a]">
                Todo lo que necesitas para disfrutar una estancia
                cómoda y agradable.
            </p>

        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

            <article class="border border-[#e8e2d7] bg-white p-7 transition hover:shadow-md">
                <div class="text-3xl text-[#b38b4b]">⌁</div>
                <h3 class="mt-5 text-xl" style="font-family: 'Playfair Display', serif;">
                    Wi-Fi gratuito
                </h3>
                <p class="mt-3 text-sm leading-7 text-[#66747a]">
                    Conexión inalámbrica para mantenerte conectado
                    durante tu estancia.
                </p>
            </article>

            <article class="border border-[#e8e2d7] bg-white p-7 transition hover:shadow-md">
                <div class="text-3xl text-[#b38b4b]">≈</div>
                <h3 class="mt-5 text-xl" style="font-family: 'Playfair Display', serif;">
                    Alberca
                </h3>
                <p class="mt-3 text-sm leading-7 text-[#66747a]">
                    Un espacio para refrescarte, relajarte y disfrutar
                    de los días soleados.
                </p>
            </article>

            <article class="border border-[#e8e2d7] bg-white p-7 transition hover:shadow-md">
                <div class="text-3xl text-[#b38b4b]">⌂</div>
                <h3 class="mt-5 text-xl" style="font-family: 'Playfair Display', serif;">
                    Restaurante
                </h3>
                <p class="mt-3 text-sm leading-7 text-[#66747a]">
                    Una propuesta gastronómica para acompañar
                    tus momentos de descanso.
                </p>
            </article>

            <article class="border border-[#e8e2d7] bg-white p-7 transition hover:shadow-md">
                <div class="text-3xl text-[#b38b4b]">P</div>
                <h3 class="mt-5 text-xl" style="font-family: 'Playfair Display', serif;">
                    Estacionamiento
                </h3>
                <p class="mt-3 text-sm leading-7 text-[#66747a]">
                    Espacio para estacionar tu vehículo durante
                    la estancia, sujeto a disponibilidad.
                </p>
            </article>

            <article class="border border-[#e8e2d7] bg-white p-7 transition hover:shadow-md">
                <div class="text-3xl text-[#b38b4b]">✧</div>
                <h3 class="mt-5 text-xl" style="font-family: 'Playfair Display', serif;">
                    Habitaciones equipadas
                </h3>
                <p class="mt-3 text-sm leading-7 text-[#66747a]">
                    Espacios con aire acondicionado, baño privado,
                    televisión y amenidades básicas.
                </p>
            </article>

            <article class="border border-[#e8e2d7] bg-white p-7 transition hover:shadow-md">
                <div class="text-3xl text-[#b38b4b]">♡</div>
                <h3 class="mt-5 text-xl" style="font-family: 'Playfair Display', serif;">
                    Atención al huésped
                </h3>
                <p class="mt-3 text-sm leading-7 text-[#66747a]">
                    Apoyo para resolver dudas y orientarte
                    durante tu visita.
                </p>
            </article>

        </div>
    </section>


    <!-- POLÍTICAS -->
    <section class="bg-[#f0ece3] px-6 py-20 md:py-24">

        <div class="mx-auto max-w-5xl">

            <div class="mb-12 text-center">

                <p class="mb-4 text-xs tracking-[0.3em] text-[#b38b4b]">
                    ANTES DE TU LLEGADA
                </p>

                <h2 class="text-4xl md:text-5xl"
                    style="font-family: 'Playfair Display', serif;">
                    Políticas del hotel
                </h2>

                <p class="mt-5 text-sm leading-7 text-[#66747a]">
                    Información importante para que tu estancia
                    sea cómoda y sin contratiempos.
                </p>

            </div>

            <div class="space-y-4">

                <article class="border border-[#ded7ca] bg-[#faf8f3] p-6 md:p-8">
                    <h3 class="text-xl" style="font-family: 'Playfair Display', serif;">
                        Registro de entrada y salida
                    </h3>
                    <p class="mt-3 text-sm leading-7 text-[#66747a]">
                        Para registrarse, los huéspedes deberán presentar
                        una identificación oficial vigente y los datos
                        de su reservación. La salida debe realizarse
                        antes de las 12:00 p. m.
                    </p>
                </article>

                <article class="border border-[#ded7ca] bg-[#faf8f3] p-6 md:p-8">
                    <h3 class="text-xl" style="font-family: 'Playfair Display', serif;">
                        Cancelaciones y modificaciones
                    </h3>
                    <p class="mt-3 text-sm leading-7 text-[#66747a]">
                        Las condiciones de cancelación y modificación
                        dependerán de la tarifa seleccionada al reservar.
                        Se deberán consultar las condiciones antes
                        de confirmar una estancia.
                    </p>
                </article>

                <article class="border border-[#ded7ca] bg-[#faf8f3] p-6 md:p-8">
                    <h3 class="text-xl" style="font-family: 'Playfair Display', serif;">
                        Niños y menores de edad
                    </h3>
                    <p class="mt-3 text-sm leading-7 text-[#66747a]">
                        Los menores deberán alojarse acompañados por
                        su madre, padre o tutor responsable. Las
                        condiciones de ocupación se indicarán al reservar.
                    </p>
                </article>

                <article class="border border-[#ded7ca] bg-[#faf8f3] p-6 md:p-8">
                    <h3 class="text-xl" style="font-family: 'Playfair Display', serif;">
                        Mascotas
                    </h3>
                    <p class="mt-3 text-sm leading-7 text-[#66747a]">
                        Para este diseño, MAREA se plantea como un hotel
                        que no admite mascotas, salvo las excepciones
                        que establezca su política de accesibilidad.
                    </p>
                </article>

                <article class="border border-[#ded7ca] bg-[#faf8f3] p-6 md:p-8">
                    <h3 class="text-xl" style="font-family: 'Playfair Display', serif;">
                        Convivencia y cuidado de instalaciones
                    </h3>
                    <p class="mt-3 text-sm leading-7 text-[#66747a]">
                        Se solicita respetar las áreas comunes, mantener
                        un ambiente tranquilo y cuidar las instalaciones
                        y pertenencias del hotel.
                    </p>
                </article>

            </div>
        </div>
    </section>


    <!-- MÉTODOS DE PAGO -->
    <section class="mx-auto max-w-7xl px-6 py-20 md:py-24">

        <div class="grid items-center gap-12 md:grid-cols-2">

            <div>

                <p class="mb-4 text-xs tracking-[0.3em] text-[#b38b4b]">
                    RESERVA CON TRANQUILIDAD
                </p>

                <h2 class="text-4xl md:text-5xl"
                    style="font-family: 'Playfair Display', serif;">
                    Métodos de pago
                </h2>

                <p class="mt-6 leading-8 text-[#66747a]">
                    Para el diseño de MAREA se contemplan diferentes
                    opciones de pago, con el objetivo de facilitar
                    el proceso de reservación.
                </p>

            </div>

            <div class="space-y-4">

                <div class="flex items-center gap-5 border border-[#e8e2d7] bg-white p-5">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#173044] text-white">
                        <span class="text-xl">▤</span>
                    </div>
                    <div>
                        <h3 class="font-semibold">Tarjetas bancarias</h3>
                        <p class="mt-1 text-sm text-[#66747a]">
                            Crédito y débito.
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-5 border border-[#e8e2d7] bg-white p-5">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#173044] text-white">
                        <span class="text-xl">$</span>
                    </div>
                    <div>
                        <h3 class="font-semibold">Pago en efectivo</h3>
                        <p class="mt-1 text-sm text-[#66747a]">
                            En recepción, sujeto a las condiciones de la reserva.
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-5 border border-[#e8e2d7] bg-white p-5">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#173044] text-white">
                        <span class="text-xl">↗</span>
                    </div>
                    <div>
                        <h3 class="font-semibold">Pago en línea</h3>
                        <p class="mt-1 text-sm text-[#66747a]">
                            Disponible como opción prevista para futuras funciones.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <p class="mt-8 text-xs leading-6 text-[#929894]">
            Los métodos de pago son una propuesta ficticia. El pago en línea
            todavía no está conectado a una pasarela real.
        </p>

    </section>


    <!-- UBICACIÓN Y CONTACTO -->
    <section class="bg-[#173044] px-6 py-20 text-white md:py-24">

        <div class="mx-auto max-w-7xl">

            <div class="mb-12 text-center">

                <p class="mb-4 text-xs tracking-[0.3em] text-[#d0ae70]">
                    ESTAMOS PARA TI
                </p>

                <h2 class="text-4xl md:text-5xl"
                    style="font-family: 'Playfair Display', serif;">
                    Ubicación y contacto
                </h2>

                <p class="mx-auto mt-5 max-w-xl text-sm leading-7 text-white/65">
                    ¿Tienes alguna pregunta? Consulta nuestros datos
                    de contacto de ejemplo.
                </p>

            </div>

            <div class="grid gap-10 md:grid-cols-2">

                <div class="space-y-7">

                    <div class="flex gap-4">
                        <div class="text-2xl text-[#d0ae70]">⌖</div>
                        <div>
                            <h3 class="font-semibold">Ubicación</h3>
                            <p class="mt-2 text-sm leading-7 text-white/65">
                                Zona costera de Mazatlán,<br>
                                Sinaloa, México.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-2xl text-[#d0ae70]">☎</div>
                        <div>
                            <h3 class="font-semibold">Teléfono</h3>
                            <p class="mt-2 text-sm text-white/65">
                                Por definir.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-2xl text-[#d0ae70]">✉</div>
                        <div>
                            <h3 class="font-semibold">Correo electrónico</h3>
                            <p class="mt-2 text-sm text-white/65">
                                Por definir.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="text-2xl text-[#d0ae70]">◷</div>
                        <div>
                            <h3 class="font-semibold">Recepción</h3>
                            <p class="mt-2 text-sm leading-7 text-white/65">
                                Atención a huéspedes las 24 horas,
                                como propuesta del hotel.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="min-h-[300px] bg-cover bg-center"
                     role="img"
                     aria-label="Vista costera de Mazatlán"
                     style="background-image: linear-gradient(rgba(12,31,43,.12), rgba(12,31,43,.12)), url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1200&q=85');">
                </div>

            </div>

            <p class="mt-8 text-xs leading-6 text-white/40">
                MAREA es un hotel ficticio creado para un proyecto web.
                La dirección exacta y los medios de contacto aún no están definidos.
            </p>

        </div>
    </section>


    <!-- INVITACIÓN A RESERVAR -->
    <section class="px-6 py-20 text-center md:py-24">

        <p class="mb-4 text-xs tracking-[0.3em] text-[#b38b4b]">
            TU PRÓXIMA ESCAPADA
        </p>

        <h2 class="mx-auto max-w-2xl text-4xl md:text-5xl"
            style="font-family: 'Playfair Display', serif;">
            Tu historia junto al mar comienza aquí.
        </h2>

        <p class="mx-auto mt-5 max-w-lg text-sm leading-7 text-[#66747a]">
            Explora nuestras habitaciones y encuentra el espacio
            ideal para tu próxima estancia.
        </p>

        <a href="habitaciones.php"
           class="mt-8 inline-block bg-[#173044] px-8 py-4 text-xs tracking-widest text-white transition hover:bg-[#294b60]">
            EXPLORAR HABITACIONES
        </a>

    </section>


    <!-- PIE DE PÁGINA -->
    <footer class="bg-[#102633] px-6 py-10 text-white">

        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 md:flex-row">

            <a href="index.php" class="text-2xl tracking-[0.22em]"
               style="font-family: 'Playfair Display', serif;">
                MAREA
            </a>

            <p class="text-center text-xs text-white/50">
                Un espacio para descansar, descubrir y disfrutar.
            </p>

            <div class="flex flex-wrap justify-center gap-5 text-xs text-white/65">
                <a href="index.php" class="hover:text-white">Inicio</a>
                <a href="habitaciones.php" class="hover:text-white">Habitaciones</a>
                <a href="informacion.php" class="hover:text-white">El hotel</a>
            </div>

        </div>

        <div class="mx-auto mt-8 max-w-7xl border-t border-white/10 pt-6 text-center text-xs text-white/40">
            © <?= date('Y') ?> MAREA Hotel. Todos los derechos reservados.
        </div>

    </footer>

</body>
</html>
