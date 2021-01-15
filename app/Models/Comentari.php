<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'usuari_id');
    }

    public function posts()
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }

}
