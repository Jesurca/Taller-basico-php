<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="nav-logo">Mi Portafolio</div>
        <ul class="nav-links">
            <li><a href="{{ url('/perfil') }}" class="active">Perfil</a></li>
            <li><a href="{{ url('/intereses') }}">Intereses</a></li>
            <li><a href="{{ url('/habilidades') }}">Habilidades</a></li>
            <li><a href="{{ url('/metas') }}">Metas</a></li>
        </ul>
    </nav>

    <main class="contenedor">
        <section class="tarjeta-perfil">
            <div class="foto-wrapper">
                <img src="https://via.placeholder.com/180" alt="Foto de perfil" class="foto-perfil">
            </div>
            <h1>Jesús Urbiñez</h1>
            <p class="subtitulo">Estudiante de Ingeneria de sistemas</p>
            <p class="descripcion">
                Hola, soy una persona apasionada por la tecnología y el aprendizaje constante.
                Me gusta crear proyectos que resuelvan problemas reales y seguir mejorando
                mis habilidades como desarrollador cada día.
            </p>

            <div class="info-extra">
                <div class="info-item">
                    <span class="info-label">Edad</span>
                    <span class="info-valor">20 años</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Ubicación</span>
                    <span class="info-valor">Colombia</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Correo</span>
                    <span class="info-valor">Jurbinez@unab.edu.co</span>
                </div>
            </div>

            <div class="redes-sociales">