document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los dropdown-label
    const dropdownLabels = document.querySelectorAll('.dropdown-label');

    // Añadir event listener a cada uno para el click
    dropdownLabels.forEach(label => {
        label.addEventListener('click', function(event) {
            // Alternar la clase active para desplegar o esconder el menú
            this.classList.toggle('active');
        });
    });

    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener('click', function(event) {
        dropdownLabels.forEach(label => {
            if (!label.contains(event.target)) {
                label.classList.remove('active');
            }
        });
    });
});
