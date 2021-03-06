<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'usuari_id');
    }

    public function comentaris()
    {
        return $this->hasMany('App\Models\Comentari');
    }
}
