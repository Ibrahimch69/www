<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{


        protected $table = 'maisons';
        protected $primaryKey = 'id';
        protected $fillable = ['titre', 'description', 'photo', 'prix'];
  
}
