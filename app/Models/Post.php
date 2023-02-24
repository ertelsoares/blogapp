<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // pertence a um usuario
    public function user(){
        return $this->belongsTo(User::class);
    }

     //Essa função hasMany tem muitos
    public function comments(){
        return $this->hasMany(Coment::class);
    }
}
