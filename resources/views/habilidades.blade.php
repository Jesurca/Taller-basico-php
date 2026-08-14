<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Habilidades</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="nav-logo">Mi Portafolio</div>
        <ul class="nav-links">
            <li><a href="{{ url('/perfil') }}">Perfil</a></li>
            <li><a href="{{ url('/intereses') }}">Intereses</a></li>
            <li><a href="{{ url('/habilidades') }}" class="active">Habilidades</a></li>
            <li><a href="{{ url('/metas') }}">Metas</a></li>
        </ul>
    </nav>

    <main class="contenedor">
        <h1 class="titulo-seccion">Mis Habilidades</h1>
        <p class="subtitulo-seccion">Tecnologías y herramientas con las que trabajo</p>

        <div class="lista-habilidades">
            <div class="habilidad">
                <div class="habilidad-header">
                    <span>HTML / CSS</span>
                    <span>90%</span>
                </div>
                <div class="barra-progreso">
                    <div class="progreso" style="width: 90%;"></div>
                </div>
            </div>

            <div class="habilidad">
                <div class="habilidad-header">
                    <span>Laravel</span>
                    <span>75%</span>
                </div>
                <div class="barra-progreso">
                    <div class="progreso" style="width: 75%;"></div>
                </div>
            </div>

            <div class="habilidad">
                <div class="habilidad-header">
                    <span>JavaScript</span>
                    <span>70%</span>
                </div>
                <div class="barra-progreso">
                    <div class="progreso" style="width: 70%;"></div>
                </div>
            </div>

            <div class="habilidad">
                <div class="habilidad-header">
                    <span>PHP</span>
                    <span>80%</span>
                </div>
                <div class="barra-progreso">
                    <div class="progreso" style="width: 80%;"></div>
                </div>
            </div>

            <div class="habilidad">
                <div class="habilidad-header">
                    <span>MySQL</span>
                    <span>65%</span>
                </div>
                <div class="barra-progreso">
                    <div class="progreso" style="width: 65%;"></div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Tu Nombre. Todos los derechos reservados.</p>
    </footer>

</body>
</html>