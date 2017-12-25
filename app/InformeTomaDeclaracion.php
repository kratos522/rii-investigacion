<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeTomaDeclaracion extends Model
{
protected $table = "informe_toma_declaraciones";

  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

}
