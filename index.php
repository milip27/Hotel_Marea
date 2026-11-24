
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MAREA | Hotel & Experiencias</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-50 text-stone-800 antialiased">

    <!-- Navegación -->
    <header class="absolute top-0 z-20 w-full text-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6 lg:px-12">

            <a href="index.php" class="text-2xl font-semibold tracking-[0.25em]">
                MAREA
            </a>

            <div class="hidden items-center gap-8 text-sm md:flex">
                <a href="#hotel" class="transition hover:text-stone-300">El hotel</a>
                <a href="#habitaciones" class="transition hover:text-stone-300">Habitaciones</a>
                <a href="#experiencias" class="transition hover:text-stone-300">Experiencias</a>
                <a href="actividades.php" class="transition hover:text-stone-300">Actividades</a>
            </div>

            <a href="login.php"
                class="border border-white/70 px-5 py-2.5 text-sm transition hover:bg-white hover:text-stone-900">
                Iniciar sesión
            </a>

        </nav>
    </header>


    <main>

        <!-- Portada -->
        <section class="relative flex min-h-[680px] items-center bg-cover bg-center md:min-h-[780px]"
            style="background-image: linear-gradient(90deg, rgba(15,23,25,.65), rgba(15,23,25,.12)), url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=2000&q=85')">

            <div class="mx-auto w-full max-w-7xl px-6 pb-16 pt-36 lg:px-12">

                <p class="mb-6 text-xs font-medium uppercase tracking-[0.35em] text-stone-200">
                    Un lugar para desconectar
                </p>

                <h1 class="max-w-3xl text-5xl font-light leading-tight text-white md:text-7xl">
                    Tu próxima historia
                    <span class="block font-medium italic">comienza aquí.</span>
                </h1>

                <p class="mt-6 max-w-lg text-base leading-7 text-stone-200 md:text-lg">
                    Descubre un espacio donde la tranquilidad, el diseño y cada detalle
                    se unen para crear una experiencia inolvidable.
                </p>

                <a href="#disponibilidad"
                    class="mt-9 inline-block bg-white px-7 py-4 text-sm font-medium text-stone-900 transition hover:bg-stone-200">
                    Descubrir habitaciones <span aria-hidden="true">→</span>
                </a>

            </div>

            <div class="absolute bottom-8 right-8 hidden text-xs uppercase tracking-[0.25em] text-white/80 md:block">
                Descansa · Explora · Disfruta
            </div>

        </section>


        <!-- Buscador -->
        <section id="disponibilidad" class="relative z-10 mx-auto -mt-1 max-w-7xl px-4 md:-mt-12 md:px-12">

            <form action="disponibilidad.php" method="GET"
                class="grid gap-4 bg-white p-6 shadow-xl shadow-stone-900/5 md:grid-cols-4 md:items-end md:p-8">

                <div>
                    <label for="entrada"
                        class="mb-2 block text-xs font-semibold uppercase tracking-widest text-stone-500">
                        Llegada
                    </label>

                    <input id="entrada" type="date" name="entrada" required
                        class="w-full border-b border-stone-300 bg-transparent py-3 text-sm outline-none focus:border-stone-800">
                </div>

                <div>
                    <label for="salida"
                        class="mb-2 block text-xs font-semibold uppercase tracking-widest text-stone-500">
                        Salida
                    </label>

                    <input id="salida" type="date" name="salida" required
                        class="w-full border-b border-stone-300 bg-transparent py-3 text-sm outline-none focus:border-stone-800">
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <!-- Adultos -->
                    <div>
                        <label class="mb-2 block text-xs font-semibold uppercase tracking-widest text-stone-500">
                            Adultos
                        </label>

                        <div class="flex items-center justify-between border-b border-stone-300 py-3">

                            <button type="button" onclick="cambiarInicio('adultos', -1)"
                                class="flex h-8 w-8 items-center justify-center border border-stone-300 text-stone-800">
                                −
                            </button>

                            <span id="adultosInicioCantidad" class="text-sm">2</span>

                            <button type="button" onclick="cambiarInicio('adultos', 1)"
                                class="flex h-8 w-8 items-center justify-center border border-stone-300 text-stone-800">
                                +
                            </button>

                        </div>

                        <input type="hidden" id="adultosInicio" name="adultos" value="2">
                    </div>

                    <!-- Niños -->
                    <div>
                        <label class="mb-2 block text-xs font-semibold uppercase tracking-widest text-stone-500">
                            Niños
                        </label>

                        <div class="flex items-center justify-between border-b border-stone-300 py-3">

                            <button type="button" onclick="cambiarInicio('ninos', -1)"
                                class="flex h-8 w-8 items-center justify-center border border-stone-300 text-stone-800">
                                −
                            </button>

                            <span id="ninosInicioCantidad" class="text-sm">0</span>

                            <button type="button" onclick="cambiarInicio('ninos', 1)"
                                class="flex h-8 w-8 items-center justify-center border border-stone-300 text-stone-800">
                                +
                            </button>

                        </div>

                        <input type="hidden" id="ninosInicio" name="ninos" value="0">
                    </div>

                </div>

                <button type="submit"
                    class="bg-stone-900 px-6 py-4 text-sm font-medium text-white transition hover:bg-stone-700">
                    Consultar disponibilidad
                </button>

            </form>
        </section>


        <!-- Introducción -->
        <section id="hotel"
            class="mx-auto grid max-w-7xl gap-12 px-6 py-24 md:grid-cols-2 md:items-center md:px-12 md:py-32">

            <div>

                <p class="mb-4 text-xs font-semibold uppercase tracking-[0.3em] text-stone-500">
                    Bienvenido a MAREA
                </p>

                <h2 class="max-w-xl text-4xl font-light leading-tight md:text-5xl">
                    La belleza de lo simple,
                    <span class="italic">el placer de descansar.</span>
                </h2>

                <p class="mt-6 max-w-lg leading-7 text-stone-600">
                    Creemos que los mejores momentos nacen cuando puedes detenerte,
                    respirar y disfrutar. Nuestro hotel combina espacios acogedores,
                    atención cercana y experiencias pensadas para ti.
                </p>

                <a href="informacion.php"
                    class="mt-8 inline-flex items-center gap-3 border-b border-stone-800 pb-2 text-sm font-medium">
                    Conoce nuestro hotel <span aria-hidden="true">→</span>
                </a>

            </div>

            <div class="grid grid-cols-2 gap-4">

                <img
                    src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=800&q=80"
                    alt="Habitación elegante del hotel"
                    class="mt-10 h-64 w-full object-cover md:h-80">

                <img
                    src="https://images.unsplash.com/photo-1575429198097-0414ec08e8cd?auto=format&fit=crop&w=800&q=80"
                    alt="Piscina de hotel rodeada de vegetación"
                    class="h-64 w-full object-cover md:h-80">

            </div>

        </section>


        <!-- Habitaciones -->
        <section id="habitaciones" class="bg-stone-100 py-24 md:py-28">

            <div class="mx-auto max-w-7xl px-6 md:px-12">

                <div class="mb-12 flex flex-col justify-between gap-5 md:flex-row md:items-end">

                    <div>
                        <p class="mb-4 text-xs font-semibold uppercase tracking-[0.3em] text-stone-500">
                            Encuentra tu espacio
                        </p>

                        <h2 class="text-4xl font-light md:text-5xl">
                            Nuestras habitaciones
                        </h2>
                    </div>

                    <a href="habitaciones.php"
                        class="w-fit border-b border-stone-800 pb-2 text-sm font-medium">
                        Ver todas las habitaciones →
                    </a>

                </div>


                <div class="grid gap-7 md:grid-cols-3">

                    <!-- Habitación estándar -->
                    <article class="group bg-white">

                        <div class="overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=900&q=80"
                                alt="Habitación estándar"
                                class="h-72 w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>

                        <div class="p-6">

                            <p class="text-xs uppercase tracking-widest text-stone-500">
                                01 · Esencial
                            </p>

                            <h3 class="mt-3 text-2xl font-medium">
                                Habitación estándar
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-stone-600">
                                Comodidad y sencillez para disfrutar cada momento.
                            </p>

                            <a href="habitaciones.php"
                                class="mt-6 inline-block text-sm font-medium underline underline-offset-4">
                                Descubrir habitación
                            </a>

                        </div>
                    </article>


                    <!-- Habitación deluxe -->
                    <article class="group bg-white">

                        <div class="overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=900&q=80"
                                alt="Habitación deluxe"
                                class="h-72 w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>

                        <div class="p-6">

                            <p class="text-xs uppercase tracking-widest text-stone-500">
                                02 · Bienestar
                            </p>

                            <h3 class="mt-3 text-2xl font-medium">
                                Habitación deluxe
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-stone-600">
                                Un ambiente amplio para regalarte un descanso especial.
                            </p>

                            <a href="habitaciones.php"
                                class="mt-6 inline-block text-sm font-medium underline underline-offset-4">
                                Descubrir habitación
                            </a>

                        </div>
                    </article>


                    <!-- Suite -->
                    <article class="group bg-white">

                        <div class="overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?auto=format&fit=crop&w=900&q=80"
                                alt="Suite de hotel"
                                class="h-72 w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>

                        <div class="p-6">

                            <p class="text-xs uppercase tracking-widest text-stone-500">
                                03 · Exclusiva
                            </p>

                            <h3 class="mt-3 text-2xl font-medium">
                                Suite
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-stone-600">
                                Un espacio pensado para vivir una estancia inolvidable.
                            </p>

                            <a href="habitaciones.php"
                                class="mt-6 inline-block text-sm font-medium underline underline-offset-4">
                                Descubrir habitación
                            </a>

                        </div>
                    </article>

                </div>
            </div>
        </section>


        <!-- Experiencias -->
        <section id="experiencias" class="mx-auto max-w-7xl px-6 py-24 md:px-12 md:py-32">

            <div class="mx-auto mb-14 max-w-2xl text-center">

                <p class="mb-4 text-xs font-semibold uppercase tracking-[0.3em] text-stone-500">
                    Más que una estancia
                </p>

                <h2 class="text-4xl font-light md:text-5xl">
                    Momentos que recordarás
                </h2>

                <p class="mt-5 leading-7 text-stone-600">
                    Descubre actividades y eventos que harán especial cada visita.
                </p>

            </div>


            <div class="grid gap-6 md:grid-cols-2">

                <!-- Eventos -->
                <article class="relative flex min-h-80 items-end overflow-hidden bg-stone-300">

                    <img
                        src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=1200&q=80"
                        alt="Evento especial en un espacio decorado"
                        class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                    <div class="relative p-8 text-white md:p-10">

                        <p class="text-xs uppercase tracking-[0.25em] text-white/80">
                            Celebra con nosotros
                        </p>

                        <h3 class="mt-3 text-3xl font-light">
                            Eventos especiales
                        </h3>

                        <a href="actividades.php"
                            class="mt-5 inline-block text-sm underline underline-offset-4">
                            Explorar actividades →
                        </a>

                    </div>
                </article>


                <!-- Experiencias únicas -->
                <article class="relative flex min-h-80 items-end overflow-hidden bg-stone-300">

                    <img
                        src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80"
                        alt="Paisaje de playa junto al mar"
                        class="absolute inset-0 h-full w-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                    <div class="relative p-8 text-white md:p-10">

                        <p class="text-xs uppercase tracking-[0.25em] text-white/80">
                            Tu tiempo, a tu manera
                        </p>

                        <h3 class="mt-3 text-3xl font-light">
                            Experiencias únicas
                        </h3>

                        <p class="mt-3 max-w-md text-sm leading-6 text-white/85">
                            Disfruta cada rincón y haz de tu estancia algo especial.
                        </p>

                    </div>
                </article>

            </div>
        </section>


        <!-- Invitación a reservar -->
        <section class="bg-stone-900 px-6 py-20 text-center text-white md:py-28">

            <p class="mb-5 text-xs uppercase tracking-[0.3em] text-stone-300">
                Tu descanso comienza aquí
            </p>

            <h2 class="mx-auto max-w-3xl text-4xl font-light leading-tight md:text-6xl">
                Regálate unos días para disfrutar.
            </h2>

            <p class="mx-auto mt-6 max-w-xl leading-7 text-stone-300">
                Encuentra el espacio perfecto para tu próxima escapada.
            </p>

            <a href="disponibilidad.php"
                class="mt-9 inline-block bg-white px-8 py-4 text-sm font-medium text-stone-900 transition hover:bg-stone-200">
                Planear mi estancia
            </a>

        </section>

    </main>


    <!-- Pie de página -->
    <footer class="bg-stone-950 px-6 py-12 text-stone-300 md:px-12">

        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-8 md:flex-row md:items-center">

            <div>

                <a href="index.php" class="text-2xl font-semibold tracking-[0.25em] text-white">
                    MAREA
                </a>

                <p class="mt-3 text-sm text-stone-400">
                    Un espacio para reconectar contigo.
                </p>

            </div>


            <div class="flex flex-wrap gap-6 text-sm">

                <a href="informacion.php" class="transition hover:text-white">
                    El hotel
                </a>

                <a href="habitaciones.php" class="transition hover:text-white">
                    Habitaciones
                </a>

                <a href="actividades.php" class="transition hover:text-white">
                    Actividades
                </a>

                <a href="reservas.php" class="transition hover:text-white">
                    Reservaciones
                </a>

            </div>

        </div>


        <div class="mx-auto mt-10 max-w-7xl border-t border-white/10 pt-6 text-xs text-stone-500">

            © <?= date('Y') ?> MAREA Hotel. Todos los derechos reservados.

        </div>

    </footer>


    <!-- Contador de huéspedes -->
    <script>

        function cambiarInicio(tipo, cambio) {

            const input = document.getElementById(
                tipo === 'adultos' ? 'adultosInicio' : 'ninosInicio'
            );

            const contador = document.getElementById(
                tipo === 'adultos' ? 'adultosInicioCantidad' : 'ninosInicioCantidad'
            );

            let cantidad = parseInt(input.value) + cambio;

            if (tipo === 'adultos') {
                cantidad = Math.max(1, Math.min(10, cantidad));
            } else {
                cantidad = Math.max(0, Math.min(10, cantidad));
            }

            input.value = cantidad;
            contador.textContent = cantidad;

        }

    </script>

</body>
</html>
