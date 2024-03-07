## Agregar a la DB

```
INSERT INTO `blog`.`posts` (`id`, `slug`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES 
(1, 'mi_primer_post', 'Mi primer post', 'Adelanto de primer post', 'Cuerpo de primer post', '2024-03-07 04:30:58', '2024-03-07 04:30:58', NULL),
(2, 'mi_segundo_post', 'Mi segundo post', 'Adelanto de segundo post', 'Cuerpo de segundo post', '2024-03-07 04:38:27', '2024-03-07 04:38:27', NULL),
(3, 'mi_tercer_post', 'Mi tercer post', 'Avance de tercer post', 'Cuerpo de tercer post', '2024-03-07 05:00:10', '2024-03-07 05:00:10', NULL),
(4, 'mi_cuarto_post', 'Mi cuarto post', 'Avance de cuarto post', 'Cuerpo de cuarto post', '2024-03-07 05:08:41', '2024-03-07 05:08:41', NULL);
```

```
Post::create([
    'title' => 'Mi primer post',
    'excerpt' => 'Adelanto de primer post',
    'body' => 'Cuerpo de primer post',
    'slug' => 'mi_primer_post',
    'category_id' => 1
]);

Post::create([
    'title' => 'Mi segundo post',
    'excerpt' => 'Adelanto de segundo post',
    'body' => 'Cuerpo de segundo post',
    'slug' => 'mi_segundo_post',
    'category_id' => 2
]);

Post::create([
    'title' => 'Mi tercer post',
    'excerpt' => 'Adelanto de tercer post',
    'body' => 'Cuerpo de tercer post',
    'slug' => 'mi_tercer_post',
    'category_id' => 3
]);

Post::create([
    'title' => 'Mi cuarto post',
    'excerpt' => 'Adelanto de cuarto post',
    'body' => 'Cuerpo de cuarto post',
    'slug' => 'mi_cuarto_post',
    'category_id' => 2
]);
```