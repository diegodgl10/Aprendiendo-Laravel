<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Regresa el objeto Post que esta relacionado a la categoria.
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
