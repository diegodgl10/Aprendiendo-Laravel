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

Reiniciar DB `$ php artisan migrate:fresh`
Poblar con usuarios `$ php artisan db:seed`

`$ php artisan migrate:fresh --seed`

Crear 10 post de la categoria 1
`>>> App\Models\Post::factory(10)->create(['category_id' => 1])`
`>>> App\Models\Post::factory(10)->create(['user_id' => 2])`



INSERT INTO `blog`.`users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES 
(1, 'Diego Zamora', 'bahringer.marcel', 'schneider.theresia@example.org', '2024-03-08 06:29:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5SbVTvluWg', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(2, 'Arturo Cruz', 'arturo.cruz', 'arturo.cruz@example.org', '2024-03-08 06:29:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5SbVTvluWg', '2024-03-08 06:29:58', '2024-03-08 06:29:58');

INSERT INTO `blog`.`categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES 
(1, 'omnis', 'et-atque-non-aliquid', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(2, 'nobis', 'quia-quia-quidem-quia-rerum', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(3, 'enim', 'voluptatem-et-maxime-eos-eos-reprehenderit-saepe', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(4, 'perferendis', 'non-accusamus-dignissimos-amet', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(5, 'ipsa', 'quibusdam-necessitatibus-consequatur-aperiam-sapiente-vel-ratione', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(6, 'ab', 'officia-aut-reiciendis-amet-non', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(7, 'rerum', 'ullam-cupiditate-modi-qui-repudiandae-aliquid', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(8, 'odio', 'a-eaque-aut-quisquam-sit-deserunt', '2024-03-08 06:29:58', '2024-03-08 06:29:58'),
(9, 'quidem', 'aut-blanditiis-blanditiis-qui-delectus-quia-exercitationem', '2024-03-08 06:33:10', '2024-03-08 06:33:10'),
(10, 'aut', 'eum-voluptatem-ipsum-incidunt', '2024-03-08 06:33:10', '2024-03-08 06:33:10'),
(11, 'recusandae', 'ab-tenetur-est-laborum-aperiam-nisi-ex', '2024-03-08 06:33:10', '2024-03-08 06:33:10'),
(12, 'quo', 'aut-perspiciatis-aliquam-suscipit-quos-ea', '2024-03-08 06:33:11', '2024-03-08 06:33:11'),
(14, 'porro', 'provident-voluptatem-et-praesentium-quidem', '2024-03-08 06:33:27', '2024-03-08 06:33:27'),
(15, 'unde', 'et-atque-qui-et-qui', '2024-03-08 06:33:27', '2024-03-08 06:33:27'),
(16, 'voluptas', 'repudiandae-recusandae-cum-nam-rem-non-maxime-numquam-repudiandae', '2024-03-08 06:33:27', '2024-03-08 06:33:27'),
(17, 'minus', 'dolor-officiis-et-veritatis', '2024-03-08 06:33:27', '2024-03-08 06:33:27'),
(18, 'consequatur', 'eaque-omnis-quia-quisquam-quae-reprehenderit-hic', '2024-03-08 06:33:27', '2024-03-08 06:33:27'),
(19, 'autem', 'adipisci-dolore-voluptates-nisi-aperiam-et-eius-unde', '2024-03-08 06:33:27', '2024-03-08 06:33:27'),
(20, 'commodi', 'et-totam-assumenda-voluptatem-mollitia-sapiente-sit-et-nisi', '2024-03-08 06:33:28', '2024-03-08 06:33:28'),
(21, 'excepturi', 'a-voluptates-sit-ullam', '2024-03-08 06:33:28', '2024-03-08 06:33:28'),
(22, 'hic', 'laudantium-aliquam-mollitia-nisi-voluptas', '2024-03-08 06:33:28', '2024-03-08 06:33:28'),
(23, 'ut', 'numquam-ut-rerum-non-autem-sed-voluptas-dolorum', '2024-03-08 06:33:28', '2024-03-08 06:33:28');


INSERT INTO `blog`.`posts` (`id`, `user_id`, `category_id`, `slug`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES 
(1, 1, 1, 'quod-porro-accusamus-deserunt-eius-doloribus-vel-eos-nisi', 'Quia hic repellat ut ad sunt vero dolorum dignissimos.', 'Minima deleniti dolor illum cupiditate consequatur.', 'At tempora explicabo voluptas sequi ad voluptatem. Deleniti omnis quia praesentium fuga repudiandae voluptatem. Qui porro autem eligendi consequatur quis necessitatibus architecto.', '2024-03-08 06:29:58', '2024-03-08 06:29:58', NULL),
(2, 1, 2, 'quibusdam-officia-est-quos-voluptatibus-tempora', 'Voluptatum pariatur officiis quam.', 'Amet voluptatem fugit et architecto aspernatur consequatur.', 'Voluptatum ut tenetur voluptas tenetur ullam sit provident. Dolores molestiae atque minima nihil ut. Quisquam quis nemo incidunt.', '2024-03-08 06:29:59', '2024-03-08 06:29:59', NULL),
(3, 1, 3, 'sed-eos-corrupti-est-et-deserunt-consequatur', 'Consectetur quia reprehenderit itaque est.', 'Ut tenetur modi repellendus quia cupiditate occaecati sunt.', 'Eveniet sequi rerum delectus illo amet modi. Illo impedit rerum modi iste fugit. Et non velit qui. Est ut perferendis dolores neque exercitationem.', '2024-03-08 06:29:59', '2024-03-08 06:29:59', NULL),
(4, 1, 4, 'voluptatem-provident-sequi-delectus-aut-et-repellat-et', 'Omnis voluptatibus eligendi id officiis molestiae sit.', 'Omnis accusamus voluptas corrupti deserunt.', 'Quisquam et enim est consequuntur totam. Molestiae ratione exercitationem unde perferendis repudiandae qui consequatur officiis.', '2024-03-08 06:29:59', '2024-03-08 06:29:59', NULL),
(5, 1, 5, 'praesentium-sed-occaecati-enim-debitis', 'Et nemo sed illo est.', 'Qui repellat aut incidunt voluptate aut.', 'Aut dolores asperiores omnis qui ut repellendus. Cupiditate iste qui laudantium voluptate porro. Dolor facilis rerum aut. Dolor accusamus nemo totam sit ratione nihil. Voluptas esse consequuntur et dolore et nisi quos.', '2024-03-08 06:29:59', '2024-03-08 06:29:59', NULL),
(6, 1, 6, 'quis-aut-quis-dolor-doloribus-quia-animi-fugiat', 'Aut perferendis error possimus magnam beatae saepe.', 'Maxime quaerat dolor et ex perspiciatis hic.', 'Id quas et est dolores. Occaecati aliquam qui et. Libero voluptas accusantium est delectus aliquid. Repellat qui veritatis corrupti esse.', '2024-03-08 06:29:59', '2024-03-08 06:29:59', NULL),
(7, 1, 7, 'amet-ea-consectetur-temporibus', 'Ea animi quia molestiae quis eos quis.', 'Consequatur quos dignissimos est rerum iste ex.', 'Ab natus eum fugiat aut et. Repudiandae ut asperiores unde odit dolorum sapiente. Tempora eaque dolorum dicta dicta distinctio.', '2024-03-08 06:29:59', '2024-03-08 06:29:59', NULL),
(8, 1, 8, 'debitis-id-tenetur-iure', 'Qui cum harum aspernatur.', 'Ut eligendi voluptas quia ab.', 'Et cupiditate soluta amet eos non asperiores. Laborum impedit numquam sint cupiditate et. Quibusdam labore voluptas aut.', '2024-03-08 06:29:59', '2024-03-08 06:29:59', NULL),
(9, 2, 14, 'consectetur-est-modi-porro-nesciunt-dolor-nihil', 'Odit omnis eaque quo ex omnis at repellat.', 'Consequuntur reprehenderit qui ut.', 'Amet deleniti quisquam quia occaecati aut sunt. Exercitationem expedita est sed natus quia omnis. Quo nobis sit quo labore.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(10, 2, 15, 'labore-reiciendis-facere-reprehenderit-ipsam-repellat', 'A et neque veritatis.', 'Accusamus cum aperiam et rerum rerum quis.', 'Placeat explicabo consequatur dolores provident rerum. Ipsum qui atque ullam qui. Consequatur officia voluptatibus odio molestias minus placeat vitae.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(11, 2, 16, 'praesentium-alias-et-et-necessitatibus-ex', 'Fugit ea excepturi commodi numquam neque velit voluptatibus aut.', 'Sunt nesciunt veniam veniam facere rerum delectus.', 'Perferendis consequatur cum ex at quis quo. Blanditiis iste voluptate velit unde. Doloremque sed cumque omnis eligendi incidunt.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(12, 2, 17, 'vitae-magni-provident-quia-cupiditate-temporibus-rerum', 'Autem sapiente eveniet nam saepe.', 'Natus blanditiis adipisci quasi ut quod ipsa corrupti non.', 'Nihil molestiae non suscipit eos ut. Aspernatur autem eius aut similique voluptas adipisci non. Adipisci tempora aliquam laborum consequatur eveniet. Rerum dignissimos facilis omnis sint quaerat.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(13, 2, 18, 'nulla-ea-nam-quisquam', 'Odio debitis cum rerum animi.', 'Accusamus doloribus non aut tenetur ut.', 'Dolorum rerum repellat harum corporis. Qui et incidunt totam velit rerum veniam animi.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(14, 2, 19, 'cum-non-velit-officiis', 'Tempora consequatur suscipit dolorum dolor aut perferendis.', 'Voluptatem eos impedit illum id.', 'Aut voluptatem voluptatem et ullam ratione ullam. Dolor consequuntur maiores porro autem maxime occaecati culpa similique. Neque reiciendis qui iusto quis. Sed recusandae fugit asperiores non impedit consequuntur dolorum.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(15, 2, 20, 'possimus-explicabo-iste-nihil-odit', 'Consectetur quisquam reiciendis dolores quod id.', 'Natus vitae sint sunt perferendis.', 'Sed placeat nesciunt quae aut itaque modi. Voluptatem nisi corrupti iste temporibus. Non quidem vero a in eum voluptatem. Nostrum eligendi dolores enim. Non aut ea dicta.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(16, 2, 21, 'animi-nemo-possimus-voluptate-dolorem-architecto-et-aliquid-sed', 'Blanditiis voluptas voluptates amet odit dignissimos ut temporibus.', 'Doloremque qui aut blanditiis corrupti tenetur praesentium rerum rem.', 'Perspiciatis sit enim inventore quo. Amet eligendi nesciunt repellat ratione est at ducimus. Assumenda veniam tempora natus adipisci neque accusantium tempore perferendis. Dolorem consequatur repellendus sint.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(17, 2, 22, 'tempore-rerum-voluptatem-ipsum-sed', 'Provident accusamus iure sapiente et est repellendus necessitatibus et.', 'Asperiores totam corporis quibusdam id.', 'Aut dicta soluta laboriosam tempora suscipit ratione alias. Esse voluptas excepturi aspernatur saepe est et. Autem nostrum aut veritatis enim dolorem. Ipsa pariatur quae labore ut tenetur qui at.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL),
(18, 2, 23, 'earum-excepturi-quisquam-reprehenderit-sint-assumenda-optio-voluptatem-optio', 'Ut laborum atque at odit voluptas cum.', 'Ipsum non corporis velit at reprehenderit quis non.', 'Sed molestiae similique qui sed velit enim. Quas et et numquam omnis possimus soluta provident autem.', '2024-03-08 06:33:28', '2024-03-08 06:33:28', NULL);