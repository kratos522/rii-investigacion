<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeDelitoContraLaPropiedad extends Model
{
protected $table = "informe_delitos_contra_la_propiedad";

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
