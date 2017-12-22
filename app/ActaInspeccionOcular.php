<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaInspeccionOcular extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }
}
