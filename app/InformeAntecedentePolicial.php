<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// el fiscal tambien podria ser una relacion, si el es el que pide este informe
class InformeAntecedentePolicial extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

   public function antecedentes(){
        return $this->hasMany(Antecedente::class);
    }
    //puede ser un detenido tambien
    public function sospechosos(){
         return $this->belongsTo(Sospechoso::class);
     }

     public function solicitudantecedentes(){
          return $this->hasOne(SolicitudAntecedentePolicial::class);
      }
}
