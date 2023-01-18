# custom-framework
## Documentation

### Structure du projet

#### App
- Controllers
- Models

#### Ressources
- CSS
- JS
- Views
  - components

#### index
là où se situe les routes et l'intialisation des variables globales.

### base de donnée

#### Query builder

Pour utiliser le queryBuilder, un exemple :
```bash
  $qb = (new QueryBuilder())
        ->select('*')
        ->from('users');
  $users = $db->query($qb);
```
