
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseñas | MAREA Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background: #f8f6f1;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="min-h-screen text-[#263b49]">

<div class="min-h-screen flex">

    <!-- MENÚ LATERAL -->
    <aside class="w-64 bg-[#173044] text-white hidden md:flex flex-col">

        <div class="px-7 py-8 border-b border-white/10">
            <h1 class="text-3xl tracking-widest">MAREA</h1>
            <p class="text-xs text-white/50 mt-2 tracking-widest uppercase">
                Panel administrativo
            </p>
        </div>

        <nav class="flex-1 px-4 py-7 space-y-2">

            <a href="dashboard.php" class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
                <span>▦</span> Dashboard
            </a>

            <a href="habitaciones.php" class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
                <span>▣</span> Habitaciones
            </a>

            <a href="reservas.php" class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
                <span>▤</span> Reservas
            </a>

            <a href="pagos.php" class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
                <span>＄</span> Pagos
            </a>

            <a href="clientes.php" class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
                <span>♙</span> Clientes
            </a>

            <a href="resenas.php" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#b38b4b] text-white">
                <span>★</span> Reseñas
            </a>

        </nav>

        <div class="p-5 border-t border-white/10">
            <a href="../index.php" class="text-sm text-white/60 hover:text-white transition">
                ← Volver al sitio
            </a>
        </div>

    </aside>


    <!-- CONTENIDO -->
    <main class="flex-1 min-w-0">

        <!-- ENCABEZADO -->
        <header class="bg-white border-b border-[#e8e3d9] px-6 md:px-10 py-5 flex justify-between items-center">
            <div>
                <p class="text-xs uppercase tracking-widest text-[#b38b4b]">Administración</p>
                <h2 class="text-xl font-semibold mt-1">Reseñas</h2>
            </div>

            <div class="text-right">
                <p class="text-sm font-semibold">Administrador</p>
                <p class="text-xs text-gray-400">Panel MAREA</p>
            </div>
        </header>


        <div class="p-6 md:p-10">

            <!-- TÍTULO -->
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl text-[#173044]">
                    Opiniones de huéspedes
                </h1>
                <p class="text-gray-500 mt-2 text-sm">
                    Consulta las calificaciones y comentarios de los clientes.
                </p>
            </div>


            <!-- ESTADÍSTICAS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5 mb-8">

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Total de reseñas</p>
                    <h3 class="text-3xl text-[#173044] mt-3">64</h3>
                    <p class="text-xs text-gray-400 mt-2">Opiniones registradas</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Calificación promedio</p>
                    <h3 class="text-3xl text-[#b38b4b] mt-3">4.8 / 5</h3>
                    <p class="text-xs text-gray-400 mt-2">Evaluación de los huéspedes</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Calificaciones positivas</p>
                    <h3 class="text-3xl text-green-700 mt-3">58</h3>
                    <p class="text-xs text-gray-400 mt-2">De 4 y 5 estrellas</p>
                </div>

            </div>


            <!-- LISTADO DE RESEÑAS -->
            <section class="bg-white rounded-xl border border-[#e8e3d9] overflow-hidden">

                <div class="p-6 border-b border-[#eee9df]">
                    <h2 class="text-xl text-[#173044]">Listado de reseñas</h2>
                    <p class="text-sm text-gray-400 mt-1">
                        Comentarios compartidos por los huéspedes.
                    </p>
                </div>


                <!-- BUSCADOR Y FILTRO -->
                <div class="p-5 flex flex-col sm:flex-row gap-3 justify-between">

                    <input
                        type="text"
                        id="buscarResena"
                        placeholder="Buscar por cliente..."
                        class="border border-[#e8e3d9] rounded-lg px-4 py-2.5 text-sm w-full sm:max-w-xs focus:outline-none focus:border-[#b38b4b]"
                    >

                    <select
                        id="filtroCalificacion"
                        class="border border-[#e8e3d9] rounded-lg px-4 py-2.5 text-sm text-gray-600 focus:outline-none"
                    >
                        <option value="">Todas las calificaciones</option>
                        <option value="5">5 estrellas</option>
                        <option value="4">4 estrellas</option>
                        <option value="3">3 estrellas</option>
                        <option value="2">2 estrellas</option>
                        <option value="1">1 estrella</option>
                    </select>

                </div>


                <div id="listaResenas" class="p-5 space-y-5">

                    <!-- RESEÑA 1 -->
                    <article class="resena border border-[#eee9df] rounded-xl p-5" data-calificacion="5">
                        <div class="flex flex-col sm:flex-row sm:justify-between gap-3">
                            <div>
                                <h3 class="text-lg text-[#173044]">María López</h3>
                                <p class="text-xs text-gray-400 mt-1">Reserva #001 · 20/11/2026</p>
                            </div>

                            <div class="text-[#b38b4b] tracking-widest">
                                ★★★★★
                                <span class="text-xs text-gray-400 tracking-normal ml-1">5/5</span>
                            </div>
                        </div>

                        <p class="text-sm text-gray-600 mt-4 leading-relaxed">
                            Excelente servicio, las habitaciones estaban muy limpias y el personal fue muy amable. Sin duda volvería.
                        </p>
                    </article>


                    <!-- RESEÑA 2 -->
                    <article class="resena border border-[#eee9df] rounded-xl p-5" data-calificacion="4">
                        <div class="flex flex-col sm:flex-row sm:justify-between gap-3">
                            <div>
                                <h3 class="text-lg text-[#173044]">Carlos Ramírez</h3>
                                <p class="text-xs text-gray-400 mt-1">Reserva #002 · 18/11/2026</p>
                            </div>

                            <div class="text-[#b38b4b] tracking-widest">
                                ★★★★☆
                                <span class="text-xs text-gray-400 tracking-normal ml-1">4/5</span>
                            </div>
                        </div>

                        <p class="text-sm text-gray-600 mt-4 leading-relaxed">
                            Muy buena experiencia. Las instalaciones son cómodas y la ubicación es excelente.
                        </p>
                    </article>


                    <!-- RESEÑA 3 -->
                    <article class="resena border border-[#eee9df] rounded-xl p-5" data-calificacion="3">
                        <div class="flex flex-col sm:flex-row sm:justify-between gap-3">
                            <div>
                                <h3 class="text-lg text-[#173044]">Ana Martínez</h3>
                                <p class="text-xs text-gray-400 mt-1">Reserva #003 · 15/11/2026</p>
                            </div>

                            <div class="text-[#b38b4b] tracking-widest">
                                ★★★☆☆
                                <span class="text-xs text-gray-400 tracking-normal ml-1">3/5</span>
                            </div>
                        </div>

                        <p class="text-sm text-gray-600 mt-4 leading-relaxed">
                            El hotel es agradable, aunque considero que algunos servicios podrían mejorar.
                        </p>
                    </article>


                    <!-- RESEÑA 4 -->
                    <article class="resena border border-[#eee9df] rounded-xl p-5" data-calificacion="5">
                        <div class="flex flex-col sm:flex-row sm:justify-between gap-3">
                            <div>
                                <h3 class="text-lg text-[#173044]">José Hernández</h3>
                                <p class="text-xs text-gray-400 mt-1">Reserva #004 · 12/11/2026</p>
                            </div>

                            <div class="text-[#b38b4b] tracking-widest">
                                ★★★★★
                                <span class="text-xs text-gray-400 tracking-normal ml-1">5/5</span>
                            </div>
                        </div>

                        <p class="text-sm text-gray-600 mt-4 leading-relaxed">
                            Una estancia maravillosa. Todo estuvo muy bien organizado y la atención fue excelente.
                        </p>
                    </article>

                </div>

                <p id="sinResenas" class="hidden px-6 py-8 text-center text-sm text-gray-400">
                    No se encontraron reseñas.
                </p>

                <div class="p-5 border-t border-[#eee9df] flex justify-between items-center text-xs text-gray-400">
                    <span id="contadorResenas">Mostrando 4 reseñas de ejemplo</span>
                    <span>Vista de demostración</span>
                </div>

            </section>

        </div>
    </main>
</div>


<script>
    const buscarResena = document.getElementById('buscarResena');
    const filtroCalificacion = document.getElementById('filtroCalificacion');
    const resenas = document.querySelectorAll('.resena');
    const sinResenas = document.getElementById('sinResenas');
    const contadorResenas = document.getElementById('contadorResenas');

    function filtrarResenas() {
        const texto = buscarResena.value.toLowerCase().trim();
        const calificacion = filtroCalificacion.value;

        let visibles = 0;

        resenas.forEach(resena => {
            const contenido = resena.textContent.toLowerCase();
            const estrellas = resena.dataset.calificacion;

            const coincideTexto = contenido.includes(texto);
            const coincideCalificacion = calificacion === '' || estrellas === calificacion;

            if (coincideTexto && coincideCalificacion) {
                resena.classList.remove('hidden');
                visibles++;
            } else {
                resena.classList.add('hidden');
            }
        });

        sinResenas.classList.toggle('hidden', visibles !== 0);
        contadorResenas.textContent = `Mostrando ${visibles} de 4 reseñas de ejemplo`;
    }

    buscarResena.addEventListener('input', filtrarResenas);
    filtroCalificacion.addEventListener('change', filtrarResenas);
</script>

</body>
</html>
