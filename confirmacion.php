
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación | MAREA</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'DM Sans', sans-serif; background: #f8f6f1; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }
    </style>
</head>

<body class="min-h-screen text-[#173044]">

    <header class="border-b border-[#e8e0d2]">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6">
            <a href="index.php" class="font-serif text-3xl tracking-[0.18em]">MAREA</a>

            <a href="habitaciones.php" class="text-sm transition hover:text-[#b38b4b]">
                Habitaciones
            </a>
        </nav>
    </header>

    <main class="mx-auto max-w-4xl px-6 py-16">

        <section class="mb-10 text-center">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-[#b38b4b] text-4xl text-[#b38b4b]">
                ✓
            </div>

            <p class="mb-3 text-xs uppercase tracking-[0.3em] text-[#a68d63]">
                Gracias por elegirnos
            </p>

            <h1 class="text-4xl md:text-5xl">¡Tu estancia comienza aquí!</h1>

            <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-stone-500">
                Este es el resumen de tu solicitud de reserva. Esperamos que disfrutes tu experiencia en MAREA.
            </p>
        </section>

        <section class="border border-[#e8e0d2] bg-white p-7 shadow-sm md:p-10">

            <div class="mb-7 flex items-center justify-between border-b border-[#eee8de] pb-5">
                <div>
                    <p class="text-xs uppercase tracking-widest text-stone-400">Resumen de estancia</p>
                    <h2 class="mt-2 text-2xl">MAREA Hotel</h2>
                </div>

                <span class="border border-[#b38b4b] px-3 py-2 text-xs text-[#a68d63]">
                    Solicitud ilustrativa
                </span>
            </div>

            <div class="grid gap-7 sm:grid-cols-2">

                <div>
                    <p class="text-xs uppercase tracking-widest text-stone-400">Habitación</p>
                    <p class="mt-2 text-lg font-semibold">Habitación Deluxe</p>
                    <p class="mt-1 text-sm text-stone-500">1 cama King Size</p>
                </div>

                <div>
                    <p class="text-xs uppercase tracking-widest text-stone-400">Huéspedes</p>
                    <p class="mt-2 text-lg font-semibold">2 adultos</p>
                    <p class="mt-1 text-sm text-stone-500">Sin niños</p>
                </div>

                <div>
                    <p class="text-xs uppercase tracking-widest text-stone-400">Fecha de entrada</p>
                    <p class="mt-2 text-lg font-semibold">15 de noviembre, 2026</p>
                    <p class="mt-1 text-sm text-stone-500">A partir de las 15:00 h</p>
                </div>

                <div>
                    <p class="text-xs uppercase tracking-widest text-stone-400">Fecha de salida</p>
                    <p class="mt-2 text-lg font-semibold">17 de noviembre, 2026</p>
                    <p class="mt-1 text-sm text-stone-500">Antes de las 12:00 h</p>
                </div>

            </div>

            <div class="mt-9 border-t border-[#eee8de] pt-6">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-stone-500">2 noches de estancia</span>
                    <span class="text-sm">$5,200 MXN</span>
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <span class="font-semibold">Total ilustrativo</span>
                    <span class="text-2xl font-semibold">$5,200 MXN</span>
                </div>
            </div>

            <div class="mt-8 border-l-2 border-[#b38b4b] bg-[#f8f6f1] p-5">
                <p class="text-sm font-semibold">Importante</p>
                <p class="mt-2 text-sm leading-6 text-stone-500">
                    Pruebaaa
                </p>
            </div>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="index.php"
                    class="flex-1 bg-[#173044] px-6 py-4 text-center text-xs uppercase tracking-widest text-white transition hover:bg-[#b38b4b]">
                    Volver al inicio
                </a>

                <a href="habitaciones.php"
                    class="flex-1 border border-[#173044] px-6 py-4 text-center text-xs uppercase tracking-widest transition hover:bg-[#173044] hover:text-white">
                    Ver habitaciones
                </a>
            </div>

        </section>
    </main>

    <footer class="mt-10 bg-[#173044] px-6 py-10 text-center text-white">
        <p class="font-serif text-2xl tracking-[0.18em]">MAREA</p>
        <p class="mt-3 text-xs text-white/50">Un lugar para desconectar y volver a ti.</p>
        <p class="mt-5 text-xs text-white/40">
            © <?= date('Y') ?> MAREA. Todos los derechos reservados.
        </p>
    </footer>

</body>
</html>
