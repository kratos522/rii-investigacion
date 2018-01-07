<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaRoja extends Model
{
  protected $table = "notas_rojas";
  public function persona()
  {
      return $this->belongsTo(Persona::class, 'identidad_persona');
  }
}
