<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeTomaDeclaracion extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

}
