<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{

  public function documento(){
       return $this->morphOne(Documento::class, 'documentable');
   }

  public function funcionarioss() {
       return $this->belongsTo(FuncionarioSS::class, 'autor');
  }

}
