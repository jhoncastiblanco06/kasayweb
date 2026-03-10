<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/kasayweb/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
    #menu {
        transition: all 0.3s ease-in-out;
    }
    /* Clase para la animación de entrada */
    .menu-active {
        display: flex !important;
        animation: fadeIn 0.3s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
</head>

<body class="bg-gray-100 text-gray-800">

    <header class="bg-white shadow-md fixed w-full z-50">
        <nav class="container mx-auto px-4 md:px-8 lg:px-16 py-4 flex items-center justify-between relative">
            
            <button id="menu-btn" class="lg:hidden text-gray-600 focus:outline-none text-2xl z-50">
                <i class="fas fa-bars"></i>
            </button>

            <a href="/index.php" class="absolute left-1/2 transform -translate-x-1/2 lg:static lg:transform-none lg:left-0 flex-shrink-0 z-10">
                <img src="/assets/images/logo_extenso.jpg" alt="logo" class="w-40 md:w-52 h-auto">
            </a>

            <div class="w-8 lg:hidden"></div>

            <div id="menu"
                class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:space-x-6 absolute lg:static top-[60px] md:top-[64px] left-0 w-full lg:w-auto bg-white lg:bg-transparent shadow-md lg:shadow-none px-6 lg:px-0 py-4 lg:py-0 z-40">
                
                <a href="/index.php" class="block text-gray-600 hover:text-cyan-600 font-medium transition duration-300 py-3 lg:py-0 border-b lg:border-0 border-gray-100">Inicio</a>
                <a href="/src/views/nosotros.php" class="block text-gray-600 hover:text-cyan-600 font-medium transition duration-300 py-3 lg:py-0 border-b lg:border-0 border-gray-100">Nosotros</a>
            <!-- <a href="/src/views/blog-index.php" class="block text-gray-600 hover:text-cyan-600 font-medium transition duration-300 py-3 lg:py-0 border-b lg:border-0 border-gray-100">Blog</a> --!>
                <a href="/src/views/contacto.php" class="block text-gray-600 hover:text-cyan-600 font-medium transition duration-300 py-3 lg:py-0 border-b lg:border-0 border-gray-100">Contacto</a>
                
                <div id="search-container" class="relative mt-4 lg:mt-0 lg:ml-2">
                    <input type="text" id="search-input" placeholder="Buscar..." autocomplete="off"
                        class="w-full lg:w-48 xl:w-56 pl-4 pr-10 py-2 rounded-full border border-gray-300 focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 text-sm transition-all bg-gray-50">
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <i class="fas fa-search"></i>
                    </button>
                    
                    <ul id="search-suggestions" class="absolute left-0 top-full mt-2 w-full bg-white border border-gray-200 rounded-xl shadow-xl hidden flex-col overflow-hidden z-[60] text-sm">
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="/assets/js/barradebusqueda.js"></script>

</body>
</html>