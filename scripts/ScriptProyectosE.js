// js/script.js

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('project-modal');
    const closeBtn = modal.querySelector('.close');
    const viewDetailsButtons = document.querySelectorAll('.view-details');

    // Información de ejemplo para los proyectos
    const projectDetails = {
        1: {
            title: 'Proyecto A',
            logo: '../img/project-logo-a.png',
            description: 'Descripción extensa del proyecto A: Este proyecto busca desarrollar una nueva aplicación móvil para mejorar la comunicación entre equipos...',
            startDate: '2024-01-15',
            endDate: '2024-06-30',
            status: 'open'
        },
        2: {
            title: 'Proyecto B',
            logo: '../img/project-logo-b.png',
            description: 'Descripción extensa del proyecto B: Este proyecto se centra en la creación de una plataforma de e-learning para educación en línea...',
            startDate: '2024-02-01',
            endDate: '2024-12-15',
            status: 'closed'
        }
        // Añadir más proyectos según sea necesario
    };

    // Función para mostrar el modal con detalles del proyecto
    function showProjectDetails(projectId) {
        const details = projectDetails[projectId];
        if (details) {
            document.getElementById('modal-title').textContent = details.title;
            document.getElementById('modal-logo').src = details.logo;
            document.getElementById('modal-description').textContent = details.description;
            document.getElementById('modal-start-date').textContent = details.startDate;
            document.getElementById('modal-end-date').textContent = details.endDate;
            document.getElementById('modal-status').textContent = details.status === 'open' ? 'Abierto' : 'Cerrado';
            document.getElementById('modal-status').className = `status ${details.status}`;
            modal.style.display = 'block';
        }
    }

    // Evento para abrir el modal
    viewDetailsButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const projectId = this.getAttribute('data-project');
            showProjectDetails(projectId);
        });
    });

    // Evento para cerrar el modal
    closeBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Cerrar el modal si se hace clic fuera de él
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
