document.addEventListener("DOMContentLoaded", function() {
    // Seleccionar todos los botones de días
    const diaBtns = document.querySelectorAll('.dia-btn');
    const diaContents = document.querySelectorAll('.dia-content');
    
    // Añadir evento de clic a cada botón
    diaBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remover clase active de todos los botones y contenidos
            diaBtns.forEach(b => b.classList.remove('active'));
            diaContents.forEach(c => c.classList.remove('active'));
            
            // Añadir clase active al botón clicado
            this.classList.add('active');
            
            // Mostrar el contenido correspondiente
            const diaId = this.getAttribute('data-dia');
            document.getElementById(diaId).classList.add('active');
        });
    });
    
    // Función para imprimir rutina
    document.querySelectorAll('.print-rutina-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            window.print();
        });
    });
});