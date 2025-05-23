## Partie 4 : Projet en groupe – ToDoList

### Objectif

Développez une application **ToDoList** en groupe (2-4 élèves) qui permet de :
- Ajouter une tâche avec un titre et une description. 
- Marquer une tâche comme terminée. 
- Supprimer une tâche. 
- Sauvegarder les tâches localement (avec shared_preferences). 

### Instructions

1. **Structure** : 
- Créez un nouveau projet Flutter : flutter create todolist. 
- Organisez le code avec des widgets séparés (ex. : TaskList, TaskItem). 
2. **Fonctionnalités** : 
- Utilisez une ListView pour afficher les tâches. 
- Implémentez un formulaire avec TextField pour ajouter des tâches. 
- Ajoutez des cases à cocher (Checkbox) pour marquer les tâches comme terminées. 
- Utilisez le package shared_preferences pour sauvegarder les tâches : 

```yaml
dependencies: shared_preferences: ^2.0.15
```

2. **Dépôt GitHub** : 
- Créez un dépôt GitHub pour votre groupe (ex. : ToDoList-Equipe1). 
- Poussez votre code : 

```bash
git add . git commit -m "Projet ToDoList" git push origin main
```

- Partagez l’URL du dépôt avec votre professeur (ex. : https://github.com/votre-nom/ToDoList-Equipe1). 
3. Test : 
- Testez sur un émulateur Android ou iOS. 
- Vérifiez que les tâches sont sauvegardées après avoir fermé/rouvert l’application. 


