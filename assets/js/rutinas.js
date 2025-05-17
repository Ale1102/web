// Esperar a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", () => {
  // Funcionalidad para las pestañas en la página de rutinas
  const tabBtns = document.querySelectorAll(".tab-btn")
  const tabContents = document.querySelectorAll(".tab-content")

  if (tabBtns.length > 0) {
    tabBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        // Remover la clase active de todos los botones
        tabBtns.forEach((b) => b.classList.remove("active"))
        // Añadir la clase active al botón clickeado
        this.classList.add("active")

        // Obtener el ID del contenido a mostrar
        const tabId = this.getAttribute("data-tab")

        // Ocultar todos los contenidos
        tabContents.forEach((content) => content.classList.remove("active"))

        // Mostrar el contenido correspondiente
        document.getElementById(tabId).classList.add("active")
      })
    })
  }

  // Funcionalidad para los botones de navegación en rutinas específicas
  const rutinaNavBtns = document.querySelectorAll(".rutina-nav-btn")
  const rutinaContents = document.querySelectorAll(".rutina-content")

  if (rutinaNavBtns.length > 0) {
    rutinaNavBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        // Remover la clase active de todos los botones
        rutinaNavBtns.forEach((b) => b.classList.remove("active"))
        // Añadir la clase active al botón clickeado
        this.classList.add("active")

        // Obtener el ID del contenido a mostrar
        const rutinaId = this.getAttribute("data-rutina")

        // Ocultar todos los contenidos
        rutinaContents.forEach((content) => content.classList.remove("active"))

        // Mostrar el contenido correspondiente
        document.getElementById(rutinaId).classList.add("active")
      })
    })
  }
})
