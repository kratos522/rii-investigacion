<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeRecoleccionEvidencia extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

   public function evidencias(){
        return $this->hasMany(Evidencia::class);
    }

    public function sospechosos(){
         return $this->hasMany(Sospechoso::class);
     }

//lugar donde se encontro la evidencia
     public function lugar(){
          return $this->hasOne(LugarSS::class);
      }
}
