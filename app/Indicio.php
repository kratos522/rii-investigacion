<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicio extends Model
{
  public function lugarSS() {
       return $this->belongsTo(LugarSS::class);
}

public function sospechoso() {
     return $this->belongsTo(Sospechoso::class);
}

public function funcionarioss() {
     return $this->belongsTo(FuncionarioSS::class);
}

}
