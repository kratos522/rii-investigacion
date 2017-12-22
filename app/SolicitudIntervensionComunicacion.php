<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudIntervensionComunicacion extends Model
{
  public function solicitud(){
       return $this->morphOne(Solicitud::class, 'solicitable');
   }

   public function antecedentes() {
        return $this->hasMany(Antecedente::class);
   }
   //podria ir el juez tambien
   public function fiscal() {
        return $this->hasOne(Fiscal::class);
   }
}
