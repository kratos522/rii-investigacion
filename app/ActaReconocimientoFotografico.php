<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaReconocimientoFotografico extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }

   public function fiscales(){
        return $this->hasOne(Fiscal::class);
    }

    public function fotografias(){
         return $this->hasMany(Fotografia::class);
     }
}
