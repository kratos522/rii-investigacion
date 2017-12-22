<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaRegistroSitioPublico extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }

   public function fiscales(){
        return $this->hasOne(Fiscal::class);
    }

    public function lugar(){
         return $this->hasOne(LugarSS::class);
     }
}
