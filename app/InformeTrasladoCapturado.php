<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeTrasladoCapturado extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }
   //podria ir el abogado defensor?
  public function fiscales(){
       return $this->hasOne(Fiscal::class);
   }

    public function detenidos(){
         return $this->hasMany(Detenido::class);
     }

     //lugar detenido y lugar donde de va a trasladar
     public function lugar(){
          return $this->hasMany(LugarSS::class);
      }
}
