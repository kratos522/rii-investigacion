<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudDictamenLaboratorio extends Model
{
  public function solicitud(){
       return $this->morphOne(Solicitud::class, 'solicitable');
   }

   public function dictamenes() {
        return $this->hasMany(Dictamen::class);
   }

   public function fiscal() {
        return $this->hasOne(Fiscal::class);
   }
}
