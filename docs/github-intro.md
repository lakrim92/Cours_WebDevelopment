# Introduction à GitHub 🐙

Bienvenue dans ce cours d’introduction à **GitHub**.  
Si tu n’as **jamais utilisé Git ni GitHub**, tu es au bon endroit ! 👨‍💻👩‍💻 Ce guide t’accompagne pour configurer GitHub, pousser tes exercices PHP et tes projets en groupe , et collaborer comme un pro. Allons-y ! 🚀

---

## 🌐 Qu'est-ce que Git et GitHub ?

- **Git** est un outil gratuit pour gérer les versions de ton code. Il suit tes modifications, te permet de revenir en arrière, et facilite le travail en équipe.
- **GitHub** est une **plateforme en ligne** qui héberge tes projets Git. Tu peux y sauvegarder ton code, collaborer avec ton groupe, et partager ton travail avec ton professeur via une URL

---

## 🧠 Pourquoi apprendre GitHub ?

- ✅ **Collaboration :** Travailler à plusieurs sur un projet  
- ✅ **Sauvegarde :** Ton code est stocké dans le cloud, accessible partout.  
- ✅ **Professionnalisme :** Les développeurs utilisent GitHub tous les jours !
- ✅ **Soumission facile :** Partage tes exercices et projets via GitHub Issues.

---

## 🔧 Prérequis

Avant de commencer, assure-toi d’avoir :

- Un compte GitHub ➜ [https://github.com/join](https://github.com/join)
- Git installé ➜ Télécharge sur ton ordinateur ➜ [git-scm.com](https://git-scm.com/downloads)
- Un terminal ➜ Utilise celui de VS Code (Terminal > Nouveau terminal), PowerShell (Windows), ou Terminal (Mac/Linux).
- Le dossier exemple (mon_premier_site_php) créé.

---

## 📚 Concepts clés

- **Dépôt (repository)** : Un dossier contenant ton projet et son historique (ex. : `php-exercices-votre-nom`).
- **Commit** : Une sauvegarde de tes modifications avec un message (ex. : “Ajout de bonjour.php”).
- **Push** : Envoie tes commits locaux vers GitHub.
- **Clone** : Télécharge un dépôt GitHub sur ton ordinateur.
- **Branche** : Une version parallèle de ton projet pour travailler sans affecter le code principal.
- **Pull Request (PR)** : Une proposition pour fusionner tes modifications dans le dépôt principal.

___

## 📁 Pousser tes exercices 

Chaque élève doit créer un **dépôt individuel** pour les exercices (ex. : `php-exercices-votre-nom`). 
Voici comment faire.

**1. Créer un dépôt GitHub**
- Connecte-toi à [github.com](https://github.com/).
- Clique sur **+ > New repository**.
- Remplis :
   - Nom : `php-exercices-votre-nom` (ex. : `php-exercices-jean`).
   - Description (optionnelle) : “Exercices PHP pour le cours”.
   - Visibilité : **Public** (ou **Private** si préféré).
   - Coche **Add a README file**.
- Clique sur **Create repository**.
**2. Initialiser ton dépôt local**
- Ouvre un terminal dans `mon_premier_site_php` :

```bash
cd ~/mon_premier_site_php
```

- Si ce n’est pas déjà un dépôt Git, initialise-le :

```bash
git init
```

- Ajoute tes fichiers (ex. : `public/bonjour.php`) :

```bash
git add .
```

- Crée un commit :

```bash
git commit -m "Ajout des exercices de la Partie 2"
```

**3. Lier à GitHub**
- Copie l’URL de ton dépôt (ex. : `https://github.com/votre-nom/php-exercices-votre-nom.git`).
- Lie ton dépôt local :

```bash
git remote add origin https://github.com/votre-nom/php-exercices-votre-nom.git
```

**4. Pousser sur GitHub**
- Envoie tes fichiers :

```bash
git push -u origin main
```

- Si demandé, entre ton nom d’utilisateur GitHub et ton PAT.
- Vérifie sur GitHub que tes fichiers (ex. : `public/bonjour.php`) sont visibles.

**5. Soumettre via GitHub Issues**
- Va sur [**GitHub Issues**](https://github.com/lakrim92/Cours_WebDevelopment/issues/1).
- Remplis le modèle :
   - **Titre** : “Soumission exercices Partie X - Votre Nom”.
   - **Description** : Indique la partie (ex. : Partie 2) et l’URL du dépôt (ex. : `https://github.com/votre-nom/php-exercices-votre-nom`).
   - **Code** : Copie un extrait clé (ex. : contenu de `bonjour.php`).
   - **Labels** : Ajoute `question` et l'exercice concérné.
- Soumets l’Issue.

✨ Bravo, ton dépôt est créé !

---

## 🤝 Pousser le projet en groupe 
Pour le projet en groupe (vitrine web), créez un **dépôt de groupe** (ex. : `Club-Equipe1`). Voici les étapes.

**1. Créer un dépôt de groupe**
- Un membre du groupe (le “propriétaire”) crée le dépôt :
   - Nom : `Club-Equipe1` (ou selon votre thème).
   - Coche **Add a README file**.
   - Visibilité : **Public**.
- Ajoute les coéquipiers comme collaborateurs :
   - Sur GitHub, va dans **Settings > Collaborators > Add people**.
   - Invite tes coéquipiers par leur nom d’utilisateur GitHub.

**2. Cloner le dépôt
- Chaque membre clone le dépôt :

```bash
git clone https://github.com/proprietaire/Club-Equipe1.git
cd Club-Equipe1
```

- Copie le dossier projet_groupe/public/ (avec index.php, style.css, traitement.php) dans Club-Equipe1.

**3. Travailler sur une branche**
- Crée une branche pour tes modifications :

```bash
git checkout -b ma-branche
```

- Modifie les fichiers (ex. : ajoute le formulaire dans `index.php`).
- Ajoute et commite :

```bash
git add .
git commit -m "Ajout du formulaire HTML"
```

**4. Pousser la branche**
- Pousse ta branche :

```bash
git push origin ma-branche
```

**5. Créer une Pull Request**
- Sur GitHub, va dans l’onglet **Pull requests > New pull request**.
- Sélectionne ta branche (`ma-branche`) et compare avec `main`.
- Ajoute un titre (ex. : “Ajout du formulaire”) et une description.
- Clique sur **Create pull request**.
- Un coéquipier ou le coordinateur valide et fusionne la PR.

**6. Soumettre le projet**
- Le groupe soumet l’URL du dépôt (ex. : `https://github.com/proprietaire/Club-Equipe1`) via GitHub Issues.
- Chaque membre soumet une Issue individuelle :
   - **Titre** : “Soumission projet groupe - Votre Nom”.
   - **Description** : URL du dépôt et ta contribution (ex. : “J’ai créé style.css”).
   - **Labels** : question.

___

## 💡 Conseils pour débutants
- **Vérifie souvent** : Utilise `git status` pour voir l’état de ton dépôt.
- **Commits fréquents** : Sauvegarde à chaque étape avec `git commit`.
- **Messages clairs** : Écris des messages de commit descriptifs (ex. : “Correction bug formulaire”).
- **Évite les conflits** : Travaille sur des branches séparées en groupe.
- **Demande de l’aide** : Pose tes questions via GitHub Issues.

___

## ⚠️ Dépannage
- **Erreur** `git push` **(authentification)** :
   - Vérifie ton PAT.
   - Réinitialise le remote :

```bash
git remote set-url origin https://github.com/votre-nom/votre-depot.git
```

- **Commande** `git` **non reconnue** :
   - Réinstalle Git .
   - Vérifie le PATH :

```bash
git --version
```

- **Conflits Git** :
   - Tire les dernières modifications :

```bash
git pull origin main
```

   - Résous les conflits dans VS Code et recommite.
- **Issue non visible** :
   - Vérifie les labels `question` etc... sur GitHub Issues.

___

## 🎯 Activité : Ton premier push
Teste tes compétences avec cette activité simple !

1. Dans `mon_premier_site_php`, crée un fichier `README.md` :

```markdown
# Mes Exercices PHP
Exercices et projet pour le cours Introduction à PHP.
```

2. Ajoute, commite, et pousse :

```bash
git add README.md
git commit -m "Ajout du README"
git push origin main
```

3. Vérifie sur GitHub que `README.md` apparaît.
4. Soumets l’URL de ton dépôt via GitHub Issues (titre : “Test premier push - Votre Nom”).

___

## 📚 Ressources supplémentaires
- **GitHub Docs** : [docs.github.com](https://docs.github.com/en/get-started) (guide officiel).
- **W3Schools Git** : [w3schools.com/git](https://www.w3schools.com/git/) (tutoriel simple).
- **Learn Git Branching** : [learngitbranching.js.org](https://learngitbranching.js.org/) (jeu interactif).
- **Git Cheat Sheet** : [training.github.com](https://training.github.com/downloads/github-git-cheat-sheet.pdf) (résumé des commandes).
- **Introduction à PHP** : Retour au cours principal.

**Félicitations !** 🎉 Tu es prêt à utiliser GitHub pour tes exercices et projets. Continue à coder et à partager tes créations ! 💻

---

[retour](./index.md)
