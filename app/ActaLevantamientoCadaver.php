<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaLevantamientoCadaver extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }

   public function victimas(){
        return $this->hasOne(Victima::class);
    }
}
