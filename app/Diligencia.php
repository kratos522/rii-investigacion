<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diligencia extends Model
{
  public function funcionarioss() {
       return $this->belongsTo(FuncionarioSS::class);
  }
}
