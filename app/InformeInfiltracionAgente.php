<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeInfiltracionAgente extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }
   //podria llevar o una autorizacion o un fiscal o ambas
}
