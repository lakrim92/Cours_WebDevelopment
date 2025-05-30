(function() {
    console.log('dropdown.js: Début du script à', new Date().toISOString());

    if (!document.querySelector) {
        console.error('dropdown.js: document.querySelector non disponible');
        return;
    }

    function initDropdowns() {
        try {
            console.log('dropdown.js: Initialisation des menus');
            const buttons = document.querySelectorAll('.dropbtn');
            console.log('dropdown.js: Boutons .dropbtn trouvés :', buttons.length);

            if (buttons.length === 0) {
                console.warn('dropdown.js: Aucun bouton .dropbtn trouvé');
                return;
            }

            // Inspecter le DOM
            const firstButton = buttons[0];
            if (firstButton) {
                console.log('dropdown.js: Premier bouton :', firstButton.textContent);
                console.log('dropdown.js: HTML du bouton :', firstButton.outerHTML);
                const nextSibling = firstButton.nextElementSibling;
                console.log('dropdown.js: nextSibling :', nextSibling ? nextSibling.outerHTML : 'Aucun');
                const parent = firstButton.parentElement;
                console.log('dropdown.js: Parent :', parent ? parent.outerHTML : 'Aucun');
                console.log('dropdown.js: Classes du parent :', parent ? parent.className : 'Aucune');
                // Lister tous les enfants du parent
                if (parent) {
                    console.log('dropdown.js: Enfants du parent :');
                    Array.from(parent.children).forEach(child => {
                        console.log(`- ${child.tagName}, classes: ${child.className}, HTML: ${child.outerHTML}`);
                    });
                }
                // Vérifier .dropdown-content globalement
                const allDropdowns = document.querySelectorAll('.dropdown-content');
                console.log('dropdown.js: .dropdown-content trouvés :', allDropdowns.length);
            }

            // Gestion des clics
            document.addEventListener('click', function(event) {
                const button = event.target.closest('.dropbtn');
                if (button) {
                    event.preventDefault();
                    event.stopPropagation();
                    console.log('dropdown.js: Clic sur', button.textContent);

                    // Recherche du dropdown
                    console.log('dropdown.js: Recherche .dropdown-content');
                    const parent = button.parentElement;
                    let dropdown = null;

                    // Vérifier le parent
                    if (parent && parent.classList.contains('dropdown')) {
                        console.log('dropdown.js: Parent .dropdown trouvé :', parent.outerHTML);
                        dropdown = parent.querySelector('.dropdown-content');
                        if (dropdown) {
                            console.log('dropdown.js: .dropdown-content trouvé :', dropdown.outerHTML);
                            toggleDropdown(dropdown);
                            return;
                        }
                    }

                    // Si échec, loguer le DOM
                    console.error('dropdown.js: Aucun .dropdown-content trouvé pour', button.textContent);
                    console.log('dropdown.js: Parent HTML :', parent ? parent.outerHTML : 'Aucun');
                } else {
                    console.log('dropdown.js: Clic hors menu, fermeture');
                    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
                        dropdown.style.display = 'none';
                    });
                }
            });
        } catch (error) {
            console.error('dropdown.js: Erreur :', error);
        }
    }

    function toggleDropdown(dropdown) {
        try {
            const currentDisplay = getComputedStyle(dropdown).display;
            console.log('dropdown.js: Basculement, display actuel :', currentDisplay);
            const newDisplay = currentDisplay === 'block' ? 'none' : 'block';
            dropdown.style.display = newDisplay;
            console.log('dropdown.js: Nouveau display :', getComputedStyle(dropdown).display);
            if (newDisplay === 'block') {
                dropdown.style.cssText = 'display: block !important; position: absolute; z-index: 1000;';
                console.log('dropdown.js: Style forcé :', dropdown.outerHTML);
            }
        } catch (error) {
            console.error('dropdown.js: Erreur lors du basculement :', error);
        }
    }

    // Exécuter
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
    const contentIntScript = document.querySelector('script[src*="contentInt.js"]');
    if (contentIntScript) {
        console.warn('dropdown.js: contentInt.js détecté, src :', contentIntScript.src);
    }
})();