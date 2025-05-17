<?php include '../includes/header.php'; ?>

<!-- Contenido principal de la página -->
<main>
    <!-- Sección hero (banner principal) -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Tu Plan Personalizado</h2>
                <p class="hero-subtitle">Entrenamiento y alimentación diseñados para alcanzar tus objetivos</p>
                <!-- Botones de llamada a la acción -->
                <div class="hero-buttons">
                    <a href="rutinas.php" class="btn btn-primary">Ver Rutinas</a>
                    <a href="alimentacion-semanal.php" class="btn btn-secondary">Plan Alimenticio</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de características/funcionalidades -->
    <section class="features">
        <div class="container">
            <!-- Encabezado de la sección -->
            <div class="section-header">
                <h2 class="section-title">¿Cómo usar este plan?</h2>
                <p class="section-subtitle">Sigue estos pasos para aprovechar al máximo tu programa</p>
            </div>
            <!-- Cuadrícula de tarjetas de características -->
            <div class="features-grid">
                <!-- Tarjeta de característica 1: Planificación -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icono SVG de calendario -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    </div>
                    <h3 class="feature-title">Planifica tu semana</h3>
                    <p class="feature-description">Organiza tus días de entrenamiento según la rutina recomendada.</p>
                </div>
                <!-- Tarjeta de característica 2: Rutinas -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icono SVG de actividad -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                    <h3 class="feature-title">Sigue las rutinas</h3>
                    <p class="feature-description">Realiza los ejercicios con la técnica correcta y las series indicadas.</p>
                </div>
                <!-- Tarjeta de característica 3: Alimentación -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icono SVG de café (representa alimentación) -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                    </div>
                    <h3 class="feature-title">Alimentación adecuada</h3>
                    <p class="feature-description">Sigue el plan nutricional para maximizar tus resultados.</p>
                </div>
                <!-- Tarjeta de característica 4: Consistencia -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <!-- Icono SVG de actualización/ciclo -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                    </div>
                    <h3 class="feature-title">Consistencia</h3>
                    <p class="feature-description">Mantén la constancia para ver resultados a largo plazo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de llamada a la acción (CTA) -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">¿Listo para empezar?</h2>
                <p class="cta-description">Comienza hoy mismo con tu plan personalizado</p>
                <a href="rutinas.php" class="btn btn-primary">Comenzar ahora</a>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
