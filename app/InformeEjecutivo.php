<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeEjecutivo extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }
}
