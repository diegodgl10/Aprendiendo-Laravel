<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Campos necesarios para crear nuevas filas en la base de datos.
     */
    protected $guarded = [];

    /**
     * Evita la realizacion de varias queries solicitando
     * Category y User en la misma queri.
     */
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // Filtrado por nombre y cuerpo.
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')));
        // Redireccion a la categoria indicada.
        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)
            )
        );
        // Redireccion al autor indicado.
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    /**
     * Regresa el objeto Category que esta relacionado al post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Regresa el objeto USer que esta relacionado al post.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
