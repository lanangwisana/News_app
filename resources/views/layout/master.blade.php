<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My App</title>
</head>
<body>
    <header>
        <!-- Nav or other header content -->
        <x-navbar />
    </header>

    <div class="container">
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </div>

    <footer>
        <!-- Footer content -->
        <x-footer />    
    </footer>
</body>
</html>

