<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $guarded=['id'];
    use HasFactory;

    //Relacion de uno a muchos
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
