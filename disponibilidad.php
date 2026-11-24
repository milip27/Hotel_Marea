
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disponibilidad | MAREA</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background: #f8f6f1;
        }

        h1, h2, h3, .font-serif {
            font-family: 'Playfair Display', serif;
        }

        input, select {
            outline: none;
        }

        input:focus, select:focus {
            border-color: #b38b4b;
        }
    </style>
</head>

<body class="min-h-screen text-[#173044]">

    <?php
        $entrada = $_GET['entrada'] ?? '';
        $salida = $_GET['salida'] ?? '';
        $adultos = max(1, min(10, (int)($_GET['adultos'] ?? 2)));
        $ninos = max(0, min(10, (int)($_GET['ninos'] ?? 0)));
    ?>

    <!-- Navegación -->
    <header class="border-b border-[#e8e0d2] bg-[#f8f6f1]">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6 lg:px-10">

            <a href="index.php" class="font-serif text-3xl tracking-[0.18em]">
                MAREA
            </a>

            <div class="hidden items-center gap-7 text-sm md:flex">
                <a href="index.php" class="transition hover:text-[#b38b4b]">Inicio</a>
                <a href="habitaciones.php" class="transition hover:text-[#b38b4b]">Habitaciones</a>
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
    <section class="relative flex min-h-[340px] items-center justify-center bg-cover bg-center px-6 text-center"
        style="background-image: linear-gradient(rgba(14,35,48,.48), rgba(14,35,48,.58)), url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=2000&q=85');">

        <div class="max-w-3xl py-20 text-white">
            <p class="mb-5 text-xs uppercase tracking-[0.35em] text-[#e5c994]">
                Tu próxima estancia comienza aquí
            </p>

            <h1 class="text-5xl font-normal leading-tight md:text-7xl">
                Encuentra tu espacio
            </h1>

            <p class="mx-auto mt-6 max-w-xl text-sm leading-7 text-white/85 md:text-base">
                Consulta las opciones para tus fechas y prepárate para disfrutar de una estancia junto al mar.
            </p>
        </div>
    </section>

    <!-- Formulario -->
    <main class="mx-auto max-w-6xl px-6 pb-24">

        <section class="relative z-10 -mt-10 border border-[#e8e0d2] bg-white p-7 shadow-xl md:p-10">

            <div class="mb-8">
                <p class="mb-2 text-xs uppercase tracking-[0.25em] text-[#a68d63]">
                    Planea tu estancia
                </p>

                <h2 class="text-3xl md:text-4xl">Consulta disponibilidad</h2>

                <p class="mt-3 text-sm leading-6 text-stone-500">
                    Selecciona tus fechas y los huéspedes que te acompañan.
                </p>
            </div>

            <form id="availabilityForm" action="disponibilidad.php" method="GET"
                class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">

                <div>
                    <label for="checkin" class="mb-2 block text-xs font-semibold uppercase tracking-wider">
                        Fecha de entrada
                    </label>

                    <input id="checkin" name="entrada" type="date" required
                        value="<?= htmlspecialchars($entrada, ENT_QUOTES, 'UTF-8') ?>"
                        class="w-full border border-[#ddd5c8] bg-[#fdfcf9] px-4 py-4 text-sm text-[#173044]">
                </div>

                <div>
                    <label for="checkout" class="mb-2 block text-xs font-semibold uppercase tracking-wider">
                        Fecha de salida
                    </label>

                    <input id="checkout" name="salida" type="date" required
                        value="<?= htmlspecialchars($salida, ENT_QUOTES, 'UTF-8') ?>"
                        class="w-full border border-[#ddd5c8] bg-[#fdfcf9] px-4 py-4 text-sm text-[#173044]">
                </div>

                <div>
                    <label class="mb-2 block text-xs font-semibold uppercase tracking-wider">
                        Huéspedes
                    </label>

                    <div class="space-y-4">

                        <!-- Adultos -->
                        <div>
                            <label class="mb-2 block text-sm font-medium text-[#173044]">
                                Adultos
                            </label>

                            <div class="flex items-center justify-between border border-[#ddd5c8] bg-[#fdfcf9] px-4 py-3">
                                <span class="text-sm text-[#64748b]">18 años o más</span>

                                <div class="flex items-center gap-4">
                                    <button type="button" onclick="cambiarHuesped('adultos', -1)"
                                        class="flex h-8 w-8 items-center justify-center border border-[#ddd5c8] text-[#173044]">−</button>

                                    <span id="adultosCantidad" class="min-w-4 text-center text-sm">
                                        <?= $adultos ?>
                                    </span>

                                    <button type="button" onclick="cambiarHuesped('adultos', 1)"
                                        class="flex h-8 w-8 items-center justify-center border border-[#ddd5c8] text-[#173044]">+</button>
                                </div>
                            </div>
                        </div>

                        <!-- Niños -->
                        <div>
                            <label class="mb-2 block text-sm font-medium text-[#173044]">
                                Niños
                            </label>

                            <div class="flex items-center justify-between border border-[#ddd5c8] bg-[#fdfcf9] px-4 py-3">
                                <span class="text-sm text-[#64748b]">0 a 17 años</span>

                                <div class="flex items-center gap-4">
                                    <button type="button" onclick="cambiarHuesped('ninos', -1)"
                                        class="flex h-8 w-8 items-center justify-center border border-[#ddd5c8] text-[#173044]">−</button>

                                    <span id="ninosCantidad" class="min-w-4 text-center text-sm">
                                        <?= $ninos ?>
                                    </span>

                                    <button type="button" onclick="cambiarHuesped('ninos', 1)"
                                        class="flex h-8 w-8 items-center justify-center border border-[#ddd5c8] text-[#173044]">+</button>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="adultos" name="adultos" value="<?= $adultos ?>">
                        <input type="hidden" id="ninos" name="ninos" value="<?= $ninos ?>">

                    </div>
                </div>

                <div class="md:col-span-2 lg:col-span-3">
                    <button type="submit"
                        class="w-full bg-[#173044] px-6 py-4 text-xs uppercase tracking-widest text-white transition hover:bg-[#b38b4b]">
                        Consultar disponibilidad
                    </button>
                </div>

            </form>

            <p id="formMessage"
                class="mt-5 hidden border-l-2 border-[#b38b4b] bg-[#f8f6f1] p-4 text-sm leading-6 text-[#173044]"
                role="status"></p>

        </section>

        <!-- Resultados de ejemplo -->
        <section id="results" class="mt-16">

            <div class="mb-8 text-center">
                <p class="mb-3 text-xs uppercase tracking-[0.3em] text-[#a68d63]">
                    Descubre MAREA
                </p>

                <h2 class="text-3xl md:text-4xl">Habitaciones para ti</h2>

                <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-stone-500">
                    Conoce algunos de nuestros espacios pensados para descansar y disfrutar.
                </p>
            </div>

            <div class="grid gap-7 md:grid-cols-2 lg:grid-cols-3">

                <!-- Habitación Estándar -->
                <article class="group overflow-hidden border border-[#e8e0d2] bg-white transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="relative overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=900&q=80"
                            alt="Habitación Estándar"
                            class="h-60 w-full object-cover transition duration-500 group-hover:scale-105">

                        <span class="absolute left-4 top-4 bg-white px-3 py-2 text-[10px] uppercase tracking-widest text-[#173044]">
                            Ideal para parejas
                        </span>
                    </div>

                    <div class="p-6">
                        <h3 class="text-2xl">Habitación Estándar</h3>

                        <div class="mt-2 flex items-center gap-2">
                            <div class="flex text-[#b38b4b]">★★★★☆ 4.5</div>
                        </div>

                        <p class="mt-3 text-sm leading-6 text-stone-500">
                            Un espacio acogedor para descansar y disfrutar de una estancia tranquila.
                        </p>

                        <div class="mt-5 border-y border-[#eee8de] py-4">
                            <p class="mb-3 text-xs font-semibold uppercase tracking-widest text-[#a68d63]">
                                Características
                            </p>

                            <ul class="space-y-2 text-sm text-stone-600">
                                <li>• Capacidad: 2 personas</li>
                                <li>• 1 cama matrimonial</li>
                                <li>• Baño privado</li>
                                <li>• Wi-Fi y aire acondicionado</li>
                            </ul>
                        </div>

                        <div class="mt-5 flex items-end justify-between">
                            <div>
                                <p class="text-xs text-stone-500">Desde</p>
                                <p class="text-2xl font-semibold">$1,800</p>
                                <p class="text-xs text-stone-500">MXN / noche</p>
                            </div>
                        </div>

                        <a href="login.php"
                            class="mt-6 block bg-[#173044] px-5 py-4 text-center text-xs uppercase tracking-widest text-white transition hover:bg-[#b38b4b]">
                            Reservar habitación
                        </a>
                    </div>
                </article>

                <!-- Habitación Deluxe -->
                <article class="group overflow-hidden border border-[#e8e0d2] bg-white transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="relative overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=900&q=80"
                            alt="Habitación Deluxe"
                            class="h-60 w-full object-cover transition duration-500 group-hover:scale-105">

                        <span class="absolute left-4 top-4 bg-white px-3 py-2 text-[10px] uppercase tracking-widest text-[#173044]">
                            Más espacio
                        </span>
                    </div>

                    <div class="p-6">
                        <h3 class="text-2xl">Habitación Deluxe</h3>

                        <div class="mt-2 flex items-center gap-2">
                            <div class="flex text-[#b38b4b]">★★★★★ 4.8</div>
                        </div>

                        <p class="mt-3 text-sm leading-6 text-stone-500">
                            Una habitación amplia y luminosa, diseñada para ofrecer mayor comodidad.
                        </p>

                        <div class="mt-5 border-y border-[#eee8de] py-4">
                            <p class="mb-3 text-xs font-semibold uppercase tracking-widest text-[#a68d63]">
                                Características
                            </p>

                            <ul class="space-y-2 text-sm text-stone-600">
                                <li>• Capacidad: 3 personas</li>
                                <li>• 1 cama King Size</li>
                                <li>• Baño privado</li>
                                <li>• Wi-Fi, TV y aire acondicionado</li>
                            </ul>
                        </div>

                        <div class="mt-5 flex items-end justify-between">
                            <div>
                                <p class="text-xs text-stone-500">Desde</p>
                                <p class="text-2xl font-semibold">$2,600</p>
                                <p class="text-xs text-stone-500">MXN / noche</p>
                            </div>
                        </div>

                        <a href="login.php"
                            class="mt-6 block bg-[#173044] px-5 py-4 text-center text-xs uppercase tracking-widest text-white transition hover:bg-[#b38b4b]">
                            Reservar habitación
                        </a>
                    </div>
                </article>

                <!-- Suite MAREA -->
                <article class="group overflow-hidden border border-[#e8e0d2] bg-white transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="relative overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=900&q=80"
                            alt="Suite MAREA"
                            class="h-60 w-full object-cover transition duration-500 group-hover:scale-105">

                        <span class="absolute left-4 top-4 bg-white px-3 py-2 text-[10px] uppercase tracking-widest text-[#173044]">
                            Experiencia especial
                        </span>
                    </div>

                    <div class="p-6">
                        <h3 class="text-2xl">Suite MAREA</h3>

                        <div class="mt-2 flex items-center gap-2">
                            <div class="flex text-[#b38b4b]">★★★★★ 5.0</div>
                        </div>

                        <p class="mt-3 text-sm leading-6 text-stone-500">
                            Un espacio sofisticado para quienes buscan una experiencia de descanso especial.
                        </p>

                        <div class="mt-5 border-y border-[#eee8de] py-4">
                            <p class="mb-3 text-xs font-semibold uppercase tracking-widest text-[#a68d63]">
                                Características
                            </p>

                            <ul class="space-y-2 text-sm text-stone-600">
                                <li>• Capacidad: 4 personas</li>
                                <li>• 2 camas matrimoniales</li>
                                <li>• Baño privado</li>
                                <li>• Wi-Fi, TV y aire acondicionado</li>
                            </ul>
                        </div>

                        <div class="mt-5 flex items-end justify-between">
                            <div>
                                <p class="text-xs text-stone-500">Desde</p>
                                <p class="text-2xl font-semibold">$3,500</p>
                                <p class="text-xs text-stone-500">MXN / noche</p>
                            </div>
                        </div>

                        <a href="login.php"
                            class="mt-6 block bg-[#173044] px-5 py-4 text-center text-xs uppercase tracking-widest text-white transition hover:bg-[#b38b4b]">
                            Reservar habitación
                        </a>
                    </div>
                </article>

            </div>

            <p class="mt-6 text-center text-xs leading-5 text-stone-400">
                Las habitaciones, tarifas y fotografías son ilustrativas. La disponibilidad real aún no está conectada a un sistema de reservas.
            </p>

        </section>
    </main>

    <!-- Pie de página -->
    <footer class="bg-[#173044] px-6 py-10 text-center text-white">

        <a href="index.php" class="font-serif text-2xl tracking-[0.18em]">MAREA</a>

        <p class="mt-3 text-xs tracking-wide text-white/60">
            Un lugar para desconectar y volver a ti.
        </p>

        <p class="mt-6 text-xs text-white/40">
            © <?= date('Y') ?> MAREA. Todos los derechos reservados.
        </p>

    </footer>

    <script>
        const checkin = document.getElementById('checkin');
        const checkout = document.getElementById('checkout');
        const form = document.getElementById('availabilityForm');
        const message = document.getElementById('formMessage');

        // Fecha actual
        const today = new Date();

        const localToday = new Date(
            today.getTime() - today.getTimezoneOffset() * 60000
        ).toISOString().split('T')[0];

        checkin.min = localToday;
        checkout.min = localToday;

        // Validar fecha de salida
        checkin.addEventListener('change', () => {
            checkout.min = checkin.value || localToday;

            if (checkout.value && checkout.value <= checkin.value) {
                checkout.value = '';
            }
        });

        // Validar formulario
        form.addEventListener('submit', (event) => {

            if (
                !checkin.value ||
                !checkout.value ||
                checkout.value <= checkin.value
            ) {
                event.preventDefault();

                message.textContent =
                    'Selecciona una fecha de salida posterior a la fecha de entrada.';

                message.classList.remove('hidden');
            }
        });

        // Mostrar resumen de búsqueda
        if (
            checkin.value &&
            checkout.value &&
            checkout.value > checkin.value
        ) {
            const entrada = new Date(checkin.value + 'T12:00:00');
            const salida = new Date(checkout.value + 'T12:00:00');

            const noches = Math.round(
                (salida - entrada) / (1000 * 60 * 60 * 24)
            );

            const formato = {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };

            const adultos = document.getElementById('adultos').value;
            const ninos = document.getElementById('ninos').value;

            message.textContent =
                `Tu búsqueda: del ${entrada.toLocaleDateString('es-MX', formato)} al ${salida.toLocaleDateString('es-MX', formato)}, para ${adultos} adulto(s) y ${ninos} niño(s), ${noches} noche(s). Las habitaciones de abajo son ejemplos visuales; aún no se verifica disponibilidad real.`;

            message.classList.remove('hidden');
        }

        // Cambiar cantidad de huéspedes
        function cambiarHuesped(tipo, cambio) {

            const input = document.getElementById(tipo);

            const contador = document.getElementById(
                tipo === 'adultos'
                    ? 'adultosCantidad'
                    : 'ninosCantidad'
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
