document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los dropdown-label
    const dropdownLabels = document.querySelectorAll('.dropdown-label');

    // Añadir event listener a cada uno para el click
    dropdownLabels.forEach(label => {
        label.addEventListener('click', function(event) {
            // Alternar la clase active para desplegar o esconder el menú
            this.classList.toggle('active');
            event.stopPropagation(); // Evita que el clic en el dropdown cierre el menú
        });
    });

    // Manejar la selección de una opción en el menú desplegable
    document.querySelectorAll('.dropdown-content a').forEach(option => {
        option.addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir el comportamiento por defecto del enlace
            const dropdown = this.closest('.dropdown-label'); // Obtener el dropdown actual
            dropdown.querySelector('span').textContent = this.textContent; // Actualizar el texto del label
            dropdown.classList.remove('active'); // Cerrar el menú
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
