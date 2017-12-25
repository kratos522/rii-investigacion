<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeExtradicion extends Model
{
protected $table = "informe_extradiciones";

  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

    public function detenidos() {
         return $this->hasOne(Detenido::class);
     }
}
