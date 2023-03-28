<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded=['id'];
    use HasFactory;

    //Relacion uno a muchos
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
