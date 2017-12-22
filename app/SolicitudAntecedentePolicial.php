<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudAntecedentePolicial extends Model
{
  public function solicitud(){
       return $this->morphOne(Solicitud::class, 'solicitable');
   }

   public function antecedentes() {
        return $this->hasMany(Antecedente::class);
   }

   public function fiscal() {
        return $this->hasOne(Fiscal::class);
   }
}
