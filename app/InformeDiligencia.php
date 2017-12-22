<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//que es una diligencia?
class InformeDiligencia extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

    public function diligencias(){
         return $this->hasMany(Diligencia::class);
     }
}
