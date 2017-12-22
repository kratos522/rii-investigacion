<?php

namespace App;
//diferencia entre hasOne y belongsTo
use Illuminate\Database\Eloquent\Model;

class InformeEvidenciaEncontrada extends Model
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

    //el lugar donde se encontraron las evidencias
     public function lugar(){
          return $this->hasOne(LugarSS::class);
      }
}
