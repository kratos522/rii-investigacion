<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaCadenaCustodia extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }

}
