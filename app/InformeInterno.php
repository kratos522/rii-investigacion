<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeInterno extends Model
{

protected $table = "informes_internos";

  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }
}
