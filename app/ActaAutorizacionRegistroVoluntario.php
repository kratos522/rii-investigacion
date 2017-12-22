<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaAutorizacionRegistroVoluntario extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }

    public function sospechosos(){
         return $this->hasOne(Sospechoso::class);
     }

     public function detenidos(){
          return $this->hasOne(Detenido::class);
      }
}
