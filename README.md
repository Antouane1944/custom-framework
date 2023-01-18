# custom-framework
## Documentation

### base de donnée

#### Query builder

Pour utiliser le queryBuilder, un exemple :
```bash
  $qb = (new QueryBuilder())
        ->select('*')
        ->from('users');
  $users = $db->query($qb);
```
