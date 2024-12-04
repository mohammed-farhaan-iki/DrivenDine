<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta charset declaration for proper text rendering -->
    <meta charset="UTF-8" />
    
    <!-- Viewport settings for responsive design on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Yielding CSS section to include custom styles for specific pages -->
    @yield('css')

    <!-- Title of the page, appending the app name dynamically from the config -->
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Google Fonts link for Oswald font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS from CDN for responsive layout and components -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Font Awesome for adding icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Boxicons for additional icons -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- AOS (Animate On Scroll) for scroll animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <!-- Yielding content section for the page-specific content -->
    @yield('content')

    <!-- DotLottie Player (for Lottie animations) -->
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    
    <!-- Bootstrap JS Bundle for interactive components like dropdowns, modals, etc. -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lottie Player JS for Lottie animations (Use the regular script or module version) -->
    <!-- Option 1: Use the module version (uncomment if needed) -->
    <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@2.0.8/dist/lottie-player.mjs" type="module"></script> -->

    <!-- Option 2: Use the regular script version (uncomment if needed) -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@2.0.8/dist/lottie-player.js"></script>

    <!-- AOS JS for triggering scroll-based animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Anime.js for more complex animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

    <!-- GSAP for high-performance animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>

    <!-- jQuery library for DOM manipulation, AJAX, etc. -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Yielding JS section for page-specific custom JavaScript -->
    @yield('js')

</body>

</html>
