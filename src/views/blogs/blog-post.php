<?php
// =====================================================================
// SIMULACIÓN DE BASE DE DATOS (Lo que hará tu futuro formulario admin)
// =====================================================================
// Aquí en el futuro habrá un código como: $id = $_GET['id']; $post = obtenerPostDeLaBD($id);

$post = [
    "titulo" => "Del mapa a la operativa: simuladores de incendios para ayudar a los servicios de emergencia | En clave #CEsri25",
    "fecha" => "15 de Octubre, 2025",
    "categoria" => "Casos de Éxito",
    "autor" => "Equipo Kasay",
    "imagen_portada" => "https://blog.esri.es/wp-content/uploads/2025/10/blog-2.png",
    "contenido" => "
        <p class='mb-6'>El verano de 2025 ha tenido como uno de sus protagonistas principales a una larga oleada de incendios forestales, que han batido tristemente todos los registros anualizados de territorio calcinado en todo el siglo XXI.</p>
        <p class='mb-6'>Con más de 390.000 hectáreas afectadas, el fallecimiento de varias personas, y numerosas familias y municipios desalojados, una vez más se ha puesto de manifiesto que los incendios forestales suponen un riesgo de primer orden en el sur de Europa. Según las estadísticas del Sistema Europeo de Información sobre Incendios Forestales (EFFIS), España, Portugal, Grecia y Rumanía son los países más damnificados cada año.</p>
        <p class='mb-6'>A pesar de la magnitud y complejidad de estos fenómenos, los servicios de emergencia encuentran sin embargo en la tecnología GIS y en la plataforma Weather Map Site un gran aliado en uno de los momentos más clave: las primeras horas de un incendio.</p>
        
        <h2 class='text-2xl font-bold text-cyan-800 mt-10 mb-4'>¿Qué factores condicionan el avance del fuego?</h2>
        <p class='mb-4'>En primer lugar, para que un simulador sea capaz de reproducir cómo puede evolucionar un incendio forestal, es necesario combinar datos de distinta naturaleza:</p>
        <ul class='list-disc pl-6 mb-6 space-y-2 text-gray-700'>
            <li><strong>Topográficos:</strong> Aspectos como la elevación del terreno, la pendiente o la orientación influyen directamente.</li>
            <li><strong>Meteorológicos:</strong> La temperatura, humedad, precipitación y velocidad del viento pueden convertirse en causas atenuantes.</li>
            <li><strong>Vegetación y combustible:</strong> El estado y tipología de la vegetación explica la intensidad y forma de avance del fuego.</li>
        </ul>

        <img src='https://blog.esri.es/wp-content/uploads/2025/10/blog-1.png' alt='Simulación GIS' class='w-full rounded-xl shadow-md my-8'>

        <h2 class='text-2xl font-bold text-cyan-800 mt-10 mb-4'>Tecnología GIS para comprender rápido la magnitud de la emergencia</h2>
        <p class='mb-6'>Una vez configurada la simulación, el primer gran valor está en cómo se visualizan los resultados con un amplio contexto espacial. La representación sobre el mapa permite entender de un vistazo la magnitud y posibles consecuencias del incendio. De este modo, el simulador no solo proyecta la evolución del fuego, sino que la contextualizada en el territorio y en el tiempo, integrando la información geoespacial necesaria para tomar decisiones desde el primer momento.</p>
    "
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post['titulo'] ?> - Kasay Ingeniería</title>
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include_once '../../inc/navbar.php'; ?>

    <div class="h-[80px] md:h-[100px] bg-white"></div>

    <div class="container mx-auto px-4 lg:px-16 py-8">

        <nav class="text-sm text-gray-500 mb-8 flex items-center space-x-2">
            <a href="./index.php" class="hover:text-cyan-600 transition"><i class="fa-solid fa-house"></i> Inicio</a>
            <span><i class="fa-solid fa-angle-right text-xs"></i></span>
            <a href="./src/views/blog-index.php" class="hover:text-cyan-600 transition">Blog</a>
            <span><i class="fa-solid fa-angle-right text-xs"></i></span>
            <span class="text-gray-800 font-medium truncate w-48 md:w-auto"><?= $post['categoria'] ?></span>
        </nav>

        <div class="flex flex-col lg:flex-row gap-12">

            <article class="w-full lg:w-2/3 bg-white p-6 md:p-10 rounded-2xl shadow-sm border border-gray-100">

                <header class="mb-8 border-b border-gray-100 pb-8">
                    <span class="bg-cyan-50 text-cyan-700 px-3 py-1 rounded-full text-sm font-bold tracking-wide uppercase mb-4 inline-block">
                        <?= $post['categoria'] ?>
                    </span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        <?= $post['titulo'] ?>
                    </h1>
                    <div class="flex items-center text-sm text-gray-500 space-x-6">
                        <span class="flex items-center"><i class="fa-regular fa-calendar mr-2 text-cyan-500"></i> <?= $post['fecha'] ?></span>
                        <span class="flex items-center"><i class="fa-regular fa-user mr-2 text-cyan-500"></i> <?= $post['autor'] ?></span>
                        <span class="flex items-center"><i class="fa-regular fa-clock mr-2 text-cyan-500"></i> 5 min de lectura</span>
                    </div>
                </header>

                <figure class="mb-10 overflow-hidden rounded-xl shadow-md">
                    <img src="<?= $post['imagen_portada'] ?>" alt="Portada del artículo" class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700">
                </figure>

                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <?= $post['contenido'] ?>
                </div>

                <div class="mt-12 pt-6 border-t border-gray-100 flex items-center flex-wrap gap-3">
                    <span class="font-bold text-gray-800 mr-2"><i class="fa-solid fa-tags text-cyan-500 mr-2"></i> Etiquetas:</span>
                    <a href="#" class="bg-gray-100 text-gray-600 hover:bg-cyan-600 hover:text-white px-3 py-1 text-sm rounded transition">ArcGIS</a>
                    <a href="#" class="bg-gray-100 text-gray-600 hover:bg-cyan-600 hover:text-white px-3 py-1 text-sm rounded transition">Prevención</a>
                    <a href="#" class="bg-gray-100 text-gray-600 hover:bg-cyan-600 hover:text-white px-3 py-1 text-sm rounded transition">Simuladores</a>
                </div>

                <section class="mt-16 bg-gray-50 p-8 rounded-xl border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Deja una respuesta</h3>
                    <p class="text-sm text-gray-500 mb-6">Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con *</p>

                    <form action="#" method="POST" class="space-y-5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Comentario *</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all resize-none"></textarea>
                        </div>
                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre *</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico *</label>
                                <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all">
                            </div>
                        </div>
                        <div class="flex items-start mt-4">
                            <input type="checkbox" id="save-info" class="mt-1 mr-2 text-cyan-600 focus:ring-cyan-500 border-gray-300 rounded">
                            <label for="save-info" class="text-sm text-gray-600">Guarda mi nombre y correo electrónico en este navegador para la próxima vez que comente.</label>
                        </div>
                        <button type="submit" class="bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-3 px-8 rounded-lg shadow-md transition-colors mt-4">
                            Publicar comentario
                        </button>
                    </form>
                </section>

            </article>

            <aside class="w-full lg:w-1/3">
                <div class="sticky top-[100px] space-y-8">

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Artículos Relacionados</h3>
                        <ul class="space-y-5">
                            <li class="flex items-start space-x-4 group">
                                <img src="https://blog.esri.es/wp-content/uploads/2017/08/smart-community-450x328.jpg" class="w-20 h-16 object-cover rounded-md group-hover:opacity-80 transition" alt="Thumb">
                                <a href="#" class="text-sm font-semibold text-gray-700 group-hover:text-cyan-600 leading-snug">
                                    El GIS, una piedra angular en la gestión de un incendio forestal
                                </a>
                            </li>
                            <li class="flex items-start space-x-4 group">
                                <img src="https://blog.esri.es/wp-content/uploads/2019/08/I-Voted-450x328.jpg" class="w-20 h-16 object-cover rounded-md group-hover:opacity-80 transition" alt="Thumb">
                                <a href="#" class="text-sm font-semibold text-gray-700 group-hover:text-cyan-600 leading-snug">
                                    Elecciones más eficaces en ciudades gracias a los GIS
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Temas Populares</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:bg-cyan-50 hover:text-cyan-700 px-3 py-1 text-xs rounded transition">ArcGIS Online</a>
                            <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:bg-cyan-50 hover:text-cyan-700 px-3 py-1 text-xs rounded transition">GIS</a>
                            <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:bg-cyan-50 hover:text-cyan-700 px-3 py-1 text-xs rounded transition">Catastro</a>
                            <a href="#" class="border border-gray-200 text-gray-500 hover:border-cyan-600 hover:bg-cyan-50 hover:text-cyan-700 px-3 py-1 text-xs rounded transition">Medio Ambiente</a>
                        </div>
                    </div>

                    <div class="bg-[linear-gradient(120deg,_rgba(0,124,240,0.9),_rgba(0,154,186,0.9))] p-6 rounded-xl text-white shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Newsletter</h3>
                        <p class="text-sm text-blue-100 mb-5">Suscríbete y recibe nuestras últimas noticias tecnológicas en tu correo.</p>
                        <form action="#" method="POST" class="space-y-3">
                            <input type="email" placeholder="Tu correo electrónico" required class="w-full px-4 py-3 rounded text-gray-800 outline-none focus:ring-2 focus:ring-cyan-300">
                            <button type="submit" class="w-full bg-gray-900 hover:bg-black text-white font-bold py-3 rounded transition shadow-md">
                                Suscribirme
                            </button>
                        </form>
                    </div>

                </div>
            </aside>

        </div>
    </div>

    <?php include_once '../../inc/footer.php'; ?>

</body>

</html>