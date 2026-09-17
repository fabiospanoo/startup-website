@props(['title' => 'Studio Web'])

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icone--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <x-navbar />
    <div class="min-vh-100 site-shell" style="background-color:#20282c">
        {{$slot}}
    </div>
    <x-footer />
    <!-- Pulsante Torna in Alto -->
    <button id="backToTop" class="back-to-top" aria-label="Torna in alto">
        <i class="bi bi-arrow-up"></i>
    </button>
</body>
</html>
