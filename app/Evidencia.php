<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
  public function lugarSS() {
       return $this->belongsTo(LugarSS::class);
}

public function sospechoso() {
     return $this->belongsTo(Sospechoso::class);
}
}
