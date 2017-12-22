<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaMuestraResiduoDisparo extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }
}
