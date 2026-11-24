
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Actividades | MAREA Hotel</title>

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
                <a href="informacion.php" class="transition hover:text-[#b38b4b]">El hotel</a>
                <a href="actividades.php" class="border-b border-[#b38b4b] pb-1">Actividades</a>
            </div>

            <a href="habitaciones.php"
               class="bg-[#173044] px-5 py-3 text-xs tracking-wider text-white transition hover:bg-[#294b60]">
                RESERVAR
            </a>

        </nav>
    </header>

    <!-- PORTADA -->
    <section class="relative flex min-h-[440px] items-center justify-center bg-cover bg-center text-center"
             style="background-image: linear-gradient(rgba(12,31,43,.4), rgba(12,31,43,.65)), url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=2000&q=85');">

        <div class="max-w-3xl px-6 py-24 text-white">

            <p class="mb-5 text-xs tracking-[0.35em] text-[#e4c58e]">
                VIVE LA EXPERIENCIA MAREA
            </p>

            <h1 class="text-5xl leading-tight md:text-7xl"
                style="font-family: 'Playfair Display', serif;">
                Cada día,<br>algo diferente.
            </h1>

            <p class="mx-auto mt-6 max-w-xl text-sm leading-7 text-white/85 md:text-base">
                Disfruta de juegos, deportes, momentos de relajación
                y entretenimiento durante tu estancia.
            </p>

            <a href="#programa"
               class="mt-8 inline-block bg-[#faf8f3] px-8 py-4 text-xs tracking-widest text-[#173044] transition hover:bg-[#e9dfcf]">
                VER ACTIVIDADES
            </a>

        </div>
    </section>

    <!-- INTRODUCCIÓN -->
    <section class="mx-auto max-w-3xl px-6 py-16 text-center md:py-20">

        <p class="mb-4 text-xs tracking-[0.3em] text-[#b38b4b]">
            TU ESTANCIA, A TU MANERA
        </p>

        <h2 class="text-4xl leading-tight md:text-5xl"
            style="font-family: 'Playfair Display', serif;">
            Descansa, juega y disfruta.
        </h2>

        <p class="mt-6 text-sm leading-8 text-[#66747a]">
            En MAREA creemos que unas buenas vacaciones también se
            disfrutan fuera de la habitación. Por eso, nuestro programa
            de actividades incluye opciones para divertirte, conocer
            personas y crear recuerdos junto al mar.
        </p>

    </section>

    <!-- PROGRAMA DE ACTIVIDADES -->
    <section id="programa" class="bg-[#f0ece3] px-5 py-20 md:px-8 md:py-24">

        <div class="mx-auto max-w-7xl">

            <div class="mb-12 text-center">
                <p class="mb-4 text-xs tracking-[0.3em] text-[#b38b4b]">
                    PROGRAMA RECREATIVO
                </p>

                <h2 class="text-4xl md:text-5xl"
                    style="font-family: 'Playfair Display', serif;">
                    Tu día en MAREA
                </h2>

                <p class="mx-auto mt-5 max-w-xl text-sm leading-7 text-[#66747a]">
                    Descubre las actividades programadas para disfrutar
                    desde las primeras horas del día hasta la noche.
                </p>
            </div>

            <!-- SELECTOR DE DÍAS -->
            <div class="mb-10 flex flex-wrap justify-center gap-3">

                <button onclick="mostrarDia('lunes', this)"
                        class="dia-btn bg-[#173044] px-5 py-3 text-sm text-white">
                    Lunes
                </button>

                <button onclick="mostrarDia('martes', this)"
                        class="dia-btn border border-[#d8d0c2] bg-[#faf8f3] px-5 py-3 text-sm transition hover:border-[#173044]">
                    Martes
                </button>

                <button onclick="mostrarDia('miercoles', this)"
                        class="dia-btn border border-[#d8d0c2] bg-[#faf8f3] px-5 py-3 text-sm transition hover:border-[#173044]">
                    Miércoles
                </button>

                <button onclick="mostrarDia('jueves', this)"
                        class="dia-btn border border-[#d8d0c2] bg-[#faf8f3] px-5 py-3 text-sm transition hover:border-[#173044]">
                    Jueves
                </button>

                <button onclick="mostrarDia('viernes', this)"
                        class="dia-btn border border-[#d8d0c2] bg-[#faf8f3] px-5 py-3 text-sm transition hover:border-[#173044]">
                    Viernes
                </button>

                <button onclick="mostrarDia('sabado', this)"
                        class="dia-btn border border-[#d8d0c2] bg-[#faf8f3] px-5 py-3 text-sm transition hover:border-[#173044]">
                    Sábado
                </button>

                <button onclick="mostrarDia('domingo', this)"
                        class="dia-btn border border-[#d8d0c2] bg-[#faf8f3] px-5 py-3 text-sm transition hover:border-[#173044]">
                    Domingo
                </button>

            </div>

            <!-- LUNES -->
            <div id="lunes" class="dia-contenido space-y-4">

                <div class="mb-6">
                    <h3 class="text-2xl" style="font-family: 'Playfair Display', serif;">
                        Lunes de diversión
                    </h3>
                    <p class="mt-2 text-sm text-[#66747a]">
                        Comienza la semana disfrutando de nuestras actividades.
                    </p>
                </div>

                <article class="actividad">
                    <div class="hora">09:00 AM <span>10:30 AM</span></div>
                    <div class="detalle">
                        <h4>Bingo mañanero</h4>
                        <p>Participa, diviértete y gana premios sorpresa.</p>
                    </div>
                    <span class="lugar">Salón recreativo</span>
                </article>

                <article class="actividad">
                    <div class="hora">11:00 AM <span>12:00 PM</span></div>
                    <div class="detalle">
                        <h4>Voleibol de playa</h4>
                        <p>Forma equipos y disfruta de un partido junto al mar.</p>
                    </div>
                    <span class="lugar">Playa</span>
                </article>

                <article class="actividad">
                    <div class="hora">12:30 PM <span>01:15 PM</span></div>
                    <div class="detalle">
                        <h4>Aquaeróbicos</h4>
                        <p>Ejercítate al ritmo de la música en la alberca.</p>
                    </div>
                    <span class="lugar">Alberca</span>
                </article>

                <article class="actividad">
                    <div class="hora">04:00 PM <span>05:00 PM</span></div>
                    <div class="detalle">
                        <h4>Retos y juegos</h4>
                        <p>Participa en dinámicas y competencias amistosas.</p>
                    </div>
                    <span class="lugar">Área recreativa</span>
                </article>

                <article class="actividad">
                    <div class="hora">08:00 PM <span>09:30 PM</span></div>
                    <div class="detalle">
                        <h4>Noche de karaoke</h4>
                        <p>Demuestra tu talento y canta tus canciones favoritas.</p>
                    </div>
                    <span class="lugar">Terraza</span>
                </article>

            </div>

            <!-- MARTES -->
            <div id="martes" class="dia-contenido hidden space-y-4">

                <div class="mb-6">
                    <h3 class="text-2xl" style="font-family: 'Playfair Display', serif;">
                        Martes de aventura
                    </h3>
                    <p class="mt-2 text-sm text-[#66747a]">
                        Actívate y disfruta de nuevos retos.
                    </p>
                </div>

                <article class="actividad">
                    <div class="hora">09:00 AM <span>10:00 AM</span></div>
                    <div class="detalle">
                        <h4>Yoga frente al mar</h4>
                        <p>Comienza el día con respiración y estiramientos.</p>
                    </div>
                    <span class="lugar">Jardín</span>
                </article>

                <article class="actividad">
                    <div class="hora">11:00 AM <span>12:00 PM</span></div>
                    <div class="detalle">
                        <h4>Voleibol de playa</h4>
                        <p>Forma parte de un partido amistoso.</p>
                    </div>
                    <span class="lugar">Playa</span>
                </article>

                <article class="actividad">
                    <div class="hora">12:30 PM <span>01:15 PM</span></div>
                    <div class="detalle">
                        <h4>Juegos en la alberca</h4>
                        <p>Participa en dinámicas acuáticas recreativas.</p>
                    </div>
                    <span class="lugar">Alberca</span>
                </article>

                <article class="actividad">
                    <div class="hora">04:00 PM <span>05:00 PM</span></div>
                    <div class="detalle">
                        <h4>Búsqueda del tesoro</h4>
                        <p>Resuelve pistas y descubre el tesoro escondido.</p>
                    </div>
                    <span class="lugar">Jardines</span>
                </article>

                <article class="actividad">
                    <div class="hora">08:00 PM <span>09:30 PM</span></div>
                    <div class="detalle">
                        <h4>Noche de trivia</h4>
                        <p>Pon a prueba tus conocimientos con otros huéspedes.</p>
                    </div>
                    <span class="lugar">Salón recreativo</span>
                </article>

            </div>

            <!-- MIÉRCOLES -->
            <div id="miercoles" class="dia-contenido hidden space-y-4">

                <div class="mb-6">
                    <h3 class="text-2xl" style="font-family: 'Playfair Display', serif;">
                        Miércoles en familia
                    </h3>
                    <p class="mt-2 text-sm text-[#66747a]">
                        Actividades para compartir buenos momentos.
                    </p>
                </div>

                <article class="actividad">
                    <div class="hora">09:00 AM <span>10:30 AM</span></div>
                    <div class="detalle">
                        <h4>Bingo familiar</h4>
                        <p>Una actividad para convivir y ganar pequeños premios.</p>
                    </div>
                    <span class="lugar">Salón recreativo</span>
                </article>

                <article class="actividad">
                    <div class="hora">11:00 AM <span>12:00 PM</span></div>
                    <div class="detalle">
                        <h4>Concurso de castillos de arena</h4>
                        <p>Deja volar tu creatividad construyendo en la playa.</p>
                    </div>
                    <span class="lugar">Playa</span>
                </article>

                <article class="actividad">
                    <div class="hora">12:30 PM <span>01:15 PM</span></div>
                    <div class="detalle">
                        <h4>Aquaeróbicos</h4>
                        <p>Muévete y refréscate con música en la alberca.</p>
                    </div>
                    <span class="lugar">Alberca</span>
                </article>

                <article class="actividad">
                    <div class="hora">04:00 PM <span>05:00 PM</span></div>
                    <div class="detalle">
                        <h4>Tarde de manualidades</h4>
                        <p>Crea recuerdos y pequeños objetos decorativos.</p>
                    </div>
                    <span class="lugar">Salón recreativo</span>
                </article>

                <article class="actividad">
                    <div class="hora">08:00 PM <span>09:30 PM</span></div>
                    <div class="detalle">
                        <h4>Cine bajo las estrellas</h4>
                        <p>Disfruta una película en un ambiente relajado.</p>
                    </div>
                    <span class="lugar">Jardín</span>
                </article>

            </div>

            <!-- JUEVES -->
            <div id="jueves" class="dia-contenido hidden space-y-4">

                <div class="mb-6">
                    <h3 class="text-2xl" style="font-family: 'Playfair Display', serif;">
                        Jueves de bienestar
                    </h3>
                    <p class="mt-2 text-sm text-[#66747a]">
                        Un día para cuidar de ti y recargar energía.
                    </p>
                </div>

                <article class="actividad">
                    <div class="hora">09:00 AM <span>10:00 AM</span></div>
                    <div class="detalle">
                        <h4>Estiramientos y relajación</h4>
                        <p>Dedica un momento a tu bienestar físico.</p>
                    </div>
                    <span class="lugar">Jardín</span>
                </article>

                <article class="actividad">
                    <div class="hora">11:00 AM <span>12:00 PM</span></div>
                    <div class="detalle">
                        <h4>Voleibol de playa</h4>
                        <p>Disfruta de un partido recreativo.</p>
                    </div>
                    <span class="lugar">Playa</span>
                </article>

                <article class="actividad">
                    <div class="hora">12:30 PM <span>01:15 PM</span></div>
                    <div class="detalle">
                        <h4>Aquaeróbicos</h4>
                        <p>Ejercicios acuáticos al ritmo de la música.</p>
                    </div>
                    <span class="lugar">Alberca</span>
                </article>

                <article class="actividad">
                    <div class="hora">04:00 PM <span>05:00 PM</span></div>
                    <div class="detalle">
                        <h4>Taller de pintura</h4>
                        <p>Explora tu creatividad con una actividad artística.</p>
                    </div>
                    <span class="lugar">Salón recreativo</span>
                </article>

                <article class="actividad">
                    <div class="hora">08:00 PM <span>09:30 PM</span></div>
                    <div class="detalle">
                        <h4>Música en vivo</h4>
                        <p>Relájate y disfruta de una velada musical.</p>
                    </div>
                    <span class="lugar">Terraza</span>
                </article>

            </div>

            <!-- VIERNES -->
            <div id="viernes" class="dia-contenido hidden space-y-4">

                <div class="mb-6">
                    <h3 class="text-2xl" style="font-family: 'Playfair Display', serif;">
                        Viernes de celebración
                    </h3>
                    <p class="mt-2 text-sm text-[#66747a]">
                        Comienza el fin de semana con energía.
                    </p>
                </div>

                <article class="actividad">
                    <div class="hora">09:00 AM <span>10:30 AM</span></div>
                    <div class="detalle">
                        <h4>Bingo mañanero</h4>
                        <p>Diviértete con rondas y premios sorpresa.</p>
                    </div>
                    <span class="lugar">Salón recreativo</span>
                </article>

                <article class="actividad">
                    <div class="hora">11:00 AM <span>12:00 PM</span></div>
                    <div class="detalle">
                        <h4>Miniolimpiadas de playa</h4>
                        <p>Participa en retos deportivos por equipos.</p>
                    </div>
                    <span class="lugar">Playa</span>
                </article>

                <article class="actividad">
                    <div class="hora">12:30 PM <span>01:15 PM</span></div>
                    <div class="detalle">
                        <h4>Juegos acuáticos</h4>
                        <p>Disfruta de dinámicas recreativas en la alberca.</p>
                    </div>
                    <span class="lugar">Alberca</span>
                </article>

                <article class="actividad">
                    <div class="hora">04:00 PM <span>05:00 PM</span></div>
                    <div class="detalle">
                        <h4>Concurso de talentos</h4>
                        <p>Canta, baila o muestra una habilidad especial.</p>
                    </div>
                    <span class="lugar">Terraza</span>
                </article>

                <article class="actividad">
                    <div class="hora">08:00 PM <span>10:00 PM</span></div>
                    <div class="detalle">
                        <h4>Noche de baile</h4>
                        <p>Disfruta de música y una noche llena de diversión.</p>
                    </div>
                    <span class="lugar">Terraza</span>
                </article>

            </div>

            <!-- SÁBADO -->
            <div id="sabado" class="dia-contenido hidden space-y-4">

                <div class="mb-6">
                    <h3 class="text-2xl" style="font-family: 'Playfair Display', serif;">
                        Sábado de diversión
                    </h3>
                    <p class="mt-2 text-sm text-[#66747a]">
                        Aprovecha el día con actividades para todos.
                    </p>
                </div>

                <article class="actividad">
                    <div class="hora">09:00 AM <span>10:00 AM</span></div>
                    <div class="detalle">
                        <h4>Yoga frente al mar</h4>
                        <p>Comienza la mañana con calma y movimiento.</p>
                    </div>
                    <span class="lugar">Jardín</span>
                </article>

                <article class="actividad">
                    <div class="hora">11:00 AM <span>12:00 PM</span></div>
                    <div class="detalle">
                        <h4>Torneo de voleibol</h4>
                        <p>Forma un equipo y participa por premios sorpresa.</p>
                    </div>
                    <span class="lugar">Playa</span>
                </article>

                <article class="actividad">
                    <div class="hora">12:30 PM <span>01:15 PM</span></div>
                    <div class="detalle">
                        <h4>Aquaeróbicos</h4>
                        <p>Actívate y refréscate con una sesión musical.</p>
                    </div>
                    <span class="lugar">Alberca</span>
                </article>

                <article class="actividad">
                    <div class="hora">04:00 PM <span>05:00 PM</span></div>
                    <div class="detalle">
                        <h4>Juegos en equipo</h4>
                        <p>Compite en retos recreativos y dinámicas grupales.</p>
                    </div>
                    <span class="lugar">Área recreativa</span>
                </article>

                <article class="actividad">
                    <div class="hora">08:00 PM <span>10:00 PM</span></div>
                    <div class="detalle">
                        <h4>Noche temática</h4>
                        <p>Una velada con música, decoración y sorpresas.</p>
                    </div>
                    <span class="lugar">Terraza</span>
                </article>

            </div>

            <!-- DOMINGO -->
            <div id="domingo" class="dia-contenido hidden space-y-4">

                <div class="mb-6">
                    <h3 class="text-2xl" style="font-family: 'Playfair Display', serif;">
                        Domingo de relajación
                    </h3>
                    <p class="mt-2 text-sm text-[#66747a]">
                        Despide la semana disfrutando a tu ritmo.
                    </p>
                </div>

                <article class="actividad">
                    <div class="hora">09:00 AM <span>10:00 AM</span></div>
                    <div class="detalle">
                        <h4>Caminata junto al mar</h4>
                        <p>Disfruta de la brisa y de un paseo matutino.</p>
                    </div>
                    <span class="lugar">Playa</span>
                </article>

                <article class="actividad">
                    <div class="hora">11:00 AM <span>12:00 PM</span></div>
                    <div class="detalle">
                        <h4>Bingo de despedida</h4>
                        <p>Comparte una última actividad con otros huéspedes.</p>
                    </div>
                    <span class="lugar">Salón recreativo</span>
                </article>

                <article class="actividad">
                    <div class="hora">12:30 PM <span>01:15 PM</span></div>
                    <div class="detalle">
                        <h4>Juegos acuáticos</h4>
                        <p>Disfruta de actividades recreativas en la alberca.</p>
                    </div>
                    <span class="lugar">Alberca</span>
                </article>

                <article class="actividad">
                    <div class="hora">04:00 PM <span>05:00 PM</span></div>
                    <div class="detalle">
                        <h4>Tarde de juegos de mesa</h4>
                        <p>Relájate con juegos clásicos y buena compañía.</p>
                    </div>
                    <span class="lugar">Salón recreativo</span>
                </article>

                <article class="actividad">
                    <div class="hora">08:00 PM <span>09:00 PM</span></div>
                    <div class="detalle">
                        <h4>Despedida musical</h4>
                        <p>Cierra el día con música en un ambiente tranquilo.</p>
                    </div>
                    <span class="lugar">Terraza</span>
                </article>

            </div>

            <p class="mt-8 text-center text-xs leading-6 text-[#929894]">
                Programa ilustrativo. Las actividades y los horarios pueden
                variar según la temporada, el clima y la disponibilidad.
            </p>

        </div>
    </section>

    <!-- INFORMACIÓN ADICIONAL -->
    <section class="mx-auto max-w-7xl px-6 py-20 md:py-24">

        <div class="grid gap-12 md:grid-cols-2 md:items-center">

            <div>
                <p class="mb-4 text-xs tracking-[0.3em] text-[#b38b4b]">
                    INFORMACIÓN PARA HUÉSPEDES
                </p>

                <h2 class="text-4xl leading-tight md:text-5xl"
                    style="font-family: 'Playfair Display', serif;">
                    Unas recomendaciones antes de participar.
                </h2>

                <div class="mt-8 space-y-6">

                    <div>
                        <h3 class="font-semibold">Llega unos minutos antes</h3>
                        <p class="mt-2 text-sm leading-7 text-[#66747a]">
                            Te recomendamos presentarte entre 5 y 10 minutos
                            antes del comienzo de cada actividad.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold">Usa ropa cómoda</h3>
                        <p class="mt-2 text-sm leading-7 text-[#66747a]">
                            Para las actividades deportivas, lleva ropa
                            adecuada, protector solar y agua.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold">Consulta al personal</h3>
                        <p class="mt-2 text-sm leading-7 text-[#66747a]">
                            Pregunta en recepción si una actividad requiere
                            inscripción previa o tiene cupo limitado.
                        </p>
                    </div>

                </div>
            </div>

            <div class="overflow-hidden">
                <img src="https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=1200&q=85"
                     alt="Actividades recreativas junto al mar"
                     class="h-[420px] w-full object-cover">
            </div>

        </div>
    </section>

    <!-- CIERRE -->
    <section class="relative bg-cover bg-center px-6 py-24 text-center text-white"
             style="background-image: linear-gradient(rgba(12,31,43,.65), rgba(12,31,43,.75)), url('https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=1800&q=85');">

        <p class="mb-4 text-xs tracking-[0.3em] text-[#e4c58e]">
            TU ESTANCIA, UNA EXPERIENCIA
        </p>

        <h2 class="mx-auto max-w-2xl text-4xl md:text-5xl"
            style="font-family: 'Playfair Display', serif;">
            En MAREA, cada día tiene algo especial.
        </h2>

        <a href="habitaciones.php"
           class="mt-8 inline-block bg-[#faf8f3] px-8 py-4 text-xs tracking-widest text-[#173044] transition hover:bg-[#e9dfcf]">
            DESCUBRIR HABITACIONES
        </a>

    </section>

    <!-- FOOTER -->
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
                <a href="actividades.php" class="hover:text-white">Actividades</a>
            </div>

        </div>

        <div class="mx-auto mt-8 max-w-7xl border-t border-white/10 pt-6 text-center text-xs text-white/40">
            © <?= date('Y') ?> MAREA Hotel. Todos los derechos reservados.
        </div>

    </footer>

    <!-- ESTILOS -->
    <style>
        .actividad {
            display: flex;
            align-items: center;
            gap: 24px;
            padding: 24px;
            background: #faf8f3;
            border: 1px solid #e8e2d7;
            transition: border-color .2s, transform .2s;
        }

        .actividad:hover {
            border-color: #b38b4b;
            transform: translateY(-2px);
        }

        .hora {
            display: flex;
            flex-direction: column;
            gap: 6px;
            min-width: 115px;
            color: #173044;
            font-size: 13px;
            font-weight: 700;
        }

        .hora span {
            color: #b38b4b;
            font-size: 12px;
            font-weight: 500;
        }

        .detalle {
            flex: 1;
        }

        .detalle h4 {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
        }

        .detalle p {
            margin-top: 6px;
            color: #66747a;
            font-size: 13px;
            line-height: 1.7;
        }

        .lugar {
            padding: 8px 12px;
            background: #f0ece3;
            color: #66747a;
            font-size: 11px;
            white-space: nowrap;
        }

        @media (max-width: 640px) {
            .actividad {
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
                padding: 20px;
            }

            .hora {
                flex-direction: row;
                align-items: center;
                gap: 10px;
                flex-wrap: wrap;
            }

            .lugar {
                white-space: normal;
            }
        }
    </style>

    <!-- CAMBIAR DÍA -->
    <script>
        function mostrarDia(dia, boton) {
            document.querySelectorAll('.dia-contenido').forEach(function (seccion) {
                seccion.classList.add('hidden');
            });

            document.getElementById(dia).classList.remove('hidden');

            document.querySelectorAll('.dia-btn').forEach(function (btn) {
                btn.classList.remove('bg-[#173044]', 'text-white');
                btn.classList.add('border', 'border-[#d8d0c2]', 'bg-[#faf8f3]');
            });

            boton.classList.remove('border', 'border-[#d8d0c2]', 'bg-[#faf8f3]');
            boton.classList.add('bg-[#173044]', 'text-white');
        }
    </script>

</body>
</html>
