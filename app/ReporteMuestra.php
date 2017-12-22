<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteMuestra extends Model
{
  public function reporte(){
       return $this->morphOne(Reporte::class, 'reportable');
   }

  public function evidencias() {
       return $this->hasMany(Evidencia::class);
  }

  public function indicios() {
       return $this->hasMany(Indicio::class);
  }
}
