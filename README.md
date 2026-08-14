<div align="center">

# 🚀 Proyecto Backend en Laravel

<img src="https://media.licdn.com/dms/image/v2/D4D35AQGd-ErT_WpM9A/profile-framedphoto-shrink_400_400/B4DZ5qEb1JKYAU-/0/1779896008597?e=1787245200&v=beta&t=LG0_vc_WdOc3kO3xv1PjLFGjE55aXhPs_EbMMFrr7dk" width="120px" style="border-radius: 50%;" alt="Mi Foto de Perfil">

### ¡Hola! Soy Jesús Urbiñez! 
**Estudiante de Ingeniería de sistemas**  
📍 Colombia

<div align="center">

# 🚀 Proyecto Backend en Laravel

<img src="https://media.licdn.com/dms/image/v2/D4D35AQGd-ErT_WpM9A/profile-framedphoto-shrink_400_400/B4DZ5qEb1JKYAU-/0/1779896008597?e=1787245200&v=beta&t=LG0_vc_WdOc3kO3xv1PjLFGjE55aXhPs_EbMMFrr7dk" width="120px" style="border-radius: 50%;" alt="Mi Foto de Perfil">

### ¡Hola! Soy Jesús Urbiñez! 
**Estudiante de Ingeniería de sistemas**  
📍 Colombia

</div>

---

## 📋 Descripción del proyecto

Este es un proyecto desarrollado en **Laravel** que consiste en un mini sitio de presentación personal (portafolio), compuesto por **4 vistas estáticas** que muestran distinta información sobre mí:

- 👤 **Perfil** — información personal y de contacto.
- ❤️ **Intereses** — cosas que disfruto y me apasionan.
- 💻 **Habilidades** — tecnologías que manejo, con barras de progreso.
- 🎯 **Metas** — objetivos personales y profesionales a corto/mediano plazo.

Todas las vistas comparten un mismo diseño (barra de navegación, tipografía, colores y estilo de tarjetas) definido en un único archivo CSS, y están enlazadas entre sí mediante un menú de navegación.

---

## 🗂️ Estructura del proyecto

```
proyecto-laravel/
├── public/
│   └── css/
│       └── style.css        # Hoja de estilos global del sitio
├── resources/
│   └── views/
│       ├── perfil.blade.php
│       ├── intereses.blade.php
│       ├── habilidades.blade.php
│       └── metas.blade.php
└── routes/
    └── web.php               # Rutas de acceso a cada vista
```

---

## 🧩 Vistas (resources/views)

Cada vista es un archivo `.blade.php` independiente, con su propio `<!DOCTYPE html>`, `<head>` y `<body>`. Todas enlazan el mismo archivo de estilos mediante el helper `asset()` de Laravel:

```blade
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
```

| Vista | Archivo | Contenido |
|---|---|---|
| Perfil | `perfil.blade.php` | Foto, nombre, descripción, datos de contacto y redes sociales |
| Intereses | `intereses.blade.php` | Tarjetas con íconos describiendo mis pasatiempos |
| Habilidades | `habilidades.blade.php` | Barras de progreso con el nivel de dominio de cada tecnología |
| Metas | `metas.blade.php` | Lista numerada de objetivos personales |

Cada vista incluye una barra de navegación (`<nav class="navbar">`) con enlaces a las otras tres secciones, usando el helper `url()` de Laravel para generar las rutas:

```blade
<a href="{{ url('/perfil') }}">Perfil</a>
```

---

## 🎨 Estilos (public/css/style.css)

El archivo `style.css` centraliza todo el diseño visual del proyecto:

- **Paleta de colores**: tonos oscuros (`#1e293b`) combinados con azul celeste (`#38bdf8`) como color de acento.
- **Tipografía**: `Segoe UI` / `Arial` para una lectura limpia y moderna.
- **Componentes reutilizables**: tarjetas (`.tarjeta`, `.tarjeta-perfil`), barras de progreso (`.barra-progreso`), navegación (`.navbar`) y pie de página (`.footer`).
- **Diseño responsive**: uso de `grid` con `auto-fit` y una media query para pantallas pequeñas (`max-width: 600px`).

Este archivo se ubica en `public/css/style.css` porque en Laravel **todo lo que debe ser accesible directamente desde el navegador** (CSS, JS, imágenes) vive dentro de la carpeta `public/`.

---

## 🛣️ Rutas (routes/web.php)

Las cuatro vistas se registran como rutas simples de tipo `Route::view()`, ya que no requieren lógica de controlador (son contenido estático):

```php
use Illuminate\Support\Facades\Route;

Route::view('/perfil', 'perfil');
Route::view('/intereses', 'intereses');
Route::view('/habilidades', 'habilidades');
Route::view('/metas', 'metas');
```

---

## ⚙️ Cómo ejecutar el proyecto

1. Cloná o descargá el proyecto en tu equipo.
2. Instalá las dependencias:
   ```bash
   composer install
   ```
3. Copiá el archivo de entorno y generá la clave de la aplicación:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Levantá el servidor local:
   ```bash
   php artisan serve
   ```
5. Accedé a las vistas desde el navegador:
   - `http://localhost:8000/perfil`
   - `http://localhost:8000/intereses`
   - `http://localhost:8000/habilidades`
   - `http://localhost:8000/metas`

> 💡 Si hacés cambios y no se reflejan, limpiá la caché de vistas con:
> ```bash
> php artisan view:clear
> ```

---

## 🛠️ Tecnologías utilizadas

- **Laravel** — framework backend en PHP, usado aquí para el enrutamiento y renderizado de vistas Blade.
- **Blade** — motor de plantillas de Laravel.
- **HTML5 / CSS3** — estructura y estilos de las vistas.
- **Diseño responsive** — adaptado a distintos tamaños de pantalla mediante CSS Grid y media queries.

---

## 📌 Posibles mejoras futuras

- [ ] Convertir las vistas estáticas en dinámicas, trayendo la información desde una base de datos.
- [ ] Agregar un layout base (`layouts/app.blade.php`) para evitar repetir el `<head>` en cada vista.
- [ ] Incluir un formulario de contacto funcional.
- [ ] Agregar modo oscuro / claro.

---

<div align="center">

Hecho con 💙 usando Laravel

</div>
</div>


