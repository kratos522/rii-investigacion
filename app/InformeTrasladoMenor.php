<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeTrasladoMenor extends Model
{
protected $table->"informe_traslado_menores";
  
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

   //podria ser tambien menor infractor
   public function detenidos(){
        return $this->hasMany(Detenido::class);
    }

  //no se si iria este fiscal o el fiscal de la niñez y el abogado
  public function fiscales(){
       return $this->hasOne(Fiscal::class);
   }

   //el lugar donde estaba y el lugar donde se va a trasladar
   public function lugar(){
        return $this->hasMany(LugarSS::class);
    }
}
