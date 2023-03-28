<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=['id'];
    use HasFactory;

    //Relacion uno a uno inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
