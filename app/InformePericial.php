<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformePericial extends Model
{
;protected $table->"informes_periciales";

  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }
}
