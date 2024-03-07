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
    // protected $fillable = ['title', 'excerpt', 'body'];

    /**
     * Regresa el objeto Category que esta relacionado al post.
     */
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
