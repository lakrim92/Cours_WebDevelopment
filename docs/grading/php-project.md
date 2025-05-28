---
layout: default
title: Extensions PHP pour VS Code
---
# Barème de notation pour le projet en groupe

**Total** : 100 points, répartis entre les composantes du projet, la collaboration, la présentation, et les bonus.

### Critères d’évaluation :

**1. Maquette (15 points)** :

- **Description** : Une maquette claire (papier ou numérique via Figma/Canva) est créée et suivie, définissant la disposition, les couleurs, et les éléments dynamiques.
- **Critères** :
    - 10 points : Maquette complète, claire, validée par le groupe, et respectée dans le résultat final.
    - 5 points : Maquette partielle ou peu détaillée, mais utilisée.
    - 0 points : Aucune maquette ou non suivie.
- **Preuve** : Soumettre une photo de la maquette papier ou un lien Figma/Canva via GitHub Issues.

**2. Structure HTML (20 points)** :

- **Description** : La page `index.php` contient une structure HTML valide avec un formulaire fonctionnel, un titre, une description, une image, et une section pour les données dynamiques.
- **Critères** :
    - 15 points : Structure HTML complète, valide (DOCTYPE, balises sémantiques), formulaire POST vers `traitement.php`.
    - 10 points : Structure correcte mais avec des erreurs mineures (ex. : balises mal fermées).
    - 5 points : Structure incomplète ou formulaire non fonctionnel.
    - 0 points : Aucune structure HTML ou non fonctionnelle.
- **Preuve** : Code dans `index.php` poussé sur le dépôt GitHub.

**3 Design CSS (20 points)** :

- **Description **: Le fichier `style.css` stylise la page pour un rendu attrayant (polices, couleurs, marges, ombres, bordures arrondies).
- **Critères** :
    - 15 points : Design professionnel, cohérent avec la maquette, palette de couleurs harmonieuse.
    - 10 points : Design fonctionnel mais basique ou avec incohérences.
    - 5 points : Design minimal ou avec erreurs (ex. : éléments mal alignés).
    - 0 points : Aucun style ou CSS non lié.
- **Preuve** : Code dans `style.css` poussé sur le dépôt GitHub.

**4. Fonctionnalité PHP (25 points)** :

- **Description** : Le fichier `traitement.php` traite le formulaire (ex. : récupère `$_POST["nom"]`, sécurise avec `htmlspecialchars()`) et affiche des données dynamiques (ex. : liste des membres avec `foreach`).
- **Critères** :
    - 20 points : Fonctionnalité PHP complète, formulaire traité, données dynamiques affichées, sécurisé.
    - 15 points : Fonctionnalité partielle (ex. : formulaire traité mais sans affichage dynamique).
    - 10 points : PHP basique avec erreurs (ex. : formulaire non sécurisé).
    - 0 points : Aucune fonctionnalité PHP ou non fonctionnelle.
- **Preuve** : Code dans traitement.php poussé sur le dépôt GitHub.

**5. Collaboration et contribution (10 points)** :

- **Description** : Tous les membres du groupe contribuent activement, avec des rôles clairs (Designer HTML, Artiste CSS, Magicien PHP, Coordinateur).
- **Critères** :
    - 10 points : Contributions équilibrées, rôles bien définis, collaboration évidente (ex. : commits GitHub variés).
    - 5 points : Contributions inégales ou rôles flous.
    - 0 points : Contribution d’un seul membre ou absence de collaboration.
- **Preuve** : Historique des commits sur le dépôt GitHub, description des rôles dans la présentation.

**6. Présentation orale (10 points)** :

- **Description** : Le groupe présente le projet à la classe (2-3 min), expliquant le thème, les rôles, la maquette, et les apprentissages.
- **Critères** :
    - 10 points : Présentation claire, complète, tous les membres participent.
    - 5 points : Présentation partielle ou peu structurée.
    - 0 points : Aucune présentation ou non réalisée.
- **Preuve** : Observation en classe, notes du professeur.

**7. Bonus (jusqu’à 10 points)** :

- **Description** : Points supplémentaires pour des fonctionnalités avancées.
- **Critères** :
    - +5 points : Validation PHP (ex. : vérification des champs vides dans `traitement.php`).
    - +5 points : Animation CSS (ex. : transition sur le bouton de soumission dans `style.css`).
- **Preuve** : Code dans traitement.php ou style.css, démontré lors de la présentation.

### Modalités :

- **Soumission** : Le groupe crée un dépôt GitHub (ex. : `ToDoList-Equipe1`) et pousse le code (`index.php`, `style.css`, `traitement.php,` maquette). 
- Partagez l’URL du dépôt via [GitHub Issues](https://github.com/lakrim92/Cours_WebDevelopment/issues/1). Chaque membre soumet une Issue individuelle décrivant sa contribution (ex. : "J’ai créé le formulaire dans `index.php`").
- **Délais** : Délais fixés en fonction des projets.
- **Feedback** : Fournissez une note globale pour le groupe et des commentaires individuels dans les Issues.

### Total des points :

- Maquette : 15 points.
- Structure HTML : 20 points.
- Design CSS : 20 points.
- Fonctionnalité PHP : 25 points.
- Collaboration : 10 points.
- Présentation : 10 points.
- Bonus : jusqu’à 10 points.
- **Total** : 100 points (bonus inclus dans le maximum).

[Retour à l'accueil](../index.md)
