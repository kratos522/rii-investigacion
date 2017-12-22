<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeTrasladoEvidencia extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

   public function evidencias(){
        return $this->hasMany(Evidencia::class);
    }

  public function fiscales(){
       return $this->hasOne(Fiscal::class);
   }

   //el lugar donde estaba y el lugar donde se va a trasladar
   public function lugar(){
        return $this->hasMany(LugarSS::class);
    }
}
