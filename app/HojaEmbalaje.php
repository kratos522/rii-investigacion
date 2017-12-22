<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HojaEmbalaje extends Model
{
  public function documento(){
       return $this->morphOne(Documento::class, 'documentable');
   }
}
