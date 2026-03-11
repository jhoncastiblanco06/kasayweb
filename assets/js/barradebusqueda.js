document.addEventListener("DOMContentLoaded", function () {
  // 1. FUNCIONALIDAD DEL MENÚ RESPONSIVE
  const menuBtn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");

  if (menuBtn && menu) {
    menuBtn.addEventListener("click", (e) => {
      e.stopPropagation(); // Evita que el click se propague
      menu.classList.toggle("hidden");
    });

    // Cerrar menú al hacer click en un enlace
    const navLinks = menu.querySelectorAll("a");
    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        if (window.innerWidth < 1024) {
          menu.classList.add("hidden");
        }
      });
    });
  }

  // 2. BUSCADOR EN VIVO (POSTGRESQL)
  const searchInput = document.getElementById("search-input");
  const searchSuggestions = document.getElementById("search-suggestions");
  const searchContainer = document.getElementById("search-container");

  if (searchInput && searchSuggestions) {
    searchInput.addEventListener("input", function () {
      const query = this.value.trim();

      if (query.length > 0) {
        fetch(`/src/functional/buscar_api.php?q=${encodeURIComponent(query)}`)
          .then((response) => response.json())
          .then((data) => {
            searchSuggestions.innerHTML = "";
            if (data.length > 0) {
              data.forEach((item) => {
                const li = document.createElement("li");
                li.innerHTML = `<a href="${item.link}" class="block px-4 py-3 hover:bg-cyan-50 text-gray-700 hover:text-cyan-600 transition-colors border-b border-gray-100 last:border-0"><i class="fas fa-search text-xs mr-2 text-gray-400"></i>${item.titulo}</a>`;
                searchSuggestions.appendChild(li);
              });
              searchSuggestions.classList.remove("hidden");
              searchSuggestions.classList.add("flex");
            } else {
              searchSuggestions.innerHTML =
                '<li class="px-4 py-3 text-gray-500 italic text-center">No hay coincidencias</li>';
              searchSuggestions.classList.remove("hidden");
            }
          })
          .catch((err) => console.error("Error en búsqueda:", err));
      } else {
        searchSuggestions.classList.add("hidden");
      }
    });
  }

  // Ocultar todo (Menú y Sugerencias) al hacer click afuera
  document.addEventListener("click", (e) => {
    if (menu && !menu.contains(e.target) && !menuBtn.contains(e.target)) {
      menu.classList.add("hidden");
    }
    if (searchSuggestions && !searchContainer.contains(e.target)) {
      searchSuggestions.classList.add("hidden");
    }
  });
});
