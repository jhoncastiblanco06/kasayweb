<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Kasay Ingeniería</title>
    <link rel="icon" href="/kasayweb/assets/images/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800">

    <?php include_once '../inc/navbar.php'; ?>

    <section class="relative h-[350px] md:h-[400px] flex items-center justify-center mt-[30px] md:mt-[10px]">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://blog.esri.es/wp-content/uploads/2016/10/cabecera-eventos.png'); background-attachment: fixed;"></div>
        <div class="absolute inset-0 bg-black bg-opacity-60 z-0"></div>
        <div class="relative z-10 text-center text-white px-4">
            <p class="text-sm font-bold tracking-[0.2em] mb-3 text-cyan-400">SOBRE KASAY INGENIERÍA</p>
            <h1 class="text-4xl md:text-5xl font-bold shadow-sm">Publicaciones y Casos de Éxito</h1>
        </div>
    </section>

    <div class="bg-white shadow-md border-b border-gray-200  top-[60px] md:top-[70px] z-30">
        <div class="container mx-auto px-4 lg:px-16 ">
            <ul class="flex md:justify-center space-x-8 py-4 text-sm font-semibold text-gray-500 whitespace-nowrap">
                <li><a href="#" class="text-cyan-600 border-b-[3px] border-cyan-600 pb-[16px]">Casos de Éxito</a></li>
                <li><a href="#" class="hover:text-cyan-600 transition">ArcGIS para desarrolladores</a></li>
                <li><a href="#" class="hover:text-cyan-600 transition">BIM y GIS</a></li>
                <li><a href="#" class="hover:text-cyan-600 transition">Cartografía</a></li>
                <li><a href="#" class="hover:text-cyan-600 transition">Eventos</a></li>
                <li><a href="#" class="hover:text-cyan-600 transition">Todas</a></li>

            </ul>
        </div>

        <section class="py-12">
            <div class="container mx-auto px-4 lg:px-16">
                <div class="flex flex-col lg:flex-row gap-12">

                    <div class="w-full lg:w-2/3 space-y-8">
                        <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col md:flex-row group hover:shadow-lg transition-shadow duration-300">
                            <div class="md:w-2/5 relative h-64 md:h-auto overflow-hidden">
                                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://blog.esri.es/wp-content/uploads/2024/04/CREUER-MEMORIA-PORT-MAO-2023_foto_David-Arquimbau-SIntes-min-1-scaled-450x328.jpg');"></div>
                                <div class="absolute top-4 left-4 bg-white text-center rounded shadow-md px-3 py-1 text-cyan-800 border-b-2 border-cyan-500">
                                    <span class="block text-2xl font-bold leading-none">11</span>
                                    <span class="block text-xs uppercase font-bold tracking-wider">Abr</span>
                                </div>
                            </div>
                            <div class="p-6 md:p-8 md:w-3/5 flex flex-col justify-center">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 leading-tight group-hover:text-cyan-600 transition-colors">
                                    <a href="#">La Autoridad Portuaria de Baleares unifica sus sistemas TIC y mejora la gestión de sus puertos con tecnología geoespacial</a>
                                </h3>
                                <p class="text-xs text-gray-400 mb-4"><i class="fa-regular fa-clock mr-1"></i> 11/04/2024 - 10:13</p>
                                <p class="text-gray-600 text-sm mb-5 line-clamp-3">
                                    La APB constituye el líder español en número de escalas, con un volumen anual de más de 50,000, lo que la ha llevado también a posicionarse en el segundo puesto del ranking europeo. Además, presenta una de las cifras de tráfico de pasajeros más alta...
                                </p>
                                <div class="mt-auto">
                                    <a href="/kasayweb/src/views/blogs/blog-post.php" class="inline-block text-cyan-600 font-bold hover:text-cyan-800 transition-colors border-b border-transparent hover:border-cyan-800 pb-1">Ver más <i class="fa-solid fa-angle-right ml-1"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col md:flex-row group hover:shadow-lg transition-shadow duration-300">
                            <div class="md:w-2/5 relative h-64 md:h-auto overflow-hidden">
                                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://blog.esri.es/wp-content/uploads/2022/05/Captura-1-450x328.png');"></div>
                                <div class="absolute top-4 left-4 bg-white text-center rounded shadow-md px-3 py-1 text-cyan-800 border-b-2 border-cyan-500">
                                    <span class="block text-2xl font-bold leading-none">31</span>
                                    <span class="block text-xs uppercase font-bold tracking-wider">May</span>
                                </div>
                            </div>
                            <div class="p-6 md:p-8 md:w-3/5 flex flex-col justify-center">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 leading-tight group-hover:text-cyan-600 transition-colors">
                                    <a href="#">¿Te perdiste nuestras sesiones en las GeoJornadas 2022 del Ayuntamiento de Madrid?</a>
                                </h3>
                                <p class="text-xs text-gray-400 mb-4"><i class="fa-regular fa-clock mr-1"></i> 31/05/2022 - 10:02</p>
                                <p class="text-gray-600 text-sm mb-5 line-clamp-3">
                                    El Ayuntamiento de Madrid, desde la Subdirección General de Innovación e Información, organiza cada año una de las citas ineludibles para quienes trabajan con los datos geográficos: las Jornadas de Geodatos del Ayuntamiento...
                                </p>
                                <div class="mt-auto">
                                    <a href="#" class="inline-block text-cyan-600 font-bold hover:text-cyan-800 transition-colors border-b border-transparent hover:border-cyan-800 pb-1">Ver más <i class="fa-solid fa-angle-right ml-1"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col md:flex-row group hover:shadow-lg transition-shadow duration-300">
                            <div class="md:w-2/5 relative h-64 md:h-auto overflow-hidden">
                                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://blog.esri.es/wp-content/uploads/2019/08/I-Voted-450x328.jpg');"></div>
                                <div class="absolute top-4 left-4 bg-white text-center rounded shadow-md px-3 py-1 text-cyan-800 border-b-2 border-cyan-500">
                                    <span class="block text-2xl font-bold leading-none">30</span>
                                    <span class="block text-xs uppercase font-bold tracking-wider">Ago</span>
                                </div>
                            </div>
                            <div class="p-6 md:p-8 md:w-3/5 flex flex-col justify-center">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 leading-tight group-hover:text-cyan-600 transition-colors">
                                    <a href="#">Elecciones más eficaces en Nueva York gracias a los GIS</a>
                                </h3>
                                <p class="text-xs text-gray-400 mb-4"><i class="fa-regular fa-clock mr-1"></i> 30/08/2019 - 11:48</p>
                                <p class="text-gray-600 text-sm mb-5 line-clamp-3">
                                    Cuando llegan las elecciones, es importante garantizar que todos los ciudadanos puedan ejercer su derecho al voto de manera eficaz. En una ciudad tan bulliciosa como Nueva York, eso requiere un compromiso firme con un modelo de ciudad...
                                </p>
                                <div class="mt-auto">
                                    <a href="#" class="inline-block text-cyan-600 font-bold hover:text-cyan-800 transition-colors border-b border-transparent hover:border-cyan-800 pb-1">Ver más <i class="fa-solid fa-angle-right ml-1"></i></a>
                                </div>
                            </div>
                        </article>

                        <div class="text-center pt-6">
                            <button class="border-2 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white font-bold py-3 px-10 rounded-full transition-all duration-300">
                                Mostrar más entradas
                            </button>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/3">
                        <div class="sticky top-[140px] space-y-10">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-4 border-b-2 border-gray-100 pb-2">Posts destacados</h3>
                                <ul class="space-y-4">
                                    <li class="flex items-start space-x-4 group">
                                        <div class="w-24 h-16 flex-shrink-0 overflow-hidden rounded">
                                            <img src="https://blog.esri.es/wp-content/uploads/2025/10/Vexiza-Weather-min-768x432.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform" alt="Thumb">
                                        </div>
                                        <a href="#" class="text-sm font-semibold text-gray-700 group-hover:text-cyan-600 leading-snug">
                                            Del mapa a la operativa: simuladores de incendios para ayudar a los servicios de emergencia | En clave #CEsri25
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-4 border-b-2 border-gray-100 pb-2">Nube de etiquetas</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:text-cyan-600 px-3 py-1 text-xs rounded transition">ArcGIS</a>
                                    <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:text-cyan-600 px-3 py-1 text-xs rounded transition">Eventos Esri</a>
                                    <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:text-cyan-600 px-3 py-1 text-xs rounded transition">GIS</a>
                                    <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:text-cyan-600 px-3 py-1 text-xs rounded transition">SIG</a>
                                    <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:text-cyan-600 px-3 py-1 text-xs rounded transition">Smart Cities</a>
                                    <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:text-cyan-600 px-3 py-1 text-xs rounded transition">Máster GIS</a>
                                </div>
                            </div>

                            <div class="bg-gray-800 p-6 rounded-lg text-white">
                                <h3 class="text-xl font-bold mb-3 text-cyan-400">Suscribirse</h3>
                                <p class="text-sm text-gray-300 mb-4">Introduce tu correo electrónico para suscribirte a este blog y recibir notificaciones de nuevas entradas.</p>
                                <form action="#" method="POST" class="space-y-3">
                                    <input type="email" placeholder="Dirección de correo electrónico" required class="w-full px-4 py-2 rounded text-gray-800 outline-none focus:ring-2 focus:ring-cyan-500">
                                    <button type="submit" class="w-full bg-cyan-600 hover:bg-cyan-500 text-white font-bold py-2 rounded transition">
                                        Suscribir
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include_once '../inc/footer.php'; ?>

</body>

</html>