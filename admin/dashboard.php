
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administrativo | MAREA</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-[#f5f3ee] text-[#173044]"
      style="font-family: 'DM Sans', sans-serif;">

<div class="min-h-screen md:flex">

    <!-- MENÚ LATERAL -->
    <aside class="w-full bg-[#173044] text-white md:min-h-screen md:w-64 md:shrink-0">

        <div class="border-b border-white/10 px-7 py-7">
            <a href="../index.php" class="text-3xl tracking-[0.22em]"
               style="font-family: 'Playfair Display', serif;">
                MAREA
            </a>
            <p class="mt-2 text-[10px] tracking-[0.25em] text-white/45">
                ADMINISTRACIÓN
            </p>
        </div>

        <nav class="flex gap-2 overflow-x-auto p-4 md:block md:space-y-2">

            <a href="dashboard.php"
               class="block shrink-0 bg-white/10 px-4 py-3 text-sm text-[#e4c58e]">
                ▦ &nbsp; Panel principal
            </a>

            <a href="habitaciones.php"
               class="block shrink-0 px-4 py-3 text-sm text-white/65 transition hover:bg-white/10 hover:text-white">
                ▣ &nbsp; Habitaciones
            </a>

            <a href="reservas.php"
               class="block shrink-0 px-4 py-3 text-sm text-white/65 transition hover:bg-white/10 hover:text-white">
                ▤ &nbsp; Reservaciones
            </a>

            <a href="pagos.php"
               class="block shrink-0 px-4 py-3 text-sm text-white/65 transition hover:bg-white/10 hover:text-white">
                $ &nbsp; Pagos
            </a>

            <a href="clientes.php"
               class="block shrink-0 px-4 py-3 text-sm text-white/65 transition hover:bg-white/10 hover:text-white">
                ♙ &nbsp; Clientes
            </a>

            <a href="resenas.php"
               class="block shrink-0 px-4 py-3 text-sm text-white/65 transition hover:bg-white/10 hover:text-white">
               ★ &nbsp; Reseñas
            </a>

        </nav>

        <div class="hidden border-t border-white/10 p-6 md:block">
            <a href="../index.php" class="text-xs text-white/50 transition hover:text-white">
                ← Volver al sitio web
            </a>
        </div>

    </aside>


    <!-- CONTENIDO PRINCIPAL -->
    <main class="min-w-0 flex-1">

        <!-- ENCABEZADO -->
        <header class="flex flex-col justify-between gap-4 border-b border-[#e8e2d7] bg-white px-6 py-5 sm:flex-row sm:items-center md:px-10">

            <div>
                <p class="text-xs tracking-[0.2em] text-[#b38b4b]">
                    ADMINISTRACIÓN
                </p>
                <h1 class="mt-1 text-2xl"
                    style="font-family: 'Playfair Display', serif;">
                    Panel principal
                </h1>
            </div>

            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#eee9df] text-sm font-semibold">
                    A
                </div>
                <div>
                    <p class="text-sm font-semibold">Administrador</p>
                    <p class="text-xs text-[#899398]">Panel de control</p>
                </div>
            </div>

        </header>


        <div class="space-y-8 p-6 md:p-10">

            <!-- BIENVENIDA -->
            <section>
                <h2 class="text-3xl"
                    style="font-family: 'Playfair Display', serif;">
                    Bienvenido de nuevo
                </h2>
                <p class="mt-2 text-sm text-[#849095]">
                    Aquí tienes un resumen general de la actividad del hotel.
                </p>
            </section>


            <!-- TARJETAS DE ESTADÍSTICAS -->
            <section class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">

                <article class="border border-[#e8e2d7] bg-white p-6">
                    <p class="text-xs text-[#899398]">Reservaciones</p>
                    <h3 class="mt-3 text-3xl"
                        style="font-family: 'Playfair Display', serif;">
                        128
                    </h3>
                    <p class="mt-3 text-xs text-[#6b917e]">
                        Total registrado
                    </p>
                </article>

                <article class="border border-[#e8e2d7] bg-white p-6">
                    <p class="text-xs text-[#899398]">Habitaciones</p>
                    <h3 class="mt-3 text-3xl"
                        style="font-family: 'Playfair Display', serif;">
                        32
                    </h3>
                    <p class="mt-3 text-xs text-[#6b917e]">
                        Total de habitaciones
                    </p>
                </article>

                <article class="border border-[#e8e2d7] bg-white p-6">
                    <p class="text-xs text-[#899398]">Clientes registrados</p>
                    <h3 class="mt-3 text-3xl"
                        style="font-family: 'Playfair Display', serif;">
                        96
                    </h3>
                    <p class="mt-3 text-xs text-[#6b917e]">
                        Usuarios del hotel
                    </p>
                </article>

                <article class="border border-[#e8e2d7] bg-white p-6">
                    <p class="text-xs text-[#899398]">Ingresos registrados</p>
                    <h3 class="mt-3 text-3xl"
                        style="font-family: 'Playfair Display', serif;">
                        $84,500
                    </h3>
                    <p class="mt-3 text-xs text-[#6b917e]">
                        Cantidad de ejemplo
                    </p>
                </article>

            </section>


            <!-- OCUPACIÓN -->
            <section class="grid gap-6 xl:grid-cols-3">

                <article class="border border-[#e8e2d7] bg-white p-7 xl:col-span-2">

                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <h3 class="text-xl"
                                style="font-family: 'Playfair Display', serif;">
                                Estado de habitaciones
                            </h3>
                            <p class="mt-1 text-xs text-[#899398]">
                                Resumen de disponibilidad
                            </p>
                        </div>

                        <span class="text-xs text-[#899398]">
                            32 habitaciones
                        </span>
                    </div>

                    <div class="mt-8 grid grid-cols-3 gap-3">

                        <div class="bg-[#edf3ee] p-4 text-center">
                            <p class="text-2xl font-semibold text-[#668b72]">18</p>
                            <p class="mt-2 text-xs text-[#66747a]">Disponibles</p>
                        </div>

                        <div class="bg-[#f5eee2] p-4 text-center">
                            <p class="text-2xl font-semibold text-[#b38b4b]">11</p>
                            <p class="mt-2 text-xs text-[#66747a]">Ocupadas</p>
                        </div>

                        <div class="bg-[#f3eaea] p-4 text-center">
                            <p class="text-2xl font-semibold text-[#a76c6c]">3</p>
                            <p class="mt-2 text-xs text-[#66747a]">Mantenimiento</p>
                        </div>

                    </div>

                    <div class="mt-8">
                        <div class="mb-3 flex justify-between text-xs">
                            <span class="text-[#66747a]">Ocupación actual</span>
                            <span class="font-semibold">34.4%</span>
                        </div>

                        <div class="h-2 overflow-hidden bg-[#eeeae2]">
                            <div class="h-full w-[34.4%] bg-[#b38b4b]"></div>
                        </div>
                    </div>

                </article>


                <!-- ACCESOS RÁPIDOS -->
                <article class="border border-[#e8e2d7] bg-white p-7">

                    <h3 class="text-xl"
                        style="font-family: 'Playfair Display', serif;">
                        Accesos rápidos
                    </h3>

                    <p class="mt-1 text-xs text-[#899398]">
                        Administración del hotel
                    </p>

                    <div class="mt-6 space-y-3">

                        <a href="habitaciones.php"
                           class="block border border-[#e8e2d7] p-4 text-sm transition hover:border-[#b38b4b]">
                            + Agregar habitación
                        </a>

                        <a href="reservas.php"
                           class="block border border-[#e8e2d7] p-4 text-sm transition hover:border-[#b38b4b]">
                            Consultar reservaciones
                        </a>

                        <a href="clientes.php"
                           class="block border border-[#e8e2d7] p-4 text-sm transition hover:border-[#b38b4b]">
                            Ver clientes
                        </a>

                        <a href="resenas.php"
                           class="block border border-[#e8e2d7] p-4 text-sm transition hover:border-[#b38b4b]">
                           ★ &nbsp; Consultar reseñas
                        </a>

                    </div>

                </article>

            </section>


            <!-- RESERVACIONES RECIENTES -->
            <section class="border border-[#e8e2d7] bg-white">

                <div class="flex flex-wrap items-center justify-between gap-3 border-b border-[#eeeae2] p-6">
                    <div>
                        <h3 class="text-xl"
                            style="font-family: 'Playfair Display', serif;">
                            Reservaciones recientes
                        </h3>
                        <p class="mt-1 text-xs text-[#899398]">
                            Ejemplo de actividad registrada
                        </p>
                    </div>

                    <a href="reservas.php"
                       class="text-xs text-[#b38b4b] hover:underline">
                        Ver todas →
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-[650px] text-left text-sm">

                        <thead class="bg-[#faf8f3] text-xs text-[#899398]">
                            <tr>
                                <th class="px-6 py-4 font-medium">Cliente</th>
                                <th class="px-6 py-4 font-medium">Habitación</th>
                                <th class="px-6 py-4 font-medium">Entrada</th>
                                <th class="px-6 py-4 font-medium">Salida</th>
                                <th class="px-6 py-4 font-medium">Estado</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-[#eeeae2]">

                            <tr>
                                <td class="px-6 py-5">María González</td>
                                <td class="px-6 py-5">101</td>
                                <td class="px-6 py-5">20/11/2026</td>
                                <td class="px-6 py-5">23/11/2026</td>
                                <td class="px-6 py-5">
                                    <span class="bg-[#edf3ee] px-3 py-1 text-xs text-[#668b72]">
                                        Confirmada
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-5">Carlos Ramírez</td>
                                <td class="px-6 py-5">205</td>
                                <td class="px-6 py-5">22/11/2026</td>
                                <td class="px-6 py-5">25/11/2026</td>
                                <td class="px-6 py-5">
                                    <span class="bg-[#f5eee2] px-3 py-1 text-xs text-[#b38b4b]">
                                        Pendiente
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-5">Ana López</td>
                                <td class="px-6 py-5">302</td>
                                <td class="px-6 py-5">24/11/2026</td>
                                <td class="px-6 py-5">27/11/2026</td>
                                <td class="px-6 py-5">
                                    <span class="bg-[#edf3ee] px-3 py-1 text-xs text-[#668b72]">
                                        Confirmada
                                    </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </section>

            <footer class="pb-4 text-center text-xs text-[#a0a6a5]">
                © <?= date('Y') ?> MAREA Hotel · Panel administrativo
            </footer>

        </div>

    </main>

</div>

</body>
</html>
