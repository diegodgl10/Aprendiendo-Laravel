<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Yaml\Yaml;

/**
 * Clase Post que representa un post del blog.
 */
class Post
{
    /**
     * @var string $title Titulo del post.
     */
    public $title;
    /**
     * @var string $excerpt Fragmento del post.
     */
    public $excerpt;
    /**
     * @var int $date Fecha del post.
     */
    public $date;
    /**
     * @var string $body Cuerpo del post.
     */
    public $body;
    /**
     * @var string $slug Referencia del URL.
     */
    public $slug;

    /**
     * Constructor que recibe el titulo, fragmento, fecha, cuerpo
     * y referencia URL del Post.
     * @param string $title Titulo del post.
     * @param string $excerpt Fragmento del post.
     * @param string $date Fecha del post.
     * @param string $body Cuerpo del post.
     * @param string $slug Referencua URL del post.
     */
    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    /**
     * Regresa el archivo del post indicado por la referencia del URL.
     * @param string $slug Referencua URL del post.
     * @return string el nombre del archivo que solicito el URL.
     */
    public static function findOrFail($slug)
    {
        $posts = static::all()->firstWhere('slug', $slug);
        if (! $posts) {
            throw new ModelNotFoundException();
        }
        return $posts;
    }

    /**
     * Regresa el contenido de los archivos de los posts.
     * @return collect el contenido de los archivos de los posts.
     */
    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            $files = File::files(resource_path("posts"));
            $content = collect($files)->map(function ($file) {
                $document = YamlFrontMatter::parseFile($file);
                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                );
            })->sortByDesc('date');
            return $content;
        });
    }
}
