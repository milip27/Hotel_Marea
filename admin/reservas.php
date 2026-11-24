
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas | MAREA Admin</title>

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
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
                <span>▦</span> Dashboard
            </a>

            <a href="habitaciones.php"
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
                <span>▣</span> Habitaciones
            </a>

            <a href="reservas.php"
                class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#b38b4b] text-white">
                <span>▤</span> Reservas
            </a>

            <a href="pagos.php"
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
                <span>＄</span> Pagos
            </a>

            <a href="clientes.php"
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
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

    <!-- CONTENIDO -->
    <main class="flex-1 min-w-0">

        <!-- ENCABEZADO -->
        <header class="bg-white border-b border-[#e8e3d9] px-6 md:px-10 py-5 flex justify-between items-center">

            <div>
                <p class="text-xs uppercase tracking-widest text-[#b38b4b]">
                    Administración
                </p>

                <h2 class="text-xl font-semibold mt-1">
                    Reservas
                </h2>
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
                    Gestión de reservas
                </h1>

                <p class="text-gray-500 mt-2 text-sm">
                    Consulta y administra las reservaciones de los huéspedes.
                </p>
            </div>

            <!-- ESTADÍSTICAS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Total de reservas</p>
                    <h3 class="text-3xl text-[#173044] mt-3">128</h3>
                    <p class="text-xs text-gray-400 mt-2">Reservaciones registradas</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Confirmadas</p>
                    <h3 class="text-3xl text-green-700 mt-3">85</h3>
                    <p class="text-xs text-gray-400 mt-2">Reservas confirmadas</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Pendientes</p>
                    <h3 class="text-3xl text-[#b38b4b] mt-3">28</h3>
                    <p class="text-xs text-gray-400 mt-2">Esperando confirmación</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Canceladas</p>
                    <h3 class="text-3xl text-red-700 mt-3">15</h3>
                    <p class="text-xs text-gray-400 mt-2">Reservas canceladas</p>
                </div>

            </div>

            <!-- TABLA DE RESERVAS -->
            <section class="bg-white rounded-xl border border-[#e8e3d9] overflow-hidden">

                <div class="p-6 border-b border-[#eee9df]">
                    <h2 class="text-xl text-[#173044]">
                        Listado de reservas
                    </h2>

                    <p class="text-sm text-gray-400 mt-1">
                        Información de las reservaciones de los huéspedes.
                    </p>
                </div>

                <!-- FILTROS -->
                <div class="p-5 flex flex-col sm:flex-row gap-3 justify-between">

                    <input
                        id="buscarReserva"
                        type="text"
                        placeholder="Buscar por cliente o reserva..."
                        class="border border-[#e8e3d9] rounded-lg px-4 py-2.5 text-sm w-full sm:max-w-xs focus:outline-none focus:border-[#b38b4b]"
                    >

                    <select
                        id="filtroEstado"
                        class="border border-[#e8e3d9] rounded-lg px-4 py-2.5 text-sm text-gray-600 focus:outline-none"
                    >
                        <option value="">Todos los estados</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="Confirmada">Confirmada</option>
                        <option value="Cancelada">Cancelada</option>
                    </select>

                </div>

                <div class="overflow-x-auto">

                    <table class="w-full text-sm text-left">

                        <thead class="bg-[#f8f6f1] text-gray-500 uppercase text-xs tracking-wider">
                            <tr>
                                <th class="px-6 py-4">Reserva</th>
                                <th class="px-6 py-4">Cliente</th>
                                <th class="px-6 py-4">Habitación</th>
                                <th class="px-6 py-4">Entrada</th>
                                <th class="px-6 py-4">Salida</th>
                                <th class="px-6 py-4">Total</th>
                                <th class="px-6 py-4">Estado</th>
                                <th class="px-6 py-4">Acciones</th>
                            </tr>
                        </thead>

                        <tbody id="tablaReservas" class="divide-y divide-[#eee9df]">

                            <tr class="hover:bg-[#faf9f6]">
                                <td class="px-6 py-5 font-semibold">#001</td>
                                <td class="px-6 py-5">María López</td>
                                <td class="px-6 py-5">101</td>
                                <td class="px-6 py-5 whitespace-nowrap">20/11/2026</td>
                                <td class="px-6 py-5 whitespace-nowrap">23/11/2026</td>
                                <td class="px-6 py-5">$3,600.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                                        Confirmada
                                    </span>
                                </td>
                                <td class="px-6 py-5">
                                    <button type="button" class="text-[#b38b4b] font-semibold">
                                        Ver
                                    </button>
                                </td>
                            </tr>

                            <tr class="hover:bg-[#faf9f6]">
                                <td class="px-6 py-5 font-semibold">#002</td>
                                <td class="px-6 py-5">Carlos Ramírez</td>
                                <td class="px-6 py-5">102</td>
                                <td class="px-6 py-5 whitespace-nowrap">22/11/2026</td>
                                <td class="px-6 py-5 whitespace-nowrap">25/11/2026</td>
                                <td class="px-6 py-5">$5,400.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">
                                        Pendiente
                                    </span>
                                </td>
                                <td class="px-6 py-5">
                                    <button type="button" class="text-[#b38b4b] font-semibold">
                                        Ver
                                    </button>
                                </td>
                            </tr>

                            <tr class="hover:bg-[#faf9f6]">
                                <td class="px-6 py-5 font-semibold">#003</td>
                                <td class="px-6 py-5">Ana Martínez</td>
                                <td class="px-6 py-5">104</td>
                                <td class="px-6 py-5 whitespace-nowrap">18/11/2026</td>
                                <td class="px-6 py-5 whitespace-nowrap">20/11/2026</td>
                                <td class="px-6 py-5">$2,400.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">
                                        Cancelada
                                    </span>
                                </td>
                                <td class="px-6 py-5">
                                    <button type="button" class="text-[#b38b4b] font-semibold">
                                        Ver
                                    </button>
                                </td>
                            </tr>

                            <tr class="hover:bg-[#faf9f6]">
                                <td class="px-6 py-5 font-semibold">#004</td>
                                <td class="px-6 py-5">José Hernández</td>
                                <td class="px-6 py-5">103</td>
                                <td class="px-6 py-5 whitespace-nowrap">24/11/2026</td>
                                <td class="px-6 py-5 whitespace-nowrap">27/11/2026</td>
                                <td class="px-6 py-5">$7,500.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                                        Confirmada
                                    </span>
                                </td>
                                <td class="px-6 py-5">
                                    <button type="button" class="text-[#b38b4b] font-semibold">
                                        Ver
                                    </button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                    <p id="sinResultados" class="hidden p-8 text-center text-sm text-gray-400">
                        No se encontraron reservas.
                    </p>

                </div>

                <div class="p-5 border-t border-[#eee9df] flex justify-between items-center text-xs text-gray-400">
                    <span>Mostrando 4 reservas de ejemplo</span>
                    <span>Vista de demostración</span>
                </div>

            </section>

        </div>
    </main>

</div>

<script>
    // Filtros visuales de la tabla
    const buscarReserva = document.getElementById('buscarReserva');
    const filtroEstado = document.getElementById('filtroEstado');
    const filas = document.querySelectorAll('#tablaReservas tr');
    const sinResultados = document.getElementById('sinResultados');

    function filtrarReservas() {

        const busqueda = buscarReserva.value.toLowerCase();
        const estado = filtroEstado.value.toLowerCase();

        let visibles = 0;

        filas.forEach(fila => {

            const contenido = fila.textContent.toLowerCase();
            const coincideBusqueda = contenido.includes(busqueda);
            const coincideEstado = estado === '' || contenido.includes(estado);

            if (coincideBusqueda && coincideEstado) {
                fila.classList.remove('hidden');
                visibles++;
            } else {
                fila.classList.add('hidden');
            }

        });

        sinResultados.classList.toggle('hidden', visibles !== 0);
    }

    buscarReserva.addEventListener('input', filtrarReservas);
    filtroEstado.addEventListener('change', filtrarReservas);
</script>

</body>
</html>
