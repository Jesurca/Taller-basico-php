<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Metas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="nav-logo">Mi Portafolio</div>
        <ul class="nav-links">
            <li><a href="{{ url('/perfil') }}">Perfil</a></li>
            <li><a href="{{ url('/intereses') }}">Intereses</a></li>
            <li><a href="{{ url('/habilidades') }}">Habilidades</a></li>
            <li><a href="{{ url('/metas') }}" class="active">Metas</a></li>
        </ul>
    </nav>

    <main class="contenedor">
        <h1 class="titulo-seccion">Mis Metas</h1>
        <p class="subtitulo-seccion">Objetivos que quiero alcanzar</p>

        <div class="lista-metas">
            <div class="meta-item">
                <div class="meta-numero">1</div>
                <div class="meta-texto">
                    <h3>Terminar mi proyecto en Laravel</h3>
                    <p>Finalizar y desplegar mi primer proyecto completo con Laravel.</p>
                </div>
            </div>

            <div class="meta-item">
                <div class="meta-numero">2</div>
                <div class="meta-texto">
                    <h3>Aprender un nuevo framework de front-end</h3>
                    <p>Dominar React o Vue para complementar mis conocimientos en backend.</p>
                </div>
            </div>

            <div class="meta-item">
                <div class="meta-numero">3</div>
                <div class="meta-texto">
                    <h3>Contribuir a un proyecto open source</h3>
                    <p>Participar activamente en un repositorio de código abierto.</p>
                </div>
            </div>

            <div class="meta-item">
                <div class="meta-numero">4</div>
                <div class="meta-texto">
                    <h3>Conseguir mi primera práctica profesional</h3>
                    <p>Aplicar mis conocimientos en un entorno laboral real.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Tu Nombre. Todos los derechos reservados.</p>
    </footer>

</body>
</html>