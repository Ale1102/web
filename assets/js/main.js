// Esperar a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", () => {
  // Funcionalidad para el menú móvil
  const menuToggle = document.querySelector(".menu-toggle")
  const navList = document.querySelector(".nav-list")

  if (menuToggle) {
    menuToggle.addEventListener("click", function () {
      // Alternar la clase 'active' en el botón del menú
      this.classList.toggle("active")
      // Alternar la clase 'active' en la lista de navegación
      navList.classList.toggle("active")
    })
  }

  // Cerrar el menú móvil cuando se hace clic en un enlace
  const navLinks = document.querySelectorAll(".nav-link")

  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      // Si el menú está abierto (en móvil), cerrarlo
      if (window.innerWidth < 768 && navList.classList.contains("active")) {
        menuToggle.classList.remove("active")
        navList.classList.remove("active")
      }
    })
  })

  // Resaltar el enlace de navegación activo según la página actual
  const currentPage = window.location.pathname

  navLinks.forEach((link) => {
    const linkPath = link.getAttribute("href")

    // Si la ruta del enlace está contenida en la ruta actual, marcar como activo
    if (currentPage.includes(linkPath) && linkPath !== "../pages/index.php") {
      link.classList.add("active")
    } else if (currentPage.endsWith("/index.php") && linkPath === "../pages/index.php") {
      link.classList.add("active")
    }
  })
})
