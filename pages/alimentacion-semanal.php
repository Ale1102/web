
<?php
// Configuración básica de la página
$page_title = "Plan Semanal de Alimentación";
$current_page = "alimentacion-semanal";
// Ruta raíz del proyecto   

$root_path = "../"; // Ajusta según la estructura de tu proyecto


// Incluir el encabezado
include '../includes/header.php';
?>


    <style>
        /* Estilos específicos para la tabla de alimentación */
        .plan-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            background-color: white;
            box-shadow: var(--box-shadow);
            border-radius: var(--border-radius);
            overflow: hidden;
        }
        
        .plan-table th, .plan-table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid var(--border-color);
        }
        
        .plan-table th {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .plan-table tr:nth-child(even) {
            background-color: var(--background-light);
        }
        
        .plan-table td:first-child {
            font-weight: 600;
            background-color: var(--primary-dark);
            color: white;
            width: 80px;
            text-align: center;
        }
        
        .meal-name {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }
        
        .meal-details {
            font-size: 0.9rem;
            color: var(--text-color);
        }
        
        .meal-time {
            font-size: 0.8rem;
            color: var(--text-light);
            font-style: italic;
            margin-top: 3px;
        }
        
        /* Estilos responsivos para la tabla */
        @media (max-width: 992px) {
            .plan-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
        
        @media (max-width: 576px) {
            .plan-table th, .plan-table td {
                padding: 8px 10px;
                font-size: 0.9rem;
            }
            
            .meal-details {
                font-size: 0.85rem;
            }
        }
        
        /* Estilos para la leyenda de la tabla */
        .table-legend {
            margin-top: 1rem;
            padding: 1rem;
            background-color: var(--background-light);
            border-radius: var(--border-radius);
        }
        
        .legend-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary-dark);
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .legend-color {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 4px;
        }
        
        /* Colores para los días de la semana */
        .day-lunes { background-color: #8D6E63; }
        .day-martes { background-color: #5D4037; }
        .day-miercoles { background-color: #6D4C41; }
        .day-jueves { background-color: #795548; }
        .day-viernes { background-color: #4E342E; }
        .day-sabado { background-color: #3E2723; }
        .day-domingo { background-color: #5D4037; }
        
        /* Botón para imprimir el plan */
        .print-plan-btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 500;
            margin-bottom: 2rem;
            transition: var(--transition);
        }
        
        .print-plan-btn:hover {
            background-color: var(--primary-dark);
        }
        
        .print-plan-btn svg {
            margin-right: 8px;
            vertical-align: middle;
        }
        
        @media print {
            .header, .footer, .cta, .page-header, button:not(.print-plan-btn) {
                display: none;
            }
            
            .plan-table {
                box-shadow: none;
                border: 1px solid #ddd;
            }
            
            body {
                padding: 20px;
                background-color: white;
            }
        }
    </style>
</head>
<body>
    <!-- Contenedor principal de la página -->
    <div class="page-wrapper">
       

        <!-- Contenido principal de la página -->
        <main>
            <!-- Encabezado de la página de alimentación -->
            <section class="page-header">
                <div class="container">
                    <h1 class="page-title">Plan Semanal de Alimentación</h1>
                    <p class="page-description">Tu plan detallado de comidas para cada día de la semana</p>
                </div>
            </section>

            <!-- Sección del plan semanal de alimentación -->
            <section class="alimentacion-section">
                <div class="container">
                    <!-- Botón para imprimir el plan -->
                    <button class="print-plan-btn" onclick="window.print()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                        Imprimir Plan Semanal
                    </button>
                    
                    <!-- Tabla del plan semanal de alimentación -->
                    <div class="table-responsive">
                        <table class="plan-table">
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th>Desayuno<br><span class="meal-time">(7:00 - 8:00)</span></th>
                                    <th>Refrigerio AM<br><span class="meal-time">(10:30)</span></th>
                                    <th>Almuerzo<br><span class="meal-time">(13:30 - 14:30)</span></th>
                                    <th>Refrigerio PM<br><span class="meal-time">(17:00)</span></th>
                                    <th>Cena<br><span class="meal-time">(20:30 - 21:30)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Lunes -->
                                <tr>
                                    <td class="day-lunes">L</td>
                                    <td>
                                        <div class="meal-details">
                                            ½ tz casamiento sin grasa<br>
                                            2 huevos revueltos con vegetales<br>
                                            3 cdas de requesón<br>
                                            Una manzana verde
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Una galleta tosh<br>
                                            15 uvas verdes
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            7 oz pechuga a la plancha<br>
                                            1/3 tz arroz blanco sin grasa<br>
                                            2 tz ensalada fresca
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un yogurt griego YES
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            3 huevos revueltos con vegetales<br>
                                            2 oz queso fresco<br>
                                            ¾ tz casamiento sin grasa<br>
                                            1 tz vegetales verdes cocidos
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Martes -->
                                <tr>
                                    <td class="day-martes">M</td>
                                    <td>
                                        <div class="meal-details">
                                            3 oz cuajada o queso fresco<br>
                                            3 cdas frijoles sancochados<br>
                                            Una tortilla<br>
                                            ¼ aguacate mexicano<br>
                                            Una naranja
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Una galleta tosh<br>
                                            Una manzana verde
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            7 oz carne de res a la plancha<br>
                                            1/3 tz arroz blanco sin grasa<br>
                                            2 tz de pepino
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un yogurt griego YES
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            3 huevos revueltos con vegetales<br>
                                            2 oz cuajada<br>
                                            Un plátano asado<br>
                                            1 tz vegetales verdes cocidos
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Miércoles -->
                                <tr>
                                    <td class="day-miercoles">M</td>
                                    <td>
                                        <div class="meal-details">
                                            Una rapidita XL con una lasca de jamón de pavo y queso mozzarella + tomate, lechuga y pepino<br>
                                            ¼ aguacate mexicano<br>
                                            Una manzana verde
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Una galleta tosh<br>
                                            1 tz de fresas
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            7 oz pechuga con salsa de tomate (1/2 tz salsa de tomate natural)<br>
                                            1/3 tz arroz blanco<br>
                                            1 tz ensalada fresca
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un yogurt griego YES
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            4 huevos revueltos + 2 oz queso fresco<br>
                                            1/2 tz frijoles sin grasa<br>
                                            Una rebanada de pan integral<br>
                                            ¾ tz tomatada sin grasa
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Jueves -->
                                <tr>
                                    <td class="day-jueves">J</td>
                                    <td>
                                        <div class="meal-details">
                                            Un sándwich de 2 rebanadas de pan integral + 2 rebanadas de jamón de pavo y una de queso mozzarella + tomate, lechuga y pepino al gusto<br>
                                            Un banano
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Una galleta tosh<br>
                                            Una manzana verde
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            7 oz carne de res a la plancha<br>
                                            ½ tz puré de papa<br>
                                            1 tz ensalada fresca<br>
                                            1 tz chirmol
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un yogurt griego YES
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un Wrap (una tortilla rapidita XL + 6 oz pollo en trocitos o carne de res + chile verde, cebolla morada, chile morrón del color que usted guste + lechuga de palmito)
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Viernes -->
                                <tr>
                                    <td class="day-viernes">V</td>
                                    <td>
                                        <div class="meal-details">
                                            3 huevos revueltos con vegetales<br>
                                            3 cdas frijoles sancochados<br>
                                            Una tortilla<br>
                                            15 uvas verdes
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Una galleta tosh<br>
                                            Una naranja
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            7 oz picado de carne con verduras (7 oz carne molida premium)<br>
                                            1 tz vegetales de su gusto<br>
                                            Una tortilla
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un yogurt griego YES
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            6 oz pechuga a la plancha<br>
                                            ¾ tz casamiento sin grasa<br>
                                            2 tz vegetales cocidos verdes
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Sábado -->
                                <tr>
                                    <td class="day-sabado">S</td>
                                    <td>
                                        <div class="meal-details">
                                            Tres huevos revueltos con vegetales<br>
                                            2 rebanadas de pan integral<br>
                                            1 tz de fresas
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Una galleta tosh<br>
                                            Una manzana verde
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            7 oz pechuga a la plancha<br>
                                            1/3 tz arroz blanco sin grasa<br>
                                            1 tz vegetales de color
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un yogurt griego YES
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            3 oz cuajada + 3 huevos duros<br>
                                            ¾ tz frijoles sancochados<br>
                                            2 tz de pepino
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Domingo -->
                                <!-- <tr>
                                    <td class="day-domingo">D</td>
                                    <td>
                                        <div class="meal-details">
                                            2 huevos revueltos con vegetales<br>
                                            2 rebanadas de pan integral<br>
                                            1 tz de frutas mixtas<br>
                                            1 taza de café negro o té verde
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un puñado de frutos secos<br>
                                            Una pera
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            6 oz pescado al horno<br>
                                            1/3 tz quinoa<br>
                                            2 tz ensalada mixta<br>
                                            1 cucharada de aceite de oliva
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Un yogurt griego natural<br>
                                            1 cucharada de miel
                                        </div>
                                    </td>
                                    <td>
                                        <div class="meal-details">
                                            Ensalada de atún (5 oz)<br>
                                            con vegetales variados<br>
                                            ½ aguacate<br>
                                            2 galletas integrales
                                        </div>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Leyenda de la tabla -->
                    <div class="table-legend">
                        <h3 class="legend-title">Leyenda:</h3>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: var(--primary-color);"></div>
                            <span>Encabezados: Comidas principales y horarios</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color day-lunes"></div>
                            <span>L: Lunes</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color day-martes"></div>
                            <span>M: Martes</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color day-miercoles"></div>
                            <span>M: Miércoles</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color day-jueves"></div>
                            <span>J: Jueves</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color day-viernes"></div>
                            <span>V: Viernes</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color day-sabado"></div>
                            <span>S: Sábado</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color day-domingo"></div>
                            <span>D: Domingo</span>
                        </div>
                    </div>
                    
                    <!-- Notas adicionales -->
                    <div class="card" style="margin-top: 2rem;">
                        <div class="card-header" style="background-color: var(--primary-color); color: white; padding: 1rem;">
                            <h3 style="margin: 0;">Notas Importantes</h3>
                        </div>
                        <div class="card-body" style="padding: 1rem; background-color: white;">
                            <ul style="list-style-type: disc; padding-left: 1.5rem;">
                                <li>Bebe al menos 2-3 litros de agua al día.</li>
                                <li>Puedes intercambiar comidas del mismo día si mantienes las porciones.</li>
                                <li>Los días de entrenamiento intenso, puedes aumentar ligeramente la porción de carbohidratos.</li>
                                <li>Evita añadir sal extra a tus comidas, utiliza especias y hierbas para dar sabor.</li>
                                <li>Puedes sustituir el yogurt griego YES por otro yogurt natural sin azúcar.</li>
                                <li>Las medidas son aproximadas: tz = taza, cdas = cucharadas, oz = onzas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sección de llamada a la acción (CTA) -->
            <section class="cta">
                <div class="container">
                    <div class="cta-content">
                        <h2 class="cta-title">¿Necesitas un plan más personalizado?</h2>
                        <p class="cta-description">Podemos adaptar tu alimentación a tus objetivos específicos</p>
                        <a href="#" class="btn btn-primary">Contactar</a>
                    </div>
                </div>
            </section>
        </main>

      
                <!-- Parte inferior del footer con copyright -->
                <div class="footer-bottom">
                    <p>&copy; 2025 FitPlan. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Enlace al archivo JavaScript externo -->
    <script src="assets/js/main.js"></script>
<?php
// Incluir el pie de página
include '../includes/footer.php';
?>