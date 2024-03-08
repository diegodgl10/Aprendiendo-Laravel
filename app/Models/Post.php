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
