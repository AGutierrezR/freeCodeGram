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

    public function profileImage() 
    {
        $imagePath = ($this->image) ? '/storage/' . $this->image : 'https://opticacano.es/wp-content/uploads/sites/88/2019/01/blank-profile-picture-973460.png';
        return $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
