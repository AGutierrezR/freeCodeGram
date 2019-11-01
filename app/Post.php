<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Creando una relacion inversa con profile
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
