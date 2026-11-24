
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones | MAREA Admin</title>

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

            <a href="dashboard.php"
               class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 hover:text-white transition">
                <span>▦</span> Dashboard
            </a>

            <a href="habitaciones.php"
               class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#b38b4b] text-white">
                <span>▣</span> Habitaciones
            </a>

            <a href="reservas.php"
               class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 hover:text-white transition">
                <span>▤</span> Reservas
            </a>

            <a href="pagos.php"
               class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 hover:text-white transition">
                <span>＄</span> Pagos
            </a>

            <a href="clientes.php"
               class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 hover:text-white transition">
                <span>♙</span> Clientes
            </a>

            <a href="resenas.php"
                class="block shrink-0 px-4 py-3 text-sm text-white/65 transition hover:bg-white/10 hover:text-white">
                ★ &nbsp; Reseñas
            </a>

        </nav>

        <div class="p-5 border-t border-white/10">
            <a href="../index.php" class="text-sm text-white/60 hover:text-white transition">
                ← Volver al sitio
            </a>
        </div>

    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-1 min-w-0">

        <!-- ENCABEZADO -->
        <header class="bg-white border-b border-[#e8e3d9] px-6 md:px-10 py-5 flex justify-between items-center">
            <div>
                <p class="text-xs uppercase tracking-widest text-[#b38b4b]">
                    Administración
                </p>
                <h2 class="text-xl font-semibold mt-1">Habitaciones</h2>
            </div>

            <div class="text-right">
                <p class="text-sm font-semibold">Administrador</p>
                <p class="text-xs text-gray-400">Panel MAREA</p>
            </div>
        </header>

        <div class="p-6 md:p-10">

            <!-- TÍTULO -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-3xl md:text-4xl text-[#173044]">
                        Gestión de habitaciones
                    </h1>
                    <p class="text-gray-500 mt-2 text-sm">
                        Consulta y administra las habitaciones del hotel.
                    </p>
                </div>

                <button type="button"
                    class="bg-[#173044] hover:bg-[#25465e] text-white px-5 py-3 rounded-lg text-sm font-semibold transition">
                    + Agregar habitación
                </button>
            </div>

            <!-- TARJETAS DE ESTADÍSTICAS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Total de habitaciones</p>
                    <h3 class="text-3xl text-[#173044] mt-3">32</h3>
                    <p class="text-xs text-gray-400 mt-2">Habitaciones registradas</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Disponibles</p>
                    <h3 class="text-3xl text-green-700 mt-3">18</h3>
                    <p class="text-xs text-gray-400 mt-2">Listas para reservar</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Ocupadas</p>
                    <h3 class="text-3xl text-[#b38b4b] mt-3">11</h3>
                    <p class="text-xs text-gray-400 mt-2">Actualmente en uso</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Mantenimiento</p>
                    <h3 class="text-3xl text-red-700 mt-3">3</h3>
                    <p class="text-xs text-gray-400 mt-2">Fuera de servicio</p>
                </div>

            </div>

            <!-- TABLA -->
            <section class="bg-white rounded-xl border border-[#e8e3d9] overflow-hidden">

                <div class="p-6 border-b border-[#eee9df]">
                    <h2 class="text-xl text-[#173044]">Listado de habitaciones</h2>
                    <p class="text-sm text-gray-400 mt-1">
                        Información general de las habitaciones del hotel.
                    </p>
                </div>

                <!-- FILTROS -->
                <div class="p-5 flex flex-col sm:flex-row gap-3 justify-between">

                    <input
                        type="text"
                        id="buscarHabitacion"
                        placeholder="Buscar habitación..."
                        class="border border-[#e8e3d9] rounded-lg px-4 py-2.5 text-sm w-full sm:max-w-xs focus:outline-none focus:border-[#b38b4b]"
                    >

                    <select
                        id="filtroEstado"
                        class="border border-[#e8e3d9] rounded-lg px-4 py-2.5 text-sm text-gray-600 focus:outline-none"
                    >
                        <option value="todos">Todos los estados</option>
                        <option value="disponible">Disponible</option>
                        <option value="ocupada">Ocupada</option>
                        <option value="mantenimiento">Mantenimiento</option>
                    </select>

                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">

                        <thead class="bg-[#f8f6f1] text-gray-500 uppercase text-xs tracking-wider">
                            <tr>
                                <th class="px-6 py-4">Habitación</th>
                                <th class="px-6 py-4">Tipo</th>
                                <th class="px-6 py-4">Capacidad</th>
                                <th class="px-6 py-4">Precio por noche</th>
                                <th class="px-6 py-4">Estado</th>
                                <th class="px-6 py-4">Acciones</th>
                            </tr>
                        </thead>

                        <tbody id="tablaHabitaciones" class="divide-y divide-[#eee9df]">

                            <tr class="fila-habitacion hover:bg-[#faf9f6]" data-estado="disponible">
                                <td class="px-6 py-5 font-semibold">101</td>
                                <td class="px-6 py-5">Sencilla</td>
                                <td class="px-6 py-5">2 personas</td>
                                <td class="px-6 py-5">$1,200.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Disponible</span>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <button type="button" class="text-[#b38b4b] font-semibold mr-3">Editar</button>
                                    <button type="button" class="text-red-600 font-semibold">Eliminar</button>
                                </td>
                            </tr>

                            <tr class="fila-habitacion hover:bg-[#faf9f6]" data-estado="ocupada">
                                <td class="px-6 py-5 font-semibold">102</td>
                                <td class="px-6 py-5">Doble</td>
                                <td class="px-6 py-5">4 personas</td>
                                <td class="px-6 py-5">$1,800.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Ocupada</span>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <button type="button" class="text-[#b38b4b] font-semibold mr-3">Editar</button>
                                    <button type="button" class="text-red-600 font-semibold">Eliminar</button>
                                </td>
                            </tr>

                            <tr class="fila-habitacion hover:bg-[#faf9f6]" data-estado="mantenimiento">
                                <td class="px-6 py-5 font-semibold">103</td>
                                <td class="px-6 py-5">Suite</td>
                                <td class="px-6 py-5">2 personas</td>
                                <td class="px-6 py-5">$2,500.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">Mantenimiento</span>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <button type="button" class="text-[#b38b4b] font-semibold mr-3">Editar</button>
                                    <button type="button" class="text-red-600 font-semibold">Eliminar</button>
                                </td>
                            </tr>

                            <tr class="fila-habitacion hover:bg-[#faf9f6]" data-estado="disponible">
                                <td class="px-6 py-5 font-semibold">104</td>
                                <td class="px-6 py-5">Sencilla</td>
                                <td class="px-6 py-5">2 personas</td>
                                <td class="px-6 py-5">$1,200.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Disponible</span>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <button type="button" class="text-[#b38b4b] font-semibold mr-3">Editar</button>
                                    <button type="button" class="text-red-600 font-semibold">Eliminar</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <p id="sinResultados" class="hidden p-8 text-center text-sm text-gray-400">
                        No se encontraron habitaciones.
                    </p>
                </div>

                <div class="p-5 border-t border-[#eee9df] flex justify-between items-center text-xs text-gray-400">
                    <span id="contadorHabitaciones">Mostrando 4 habitaciones de ejemplo</span>
                    <span>Vista de demostración</span>
                </div>

            </section>

        </div>
    </main>
</div>

<script>
    const buscador = document.getElementById('buscarHabitacion');
    const filtroEstado = document.getElementById('filtroEstado');
    const filas = document.querySelectorAll('.fila-habitacion');
    const sinResultados = document.getElementById('sinResultados');
    const contador = document.getElementById('contadorHabitaciones');

    function filtrarHabitaciones() {
        const busqueda = buscador.value.toLowerCase().trim();
        const estadoSeleccionado = filtroEstado.value;

        let visibles = 0;

        filas.forEach(fila => {
            const numero = fila.cells[0].textContent.toLowerCase();
            const tipo = fila.cells[1].textContent.toLowerCase();
            const estado = fila.dataset.estado;

            const coincideTexto =
                numero.includes(busqueda) || tipo.includes(busqueda);

            const coincideEstado =
                estadoSeleccionado === 'todos' || estado === estadoSeleccionado;

            const mostrar = coincideTexto && coincideEstado;

            fila.style.display = mostrar ? '' : 'none';

            if (mostrar) visibles++;
        });

        sinResultados.classList.toggle('hidden', visibles !== 0);

        contador.textContent =
            `Mostrando ${visibles} de ${filas.length} habitaciones de ejemplo`;
    }

    buscador.addEventListener('input', filtrarHabitaciones);
    filtroEstado.addEventListener('change', filtrarHabitaciones);
</script>

</body>
</html>
