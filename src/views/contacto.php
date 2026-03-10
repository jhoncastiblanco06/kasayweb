<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto Kasay Ingeniería</title>
        <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    </head>

    <body class="bg-blue-50 text-gray-800">

        <?php include_once '../inc/navbar.php'; ?>

        <section id="contacto" class="pb-7 bg-white">

            <section id="inicio" class="text-white pt-3 pb-0 md:pt-16 md:pb-1">
                <div class="relative w-full h-[390px] overflow-hidden">
                    <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
                    <source src="/assets/videos/kasay-contacto.mp4" type="video/mp4">
                    Tu navegador no soporta video HTML5.
                    </video>
                    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>
                    <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl">
                        <div class="container mx-auto px-6 text-center">
                            <p class="text-lg md:text-3xl mb-32 sm:pb-40 max-w-4xl mx-auto">Asesoría en gestión catastral, análisis geoespacial y soporte</p>
                        </div>
                    </div>
                </div>
            </section>

            <br>

            <section class="pt-10 pb-16 bg-[linear-gradient(120deg,_rgba(0,124,240,0.05),_rgba(0,223,216,0.05))]">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-10 max-w-7xl">

                    <div class="w-full lg:w-1/3">
                        <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-cyan-500 sticky top-28">
                            <h2 class="text-3xl font-bold text-cyan-600 mb-8 text-center">Información de Contacto</h2>
                            
                            <ul class="space-y-6">
                                <li class="flex items-start">
                                    <div class="bg-cyan-100 p-3 rounded-full text-cyan-600 mr-4 shadow-sm">
                                        <i class="fa-solid fa-location-dot text-xl w-5 text-center"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-800">Sede Principal</p>
                                        <p class="text-gray-600 leading-relaxed">Carrera 59 #44a-30<br>Bogotá, Colombia</p>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="bg-cyan-100 p-3 rounded-full text-cyan-600 mr-4 shadow-sm">
                                        <i class="fa-regular fa-envelope text-xl w-5 text-center"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-800">Email</p>
                                        <a href="mailto:contacto@kasay.com.co" class="text-cyan-600 hover:text-cyan-800 transition">contacto@kasay.com.co</a>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="bg-cyan-100 p-3 rounded-full text-cyan-600 mr-4 shadow-sm">
                                        <i class="fa-solid fa-phone text-xl w-5 text-center"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-800">Atención Telefónica</p>
                                        <p class="text-gray-600">301 336 5167</p>
                                    </div>
                                </li>
                            </ul>
                            
                            <div class="border-t border-gray-200 mt-8 pt-8 text-center">
                                <h4 class="text-lg font-bold text-gray-800 mb-4">¡Síguenos en redes!</h4>
                                <div class="flex justify-center space-x-4">
                                    <a href="https://www.facebook.com" target="_blank" class="bg-cyan-700 text-white w-10 h-10 flex items-center justify-center rounded-full hover:bg-blue-700 transition shadow-md"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com" target="_blank" class="bg-cyan-700 text-white w-10 h-10 flex items-center justify-center rounded-full hover:bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600opacity-90 transition shadow-md"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com" target="_blank" class="bg-cyan-700 text-white w-10 h-10 flex items-center justify-center rounded-full hover:bg-blue-500 transition shadow-md"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-2/3 bg-white px-6 sm:px-10 pt-10 pb-10 rounded-2xl shadow-xl border border-gray-100">
                        
                        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                            <div class="bg-teal-100 border border-teal-400 text-teal-700 px-4 py-3 rounded relative mb-6 text-center shadow-sm">
                                <strong class="font-bold"><i class="fa-solid fa-circle-check"></i> ¡Excelente!</strong>
                                <span class="block sm:inline">Tu solicitud ha sido enviada correctamente.</span>
                            </div>
                            
                            <script>
                                setTimeout(function() {
                                    window.location.href = "https://home.kasay.com.co/src/views/contacto.php";
                                }, 10000); // 10000 milisegundos = 10 segundos
                            </script>

                        <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6 text-center shadow-sm">
                                <strong class="font-bold"><i class="fa-solid fa-triangle-exclamation"></i> Error:</strong>
                                <span class="block sm:inline">Hubo un problema al enviar tu mensaje. Inténtalo de nuevo.</span>
                            </div>
                        <?php endif; ?>

                        <h3 class="text-2xl font-bold text-cyan-600 mb-8 text-center border-b pr-10 pb-4">Envíanos tu solicitud</h3>

                    <form action="../functional/procesar_contacto.php" method="POST">
                            
                            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-cyan-600 text-sm font-bold mb-2" for="nya">Nombre y Apellido *</label>
                                    <input class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50" 
                                    id="nya" name="nya" type="text" required placeholder="Ingresa tu nombre completo"
                                    minlength="3" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '')">
                                </div>
                                <div>
                                    <label class="block text-cyan-600 text-sm font-bold mb-2" for="email">Email corporativo *</label>
                                    <input class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50" 
                                    id="email" name="email" type="email" required placeholder="ejemplo@empresa.com" maxlength="254">
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-cyan-600 text-sm font-bold mb-2" for="telefono">Teléfono *</label>
                                    <input class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50" 
                                    id="telefono" name="telefono" type="text" required placeholder="Tu número de contacto"
                                    minlength="10" maxlength="10" pattern="\d{10}" title="Debe contener exactamente 10 números" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                </div>
                                <div>
                                    <label class="block text-cyan-600 text-sm font-bold mb-2" for="tipo_cliente">Tipo de cliente *</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50 cursor-pointer" id="tipo_cliente" name="tipo_cliente" required>
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Entidad pública">Entidad pública</option>
                                        <option value="Empresa privada">Empresa privada</option>
                                        <option value="Profesional independiente">Profesional independiente</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="block text-cyan-600 text-sm font-bold mb-2" for="organizacion">Organización (Entidad o Empresa)</label>
                                <input class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50" 
                                id="organizacion" name="organizacion" type="text" placeholder="Ej: Alcaldía "
                                maxlength="40" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '')">
                            </div>

                            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-cyan-600 text-sm font-bold mb-2" for="pais">País *</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50 cursor-pointer" id="pais" name="pais" required>
                                        <option value="">Cargando países...</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-cyan-600 text-sm font-bold mb-2" for="ciudad">Ciudad / Municipio *</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50 cursor-pointer" id="ciudad" name="ciudad" required>
                                        <option value="">Primero selecciona un país</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-cyan-600 text-sm font-bold mb-2" for="tipo_solicitud">Tipo de solicitud *</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50 cursor-pointer" id="tipo_solicitud" name="tipo_solicitud" required>
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Solicitar cotización">Solicitar cotización</option>
                                        <option value="Agendar reunión técnica">Agendar reunión técnica</option>
                                        <option value="Solicitar diagnóstico territorial">Solicitar diagnóstico territorial</option>
                                        <option value="Información sobre Geokas">Información sobre Geokas</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-cyan-600 text-sm font-bold mb-2" for="como_entero">¿Cómo se enteró de nosotros? *</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50 cursor-pointer" id="como_entero" name="como_entero" required>
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Búsqueda en Google">Búsqueda en Google</option>
                                        <option value="Artículo del blog">Artículo del blog</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="Recomendación">Recomendación</option>
                                        <option value="Medio de comunicación">Medio de comunicación</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="block text-cyan-600 text-sm font-bold mb-2" for="asunto">Asunto *</label>
                                <input class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50" 
                                id="asunto" name="asunto" type="text" required placeholder="Resumen de su consulta" maxlength="150">
                            </div>
                            
                            <div class="mb-8">
                                <label class="block text-cyan-600 text-sm font-bold mb-2" for="mensaje">Mensaje *</label>
                                <textarea class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none transition-all bg-gray-50 resize-none" 
                                id="mensaje" name="mensaje" required rows="5" placeholder="Describa los detalles de su requerimiento..." maxlength="2000"></textarea>
                            </div>

                            <div class="flex justify-end border-t pt-6">
                                <button type="submit" name="enviar" class="bg-[linear-gradient(120deg,_rgba(0,124,240,0.9),_rgba(0,154,186,0.8))] hover:from-blue-600 hover:to-cyan-600 text-white font-bold py-3 px-12 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 w-full md:w-auto flex items-center justify-center">
                                    Enviar solicitud
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </section>

        <hr/>

        <section id="nosotros" class="pt-0 pb-7 bg-white">
            <div class="relative h-[350px] w-full">
                <div id="map" class="absolute inset-0 z-0"></div>
                <div class="absolute inset-0 z-10 bg-blue-500/10 pointer-events-none"></div>
                <script src="../../assets/js/script_contacto.js"></script>
            </div>
        </section>        

        <hr/>

        <?php include_once '../inc/footer.php'; ?>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const paisSelect = document.getElementById('pais');
                const ciudadSelect = document.getElementById('ciudad');
                let countriesData = [];

                fetch('https://countriesnow.space/api/v0.1/countries')
                    .then(response => response.json())
                    .then(data => {
                        countriesData = data.data;
                        paisSelect.innerHTML = '<option value="">Selecciona un país...</option>';
                        
                        countriesData.sort((a, b) => a.country.localeCompare(b.country));

                        countriesData.forEach(country => {
                            const option = document.createElement('option');
                            option.value = country.country;
                            option.textContent = country.country;
                            paisSelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error cargando países:', error);
                        paisSelect.innerHTML = '<option value="">Error al cargar países</option>';
                    });

                paisSelect.addEventListener('change', function(e) {
                    const selectedCountry = e.target.value;
                    ciudadSelect.innerHTML = '<option value="">Selecciona una ciudad...</option>';

                    if(selectedCountry) {
                        const countryData = countriesData.find(c => c.country === selectedCountry);
                        if(countryData && countryData.cities.length > 0) {
                            
                            let ciudades = countryData.cities;

                            // MAGIA PARA COLOMBIA: Asegurar que "Bogotá" exista y esté bien escrita
                            if (selectedCountry === 'Colombia') {
                                // Filtramos si la API la trae sin tilde o como "Bogota D.C." para evitar duplicados
                                ciudades = ciudades.filter(c => c.toLowerCase() !== 'bogota' && c.toLowerCase() !== 'bogota d.c.' && c.toLowerCase() !== 'bogotá d.c.');
                                // Inyectamos la versión perfecta con tilde
                                ciudades.push('Bogotá');
                            }

                            // Ordenar alfabéticamente respetando las tildes en español
                            ciudades.sort((a, b) => a.localeCompare(b, 'es', { sensitivity: 'base' }));

                            ciudades.forEach(city => {
                                const option = document.createElement('option');
                                option.value = city;
                                option.textContent = city;
                                ciudadSelect.appendChild(option);
                            });
                        } else {
                            ciudadSelect.innerHTML = '<option value="No especificada">No hay ciudades registradas</option>';
                        }
                    } else {
                        ciudadSelect.innerHTML = '<option value="">Primero selecciona un país</option>';
                    }
                });
            });
        </script>

    </body>
</html>