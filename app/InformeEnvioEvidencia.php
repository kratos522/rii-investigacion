<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeEnvioEvidencia extends Model
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

    //el lugar donde se encontraron las evidencias, donde han estado y donde se van a enviar
     public function lugar(){
          return $this->hasMany(LugarSS::class);
      }

}
