<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        Category::truncate();
        User::truncate();
        Post::truncate();
        */
        
        //Category::factory(3)->create();
        $user = User::factory()->create([
            'name' => 'Diego Zamora'
        ]);
        Post::factory(8)->create([
            'user_id' => $user->id
        ]);

        /*
        $user = User::factory()->create();
        
        $xbox = Category::create([
            'name' => 'Xbox',
            'slug' => 'xbox'
        ]);

        $play_station = Category::create([
            'name' => 'PlayStation',
            'slug' => 'play_station'
        ]);

        $nintendo = Category::create([
            'name' => 'Nintendo',
            'slug' => 'nintendo'
        ]);

        Post::create([
            'title' => 'Explorando las Novedades de Xbox en el Mundo de los Videojuegos',
            'excerpt' => 'Bienvenidos a una nueva entrega de nuestro blog de videojuegos, donde hoy nos sumergiremos en el emocionante universo de Xbox. Microsoft ha estado revolucionando la forma en que experimentamos los videojuegos, y en este artículo, exploraremos las últimas novedades que Xbox tiene para ofrecer.',
            'body' => 'Bienvenidos a una nueva entrega de nuestro blog de videojuegos, donde hoy nos sumergiremos en el emocionante universo de Xbox. Microsoft ha estado revolucionando la forma en que experimentamos los videojuegos, y en este artículo, exploraremos las últimas novedades que Xbox tiene para ofrecer. <br> Desde la potencia de la Xbox Series X hasta la accesibilidad y la integración del servicio Xbox Game Pass, descubriremos cómo la marca sigue siendo un referente en la industria. También discutiremos los títulos exclusivos que están causando sensación y cómo Xbox está ampliando sus horizontes con iniciativas como Xbox Cloud Gaming. <br> ¡Prepárense para un viaje lleno de acción, aventuras y tecnología de vanguardia con nuestro análisis detallado del emocionante mundo de Xbox!',
            'slug' => 'primer_post',
            'category_id' => $xbox->id,
            'user_id' => $user->id
        ]);

        Post::create([
            'title' => 'Sumérgete en el Universo de PlayStation - Exclusivos, Tecnología y Más',
            'excerpt' => 'En el segundo episodio de nuestro blog de videojuegos, nos adentraremos en el apasionante universo de PlayStation. Sony ha cautivado a millones de jugadores en todo el mundo con su impresionante catálogo de juegos exclusivos y tecnología innovadora.',
            'body' => 'En el segundo episodio de nuestro blog de videojuegos, nos adentraremos en el apasionante universo de PlayStation. Sony ha cautivado a millones de jugadores en todo el mundo con su impresionante catálogo de juegos exclusivos y tecnología innovadora. <br> Desde la inmersión en mundos increíbles con la PlayStation 5 hasta la increíble calidad gráfica del ray tracing, exploraremos cómo la marca ha elevado continuamente la experiencia de juego. También analizaremos los títulos exclusivos que han definido la plataforma y cómo PlayStation Plus ha redefinido el juego en línea. <br> No te pierdas este recorrido completo por la magia de PlayStation, donde descubrirás por qué sigue siendo una fuerza dominante en la industria de los videojuegos.',
            'slug' => 'segundo_post',
            'category_id' => $play_station->id,
            'user_id' => $user->id
        ]);

        Post::create([
            'title' => 'Nintendo - Más Allá de los Juegos, una Experiencia Única',
            'excerpt' => 'En el tercer capítulo de nuestro blog, nos sumergiremos en el colorido y único mundo de Nintendo. La compañía japonesa ha llevado la innovación a nuevos niveles con consolas como la Nintendo Switch, ofreciendo experiencias de juego únicas que van más allá de la pantalla.',
            'body' => 'En el tercer capítulo de nuestro blog, nos sumergiremos en el colorido y único mundo de Nintendo. La compañía japonesa ha llevado la innovación a nuevos niveles con consolas como la Nintendo Switch, ofreciendo experiencias de juego únicas que van más allá de la pantalla. <br> Exploraremos la magia de los títulos icónicos como Mario, Zelda y Pokémon, así como la versatilidad de la Nintendo Switch, que combina la experiencia de consola de sobremesa con la portabilidad de una consola portátil. También discutiremos cómo Nintendo ha seguido capturando la imaginación de jugadores de todas las edades con sus innovadoras ideas, desde el Labo hasta el Ring Fit Adventure. <br> Acompáñanos en este viaje por el mundo encantador de Nintendo, donde la diversión y la creatividad se entrelazan en cada rincón del universo de los videojuegos.',
            'slug' => 'tercer_post',
            'category_id' => $nintendo->id,
            'user_id' => $user->id
        ]);

        Post::create([
            'title' => 'Celebrando el Legado: Super Mario Bros. (1985)',
            'excerpt' => 'En este emocionante episodio retro, nos sumergiremos en el mundo que marcó el inicio de una era dorada para los videojuegos: Super Mario Bros. de 1985. Hace más de tres décadas, Nintendo lanzó un título que no solo revolucionó la industria, sino que también se convirtió en un ícono cultural.',
            'body' => 'En este emocionante episodio retro, nos sumergiremos en el mundo que marcó el inicio de una era dorada para los videojuegos: Super Mario Bros. de 1985. Hace más de tres décadas, Nintendo lanzó un título que no solo revolucionó la industria, sino que también se convirtió en un ícono cultural. <br> Super Mario Bros. presentó al mundo a dos personajes entrañables, Mario y Luigi, en una búsqueda épica para rescatar a la princesa Peach del malvado Bowser. Su jugabilidad innovadora, diseño de niveles ingenioso y música pegajosa de Koji Kondo crearon una experiencia que perdura en la memoria de jugadores de todas las edades. <br> Exploraremos cómo este juego clásico sentó las bases para los juegos de plataformas modernos y estableció a Mario como el fontanero más querido del mundo de los videojuegos. Acompáñanos en un nostálgico viaje de vuelta a 1985, donde cada salto, moneda recolectada y hongo obtenido se convirtió en una parte inolvidable de la historia de los videojuegos. ¡Es hora de celebrar el legado perdurable de Super Mario Bros!',
            'slug' => 'cuarto_post',
            'category_id' => $nintendo->id,
            'user_id' => $user->id
        ]);
        */ 
    }
}
