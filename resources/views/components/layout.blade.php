<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Diego Zamora</title>
    <link rel="stylesheet" href="/app.css">
    <!--
    <script src="/app.js"></script>
    -->
</head>
<body>
    <header>
        <h1>Diego's Blog</h1>
    </header>

    <section>
        {{ $slot }}
    </section>

    <footer>
        <p>&copy; 2024 Diego's Blog. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
