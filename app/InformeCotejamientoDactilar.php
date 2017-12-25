<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeCotejamientoDactilar extends Model
{
  protected $table = "informe_cotejamientos_dactilares";

  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

   public function detenidos(){
        return $this->hasOne(Detenido::class);
    }
     //puede ser persona en vez de sospechoso
    public function sospechosos(){
         return $this->hasMany(Sospechoso::class);
     }
}
