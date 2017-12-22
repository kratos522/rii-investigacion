<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteResultado extends Model
{
  public function reporte(){
       return $this->morphOne(Reporte::class, 'reportable');
   }
}
