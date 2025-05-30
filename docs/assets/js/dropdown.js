(function() {
    // Test immédiat
    console.log('dropdown.js: Début du script à', new Date().toISOString());

    // Vérifier les interférences
    if (!document.querySelector) {
        console.error('dropdown.js: document.querySelector non disponible');
        return;
    }

    function initDropdowns() {
        try {
            console.log('dropdown.js: Initialisation des menus');
            const buttons = document.querySelectorAll('.dropbtn');
            console.log('dropdown.js: Boutons trouvés :', buttons.length);

            if (buttons.length === 0) {
                console.warn('dropdown.js: Aucun bouton .dropbtn trouvé');
                return;
            }

            buttons.forEach((button, index) => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    console.log('dropdown.js: Clic sur bouton', index + 1, button.textContent);
                    const dropdown = this.nextElementSibling;
                    if (dropdown && dropdown.classList.contains('dropdown-content')) {
                        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                    } else {
                        console.error('dropdown.js: Dropdown non trouvé pour bouton', index + 1);
                    }
                });
            });

            document.addEventListener('click', function(event) {
                const isDropBtn = event.target.closest('.dropbtn');
                if (!isDropBtn) {
                    console.log('dropdown.js: Clic hors bouton, fermeture des menus');
                    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
                        dropdown.style.display = 'none';
                    });
                }
            });
        } catch (error) {
            console.error('dropdown.js: Erreur :', error);
        }
    }

    // Exécuter immédiatement ou attendre
    console.log('dropdown.js: État du DOM :', document.readyState);
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            console.log('dropdown.js: DOMContentLoaded déclenché');
            initDropdowns();
        });
    } else {
        initDropdowns();
    }

    // Détecter contentInt.js
    if (document.querySelector('script[src*="contentInt.js"]')) {
        console.warn('dropdown.js: contentInt.js détecté, possible interférence');
    }
})();