---
layout: default
title: Extensions PHP pour VS Code
---
# Extensions PHP pour Visual Studio Code 🛠️

Bienvenue dans ce guide des meilleures extensions pour coder en PHP avec **Visual Studio Code (VS Code)** ! 👨‍💻👩‍💻 Ces extensions te simplifieront la vie pour les exercices des Parties 2, 3, 4 (ex. : `bonjour.php`) et le projet en groupe (Partie 5 : vitrine web). Elles offrent autocomplétion, débogage, formatage, et bien plus. Allons-y ! 🚀

## 🌟 Pourquoi utiliser des extensions ?

Les extensions transforment VS Code en un outil puissant pour PHP :
- **Productivité** : Code plus vite avec l’autocomplétion.
- **Qualité** : Détecte les erreurs avant qu’elles ne te bloquent.
- **Collaboration** : Produis un code propre pour GitHub.
- **Apprentissage** : Débogue facilement pour comprendre tes scripts.

Ce guide est conçu pour les débutants du cours [Introduction à PHP](../php.md). Installe ces extensions pour coder comme un pro ! 💻

## 📋 Liste des extensions

### 1. PHP Intelephense

**Description** : L’extension **essentielle** pour PHP, recommandée dans la Partie 1 du cours. Elle offre une autocomplétion intelligente, détecte les erreurs en temps réel, et te guide dans ton code.

**Fonctionnalités** :
- Autocomplétion rapide (camelCase, underscore).
- Détection d’erreurs instantanée.
- Navigation vers classes/fonctions (clic droit > Go to Definition).
- Documentation survolée pour les fonctions PHP.

**Installation** :
- Ouvre l’onglet Extensions (Ctrl+Shift+X).
- Recherche `PHP Intelephense`.
- Installe `bmewburn.vscode-intelephense-client`.

(Ouvre `settings.json` via Ctrl+, > icône `{}` en haut à droite).

**Pourquoi ?** : Indispensable pour coder efficacement tout les projets.

### 2. PHP Debug

**Description** : Permet de déboguer ton code PHP avec Xdebug directement dans VS Code. Idéal pour trouver les erreurs.

**Fonctionnalités** :
- Points d’arrêt (breakpoints) pour arrêter l’exécution.
- Inspection des variables en temps réel.
- Exécution pas à pas (step-through).

**Installation** :
- Recherche `PHP Debug` (xdebug.php-debug).
- Configure Xdebug dans ton environnement PHP (voir xdebug.org).

**Configuration** :
- Ajoute dans `php.ini` :
```ini
[xdebug]
xdebug.mode=debug
xdebug.start_with_request=yes
xdebug.client_host=127.0.0.1
xdebug.client_port=9003
```

- Crée un fichier `.vscode/launch.json` :
```json
{
  "version": "0.2.0",
  "configurations": [
    {
      "name": "Listen for Xdebug",
      "type": "php",
      "request": "launch",
      "port": 9003,
      "pathMappings": {
        "/path/to/mon_premier_site_php": "${workspaceFolder}"
      }
    }
  ]
}
```

Remplace `/path/to/mon_premier_site_php` par le chemin réel (ex. : `C:/Users/VotreNom/mon_premier_site_php`).

**Pourquoi ?** : Simplifie le débogage pour les débutants, évitant les `var_dump()` ou `die()`. Parfait pour les projets en groupe.

### 3. PHP CS Fixer

**Description** : Formate automatiquement ton code PHP selon les standards **PSR-2** et **PSR-12**, garantissant un code lisible et professionnel.

**Fonctionnalités** :
- Formatage automatique à l’enregistrement.
- Respect des conventions de codage.

**Installation** :
- Recherche `PHP CS Fixer` (junstyle.php-cs-fixer).
- Installe `php-cs-fixer` globalement :

composer global require friendsofphp/php-cs-fixer

**Configuration** :
- Ajoute dans `settings.json` :
```json
"[php]": {
  "editor.defaultFormatter": "junstyle.php-cs-fixer",
  "editor.formatOnSave": true
},
"php-cs-fixer.executablePath": "/home/user/.composer/vendor/bin/php-cs-fixer"
```

**Pourquoi ?** : Assure un code propre pour les soumissions via GitHub, facilitant la collaboration.

### 4. PHP DocBlocker

**Description** : Génère des blocs de commentaires PHPDoc pour fonctions, classes et propriétés, améliorant la documentation.

**Fonctionnalités** :
- Auto-complétion des docblocks.
- Support des annotations (@param, @return).

**Installation** :
- Recherche `PHP DocBlocker` (neilbrayfield.php-docblocker).

**Pourquoi ?** : Simplifie la documentation, un atout pour les exercices et les projet.

### 5. Composer

**Description** : Intègre **Composer**, le gestionnaire de dépendances PHP, dans VS Code. Utile pour gérer les bibliothèques dans le projet en groupe.

**Fonctionnalités** :
- Exécution des commandes Composer (`install`, `update`).
- Autocomplétion pour `composer.json`.
- Recherche de packages Packagist.

**Installation** :
- Recherche `Composer` (ikvasnica.composer).
- Assure-toi que Composer est installé :
```bash
composer --version
```

**Pourquoi ?** : Facilite l’ajout de dépendances (ex. : pour un framework ou une librairie).

### 6. PHPUnit

**Description** : Intègre le framework de tests **PHPUnit** pour exécuter et visualiser les tests unitaires dans VS Code.

**Fonctionnalités** :
- Exécution des tests via l’interface.
- Affichage des résultats (pass/fail).

**Installation** :
- Recherche `PHPUnit` (emallin.phpunit).
- Installe PHPUnit via Composer :
```bash
composer require --dev phpunit/phpunit
```

**Pourquoi ?** : Utile pour tester les fonctionnalités PHP dans les exercices avancés ou les projet.

### 7. Twig Language Support

**Description** : Fournit la coloration syntaxique, l’autocomplétion et les snippets pour les templates Twig, utilisés dans certains projets PHP.

**Fonctionnalités** :
- Coloration des fichiers `.twig`.
- Snippets pour les directives (`{% for %}`, `{% if %}`).

**Installation** :
- Recherche `Twig Language` (mblode.twig-language).

**Pourquoi ?** : Pertinent si tes exercices ou projets utilisent Twig.

### 8. GitLens

**Description** : Améliore l’intégration de Git dans VS Code, facilitant le suivi des modifications et la collaboration via GitHub.

**Fonctionnalités** :
- Annotations de blame (auteur des lignes).
- Historique des commits.
- Visualisation des branches.

**Installation** :
- Recherche `GitLens` (eamodio.gitlens).

**Pourquoi ?** : Indispensable pour gérer tes dépôts `php-exercices-votre-nom` et projets sur GitHub.

## 📌 Instructions pour l’installation
**1. Ouvrir l’onglet Extensions** :
    - Appuie sur `Ctrl+Shift+X` ou clique sur l’icône Extensions dans la barre latérale.
**2. Rechercher et installer** :
    - Tape le nom de l’extension (ex. : `PHP Intelephense`).
    - Clique sur Install.
**3. Vérifier l’activation** :
    - Redémarre VS Code si nécessaire (Ctrl+Shift+P > `Developer: Reload Window`).
**4. Configurer les extensions** :
    - Suis les instructions ci-dessus pour `PHP Intelephense`, `PHP Debug`, et `PHP CS Fixer`.
**5. Tester** :
    - Ouvre `public/index.php` dans `mon_premier_site_php`.
    - Vérifie l’autocomplétion (Ctrl+Space), le formatage (enregistre), et le débogage (F5 avec Xdebug).

## 😊 Conseils pour les élèves
- **Priorise PHP Intelephense** : Installe-la en premier, comme dans Partie 1 : Préparer les outils. Elle t’aide pour tous les exercices.
- **Utilise GitLens avec GitHub** : Consulte Introduction à GitHub pour pousser sur `php-exercices-votre-nom`.
- **Débogue avec PHP Debug** : Trouve les erreurs dans index.php ou traitement.php etc...
- **Formate avec PHP CS Fixer** : Garde ton code propre avant de soumettre via GitHub Issues.
- **Évite les conflits** : Désactive les extensions inutiles (ex. : `PHP IntelliSense` si tu utilises `Intelephense`).

## 🔧 Dépannage
- **PHP Intelephense ne fonctionne pas** :
    - Vérifie que `"php.suggest.basic": false` est dans `settings.json`.
    - Confirme que PHP est dans le PATH :
```bash
php -v
```

- **PHP Debug ne se connecte pas** :
    - Vérifie que Xdebug est activé :
```bash
php -i | grep xdebug
```

    - Contrôle `launch.json` et le port (9003).

- **PHP CS Fixer ne formate pas** :
    - Vérifie l’installation globale : 
```bash 
~/.composer/vendor/bin/php-cs-fixer --version
```

    - Corrige le chemin dans `settings.json`.

- **Problèmes GitLens** :
    - Assure-toi que Git est configuré :
```bash
git --version
```

## 📚 Ressources
- [Guide VS Code](https://code.visualstudio.com/) pour PHP (officiel).
- [Dev.to](https://dev.to/) : Top extensions PHP 2024.
- [Codevoweb](http://codevoweb.com/) : Extensions PHP 2025.
- [Laravel News](https://laravel-news.com/) : Extensions PHP/Laravel.
- [DigitalOcean](https://www.digitalocean.com/) : Configuration PHP dans VS Code.
- [TheDropTimes](https://www.thedroptimes.com/) : Extensions PHP 2025.
- **X Posts** :
    - @baka_engineer (2021) : PHP Intelephense pour PHP.
    - @mjcoder (2025) : Extensions Laravel/PHP.

**Félicitations !** 🎉 Avec ces extensions, tu es prêt à coder, déboguer et partager tes projets PHP. Pose tes questions via GitHub Issues ! 🚀