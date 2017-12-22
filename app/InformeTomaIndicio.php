<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeTomaIndicio extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

    public function indicios(){
         return $this->hasMany(Indicio::class);
     }
}
