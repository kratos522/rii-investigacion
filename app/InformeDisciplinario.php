<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeDisciplinario extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }
}
