<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeInfraccion extends Model
{
protected $table = "informe_infracciones";

  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

   public function infracciones(){
        return $this->hasMany(Infraccion::class);
    }
   //puede ser detenido tambien
   public function sospechosos(){
        return $this->hasMany(Sospechoso::class);
    }

}
