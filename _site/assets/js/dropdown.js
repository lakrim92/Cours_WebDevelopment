document.addEventListener('DOMContentLoaded', function() {
    console.log('dropdown.js chargé'); // Log pour vérifier le chargement

    try {
        const buttons = document.querySelectorAll('.dropbtn');
        console.log('Boutons trouvés :', buttons.length); // Log nombre de boutons

        buttons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Empêche tout comportement par défaut
                event.stopPropagation(); // Empêche la propagation au document
                const dropdown = this.nextElementSibling;
                if (dropdown) {
                    console.log('Clic sur bouton, toggle dropdown'); // Log clic
                    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                } else {
                    console.error('Dropdown non trouvé pour ce bouton');
                }
            });
        });

        // Fermer les menus si clic ailleurs
        document.addEventListener('click', function(event) {
            const isDropbtn = event.target.closest('.dropbtn');
            if (!isDropbtn) {
                console.log('Clic hors bouton, fermeture des dropdowns'); // Log
                document.querySelectorAll('.dropdown-content').forEach(dropdown => {
                    dropdown.style.display = 'none';
                });
            }
        });
    } catch (error) {
        console.error('Erreur dans dropdown.js :', error); // Log des erreurs
    }
});