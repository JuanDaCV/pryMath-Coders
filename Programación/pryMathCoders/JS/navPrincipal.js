document.addEventListener('DOMContentLoaded', function () {
    // Menú de hamburguesa para móviles
    const menuToggle = document.getElementById('menuToggle');
    const mainMenu = document.getElementById('mainMenu');

    if (menuToggle && mainMenu) {
        menuToggle.addEventListener('click', function () {
            mainMenu.classList.toggle('active');
        });
    }

    // Control de submenús en móviles
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        if (item.querySelector('.submenu')) {
            item.addEventListener('click', function (e) {
                // Solo en vista móvil
                if (window.innerWidth <= 768) {
                    // Si el clic no es en el enlace directo, sino en el área del ítem
                    if (e.target === item || e.target.classList.contains('menu-link')) {
                        e.preventDefault();

                        // Cerrar otros submenús abiertos
                        menuItems.forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.classList.remove('active');
                            }
                        });

                        // Activar/desactivar el submenú actual
                        item.classList.toggle('active');
                    }
                }
            });
        }
    });

    // Cerrar menú al hacer clic fuera
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.nav')) {
            mainMenu.classList.remove('active');
            menuItems.forEach(item => {
                item.classList.remove('active');
            });
        }
    });

    // Ajustar si cambia el tamaño de la ventana
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) {
            mainMenu.classList.remove('active');
            menuItems.forEach(item => {
                item.classList.remove('active');
            });
        }
    });
});