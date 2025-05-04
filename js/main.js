// Espera a que el DOM esté completamente cargado antes de ejecutar el código
document.addEventListener("DOMContentLoaded", () => {
    // Funcionalidad para el menú móvil
    const menuToggle = document.querySelector(".menu-toggle")
    const navList = document.querySelector(".nav-list")
  
    // Si existe el botón de menú, añade el evento de clic
    if (menuToggle) {
      menuToggle.addEventListener("click", () => {
        // Alterna la clase 'active' para mostrar/ocultar el menú
        navList.classList.toggle("active")
  
        // Cambia el icono del menú (transforma las líneas en una X)
        const spans = menuToggle.querySelectorAll("span")
        if (navList.classList.contains("active")) {
          spans[0].style.transform = "rotate(-45deg) translate(-5px, 6px)"
          spans[1].style.opacity = "0"
          spans[2].style.transform = "rotate(45deg) translate(-5px, -6px)"
        } else {
          spans[0].style.transform = "none"
          spans[1].style.opacity = "1"
          spans[2].style.transform = "none"
        }
      })
    }
  
    // Cierra el menú móvil cuando se hace clic fuera de él
    document.addEventListener("click", (event) => {
      if (navList && navList.classList.contains("active") && !event.target.closest(".main-nav")) {
        navList.classList.remove("active")
  
        // Restablece el icono del menú
        const spans = menuToggle.querySelectorAll("span")
        spans[0].style.transform = "none"
        spans[1].style.opacity = "1"
        spans[2].style.transform = "none"
      }
    })
  
    // Funcionalidad para las pestañas (tabs)
    const tabBtns = document.querySelectorAll(".tab-btn")
    const tabContents = document.querySelectorAll(".tab-content")
  
    // Añade evento de clic a cada botón de pestaña
    tabBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        // Elimina la clase 'active' de todos los botones y contenidos
        tabBtns.forEach((b) => b.classList.remove("active"))
        tabContents.forEach((c) => c.classList.remove("active"))
  
        // Añade la clase 'active' al botón clicado
        this.classList.add("active")
  
        // Muestra el contenido correspondiente
        const tabId = this.getAttribute("data-tab")
        document.getElementById(tabId).classList.add("active")
      })
    })
  
    // Desplazamiento suave para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        const target = document.querySelector(this.getAttribute("href"))
        if (target) {
          e.preventDefault()
          target.scrollIntoView({
            behavior: "smooth",
          })
        }
      })
    })
  
    // Función para animar elementos al hacer scroll
    const animateOnScroll = () => {
      // Selecciona todos los elementos que se animarán
      const elements = document.querySelectorAll(
        ".feature-card, .rutina-card, .comida-card, .recomendaciones-card, .receta-card, .plan-table, .table-legend, .card",
      )
  
      // Para cada elemento, comprueba si está visible en la ventana
      elements.forEach((element) => {
        const elementPosition = element.getBoundingClientRect().top
        const windowHeight = window.innerHeight
  
        // Si el elemento está visible, añade la animación
        if (elementPosition < windowHeight - 100) {
          element.style.opacity = "1"
          element.style.transform = "translateY(0)"
        }
      })
    }
  
    // Establece los estilos iniciales para la animación
    const elementsToAnimate = document.querySelectorAll(
      ".feature-card, .rutina-card, .comida-card, .recomendaciones-card, .receta-card, .plan-table, .table-legend, .card",
    )
    elementsToAnimate.forEach((element) => {
      element.style.opacity = "0"
      element.style.transform = "translateY(20px)"
      element.style.transition = "opacity 0.5s ease, transform 0.5s ease"
    })
  
    // Ejecuta la animación al cargar la página y al hacer scroll
    window.addEventListener("load", animateOnScroll)
    window.addEventListener("scroll", animateOnScroll)
  
    // Funcionalidad para añadir botones de impresión
    const addPrintButtons = () => {
      // Selecciona las tarjetas de rutinas y comidas
      const rutinasCards = document.querySelectorAll(".rutina-card")
      const comidasCards = document.querySelectorAll(".comida-card")
  
      // Añade botones de impresión a las tarjetas de rutinas
      rutinasCards.forEach((card) => {
        const header = card.querySelector(".rutina-header")
        if (header) {
          // Crea el botón de impresión
          const printBtn = document.createElement("button")
          printBtn.className = "print-btn"
          printBtn.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>'
          printBtn.style.background = "transparent"
          printBtn.style.border = "none"
          printBtn.style.color = "white"
          printBtn.style.cursor = "pointer"
          printBtn.title = "Imprimir rutina"
  
          // Añade funcionalidad de impresión al botón
          printBtn.addEventListener("click", () => {
            const content = card.outerHTML
            const printWindow = window.open("", "_blank")
            printWindow.document.write(`
                          <html>
                              <head>
                                  <title>Imprimir Rutina</title>
                                  <style>
                                      body { font-family: Arial, sans-serif; }
                                      .rutina-header { background-color: #4CAF50; color: white; padding: 15px; }
                                      .rutina-body { padding: 15px; }
                                      .ejercicio { padding: 10px 0; border-bottom: 1px solid #E0E0E0; }
                                      .ejercicio:last-child { border-bottom: none; }
                                      .ejercicio-nombre { font-weight: bold; }
                                      .ejercicio-detalles { color: #4CAF50; font-weight: 500; }
                                      .print-btn { display: none; }
                                      @media print {
                                          body { margin: 0; padding: 20px; }
                                      }
                                  </style>
                              </head>
                              <body>
                                  ${content}
                                  <script>window.onload = function() { window.print(); window.close(); }</script>
                              </body>
                          </html>
                      `)
          })
  
          // Añade el botón al encabezado de la tarjeta
          header.appendChild(printBtn)
        }
      })
  
      // Añade botones de impresión a las tarjetas de comidas
      comidasCards.forEach((card) => {
        const header = card.querySelector(".comida-header")
        if (header) {
          // Crea el botón de impresión
          const printBtn = document.createElement("button")
          printBtn.className = "print-btn"
          printBtn.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>'
          printBtn.style.background = "transparent"
          printBtn.style.border = "none"
          printBtn.style.color = "white"
          printBtn.style.cursor = "pointer"
          printBtn.title = "Imprimir comida"
  
          // Añade funcionalidad de impresión al botón
          printBtn.addEventListener("click", () => {
            const content = card.outerHTML
            const printWindow = window.open("", "_blank")
            printWindow.document.write(`
                          <html>
                              <head>
                                  <title>Imprimir Comida</title>
                                  <style>
                                      body { font-family: Arial, sans-serif; }
                                      .comida-header { background-color: #4CAF50; color: white; padding: 15px; display: flex; justify-content: space-between; }
                                      .comida-body { padding: 15px; }
                                      .comida-opciones li { margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #E0E0E0; }
                                      .comida-opciones li:last-child { margin-bottom: 0; padding-bottom: 0; border-bottom: none; }
                                      .comida-opciones h3 { color: #388E3C; margin-bottom: 5px; }
                                      .print-btn { display: none; }
                                      @media print {
                                          body { margin: 0; padding: 20px; }
                                      }
                                  </style>
                              </head>
                              <body>
                                  ${content}
                                  <script>window.onload = function() { window.print(); window.close(); }</script>
                              </body>
                          </html>
                      `)
          })
  
          // Añade el botón al encabezado de la tarjeta
          header.appendChild(printBtn)
        }
      })
    }
  
    // Añade botones de impresión si estamos en la página de rutinas o alimentación
    if (document.querySelector(".rutinas-section") || document.querySelector(".alimentacion-section")) {
      addPrintButtons()
    }
  })
  