<?php include '../includes/header.php'; ?>

<!-- Contenido principal de la página -->
<main>
    <!-- Encabezado de la página de rutinas específicas -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">Rutinas Específicas</h1>
            <p class="page-description">Rutinas detalladas para cada día de entrenamiento</p>
        </div>
    </section>

    <!-- Sección principal de rutinas específicas -->
    <section class="rutinas-section">
        <div class="container">
            <!-- Botones de navegación para las rutinas -->
            <div class="rutina-nav">
                <button class="rutina-nav-btn active" data-rutina="dia1-piernas">Día 1: Piernas</button>
                <button class="rutina-nav-btn" data-rutina="dia2-hombros-brazos">Día 2: Hombros/Brazos</button>
                <button class="rutina-nav-btn" data-rutina="dia2-pecho-espalda">Día 2: Pecho/Espalda</button>
            </div>
            
            <!-- Contenido de las rutinas -->
            <div class="rutinas-content">
                <!-- Rutina Día 1: Piernas -->
                <div class="rutina-content" id="dia1-piernas">
                    <div class="rutina-header">
                        <h2 class="rutina-title">Día 1: Piernas y Pantorrillas</h2>
                        <button class="print-rutina-btn" onclick="window.print()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            Imprimir Rutina
                        </button>
                    </div>
                    <style>
                        /* Estilos para la página de rutinas específicas */

/* Estilos generales */
.page-header {
  background-color: #4caf50;
  color: white;
  padding: 2rem 0;
  text-align: center;
  margin-bottom: 2rem;
}

.page-title {
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
}

.page-description {
  font-size: 1.2rem;
  opacity: 0.9;
}

/* Navegación de rutinas */
.rutina-nav {
  display: flex;
  justify-content: center;
  margin-bottom: 2rem;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.rutina-nav-btn {
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  padding: 0.75rem 1.5rem;
  cursor: pointer;
  font-weight: 500;
  transition: all 0.3s ease;
}

.rutina-nav-btn:hover {
  background-color: #e9e9e9;
}

.rutina-nav-btn.active {
  background-color: #4caf50;
  color: white;
  border-color: #4caf50;
}

/* Contenido de rutinas */
.rutina-content {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  padding: 2rem;
  margin-bottom: 2rem;
}

.rutina-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1.5rem;
  background-color: #4caf50;
  padding: 1rem;
  border-radius: 6px;
  color: white;
}

.rutina-title {
  margin: 0;
  font-size: 1.8rem;
}

.print-rutina-btn {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background-color: white;
  color: #333;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  cursor: pointer;
  font-weight: 500;
  transition: all 0.3s ease;
}

.print-rutina-btn:hover {
  background-color: #f0f0f0;
}

/* Notas de la rutina */
.rutina-notes {
  background-color: #f9f9f9;
  padding: 1.5rem;
  border-radius: 6px;
  margin-bottom: 2rem;
}

.rutina-notes h3 {
  margin-top: 0;
  color: #333;
}

.rutina-notes ul {
  padding-left: 1.5rem;
}

.rutina-notes li {
  margin-bottom: 0.5rem;
}

/* Grupos musculares */
.muscle-group {
  margin-bottom: 2rem;
  border-bottom: 1px solid #eee;
  padding-bottom: 1rem;
}

.muscle-title {
  color: #4caf50;
  font-size: 1.5rem;
  margin-bottom: 1rem;
  border-left: 4px solid #4caf50;
  padding-left: 1rem;
}

/* Ejercicios */
.ejercicio {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1.5rem;
  padding: 1rem;
  background-color: #f9f9f9;
  border-radius: 6px;
  flex-wrap: wrap;
}

.ejercicio-info {
  flex: 1;
  min-width: 250px;
}

.ejercicio-nombre {
  margin: 0 0 0.5rem 0;
  font-size: 1.2rem;
}

.ejercicio-detalles {
  color: #4caf50;
  font-weight: 600;
  margin: 0;
}

.ejercicio-tips {
  flex: 2;
  min-width: 250px;
}

.ejercicio-tips p {
  margin: 0;
  color: #666;
}

/* CTA Section */
.cta {
  background-color: #f5f5f5;
  padding: 3rem 0;
  text-align: center;
}

.cta-title {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.cta-description {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  color: #666;
}

.btn-primary {
  background-color: #4caf50;
  color: white;
  padding: 0.75rem 2rem;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
  display: inline-block;
}

.btn-primary:hover {
  background-color: #3e8e41;
}

/* Estilos para impresión */
@media print {
  .header,
  .footer,
  .rutina-nav,
  .cta,
  .print-rutina-btn {
    display: none !important;
  }

  .rutina-content {
    box-shadow: none;
    padding: 0;
  }

  .page-header {
    background-color: transparent;
    color: black;
    padding: 1rem 0;
  }

  .rutina-header {
    background-color: transparent;
    color: black;
    padding: 0;
    margin-bottom: 1rem;
  }

  .muscle-title {
    color: black;
  }

  .ejercicio-detalles {
    color: black;
  }
}

/* Estilos responsivos */
@media (max-width: 768px) {
  .rutina-nav {
    flex-direction: column;
  }

  .rutina-header {
    flex-direction: column;
    gap: 1rem;
  }

  .ejercicio {
    flex-direction: column;
  }

  .ejercicio-info,
  .ejercicio-tips {
    min-width: 100%;
  }
}

                    </style>
                    <!-- Notas de la rutina -->
                    <div class="rutina-notes">
                        <h3>Notas importantes:</h3>
                        <ul>
                            <li>Realiza un calentamiento adecuado de 5-10 minutos antes de comenzar.</li>
                            <li>Descansa 60-90 segundos entre series.</li>
                            <li>Mantén una técnica adecuada en todo momento.</li>
                            <li>Ajusta los pesos según tu nivel, pero busca un desafío en las últimas repeticiones.</li>
                        </ul>
                    </div>
                    
                    <!-- Grupo muscular: Cuádriceps -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Cuádriceps</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Extensiones</h3>
                                <p class="ejercicio-detalles">4 x 15 series</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén la espalda recta y concéntrate en la contracción del cuádriceps.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 2 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Press (Prensa)</h3>
                                <p class="ejercicio-detalles">4 x 15 series</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Coloca los pies a la altura de los hombros y baja hasta que las rodillas formen un ángulo de 90°.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 3 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Máquina Hack</h3>
                                <p class="ejercicio-detalles">4 x 15 series</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén la espalda apoyada en el respaldo y baja controladamente.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Grupo muscular: Isquiotibiales y Glúteos -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Isquiotibiales y Glúteos</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Desplantes</h3>
                                <p class="ejercicio-detalles">4 x 12 series</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén el torso erguido y da un paso lo suficientemente largo.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Grupo muscular: Pantorrillas -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Pantorrillas</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Empinadas Pantorrilla</h3>
                                <p class="ejercicio-detalles">20 x 4 series</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Estira completamente la pantorrilla en cada repetición.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Rutina Día 2: Hombros/Brazos -->
                <div class="rutina-content" id="dia2-hombros-brazos" style="display: none;">
                    <div class="rutina-header">
                        <h2 class="rutina-title">Día 2: Hombros y Brazos</h2>
                        <button class="print-rutina-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            Imprimir Rutina
                        </button>
                    </div>
                    
                    <!-- Notas de la rutina -->
                    <div class="rutina-notes">
                        <h3>Notas importantes:</h3>
                        <ul>
                            <li>Realiza un calentamiento adecuado de 5-10 minutos antes de comenzar.</li>
                            <li>Descansa 60 segundos entre series.</li>
                            <li>Mantén una técnica adecuada en todo momento.</li>
                            <li>Concéntrate en la conexión mente-músculo.</li>
                        </ul>
                    </div>
                    
                    <!-- Grupo muscular: Hombros -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Hombros</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Press Militar c/ Barra</h3>
                                <p class="ejercicio-detalles">4 x 12</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén el core activado y evita arquear la espalda.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 2 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Laterales combinadas c/ Frontales</h3>
                                <p class="ejercicio-detalles">4 x 12</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén una ligera flexión en los codos durante todo el movimiento.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 3 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Jalones c/ polea Posterior</h3>
                                <p class="ejercicio-detalles">4 x 15</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Inclínate ligeramente hacia adelante para aislar el deltoides posterior.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 4 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Encogimientos c/ mancuernas</h3>
                                <p class="ejercicio-detalles">4 x 10 (combinado)</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Eleva los hombros directamente hacia las orejas, sin rotar.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Grupo muscular: Bíceps -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Bíceps</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Curl c/ Barra</h3>
                                <p class="ejercicio-detalles">4 x 15</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén los codos pegados al cuerpo durante todo el movimiento.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 2 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Curl Martillo</h3>
                                <p class="ejercicio-detalles">4 x 15</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén las muñecas neutras y los codos estables.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 3 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Predicador</h3>
                                <p class="ejercicio-detalles">4 x 15</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Apoya bien los brazos en el banco y concéntrate en la contracción.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Grupo muscular: Tríceps -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Tríceps</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Tríceps Extensiones c/ Polea</h3>
                                <p class="ejercicio-detalles">4 x 15</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén los codos cerca de la cabeza y extiende completamente los brazos.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 2 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Press Francés c/ Mancuerna</h3>
                                <p class="ejercicio-detalles">4 x 15</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Baja la mancuerna controladamente hacia la frente o detrás de la cabeza.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Rutina Día 2: Pecho/Espalda -->
                <div class="rutina-content" id="dia2-pecho-espalda" style="display: none;">
                    <div class="rutina-header">
                        <h2 class="rutina-title">Día 2: Pecho y Espalda</h2>
                        <button class="print-rutina-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            Imprimir Rutina
                        </button>
                    </div>
                    
                    <!-- Notas de la rutina -->
                    <div class="rutina-notes">
                        <h3>Notas importantes:</h3>
                        <ul>
                            <li>Realiza un calentamiento adecuado de 5-10 minutos antes de comenzar.</li>
                            <li>Descansa 90 segundos entre series para ejercicios compuestos.</li>
                            <li>Mantén una técnica adecuada en todo momento.</li>
                            <li>Termina con 20 minutos de cardio moderado.</li>
                        </ul>
                    </div>
                    
                    <!-- Grupo muscular: Pecho -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Pecho</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Máquina Aperturas</h3>
                                <p class="ejercicio-detalles">4 x 15 series</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Ajusta el asiento para que los brazos estén alineados con el pecho.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 2 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Press c/ Mancuerna c/ Press Unido</h3>
                                <p class="ejercicio-detalles">12 x 4 y 10 x 4</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Alterna entre press normal y press con mancuernas juntas.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 3 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Press Inclinado</h3>
                                <p class="ejercicio-detalles">4 x 12</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Ajusta el banco a 30-45 grados para enfocarte en la parte superior del pecho.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Grupo muscular: Espalda -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Espalda</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Remo Sentado</h3>
                                <p class="ejercicio-detalles">4 x 15</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén la espalda recta y lleva el mango hacia el abdomen.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 2 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Jalones Frontales</h3>
                                <p class="ejercicio-detalles">4 x 15</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Lleva la barra hacia el pecho, no hacia la nuca.</p>
                            </div>
                        </div>
                        
                        <!-- Ejercicio 3 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Combinado Remo Serrucho</h3>
                                <p class="ejercicio-detalles">10 x 4</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Apoya una rodilla y mano en el banco, manteniendo la espalda paralela al suelo.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Grupo muscular: Cardio -->
                    <div class="muscle-group">
                        <h3 class="muscle-title">Cardio</h3>
                        
                        <!-- Ejercicio 1 -->
                        <div class="ejercicio">
                            <div class="ejercicio-info">
                                <h3 class="ejercicio-nombre">Cardio Elíptica</h3>
                                <p class="ejercicio-detalles">20 minutos</p>
                            </div>
                            <div class="ejercicio-tips">
                                <p>Mantén una intensidad moderada, con intervalos de mayor intensidad cada 5 minutos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de llamada a la acción (CTA) -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">¿Necesitas más rutinas?</h2>
                <p class="cta-description">Podemos personalizar tu plan según tus objetivos</p>
                <a href="#" class="btn btn-primary">Contactar</a>
            </div>
        </div>
    </section>
</main>

<!-- Scripts específicos para esta página - ANTES del footer -->
<script>
// Script de depuración directamente en la página
document.addEventListener("DOMContentLoaded", function() {
    console.log("Script interno cargado");
    
    // Verificar si los archivos JS externos se cargaron
    console.log("¿Se cargó main.js?", typeof mainJsLoaded !== 'undefined');
    console.log("¿Se cargó rutinas.js?", typeof rutinasJsLoaded !== 'undefined');
    
    // Implementación de respaldo en caso de que los archivos externos no se carguen
    const rutinaNavBtns = document.querySelectorAll(".rutina-nav-btn");
    const rutinaContents = document.querySelectorAll(".rutina-content");
    
    console.log("Botones encontrados (script interno):", rutinaNavBtns.length);
    console.log("Contenidos encontrados (script interno):", rutinaContents.length);
    
    if (rutinaNavBtns.length > 0) {
        rutinaNavBtns.forEach(function(btn) {
            btn.addEventListener("click", function() {
                const rutinaId = this.getAttribute("data-rutina");
                console.log("Botón clickeado (script interno):", rutinaId);
                
                // Remover clase active de todos los botones
                rutinaNavBtns.forEach(function(b) {
                    b.classList.remove("active");
                });
                
                // Añadir clase active al botón clickeado
                this.classList.add("active");
                
                // Ocultar todos los contenidos
                rutinaContents.forEach(function(content) {
                    content.style.display = "none";
                });
                
                // Mostrar el contenido correspondiente
                const targetContent = document.getElementById(rutinaId);
                if (targetContent) {
                    targetContent.style.display = "block";
                }
            });
        });
        
        // Activar el primer botón por defecto
        rutinaNavBtns[0].click();
    }
});
</script>
<script src="../assets/js/main.js"></script>
<script>var mainJsLoaded = true;</script>
<script src="../assets/js/rutinas.js"></script>
<script>var rutinasJsLoaded = true;</script>

<?php include '../includes/footer.php'; ?>
