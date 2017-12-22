<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
  public function documento(){
       return $this->morphOne(Documento::class, 'documentable');
   }

   public function funcionarioss() {
        return $this->belongsTo(FuncionarioSS::class, 'autor');
   }

   public function lugar() {
        return $this->hasOne(LugarSS::class);
   }
}
