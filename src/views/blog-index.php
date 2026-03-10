<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Inteligencia Territorial - Kasay</title>
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif-kasay { font-family: 'Lora', serif; }
        .gradient-primary { background: linear-gradient(135deg, #0284c7 0%, #0891b2 100%); }
    </style>
</head>

<body class="bg-slate-50 text-gray-800">

    <?php include_once '../inc/navbar.php'; ?>

    <header class="gradient-primary text-white pt-28 pb-20 px-4">
        <div class="container mx-auto max-w-5xl text-center">
            <span class="text-cyan-200 font-semibold tracking-wider uppercase text-sm mb-4 block">Recursos y Publicaciones</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Centro de Inteligencia Territorial</h1>
            <p class="text-lg md:text-2xl font-serif-kasay font-light text-cyan-50 max-w-3xl mx-auto">
                Análisis, tendencias y estrategias para la transformación digital, gestión catastral y optimización del territorio.
            </p>
        </div>
    </header>

    <section class="bg-white border-b border-gray-200 sticky top-0 z-30 shadow-sm hidden md:block">
        <div class="container mx-auto px-4 flex justify-center space-x-8 py-4">
            <a href="#" class="text-sky-700 font-bold border-b-2 border-sky-600 pb-1">Todos los artículos</a>
            <a href="#" class="text-gray-500 hover:text-sky-600 font-medium transition">Fundamentos Técnicos</a>
            <a href="#" class="text-gray-500 hover:text-sky-600 font-medium transition">Dinero, Riesgo y Control</a>
            <a href="#" class="text-gray-500 hover:text-sky-600 font-medium transition">Tecnología y Transformación</a>
        </div>
    </section>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <div class="mb-16">
            <article class="bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col lg:flex-row hover:shadow-2xl transition-shadow duration-300 border border-gray-100 group">
                <div class="lg:w-1/2 relative overflow-hidden h-72 lg:h-auto">
                    <img src="/assets/images/blog/futuro-catastro.jpg" alt="Catastro Digital" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                    <div class="absolute top-4 left-4 bg-sky-600 text-white text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wide shadow-md">
                        Tecnología y Transformación
                    </div>
                </div>
                <div class="lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex items-center text-sm text-gray-500 mb-4 space-x-4">
                        <span><i class="fa-regular fa-calendar mr-1"></i> 24 Oct, 2023</span>
                        <span><i class="fa-regular fa-clock mr-1"></i> 6 min de lectura</span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4 font-serif-kasay leading-tight">
                        <a href="articulos/cual-es-el-futuro-del-catastro-digital.php" class="hover:text-sky-600 transition">¿Cuál es el futuro del catastro digital en Colombia?</a>
                    </h2>
                    <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                        Inteligencia Artificial, automatización de procesos y gestión de datos en la nube. Descubre hacia dónde avanza la administración del territorio y cómo los municipios pueden prepararse para ser gestores catastrales eficientes.
                    </p>
                    <div>
                        <a href="articulos/cual-es-el-futuro-del-catastro-digital.php" class="inline-flex items-center text-sky-700 font-bold hover:text-sky-900 group-hover:translate-x-2 transition-transform duration-300">
                            Leer informe completo <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </article>
        </div>

        <hr class="border-gray-200 mb-16">

        <h3 class="text-2xl font-bold text-gray-800 mb-8 font-serif-kasay">Últimas Publicaciones</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-56 relative overflow-hidden">
                    <img src="/assets/images/blog/catastro-multiproposito.jpg" alt="Catastro Multipropósito" class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-slate-800 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Fundamentos Técnicos</span>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex text-xs text-gray-400 mb-3 space-x-3">
                        <span><i class="fa-regular fa-clock"></i> 4 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug"><a href="articulos/que-es-el-catastro-multiproposito.php" class="hover:text-sky-600">¿Qué es el catastro multipropósito?</a></h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Un enfoque integral que va más allá del cobro de impuestos, facilitando la planeación y el desarrollo sostenible.</p>
                    <a href="articulos/que-es-el-catastro-multiproposito.php" class="text-sky-600 font-semibold hover:text-sky-800 text-sm">Leer artículo &rarr;</a>
                </div>
            </article>

            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-56 relative overflow-hidden">
                    <img src="/assets/images/blog/recaudo.jpg" alt="Aumentar Recaudo" class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-teal-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Dinero, Riesgo y Control</span>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex text-xs text-gray-400 mb-3 space-x-3">
                        <span><i class="fa-regular fa-clock"></i> 5 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug"><a href="articulos/como-aumentar-recaudo-sin-subir-impuestos.php" class="hover:text-sky-600">¿Cómo aumentar recaudo sin subir impuestos?</a></h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Estrategias de actualización y equidad tributaria basadas en la identificación real de los predios del territorio.</p>
                    <a href="articulos/como-aumentar-recaudo-sin-subir-impuestos.php" class="text-sky-600 font-semibold hover:text-sky-800 text-sm">Leer artículo &rarr;</a>
                </div>
            </article>

            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-56 relative overflow-hidden">
                    <img src="/assets/images/blog/riesgos.jpg" alt="Riesgos Prediales" class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-teal-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Dinero, Riesgo y Control</span>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex text-xs text-gray-400 mb-3 space-x-3">
                        <span><i class="fa-regular fa-clock"></i> 7 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug"><a href="articulos/riesgos-informacion-predial-desactualizada.php" class="hover:text-sky-600">Riesgos de información predial desactualizada</a></h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Los costos ocultos y vacíos legales a los que se enfrentan las administraciones por falta de mantenimiento catastral.</p>
                    <a href="articulos/riesgos-informacion-predial-desactualizada.php" class="text-sky-600 font-semibold hover:text-sky-800 text-sm">Leer artículo &rarr;</a>
                </div>
            </article>

            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-56 relative overflow-hidden">
                    <img src="/assets/images/blog/modelado3d.jpg" alt="Modelado 3D" class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-sky-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Tecnología y Transformación</span>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex text-xs text-gray-400 mb-3 space-x-3">
                        <span><i class="fa-regular fa-clock"></i> 6 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug"><a href="articulos/modelado-3d-aplicado.php" class="hover:text-sky-600">Modelado 3D aplicado a territorios inteligentes</a></h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">De mapas planos a ciudades inteligentes: el poder del modelado 3D para la planeación urbana.</p>
                    <a href="articulos/modelado-3d-aplicado.php" class="text-sky-600 font-semibold hover:text-sky-800 text-sm">Leer artículo &rarr;</a>
                </div>
            </article>

            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="h-56 relative overflow-hidden">
                    <img src="/assets/images/blog/ingenieria.jpg" alt="Ingeniería Catastral" class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-slate-800 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Fundamentos Técnicos</span>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex text-xs text-gray-400 mb-3 space-x-3">
                        <span><i class="fa-regular fa-clock"></i> 5 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug"><a href="articulos/que-es-la-ingenieria-catastral.php" class="hover:text-sky-600">¿Qué es la ingeniería catastral?</a></h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Descubre cómo la precisión geográfica y la gestión de datos transforman la administración territorial.</p>
                    <a href="articulos/que-es-la-ingenieria-catastral.php" class="text-sky-600 font-semibold hover:text-sky-800 text-sm">Leer artículo &rarr;</a>
                </div>
            </article>

        </div>
    </main>

    <section class="py-20 mt-12 relative overflow-hidden">
        <div class="absolute inset-0 bg-slate-900 z-0"></div>
        <div class="absolute inset-0 bg-[linear-gradient(120deg,_rgba(2,132,199,0.3),_rgba(8,145,178,0.1))] z-0"></div>
        
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Pasa de la teoría a la acción en tu territorio</h2>
            <p class="text-sky-100 mb-12 max-w-2xl mx-auto text-lg">
                Optimiza el recaudo, actualiza tu base catastral y toma decisiones con datos precisos. Selecciona cómo deseas que nuestro equipo de ingeniería te ayude:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <a href="../contacto.php?asunto=Solicitar Cotización" class="bg-white hover:bg-sky-50 rounded-xl p-8 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 text-center group">
                    <div class="text-sky-600 text-4xl mb-4 group-hover:scale-110 transition"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Solicitar cotización</h3>
                    <p class="text-gray-600 text-sm">Presupuestos adaptados a las necesidades de tu municipio o entidad.</p>
                </a>
                
                <a href="../contacto.php?asunto=Agendar Reunión Técnica" class="bg-gradient-to-br from-sky-600 to-cyan-600 text-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 text-center group border border-sky-400">
                    <div class="text-white text-4xl mb-4 group-hover:scale-110 transition"><i class="fa-solid fa-handshake-angle"></i></div>
                    <h3 class="text-xl font-bold text-white mb-2">Agendar reunión técnica</h3>
                    <p class="text-sky-100 text-sm">Habla directamente con nuestros ingenieros sobre los retos de tu proyecto.</p>
                </a>

                <a href="../contacto.php?asunto=Diagnóstico Preliminar" class="bg-white hover:bg-sky-50 rounded-xl p-8 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 text-center group">
                    <div class="text-teal-600 text-4xl mb-4 group-hover:scale-110 transition"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Solicitar diagnóstico</h3>
                    <p class="text-gray-600 text-sm">Evaluación preliminar del estado actual de tu información predial.</p>
                </a>
            </div>
        </div>
    </section>

    <?php include_once '../inc/footer.php'; ?>

</body>
</html>