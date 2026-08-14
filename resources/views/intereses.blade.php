<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Intereses</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="nav-logo">Mi Portafolio</div>
        <ul class="nav-links">
            <li><a href="{{ url('/perfil') }}">Perfil</a></li>
            <li><a href="{{ url('/intereses') }}" class="active">Intereses</a></li>
            <li><a href="{{ url('/habilidades') }}">Habilidades</a></li>
            <li><a href="{{ url('/metas') }}">Metas</a></li>
        </ul>
    </nav>

    <main class="contenedor">
        <h1 class="titulo-seccion">Mis Intereses</h1>
        <p class="subtitulo-seccion">Estas son algunas de las cosas que más disfruto</p>

        <div class="grid-tarjetas">
            <div class="tarjeta">
                <div class="icono">💻</div>
                <h3>Programación</h3>
                <p>Me encanta construir aplicaciones web y aprender nuevos lenguajes y frameworks.</p>
            </div>
            <div class="tarjeta">
                <div class="icono">🎮</div>
                <h3>Videojuegos</h3>
                <p>Disfruto jugar y también analizar cómo están construidos por dentro.</p>
            </div>
            <div class="tarjeta">
                <div class="icono">🎵</div>
                <h3>Música</h3>
                <p>Escuchar y descubrir nueva música es parte de mi rutina diaria.</p>
            </div>
            <div class="tarjeta">
                <div class="icono">📚</div>
                <h3>Lectura</h3>
                <p>Me gusta leer sobre tecnología, ciencia y desarrollo personal.</p>
            </div>
            <div class="tarjeta">
                <div class="icono">🎨</div>
                <h3>Diseño</h3>
                <p>Me interesa el diseño UI/UX y crear interfaces atractivas y funcionales.</p>
            </div>
            <div class="tarjeta">
                <div class="icono">🌍</div>
                <h3>Viajar</h3>
                <p>Conocer nuevos lugares y culturas es algo que me apasiona.</p>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Tu Nombre. Todos los derechos reservados.</p>
    </footer>

</body>
</html>