<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeDelitoContraLaPropiedad extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

    public function sospechosos(){
         return $this->hasMany(Sospechoso::class);
     }

     public function delitos(){
          return $this->hasMany(delito::class);
      }
      //referencia al lugar donde se cometio el delito
      public function lugares(){
           return $this->belongsTo(LugarSS::class);
       }

}
