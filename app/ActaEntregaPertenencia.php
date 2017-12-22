<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaEntregaPertenencia extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }
   // el o los abogados irian tambien

    public function detenidos(){
         return $this->hasMany(Detenido::class);
     }
}
