<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
  public function funcionarioss() {
       return $this->belongsTo(FuncionarioSS::class);
  }
}
