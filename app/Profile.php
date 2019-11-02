<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    protected $guarded = [];
    
    // Creando una relacion con el User
    public function user() 
    {
        return $this->belongsTo(User::Class);
    }
}
