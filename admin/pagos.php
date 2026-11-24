
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos | MAREA Admin</title>

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

            <a href="pagos.php" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#b38b4b] text-white">
                <span>＄</span> Pagos
            </a>

            <a href="clientes.php" class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/10 transition">
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
                <p class="text-xs uppercase tracking-widest text-[#b38b4b]">Administración</p>
                <h2 class="text-xl font-semibold mt-1">Pagos</h2>
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
                    Gestión de pagos
                </h1>
                <p class="text-gray-500 mt-2 text-sm">
                    Consulta los movimientos y el estado de los pagos de las reservaciones.
                </p>
            </div>


            <!-- ESTADÍSTICAS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Ingresos totales</p>
                    <h3 class="text-3xl text-[#173044] mt-3">$84,500</h3>
                    <p class="text-xs text-gray-400 mt-2">Pagos registrados</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Pagos completados</p>
                    <h3 class="text-3xl text-green-700 mt-3">85</h3>
                    <p class="text-xs text-gray-400 mt-2">Transacciones exitosas</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Pagos pendientes</p>
                    <h3 class="text-3xl text-[#b38b4b] mt-3">28</h3>
                    <p class="text-xs text-gray-400 mt-2">Por confirmar</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-[#e8e3d9]">
                    <p class="text-sm text-gray-500">Pagos rechazados</p>
                    <h3 class="text-3xl text-red-700 mt-3">5</h3>
                    <p class="text-xs text-gray-400 mt-2">Transacciones no completadas</p>
                </div>

            </div>


            <!-- TABLA -->
            <section class="bg-white rounded-xl border border-[#e8e3d9] overflow-hidden">

                <div class="p-6 border-b border-[#eee9df]">
                    <h2 class="text-xl text-[#173044]">Historial de pagos</h2>
                    <p class="text-sm text-gray-400 mt-1">
                        Registro de los pagos realizados por los huéspedes.
                    </p>
                </div>


                <!-- FILTROS -->
                <div class="p-5 flex flex-col sm:flex-row gap-3 justify-between">

                    <input
                        type="text"
                        id="buscarPago"
                        placeholder="Buscar por cliente o reserva..."
                        class="border border-[#e8e3d9] rounded-lg px-4 py-2.5 text-sm w-full sm:max-w-xs focus:outline-none focus:border-[#b38b4b]"
                    >

                    <select
                        id="filtroEstado"
                        class="border border-[#e8e3d9] rounded-lg px-4 py-2.5 text-sm text-gray-600 focus:outline-none"
                    >
                        <option value="">Todos los estados</option>
                        <option value="completado">Completado</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="rechazado">Rechazado</option>
                    </select>

                </div>


                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">

                        <thead class="bg-[#f8f6f1] text-gray-500 uppercase text-xs tracking-wider">
                            <tr>
                                <th class="px-6 py-4">Pago</th>
                                <th class="px-6 py-4">Reserva</th>
                                <th class="px-6 py-4">Cliente</th>
                                <th class="px-6 py-4">Fecha</th>
                                <th class="px-6 py-4">Método</th>
                                <th class="px-6 py-4">Monto</th>
                                <th class="px-6 py-4">Estado</th>
                            </tr>
                        </thead>

                        <tbody id="tablaPagos" class="divide-y divide-[#eee9df]">

                            <tr class="hover:bg-[#faf9f6]" data-estado="completado">
                                <td class="px-6 py-5 font-semibold">P-001</td>
                                <td class="px-6 py-5">#001</td>
                                <td class="px-6 py-5">María López</td>
                                <td class="px-6 py-5 whitespace-nowrap">20/11/2026</td>
                                <td class="px-6 py-5">Tarjeta</td>
                                <td class="px-6 py-5 font-semibold">$3,600.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Completado</span>
                                </td>
                            </tr>

                            <tr class="hover:bg-[#faf9f6]" data-estado="pendiente">
                                <td class="px-6 py-5 font-semibold">P-002</td>
                                <td class="px-6 py-5">#002</td>
                                <td class="px-6 py-5">Carlos Ramírez</td>
                                <td class="px-6 py-5 whitespace-nowrap">21/11/2026</td>
                                <td class="px-6 py-5">Transferencia</td>
                                <td class="px-6 py-5 font-semibold">$5,400.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">Pendiente</span>
                                </td>
                            </tr>

                            <tr class="hover:bg-[#faf9f6]" data-estado="rechazado">
                                <td class="px-6 py-5 font-semibold">P-003</td>
                                <td class="px-6 py-5">#003</td>
                                <td class="px-6 py-5">Ana Martínez</td>
                                <td class="px-6 py-5 whitespace-nowrap">18/11/2026</td>
                                <td class="px-6 py-5">Tarjeta</td>
                                <td class="px-6 py-5 font-semibold">$2,400.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Rechazado</span>
                                </td>
                            </tr>

                            <tr class="hover:bg-[#faf9f6]" data-estado="completado">
                                <td class="px-6 py-5 font-semibold">P-004</td>
                                <td class="px-6 py-5">#004</td>
                                <td class="px-6 py-5">José Hernández</td>
                                <td class="px-6 py-5 whitespace-nowrap">22/11/2026</td>
                                <td class="px-6 py-5">Efectivo</td>
                                <td class="px-6 py-5 font-semibold">$7,500.00</td>
                                <td class="px-6 py-5">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Completado</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <p id="sinResultados" class="hidden px-6 py-8 text-center text-sm text-gray-400">
                    No se encontraron pagos.
                </p>

                <div class="p-5 border-t border-[#eee9df] flex justify-between items-center text-xs text-gray-400">
                    <span id="contadorPagos">Mostrando 4 pagos de ejemplo</span>
                    <span>Vista de demostración</span>
                </div>

            </section>

        </div>
    </main>
</div>


<script>
    const buscarPago = document.getElementById('buscarPago');
    const filtroEstado = document.getElementById('filtroEstado');
    const filasPago = document.querySelectorAll('#tablaPagos tr');
    const sinResultados = document.getElementById('sinResultados');
    const contadorPagos = document.getElementById('contadorPagos');

    function filtrarPagos() {
        const texto = buscarPago.value.toLowerCase().trim();
        const estado = filtroEstado.value;
        let visibles = 0;

        filasPago.forEach(fila => {
            const contenido = fila.textContent.toLowerCase();
            const estadoFila = fila.dataset.estado;

            const coincideTexto = contenido.includes(texto);
            const coincideEstado = estado === '' || estadoFila === estado;

            if (coincideTexto && coincideEstado) {
                fila.classList.remove('hidden');
                visibles++;
            } else {
                fila.classList.add('hidden');
            }
        });

        sinResultados.classList.toggle('hidden', visibles !== 0);
        contadorPagos.textContent = `Mostrando ${visibles} de 4 pagos de ejemplo`;
    }

    buscarPago.addEventListener('input', filtrarPagos);
    filtroEstado.addEventListener('change', filtrarPagos);
</script>

</body>
</html>
