<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    // Creando una relacion inversa con profile
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
